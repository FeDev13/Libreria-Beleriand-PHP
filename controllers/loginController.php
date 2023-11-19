<?php
$sql = $conecttion->query('SELECT * FROM usuarios WHERE id = 1');


if (!empty($_POST["loginButton"])) {
    if (!empty($_POST["username"]) and !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        while ($usuarios = $sql->fetch_object()) {
            if ($username == $usuarios->username && $password == $usuarios->password) {
                echo '<div class = "rounded-lg p-2 bg-green-100 mb-10 text-center font-semibold text-green-800">bienvenido administrador</div>';
                echo '<script>location.replace("adminhome.php")</script>';
            } else {
                echo '<div class = "rounded-lg p-2 bg-red-100 mb-10 text-center font-semibold text-red-800">no posee permisos de administrador</>';
            }
        }
    } else {
        echo '<div class = "rounded-lg p-2 bg-red-400 mb-10 text-center font-semibold text-red-800">campos incompletos</div>';
    }
}
