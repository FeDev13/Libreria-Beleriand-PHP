<?php
include "models/connectDB.php";
$id = $_GET['id'];
$sql = $conecttion->query("SELECT * FROM libros WHERE id =$id ");
$datos = mysqli_fetch_array($sql);

$title = $datos["titulo"];
$price = $datos["precio"];
$description = $datos["descripcion"];
$rating = $datos["rating"];
$author = $datos["autor"];
$image = $datos["imagen"]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Beleriand libros</title>
</head>

<body>
    <div class="mt-20">
        <h1 class="flex items-center justify-center font-bold text-md lg:text-3xl">Finalizar la compra
        </h1>
    </div>
    <div class="container p-12 mx-auto">
        <div class="flex flex-col w-full px-0 mx-auto md:flex-row">
            <div class="flex flex-col md:w-full">
                <h2 class="mb-4 font-bold md:text-xl text-heading ">Datos de envio
                </h2>
                <form class="justify-center w-full mx-auto" method="post" action>
                    <div class="">
                        <div class="space-x-0 lg:flex lg:space-x-4">
                            <div class="w-full lg:w-1/2">
                                <label for="firstName" class="block mb-3 text-sm font-semibold text-gray-500">Nombre
                                </label>
                                <input name="nombre" type="text" placeholder="First Name" class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600">
                            </div>
                            <div class="w-full lg:w-1/2 ">
                                <label for="firstName" class="block mb-3 text-sm font-semibold text-gray-500">Apellido
                                </label>
                                <input name="apellido" type="text" placeholder="Last Name" class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600">
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="w-full">
                                <label for="Email" class="block mb-3 text-sm font-semibold text-gray-500">Email</label>
                                <input name="email" type="text" placeholder="Email" class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600">
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="w-full">
                                <label for="Address" class="block mb-3 text-sm font-semibold text-gray-500">Direccion</label>
                                <input type="text" name="direccion" class="w-full px-4 py-3 text-xs border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600" name="Address" cols="20" rows="4" placeholder="Address"></input>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" name="guardarcompra" class="w-full px-6 py-2 text-blue-200 bg-teal-600 hover:bg-blue-900">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
            <?php
            if (array_key_exists('guardarcompra', $_POST)) {

                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $mail = $_POST['email'];
                $direccion = $_POST['direccion'];

                $compra = $title . ' ' . $price . ' ' . $author ;

                $sql = $conecttion->query("INSERT INTO clientes(nombre,apellido,email,direccion,compra) VALUES ('$nombre','$apellido','$mail','$telefono','$title $price $author' ) ");

                echo '<div class="rounded-lg p-2 bg-green-100 mb-10 text-center font-semibold text-green-800">Compra realizada con exito</div>';

                echo '<script>location.replace("userHome.php")</script>';
            } ?>
            <div class="flex flex-col w-full ml-0 lg:ml-12 lg:w-2/5">
                <div class="pt-12 md:pt-0 2xl:ps-4">
                    <h2 class="text-xl font-bold">Detalles de la compra
                    </h2>
                    <div class="mt-8">
                        <div class="flex flex-col space-y-4">
                            <div class="flex space-x-4">
                                <div>
                                    <img src="data:image/jpg; base64, <?php echo base64_encode($datos["imagen"]) ?> alt="image" class="w-60">
                                </div>
                                <div>
                                    <h2 class="text-xl font-bold"><?= $datos["titulo"] ?></h2>
                                    <p class="text-sm"><?= $datos["autor"] ?></p>
                                    <span class="text-red-600">$ <?= $datos["precio"] ?></span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>