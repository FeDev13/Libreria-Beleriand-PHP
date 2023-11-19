<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Beleriand libros</title>
</head>

<body>
    <?php
    include "models/connectDB.php";
    include "controllers/updateProductController.php";
    $id = $_GET["id"];
    $sql = $conecttion->query("SELECT * FROM libros WHERE id = $id");
    ?>
    <div class="flex flex-col bg-gray-300 p-10 font-sans-serif items-center justify-center">
        <div class="relative h-auto bg-white rounded-lg shadow-lg w-[60%]">
            <div class="relative border-b-2 text-center">
                <h1 class="text-3xl m-4 text-gray-600">Modificar producto (admin)</h1>
            </div>
            <?php
            while ($libros = $sql->fetch_object()) { ?>
                <div class="relative p-4">
                    <form class="relative" method="POST">
                        <div class="mb-4 pt-0 flex flex-col">
                            <input type="hidden" name="id" value="<?=$_GET["id"]?>">
                            <label class="mb-2 text-gray-800 text-lg font-light" for="product_name">Titulo</label>
                            <input value="<?=$libros -> titulo?>" name="title" type="text" id="product_name" class="border-2 rounded h-10 px-6 text-lg text-gray-600 focus:outline-none focus:ring focus:border-blue-300" autocomplete="off" />
                        </div>
                        <div class="mb-4 pt-0 flex flex-col">
                            <label class="mb-2 text-gray-800 text-lg font-light" for="product_name">Precio</label>
                            <input value="<?=$libros -> precio?>" name="price" type="number" id="product_name" class="border-2 rounded h-10 px-6 text-lg text-gray-600 focus:outline-none focus:ring focus:border-blue-300" autocomplete="off" />
                        </div>
                        <div class="mb-4 pt-0 flex flex-col">
                            <label class="mb-2 text-gray-800 text-lg font-light" for="product_name">Descripcion</label>
                            <input value="<?=$libros -> descripcion?>" name="description" type="text" id="product_name" class="border-2 rounded h-10 px-6 text-lg text-gray-600 focus:outline-none focus:ring focus:border-blue-300" autocomplete="off" />
                        </div>
                        <div class="pt-0 flex flex-col">
                            <label class="mb-4 text-gray-600 text-lg font-light" for="product_image">Imagen</label>
                            <label for="product_image" class="flex text-center justify-center " autocomplete=" off">
                                <img src="<?=$libros -> imagen?>" alt="imagen libro" class="rounded-lg">
                            </label>
                            
                        </div>
                        <div class="rel pt-0 flex flex-col p-4 w-full mt-10">
                            <button name="addBtn" value="Guardar" class="bg-blue-500 text-white h-16 rounded-lg font-bold">Actualizar</button>
                        </div>
                    </form>
                </div>
            <?php }
            ?>


        </div>
    </div>
</body>

</html>