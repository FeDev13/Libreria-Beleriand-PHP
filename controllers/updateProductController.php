<?php
if (!empty($_POST["addBtn"])) {
    if (!empty($_POST["id"]) && !empty($_POST["title"]) && !empty($_POST["price"]) && !empty($_POST["description"])) {
        $id = $_POST["id"];
        $title = $_POST["title"];
        $price = $_POST["price"];
        $description = $_POST["description"];

        
        $sql = $conecttion->prepare("UPDATE libros SET titulo=?, precio=?, descripcion=? WHERE id=?");
        $sql->bind_param("sssi", $title, $price, $description, $id);
        $sql->execute();

        if ($sql->affected_rows === 1) {
            echo '<div class="rounded-lg p-2 bg-green-100 mb-10 text-center font-semibold text-green-800">Producto actualizado exitosamente!</div>';
            echo '<script>location.replace("adminhome.php")</script>';
        } else {
            echo '<div class="rounded-lg p-2 bg-red-100 mb-10 text-center font-semibold text-red-800">Ha ocurrido un error</div>';
        }
    } else {
        echo '<div class="rounded-lg p-2 bg-red-400 mb-10 text-center font-semibold text-red-800">Uno o mas campos incompletos</div>';
    }
}

?>