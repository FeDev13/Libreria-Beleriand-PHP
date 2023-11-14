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
                <svg width="64px" height="64px" viewBox="-2.5 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="icomoon-ignore"> </g> <path d="M18.723 21.788c-1.15-0.48-3.884-1.423-5.565-1.919-0.143-0.045-0.166-0.052-0.166-0.649 0-0.493 0.203-0.989 0.401-1.409 0.214-0.456 0.468-1.224 0.559-1.912 0.255-0.296 0.602-0.88 0.826-1.993 0.196-0.981 0.104-1.338-0.026-1.673-0.013-0.035-0.028-0.070-0.038-0.105-0.049-0.23 0.018-1.425 0.186-2.352 0.116-0.636-0.030-1.989-0.906-3.108-0.553-0.707-1.611-1.576-3.544-1.696l-1.060 0.001c-1.9 0.12-2.96 0.988-3.513 1.695-0.876 1.119-1.021 2.472-0.906 3.108 0.169 0.928 0.236 2.123 0.187 2.348-0.010 0.039-0.025 0.074-0.039 0.11-0.129 0.335-0.221 0.692-0.025 1.673 0.222 1.113 0.57 1.697 0.826 1.993 0.090 0.688 0.344 1.456 0.559 1.912 0.157 0.334 0.23 0.788 0.23 1.431 0 0.597-0.023 0.604-0.157 0.646-1.738 0.513-4.505 1.513-5.537 1.965-0.818 0.351-1.017 0.98-1.017 1.548s0 2.251 0 2.623c0 0.371 0.22 1.006 1.017 1.006 0.613 0 5.518 0 7.746 0 0.668 0 1.098 0 1.098 0h0.192c0 0 0.437 0 1.115 0 2.237 0 7.135 0 7.747 0 0.796 0 1.017-0.634 1.017-1.006s0-2.055 0-2.623-0.392-1.262-1.209-1.613zM18.876 25.98h-17.827v-2.579c0-0.318 0.092-0.46 0.388-0.587 0.994-0.435 3.741-1.426 5.434-1.926 0.889-0.282 0.889-1.070 0.889-1.646 0-0.801-0.106-1.397-0.331-1.878-0.172-0.366-0.392-1.022-0.468-1.601l-0.041-0.312-0.206-0.238c-0.113-0.13-0.396-0.538-0.59-1.513-0.153-0.759-0.085-0.935-0.031-1.076 0.031-0.076 0.058-0.152 0.081-0.237l0.005-0.022 0.005-0.022c0.105-0.495-0.037-1.962-0.181-2.755-0.067-0.365 0.017-1.401 0.7-2.273 0.418-0.534 1.229-1.19 2.722-1.293l0.992-0.001c1.219 0.083 2.145 0.518 2.752 1.294 0.682 0.872 0.766 1.909 0.7 2.275-0.148 0.814-0.287 2.257-0.18 2.758l0.008 0.039 0.011 0.038c0.016 0.054 0.036 0.108 0.056 0.161l0.009 0.026 0.001 0.002c0.059 0.153 0.127 0.326-0.024 1.087-0.196 0.974-0.479 1.384-0.592 1.515l-0.204 0.237-0.042 0.31c-0.076 0.578-0.296 1.237-0.468 1.603-0.247 0.525-0.5 1.157-0.5 1.856 0 0.577 0 1.367 0.918 1.655 1.641 0.485 4.345 1.416 5.448 1.877 0.418 0.179 0.574 0.493 0.574 0.649l-0.006 2.579z" fill="#000000"> </path> <path d="M23.078 14.441v-4.185h-1.049v4.185h-4.186v1.049h4.186v4.185h1.049v-4.185h4.185v-1.049z" fill="#000000"> </path> </g></svg>
            </div>
            <form class="p-12 md:p-24" method="POST">
                <?php
                include "models/connectDB.php";
                include "controllers/registerController.php"
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
                <button class="bg-gradient-to-b from-teal-400 to-teal-600 font-medium p-2 md:p-4 text-white uppercase w-full rounded" name="subButton" value="ok">Registrarse</button>
            </form>
        </div>
    </div>
</body>

</html>