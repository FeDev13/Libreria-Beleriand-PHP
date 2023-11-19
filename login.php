<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Beleriand Libros</title>
</head>

<body>

    <div class="bg-white dark:bg-gray-800 h-screen overflow-hidden flex items-center justify-center">
        <div class="bg-white lg:w-6/12 md:7/12 w-8/12 shadow-3xl rounded-xl">
            <div class="bg-gray-800 shadow shadow-gray-200 absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 rounded-full p-4 md:p-8">
                <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#f7f7f7">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8067 6.07297C14.762 6.70986 14.9862 8.01853 14.2973 8.93707L13.2 10.4C12.9014 10.7981 12.941 11.3552 13.2929 11.7071L20.8073 19.2215L20.5621 19.7731C20.2421 20.4933 19.2535 20.5774 18.8163 19.9216L17.8321 18.4453C17.5257 17.9858 16.9049 17.8616 16.4453 18.168L15.9456 18.5011L14.9192 16.1061C14.8021 15.833 14.5698 15.6261 14.285 15.5415C14.0002 15.4568 13.6925 15.5032 13.4453 15.668L12.9456 16.0011L11.9192 13.6061C11.7983 13.3241 11.5547 13.1132 11.2583 13.0339C10.9619 12.9547 10.6455 13.0159 10.4 13.2L8.93707 14.2973C8.01853 14.9862 6.70986 14.762 6.07297 13.8067L3.19632 9.49169C2.66749 8.69844 2.77208 7.6422 3.4462 6.96807L6.96807 3.4462C7.6422 2.77208 8.69844 2.66749 9.49168 3.19632L13.8067 6.07297ZM16.0547 20.8321L16.7227 20.3868L17.1522 21.031C18.4637 22.9983 21.4295 22.7459 22.3898 20.5854L22.9138 19.4062C23.0819 19.0281 22.9997 18.5855 22.7071 18.2929L15.3204 10.9062L15.8973 10.1371C17.2751 8.29999 16.8267 5.68264 14.9161 4.40887L10.6011 1.53222C9.0146 0.474559 6.90212 0.683733 5.55386 2.03199L2.03199 5.55386C0.683733 6.90212 0.474558 9.0146 1.53222 10.6011L4.40887 14.9161C5.68265 16.8267 8.3 17.2751 10.1371 15.8973L10.5821 15.5635L11.5809 17.894C11.6979 18.167 11.9303 18.3739 12.2151 18.4586C12.4999 18.5432 12.8075 18.4969 13.0547 18.3321L13.5545 17.9989L14.5809 20.3939C14.6979 20.667 14.9303 20.8739 15.2151 20.9586C15.4999 21.0432 15.8075 20.9969 16.0547 20.8321ZM8.00003 10C9.1046 10 10 9.1046 10 8.00003C10 6.89546 9.1046 6.00003 8.00003 6.00003C6.89546 6.00003 6.00003 6.89546 6.00003 8.00003C6.00003 9.1046 6.89546 10 8.00003 10Z" fill="#000000"></path>
                    </g>
                </svg>
            </div>
            <form class="p-12 md:p-24" method="POST">
                <?php
                include "models/connectDB.php";
                include "controllers/loginController.php"
                ?>
                <div class="flex items-center text-lg mb-6 md:mb-8">
                    <svg class="absolute ml-3" width="24" viewBox="0 0 24 24">
                        <path d="M20.822 18.096c-3.439-.794-6.64-1.49-5.09-4.418 4.72-8.912 1.251-13.678-3.732-13.678-5.082 0-8.464 4.949-3.732 13.678 1.597 2.945-1.725 3.641-5.09 4.418-3.073.71-3.188 2.236-3.178 4.904l.004 1h23.99l.004-.969c.012-2.688-.092-4.222-3.176-4.935z" />
                    </svg>
                    <input type="text" name="username" class="bg-gray-200 rounded pl-12 py-2 md:py-4 focus:outline-none w-full" placeholder="Username" />
                </div>
                <div class="flex items-center text-lg mb-6 md:mb-8">
                    <svg class="absolute ml-3" viewBox="0 0 24 24" width="24">
                        <path d="m18.75 9h-.75v-3c0-3.309-2.691-6-6-6s-6 2.691-6 6v3h-.75c-1.24 0-2.25 1.009-2.25 2.25v10.5c0 1.241 1.01 2.25 2.25 2.25h13.5c1.24 0 2.25-1.009 2.25-2.25v-10.5c0-1.241-1.01-2.25-2.25-2.25zm-10.75-3c0-2.206 1.794-4 4-4s4 1.794 4 4v3h-8zm5 10.722v2.278c0 .552-.447 1-1 1s-1-.448-1-1v-2.278c-.595-.347-1-.985-1-1.722 0-1.103.897-2 2-2s2 .897 2 2c0 .737-.405 1.375-1 1.722z" />
                    </svg>
                    <input type="password" name="password" class="bg-gray-200 rounded pl-12 py-2 md:py-4 focus:outline-none w-full" placeholder="Password" />
                </div>
                <button class="bg-gradient-to-b from-teal-400 to-teal-600 font-medium p-2 md:p-4 text-white uppercase w-full rounded" name="loginButton" value="ok">Registrarse</button>
            </form>
        </div>
    </div>
</body>

</html>