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
    <div class="flex h-screen overflow-hidden">
        <aside class="bg-gray-800 w-64 flex flex-col justify-between md:w-1/4 lg:w-1/5 xl:w-1/6">
            <div class="p-6">
                <!-- Logo / Nombre de la aplicación -->
                <h1 class="text-white text-lg font-semibold">Mi Aplicación</h1>
                <div class="mt-4">
                    <!-- Opciones del menú -->
                    <ul>
                        <li class="mb-4">
                            <a href="/cpanel" class="text-gray-300 hover:text-white block py-2 px-4 {{ Request::is('cpanel*') ? 'bg-gray-900' : '' }}{{ Request::is('cpanel*') ? 'text-red-500' : '' }} hover:bg-red-500 hover:text-white">CPanel</a>
                        </li>
                        <li class="mb-4">
                            <a href="/create_menu" class="text-gray-300 block py-2 px-4 {{ Request::is('menu*') ? 'bg-gray-900' : '' }} {{ Request::is('menu*') ? 'text-red-500' : '' }} hover:bg-red-500 hover:text-white">Menú</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Botón de cierre de sesión -->
            <div class="p-6">
                <button class="w-full text-white bg-gray-700 py-3">Cerrar sesión</button>
            </div>
        </aside>

        <!-- Content -->
        <main class="flex-1 p-4 md:p-10 overflow-auto">
            <div class="container mx-auto px-4 py-8">
                <h1 class="text-2xl font-bold mb-6">Gestionar Menú del Restaurante</h1>

                <h2 class="text-xl font-semibold mb-4">Primeros</h2>
                <div class="menu-item mb-4 bg-white p-4 md:p-6 rounded shadow-md">
                    <form method="POST" class="space-y-4">
                        <input type="text" name="nombre" placeholder="Nombre" class="w-full p-2 border border-gray-300 rounded">
                        <textarea name="descripcion" placeholder="Descripción" class="w-full p-2 border border-gray-300 rounded"></textarea>
                        <input type="number" name="precio" placeholder="Precio" class="w-full p-2 border border-gray-300 rounded">
                        <div class="flex justify-between">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
                            <button type="submit" formmethod="POST" onclick="return confirm('¿Estás seguro?')" class="bg-red-500 text-white px-4 py-2 rounded">Eliminar</button>
                        </div>
                    </form>
                </div>

                <h2 class="text-xl font-semibold mb-4">Segundos</h2>
                <div class="menu-item mb-4 bg-white p-4 md:p-6 rounded shadow-md">
                    <form method="POST" class="space-y-4">
                        <input type="text" name="nombre" placeholder="Nombre" class="w-full p-2 border border-gray-300 rounded">
                        <textarea name="descripcion" placeholder="Descripción" class="w-full p-2 border border-gray-300 rounded"></textarea>
                        <input type="number" name="precio" placeholder="Precio" class="w-full p-2 border border-gray-300 rounded">
                        <div class="flex justify-between">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
                            <button type="submit" formmethod="POST" onclick="return confirm('¿Estás seguro?')" class="bg-red-500 text-white px-4 py-2 rounded">Eliminar</button>
                        </div>
                    </form>
                </div>

                <h2 class="text-xl font-semibold mb-4">Postres</h2>
                <div class="menu-item mb-4 bg-white p-4 md:p-6 rounded shadow-md">
                    <form method="POST" class="space-y-4">
                        <input type="text" name="nombre" placeholder="Nombre" class="w-full p-2 border border-gray-300 rounded">
                        <textarea name="descripcion" placeholder="Descripción" class="w-full p-2 border border-gray-300 rounded"></textarea>
                        <input type="number" name="precio" placeholder="Precio" class="w-full p-2 border border-gray-300 rounded">
                        <div class="flex justify-between">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
                            <button type="submit" formmethod="POST" onclick="return confirm('¿Estás seguro?')" class="bg-red-500 text-white px-4 py-2 rounded">Eliminar</button>
                        </div>
                    </form>
                </div>

                <h2 class="text-xl font-semibold mb-4">Añadir Nuevo Plato</h2>
                <form method="POST" class="space-y-4 bg-white p-4 md:p-6 rounded shadow-md">
                    <input type="text" name="nombre" placeholder="Nombre" class="w-full p-2 border border-gray-300 rounded">
                    <textarea name="descripcion" placeholder="Descripción" class="w-full p-2 border border-gray-300 rounded"></textarea>
                    <input type="number" name="precio" placeholder="Precio" class="w-full p-2 border border-gray-300 rounded">
                    <select name="categoria" class="w-full p-2 border border-gray-300 rounded">
                        <option value="primero">Primero</option>
                        <option value="segundo">Segundo</option>
                        <option value="postre">Postre</option>
                    </select>
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Añadir Plato</button>
                </form>
            </div>
        </main>
    </div>

</body>

</html>
