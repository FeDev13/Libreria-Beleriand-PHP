<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beleriand libros</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
                    <button><a class="p-2 px-6 bg-teal-500 text-white rounded-md hover:bg-teal-600" href="register.php">Registrarse</a></button>
                </ul>
            </nav>
        </div>
    </header>
    <div class=" text-center">
        <h2 class=" text-3xl font-bold my-10">Nuestro catalogo</h2>
    </div>
    <div class=" grid grid-cols-4 p-5">
        <div class="w-full shadow p-5 rounded-lg bg-white">
            <div class="relative">
                <div class="absolute flex items-center ml-2 h-full">
                    <svg class="w-4 h-4 fill-current text-primary-gray-dark" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.8898 15.0493L11.8588 11.0182C11.7869 10.9463 11.6932 10.9088 11.5932 10.9088H11.2713C12.3431 9.74952 12.9994 8.20272 12.9994 6.49968C12.9994 2.90923 10.0901 0 6.49968 0C2.90923 0 0 2.90923 0 6.49968C0 10.0901 2.90923 12.9994 6.49968 12.9994C8.20272 12.9994 9.74952 12.3431 10.9088 11.2744V11.5932C10.9088 11.6932 10.9495 11.7869 11.0182 11.8588L15.0493 15.8898C15.1961 16.0367 15.4336 16.0367 15.5805 15.8898L15.8898 15.5805C16.0367 15.4336 16.0367 15.1961 15.8898 15.0493ZM6.49968 11.9994C3.45921 11.9994 0.999951 9.54016 0.999951 6.49968C0.999951 3.45921 3.45921 0.999951 6.49968 0.999951C9.54016 0.999951 11.9994 3.45921 11.9994 6.49968C11.9994 9.54016 9.54016 11.9994 6.49968 11.9994Z"></path>
                    </svg>
                </div>

                <input type="text" placeholder="titulo, ISBN, autor" class="px-8 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
            </div>

            <div class="flex items-center justify-between mt-4">
                <p class="font-medium">
                    Filtros
                </p>
            </div>

            <div>
                <div class="grid grid-cols-2 gap-4 mt-4">

                    <button class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                        <a href="anilos.php">Saga del anillo</a>
                    </button>

                    <button class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                        <a href="otros.php">Otros autores</a>
                    </button>

                    <button class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                        En promocion
                    </button>

                    
                </div>
            </div>
        </div>
        <!-- lista todos los productos -->
        <?php
        include "models/connectDB.php";
        $sql = $conecttion->query('SELECT * FROM libros WHERE titulo LIKE "%Anillos%"');
        while ($libros = $sql->fetch_object()) { ?>

            <div class=" w-[100%] mx-2 my-10 p-5 py-12 text-left transform duration-500 hover:-translate-y-2 shadow-2xl cursor-pointer relative">
                <img class="p-5 w-[60%]" src="data:image/jpg; base64, <?php echo base64_encode($libros->imagen) ?>">
                <h1 class="text-3xl mb-5 h-16"><?= $libros->titulo ?></h1>
                <div class="space-x-1 flex mb-5">
                    <svg class="w-4 h-4 mx-2 fill-current text-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                        <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" />
                    </svg><?= $libros->rating?>
                    
                </div>
                <p class="mb-5"><?= $libros->descripcion ?></p>
                <p class="font-semibold mb-5">$<?= $libros->precio ?></p>
                <p class="font-semibold mb-5 uppercase"><?= $libros->autor ?></p>
                <button class="p-2 px-6 bg-teal-500 text-white rounded-md hover:bg-teal-600">Agregar al carrito</button>

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

            <div class="flex flex-col gap-2 text-sm text-white">
                <p class="text-base font-bold tracking-wide text-gray-900">Atencion al cliente</p>
                <a href="#">Formas de pago</a>
                <a href="#">Formas y tiempos de envios</a>
                <a href="#">FAQ</a>
                <p class="text-base font-bold tracking-wide text-gray-900">Navegacion</p>
                <a href="#">Ofertas</a>
                <a href="#">Mas vendidos</a>
                <a href="#">Categorias</a>
            </div>

            <div class="text-white">

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
            <ul class="flex flex-col mb-3 space-y-2 lg:mb-0 sm:space-y-0 sm:space-x-5 sm:flex-row text-white">
                <li>
                    <a href="#" class="text-sm transition-colors duration-300 hover:text-deep-purple-accent-400">Privacy
                        &amp; Cookies Policy
                    </a>
                </li>
                <li>
                    <a href="#" class="text-sm transition-colors duration-300 hover:text-deep-purple-accent-400">Disclaimer
                    </a>
                </li>
            </ul>
        </div>
    </footer>
</body>

</html>