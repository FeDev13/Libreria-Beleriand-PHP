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
<header class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 shadow-md sticky top-0 z-50">
        <div class="flex-1 flex justify-between items-center">
            <a href="index.php"><img src="./assets/text-1699919442524.png" alt=""></a>

        </div>

        <label for="menu-toggle" class="pointer-cursor md:hidden block">
            <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <title>menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </label>
        <input class="hidden" type="checkbox" id="menu-toggle" />

        <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
            <nav>
                <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                    

                    <button class="p-2 px-6 bg-teal-500 text-white rounded-md hover:bg-teal-600 mx-4"><a href="index.php">Catalogo</a></button>
                    <svg width="32px" height="32px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M879.987457 420.058169v-42.616155H721.067144V270.902651h-42.616155v106.539363H507.988417V270.902651h-42.616155v106.539363H252.293535v42.616155h213.078727v127.847442H316.216744v42.616155h149.155518v106.539363h42.616155V590.520742h170.462572v106.539363h42.616155V590.520742h149.155519V547.904587H721.067144V420.058169h158.920313zM678.450989 547.905611H507.988417V420.058169h170.462572v127.847442z" fill="#74E8AE"></path>
                            <path d="M926.571168 323.007151a63.866895 63.866895 0 0 0-14.773641-51.199385 63.867919 63.867919 0 0 0-48.442063-22.213193H247.192538L218.285184 134.96242l-0.010239 0.003072v-0.003072h-101.080007c-11.767514 0-21.308077 9.540563-21.308077 21.308078 0 11.768538 9.540563 21.308077 21.308077 21.308077h67.886669l69.68154 276.331291 66.115347 264.459341h31.700513c-21.981794 17.586254-36.36124 44.30147-36.361239 74.577759 0 52.874462 43.011375 95.885837 95.885836 95.885837s95.885837-43.011375 95.885837-95.885837c0-30.276289-14.379446-56.991505-36.361239-74.577759h243.186075c-21.981794 17.586254-36.36124 44.30147-36.36124 74.577759 0 52.874462 43.011375 95.885837 95.885837 95.885837s95.885837-43.011375 95.885837-95.885837c0-30.276289-14.379446-56.991505-36.36124-74.577759h33.406307l59.30139-395.362056zM412.102581 846.215624c-29.381413 0-53.269682-23.898507-53.269682-53.269682s23.888269-53.269682 53.269682-53.269682 53.269682 23.898507 53.269681 53.269682-23.888269 53.269682-53.269681 53.269682z m362.234245 0c-29.381413 0-53.269682-23.898507-53.269682-53.269682s23.888269-53.269682 53.269682-53.269682 53.269682 23.898507 53.269682 53.269682-23.888269 53.269682-53.269682 53.269682zM258.286336 292.210728h605.069128c6.305086 0 12.027581 2.632409 16.147696 7.397572 4.099637 4.775401 5.847409 10.840898 4.910554 17.073288l-53.852273 359.071464H354.172173L322.291455 548.234278l0.195562-0.049147-24.101236-95.578671-40.099445-160.395732z" fill="#22C67F"></path>
                        </g>
                    </svg>
                    <button><a class="p-2 px-6 bg-teal-500 text-white rounded-md hover:bg-teal-600 mx-4" href="login.php">Login</a></button>
                    
                </ul>
            </nav>
        </div>
    </header>
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

                $sql = $conecttion->query("INSERT INTO clientes(nombre,apellido,email,direccion,compra) VALUES ('$nombre','$apellido','$mail','$direccion','$title $price $author' ) ");

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