<?php
if (!empty($_POST["subButton"])) {
    if (!empty($_POST["username"])and !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = $conecttion -> query("INSERT INTO usuarios(username, password) VALUES ('$username', '$password') ");
        if ($sql == 1) {
            echo '<div class = "rounded-lg p-2 bg-green-100 mb-10 text-center font-semibold text-green-800">usuario registrado correctamente!</div>';
            echo '<script>location.replace("home.php")</script>';
        } else {
            echo '<div class = "rounded-lg p-2 bg-red-100 mb-10 text-center font-semibold text-red-800">ha ocurrido un error</>';
        }
        
    }else {
        echo'<div class = "rounded-lg p-2 bg-red-400 mb-10 text-center font-semibold text-red-800">campos incompletos</div>';
    }
}
?>