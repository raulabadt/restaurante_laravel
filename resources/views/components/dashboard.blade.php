<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <nav class="bg-gray-800 p-4">
        <div class="flex justify-between items-center">
            <div class="text-white text-lg font-semibold">Mi Aplicación</div>
            <ul class="flex space-x-4">
                <li>
                    <a href="/cpanel" class="text-gray-300 hover:text-white py-2 px-4 {{ Request::is('cpanel*') ? 'bg-gray-900' : '' }}{{ Request::is('cpanel*') ? 'text-red-500' : '' }} hover:bg-red-500 hover:text-white">CPanel</a>
                </li>
                <li>
                    <a href="/create_menu" class="text-gray-300 hover:text-white py-2 px-4 {{ Request::is('menu*') ? 'bg-gray-900' : '' }}{{ Request::is('menu*') ? 'text-red-500' : '' }} hover:bg-red-500 hover:text-white">Menú</a>
                </li>
            </ul>
            <button class="text-white bg-gray-700 py-2 px-4">Cerrar sesión</button>
        </div>
    </nav>

    <!-- Content -->
    <div class="p-6">
        <!-- Aquí va el contenido de la página -->
    </div>

</body>

</html>
