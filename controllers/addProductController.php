
<?php
if (!empty($_POST["addBtn"])) {
    if (!empty($_POST["title"])and !empty($_POST["price"])and !empty($_POST["description"])and !empty($_FILES["image"])and !empty($_POST["rating"])and !empty($_POST["author"])) {
        $title = $_POST["title"];
        $price = $_POST["price"];
        $description = $_POST["description"];
        $rating = $_POST["rating"];
        $author = $_POST["author"];
        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $sql = $conecttion -> query("INSERT INTO libros(titulo, precio, descripcion, imagen, rating, autor) VALUES ('$title', '$price','$description', '$image','$rating' ,'$author' ) ");
        if ($sql == 1) {
            echo '<div class = "rounded-lg p-2 bg-green-100 mb-10 text-center font-semibold text-green-800">producto registrado correctamente!</div>';
            echo '<script>location.replace("adminhome.php")</script>';
        } else {
            echo '<div class = "rounded-lg p-2 bg-red-100 mb-10 text-center font-semibold text-red-800">ha ocurrido un error</>';
        }
        
    }else {
        echo'<div class = "rounded-lg p-2 bg-red-400 mb-10 text-center font-semibold text-red-800">campos incompletos</div>';
    }
}
?>