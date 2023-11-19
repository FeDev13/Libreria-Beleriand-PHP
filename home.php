<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria Tierra Media</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 shadow-md sticky top-0 z-50">
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
                    <div class="flex rounded-md mx-8 border-2 border-teal-400 p-2">
                        <button class="mx-4">
                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M19.9604 11.4802C19.9604 13.8094 19.0227 15.9176 17.5019 17.4512C16.9332 18.0247 16.2834 18.5173 15.5716 18.9102C14.3594 19.5793 12.9658 19.9604 11.4802 19.9604C6.79672 19.9604 3 16.1637 3 11.4802C3 6.79672 6.79672 3 11.4802 3C16.1637 3 19.9604 6.79672 19.9604 11.4802Z" stroke="#333333" stroke-width="2"></path>
                                    <path d="M18.1553 18.1553L21.8871 21.8871" stroke="#333333" stroke-width="2" stroke-linecap="round"></path>
                                </g>
                            </svg>
                        </button>
                        <input type="text" placeholder="Autor, editorial, ISBN">
                    </div>

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
                    <button><a class="p-2 px-6 bg-teal-500 text-white rounded-md hover:bg-teal-600" href="register.php">Registrarse</a></button>
                </ul>
            </nav>
        </div>
    </header>
    <div class=" text-center">
        <!-- component -->
        <!-- This is an example component -->
        <div class="w-[80%] mx-auto my-24">

            <div id="default-carousel" class="relative" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                        <img src="https://i0.wp.com/boingboing.net/wp-content/uploads/2014/05/johnhowe1.jpg?fit=1400%2C741&ssl=1" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://i.pinimg.com/564x/8d/56/7d/8d567d1020d36b7160d940040e1c82a7.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://www.tolkienguide.com/uploads/newbb/4446_652d755064244.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        <span class="hidden">Previous</span>
                    </span>
                </button>
                <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        <span class="hidden">Next</span>
                    </span>
                </button>
            </div>

            <p class="mt-5">Sumérgete en el fascinante mundo de la Tierra Media a través de la puerta de nuestra librería dedicada exclusivamente a las obras del renombrado autor J.R.R. Tolkien. En nuestro santuario literario, los aficionados y amantes de la fantasía pueden explorar una extensa colección de libros, desde las legendarias epopeyas de "El Señor de los Anillos" y "El Hobbit", hasta los cuentos, ensayos y escritos menos conocidos pero igualmente cautivadores de este visionario creador.
            </p>
          
        </div>
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
    <div class=" flex flex-row border-4 border-b-teal-500 p-8">
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
    <footer class="px-3 pt-4 lg:px-9 border-t-2 bg-gray-50 mt-10 bg-teal-600">
        <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4 mt-10">

            <div class="sm:col-span-2">
                <a href="#" class="inline-flex items-center">
                    <img src="./assets/text-1699919442524.png" alt="logo" class="w-[70%]">
                    <span class="ml-2 text-xl font-bold tracking-wide text-gray-800">Libros</span>
                </a>
                <div class="mt-6 lg:max-w-xl border-none">
                    <img src="https://tap-multimedia-1143.nyc3.digitaloceanspaces.com/banner/194/small/pagosMobile.png" alt="">
                </div>
            </div>

            <div class="flex flex-col gap-2 text-sm">
                <p class="text-base font-bold tracking-wide text-gray-900">Atencion al cliente</p>
                <a href="#">Formas de pago</a>
                <a href="#">Formas y tiempos de envios</a>
                <a href="#">FAQ</a>
                <p class="text-base font-bold tracking-wide text-gray-900">Navegacion</p>
                <a href="#">Ofertas</a>
                <a href="#">Mas vendidos</a>
                <a href="#">Categorias</a>
            </div>

            <div>

                <div class="flex items-center gap-1 px-2">

                    <a class="w-full min-w-xl" href="https://www.youtube.com/channel/UCo8tEi6SrGFP8XG9O0ljFgA">
                        <img src="https://www.afip.gob.ar/images/f960/DATAWEB.jpg" alt="Youtube Button" class="h-28">
                    </a>
                </div>
                <p class="text-base font-bold tracking-wide text-gray-900">Contacto</p>
                <div class="flex">
                    <p class="mr-1 text-gray-800">Email:</p>
                    <a href="#" title="send email">beleriandlibros@gmail.com</a>
                </div>
            </div>

        </div>

        <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row">
            <p class="text-sm text-white font-bold">© Copyright 2023 Beleriand libros. Todos los derechos reservados.</p>
            <ul class="flex flex-col mb-3 space-y-2 lg:mb-0 sm:space-y-0 sm:space-x-5 sm:flex-row">
                <li>
                    <a href="#" class="text-sm text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Privacy
                        &amp; Cookies Policy
                    </a>
                </li>
                <li>
                    <a href="#" class="text-sm text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Disclaimer
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</body>

</html>