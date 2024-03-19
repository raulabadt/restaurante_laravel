<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Sidebar -->
    <div class="flex h-screen">
        <aside class="bg-gray-800 w-64">
            <div class="p-6">
                <!-- Logo / Nombre de la aplicación -->
                <h1 class="text-white text-lg font-semibold">Mi Aplicación</h1>
                <div class="mt-4">
                    <!-- Opciones del menú -->
                    <ul>
                        <li class="mb-4">
                            <!-- Clase 'bg-gray-900' para resaltar la pestaña activa -->
                            <a href="/cpanel" class="text-gray-300 hover:text-white block py-2 px-4 {{ Request::is('cpanel*') ? 'bg-gray-900' : '' }}{{ Request::is('cpanel*') ? 'text-red-500' : '' }} hover:bg-red-500 hover:text-white">CPanel</a>
                        </li>
                        </li>
                        <li class="mb-4">
                            <!-- Clase 'bg-gray-900' para resaltar la pestaña activa -->
                            <a href="/create_menu" class="text-gray-300 block py-2 px-4 {{ Request::is('menu*') ? 'bg-gray-900' : '' }} {{ Request::is('menu*') ? 'text-red-500' : '' }} hover:bg-red-500 hover:text-white">Menú</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Botón de cierre de sesión -->
            <div class="absolute bottom-0 w-full">
                <button class="w-full text-white bg-gray-700 py-3">Cerrar sesión</button>
            </div>
        </aside>

        <!-- Content -->
        <main class="flex-1 p-10">

     

</body>

</html>
