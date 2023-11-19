
<?php
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conecttion ->query("DELETE FROM libros WHERE id = $id");
    if ($sql == 1) {
        ("<script>Swal.fire({
            icon: 'success',
            text: 'producto eliminado del catalogo!',
          })</script>");
    }   else{
        echo ("<script>Swal.fire({
            icon: 'error',
            text: 'el producto no se pude borrar!',
          })</script>");
    }
}
?>