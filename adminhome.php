<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Beleriand libros admin panel</title>
</head>

<body>
    
    <h2 class=" text-3xl font-bold my-10 text-center">Panel de administrador</h2>
    <header class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 shadow-md">
        <button class="bg-sky-600 p-2 rounded-lg text-white text-md font-semibold mx-10">Agregar producto</button>
        <button class="bg-teal-600 p-2 rounded-lg text-white text-md font-semibold mx-10">Logout</button>
        <a href="home.php">
        <svg fill="#000000" width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M27 18.039L16 9.501 5 18.039V14.56l11-8.54 11 8.538v3.481zm-2.75-.31v8.251h-5.5v-5.5h-5.5v5.5h-5.5v-8.25L16 11.543l8.25 6.186z"></path></g></svg>
        </a>
    </header>
    <div class=" grid grid-cols-1 p-5">
        <?php
        include "models/connectDB.php";
        include "controllers/deleteController.php";
        $sql = $conecttion->query("SELECT * FROM libros");
        while ($libros = $sql->fetch_object()) { ?>

            <div class=" w-[50%] flex mx-2 my-10 p-5 py-12 text-left  shadow-2xl cursor-pointer relative">
                <img class="p-5 w-[40%]" src=<?= $libros->imagen ?> alt="">
                <h1 class="text-3xl mb-5 h-16 mx-8"><?= $libros->titulo ?></h1>
                <div class="block">
                    <button class="p-2 px-6 bg-teal-500 text-white rounded-md hover:bg-teal-600 my-8" name="editBtn">Editar</button>
                    <a href="adminhome.php?id=<?=$libros->id?>" class="p-2 px-6 bg-red-500 text-white rounded-md hover:bg-teal-600" name="deleteBtn">Borrar</a>
                </div>
                
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>