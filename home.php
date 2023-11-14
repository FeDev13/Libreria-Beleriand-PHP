<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria Tierra Media</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 shadow-md">
        <div class="flex-1 flex justify-between items-center">
             <img src="./assets/text-1699919442524.png" alt="">
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
                    <li><a class="md:p-4 py-3 px-0 block" href="#">Catalogo</a></li>
                    <svg width="64px" height="64px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M879.987457 420.058169v-42.616155H721.067144V270.902651h-42.616155v106.539363H507.988417V270.902651h-42.616155v106.539363H252.293535v42.616155h213.078727v127.847442H316.216744v42.616155h149.155518v106.539363h42.616155V590.520742h170.462572v106.539363h42.616155V590.520742h149.155519V547.904587H721.067144V420.058169h158.920313zM678.450989 547.905611H507.988417V420.058169h170.462572v127.847442z" fill="#74E8AE"></path><path d="M926.571168 323.007151a63.866895 63.866895 0 0 0-14.773641-51.199385 63.867919 63.867919 0 0 0-48.442063-22.213193H247.192538L218.285184 134.96242l-0.010239 0.003072v-0.003072h-101.080007c-11.767514 0-21.308077 9.540563-21.308077 21.308078 0 11.768538 9.540563 21.308077 21.308077 21.308077h67.886669l69.68154 276.331291 66.115347 264.459341h31.700513c-21.981794 17.586254-36.36124 44.30147-36.361239 74.577759 0 52.874462 43.011375 95.885837 95.885836 95.885837s95.885837-43.011375 95.885837-95.885837c0-30.276289-14.379446-56.991505-36.361239-74.577759h243.186075c-21.981794 17.586254-36.36124 44.30147-36.36124 74.577759 0 52.874462 43.011375 95.885837 95.885837 95.885837s95.885837-43.011375 95.885837-95.885837c0-30.276289-14.379446-56.991505-36.36124-74.577759h33.406307l59.30139-395.362056zM412.102581 846.215624c-29.381413 0-53.269682-23.898507-53.269682-53.269682s23.888269-53.269682 53.269682-53.269682 53.269682 23.898507 53.269681 53.269682-23.888269 53.269682-53.269681 53.269682z m362.234245 0c-29.381413 0-53.269682-23.898507-53.269682-53.269682s23.888269-53.269682 53.269682-53.269682 53.269682 23.898507 53.269682 53.269682-23.888269 53.269682-53.269682 53.269682zM258.286336 292.210728h605.069128c6.305086 0 12.027581 2.632409 16.147696 7.397572 4.099637 4.775401 5.847409 10.840898 4.910554 17.073288l-53.852273 359.071464H354.172173L322.291455 548.234278l0.195562-0.049147-24.101236-95.578671-40.099445-160.395732z" fill="#22C67F"></path></g></svg>
                    <button><a class="p-2 px-6 bg-teal-500 text-white rounded-md hover:bg-teal-600 mx-4" href="#">Login</a></button>
                    <button><a class="p-2 px-6 bg-teal-500 text-white rounded-md hover:bg-teal-600" href="#">Registrarse</a></button>
                </ul>
            </nav>
        </div>
    </header>
    <div class=" text-center">
        <h2 class=" text-3xl font-bold my-10">Recomendados</h2>
    </div>
    <div class=" flex flex-row border-4 border-b-teal-500 p-8">
        <?php
        include "models/connectDB.php";
        $sql = $conecttion->query("SELECT * FROM libros WHERE id BETWEEN 4 AND 10");
        while ($libros = $sql->fetch_object()) { ?>

                <div class=" w-[20%] mx-2 p-5 py-12 text-left transform duration-500 hover:-translate-y-2 shadow-2xl cursor-pointer relative">
                    <img class="p-5 w-[60%]" src=<?= $libros->imagen ?> alt="">
                    <h1 class="text-3xl mb-5 h-16"><?= $libros->titulo ?></h1>
                    <button class="sale absolute top-5 right-2 p-2 px-5 font-semibold bg-red-600 text-white uppercase">Ver</button>
                </div>
        <?php
        }
        ?>
    </div>
    <div class=" text-center">
        <h2 class=" text-3xl font-bold my-10">Mas vendidos</h2>
    </div>
    <div class=" flex flex-row">
        <?php
        include "models/connectDB.php";
        $sql = $conecttion->query('SELECT * FROM libros WHERE id BETWEEN 12 AND 13');
        while ($libros = $sql->fetch_object()) { ?>

                <div class=" w-[20%] mx-2 p-5 py-12 text-left transform duration-500 hover:-translate-y-2 shadow-2xl cursor-pointer relative">
                    <img class="p-5 w-[60%]" src=<?= $libros->imagen ?> alt="">
                    <h1 class="text-3xl mb-5 h-16"><?= $libros->titulo ?></h1>
                    <button class="sale absolute top-5 right-2 p-2 px-5 font-semibold bg-red-600 text-white uppercase">Ver</button>
                </div>
        <?php
        }
        ?>
    </div>
</body>

</html>