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
    include "controllers/addProductController.php"
    ?>
    <div class="flex flex-col bg-gray-300 p-10 font-sans-serif items-center justify-center">
        <div class="relative h-auto bg-white rounded-lg shadow-lg w-[60%]">
            <div class="relative border-b-2">
                <h1 class="text-3xl m-4 text-gray-600">Alta de productos</h1>
            </div>
            <div class="relative p-4">
                <form class="relative" method="POST" enctype="multipart/form-data">
                    <div class="mb-4 pt-0 flex flex-col">
                        <label class="mb-2 text-gray-800 text-lg font-light" for="product_name">Titulo</label>
                        <input name="title" type="text" id="product_name" class="border-2 rounded h-10 px-6 text-lg text-gray-600 focus:outline-none focus:ring focus:border-blue-300" autocomplete="off" />
                    </div>
                    <div class="mb-4 pt-0 flex flex-col">
                        <label class="mb-2 text-gray-800 text-lg font-light" for="product_name">Precio</label>
                        <input name="price" type="number" id="product_name" class="border-2 rounded h-10 px-6 text-lg text-gray-600 focus:outline-none focus:ring focus:border-blue-300" autocomplete="off" />
                    </div>
                    <div class="mb-4 pt-0 flex flex-col">
                        <label class="mb-2 text-gray-800 text-lg font-light" for="product_name">Descripcion</label>
                        <input name="description" type="text" id="product_name" class="border-2 rounded h-10 px-6 text-lg text-gray-600 focus:outline-none focus:ring focus:border-blue-300" autocomplete="off" />
                    </div>
                    <div class="mb-4 pt-0 flex flex-col">
                        <label class="mb-2 text-gray-800 text-lg font-light" for="product_name">Rating</label>
                        <input name="rating" type="text" id="product_name" class="border-2 rounded h-10 px-6 text-lg text-gray-600 focus:outline-none focus:ring focus:border-blue-300" autocomplete="off" />
                    </div>
                    <div class="mb-4 pt-0 flex flex-col">
                        <label class="mb-2 text-gray-800 text-lg font-light" for="product_name">Autor</label>
                        <input name="author" type="text" id="product_name" class="border-2 rounded h-10 px-6 text-lg text-gray-600 focus:outline-none focus:ring focus:border-blue-300" autocomplete="off" />
                    </div>
                     <div class="pt-0 flex flex-col">
                        <label class="mb-4 text-gray-600 text-lg font-light" for="product_image">Imagen</label>                     
                            
                        <input name="image" type="file" /> 
    
                    </div> 
                    <div class="rel pt-0 flex flex-col p-4 w-full">
                        <button name="addBtn" value="Guardar" class="bg-blue-500 text-white h-16 rounded-lg font-bold">Guardar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>