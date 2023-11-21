<?php
if (!empty($_POST["loginButton"])) {
    if (!empty($_POST["loginButton"])) {
        if (!empty($_POST["username"]) && !empty($_POST["password"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
    
            // Check for admin login
            $sqlAdmin = $conecttion->prepare('SELECT * FROM usuarios WHERE id = 1 AND username = ?');
            $sqlAdmin->bind_param('s', $username);
            $sqlAdmin->execute();
            $resultAdmin = $sqlAdmin->get_result();
    
            if ($resultAdmin->num_rows === 1) {
                $adminUser = $resultAdmin->fetch_object();
                if ($username === $adminUser->username && $adminUser->password) {
                    echo '<div class="rounded-lg p-2 bg-green-100 mb-10 text-center font-semibold text-green-800">Welcome, administrator!</div>';
                    echo '<script>location.replace("adminhome.php")</script>';
                    exit; // Stop further execution if logged in as admin
                }
            }
    
            // Check for normal user login
            $sqlUser = $conecttion->prepare('SELECT * FROM usuarios WHERE id != 1 AND username = ?');
            $sqlUser->bind_param('s', $username);
            $sqlUser->execute();
            $resultUser = $sqlUser->get_result();
    
            if ($resultUser->num_rows === 1) {
                $user = $resultUser->fetch_object();
                if ($username === $user->username && $user->password) {
                    echo '<div class="rounded-lg p-2 bg-green-100 mb-10 text-center font-semibold text-green-800">Welcome, normal user!</div>';
                    // Redirect to user dashboard or home page
                    echo '<script>location.replace("home.php")</script>';
                    exit; // Stop further execution after successful login
                }
            }
    
            // If neither admin nor normal user credentials match
            echo '<div class="rounded-lg p-2 bg-red-100 mb-10 text-center font-semibold text-red-800">Incorrect username or password</div>';
        } else {
            echo '<div class="rounded-lg p-2 bg-red-400 mb-10 text-center font-semibold text-red-800">Incomplete fields</div>';
        }
    }
        
}


