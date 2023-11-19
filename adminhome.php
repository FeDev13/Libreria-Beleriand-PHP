<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Beleriand libros admin panel</title>
</head>

<body>

    <h2 class=" text-3xl font-bold my-10 text-center">Panel de administrador</h2>
    <header class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 shadow-md">
        <button class="bg-sky-600 p-2 rounded-lg text-white text-md font-semibold mx-10">
            <a href="addProduct.php">Agregar producto</a>
        </button>
        <button class="bg-teal-600 p-2 rounded-lg text-white text-md font-semibold mx-10">Logout</button>
        <a href="home.php">
            <svg fill="#000000" width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M27 18.039L16 9.501 5 18.039V14.56l11-8.54 11 8.538v3.481zm-2.75-.31v8.251h-5.5v-5.5h-5.5v5.5h-5.5v-8.25L16 11.543l8.25 6.186z"></path>
                </g>
            </svg>
        </a>
    </header>
    <h2 class=" text-3xl font-bold my-10 text-center">Catalogo de productos</h2>
    <div class=" grid grid-cols-1 p-5">
        <?php
        include "models/connectDB.php";
        include "controllers/deleteController.php";
        $sql = $conecttion->query("SELECT * FROM libros");
        while ($libros = $sql->fetch_object()) { ?>

            <div class=" w-[100%] h-[70%] flex mx-2 p-5 py-8 text-left justify-between shadow-2xl border-2 border-gray-400 rounded-md relative">
                <img class=" w-[20%]" src=<?= $libros->imagen ?> alt="">
                <h1 class="text-3xl mb-5 h-16 mx-8"><?= $libros->titulo ?></h1>
                <div class="block">

                    <a href="updateProduct.php?id=<?= $libros->id ?>">
                        <button class="p-2 px-6 bg-sky-600 text-white rounded-md my-8" name="editBtn">
                            <svg fill="#ffffff" height="24px" width="24px" version="1.1" id="XMLID_32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g id="document-update">
                                        <g>
                                            <polygon points="24,24 16,24 16,22 22,22 22,6.4 17.6,2 6,2 6,8 4,8 4,0 18.4,0 24,5.6 "></polygon>
                                        </g>
                                        <g>
                                            <polygon points="23,8 16,8 16,2 18,2 18,6 23,6 "></polygon>
                                        </g>
                                        <g>
                                            <path d="M9,24c-4.4,0-8-3.6-8-8s3.6-8,8-8s8,3.6,8,8S13.4,24,9,24z M9,10c-3.3,0-6,2.7-6,6s2.7,6,6,6s6-2.7,6-6S12.3,10,9,10z M10,20H8v-4.6l-1.3,1.3l-1.4-1.4L9,11.6l3.7,3.7l-1.4,1.4L10,15.4V20z"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                    </a>
                    </button>
                    <button class="p-2 px-6 bg-red-600 text-white rounded-md" name="deleteBtn">
                        <svg fill="#ffffff" width="24px" height="24px" viewBox="-6.7 0 122.88 122.88" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 109.484 122.88" xml:space="preserve" stroke="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.347,9.633h38.297V3.76c0-2.068,1.689-3.76,3.76-3.76h21.144 c2.07,0,3.76,1.691,3.76,3.76v5.874h37.83c1.293,0,2.347,1.057,2.347,2.349v11.514H0V11.982C0,10.69,1.055,9.633,2.347,9.633 L2.347,9.633z M8.69,29.605h92.921c1.937,0,3.696,1.599,3.521,3.524l-7.864,86.229c-0.174,1.926-1.59,3.521-3.523,3.521h-77.3 c-1.934,0-3.352-1.592-3.524-3.521L5.166,33.129C4.994,31.197,6.751,29.605,8.69,29.605L8.69,29.605z M69.077,42.998h9.866v65.314 h-9.866V42.998L69.077,42.998z M30.072,42.998h9.867v65.314h-9.867V42.998L30.072,42.998z M49.572,42.998h9.869v65.314h-9.869 V42.998L49.572,42.998z"></path>
                                </g>
                            </g>
                        </svg>
                        <a href="adminhome.php?id=<?= $libros->id ?>"></a>
                    </button>

                </div>

            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>