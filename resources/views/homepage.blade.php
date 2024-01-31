<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Mi Página Web</title>
    <!-- Agrega enlaces a tus archivos de estilo CSS aquí -->
    <!-- <link rel="stylesheet" href="styles.css"> -->
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-100">
    @include('components.header')
    <section class="relative bg-gray-200 h-96 overflow-hidden">
        <img class="w-full h-full object-cover"  src="http://localhost/restaurante-laravel/resources/views/images/barra.png" alt="Mi Foto">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
            <img class="w-32 h-32 mx-auto mb-4 rounded-full"  src="http://localhost/restaurante-laravel/resources/views/images/takeaway.jpg" alt="Otra Imagen">
            <a href="#" class="relative border hover:border-red-600 duration-500 group cursor-pointer text-sky-50  overflow-hidden h-14 w-56 rounded-md bg-red-800 p-2 flex justify-center items-center font-extrabold">
                <div class="absolute z-10 w-48 h-48 rounded-full group-hover:scale-150 transition-all  duration-500 ease-in-out bg-red-900 delay-150 group-hover:delay-75"></div>
                <div class="absolute z-10 w-40 h-40 rounded-full group-hover:scale-150 transition-all  duration-500 ease-in-out bg-red-800 delay-150 group-hover:delay-100"></div>
                <div class="absolute z-10 w-32 h-32 rounded-full group-hover:scale-150 transition-all  duration-500 ease-in-out bg-red-700 delay-150 group-hover:delay-150"></div>
                <div class="absolute z-10 w-24 h-24 rounded-full group-hover:scale-150 transition-all  duration-500 ease-in-out bg-red-600 delay-150 group-hover:delay-200"></div>
                <div class="absolute z-10 w-16 h-16 rounded-full group-hover:scale-150 transition-all  duration-500 ease-in-out bg-red-500 delay-150 group-hover:delay-300"></div>
                <p class="z-10">Para llevar</p>
            </a>
        </div>
    </section>

    <section class="flex justify-around items-center p-8 bg-orange-200">
        <!-- Icono 1 -->
        <div class="text-center mb-4">
            <img class="w-20 h-20 mb-2" src="http://localhost/restaurante-laravel/resources/views/iconos/select1.png" alt="Icono 1">
            <p class="text-sm">Descripción 1</p>
        </div>

        <!-- Icono 2 -->
        <div class="text-center mb-4">
            <img class="w-20 h-20 mb-2" src="http://localhost/restaurante-laravel/resources/views/iconos/ubicacion1.png" alt="Icono 2">
            <p class="text-sm">Descripción 2</p>
        </div>

        <!-- Icono 3 -->
        <div class="text-center mb-4">
            <img class="w-20 h-20 mb-2" src="http://localhost/restaurante-laravel/resources/views/iconos/reloj2.png" alt="Icono 3">
            <p class="text-sm">Descripción 3</p>
        </div>
    </section>

    <!-- Sección 3 (Botón) -->
    <section class="flex items-center justify-center p-8 bg-orange-200">
    <button class="bg-red-500 hover:bg-red-300 text-white font-bold py-3 px-6 rounded-full shadow-lg hover:text-white shadow-white transform transition-all duration-500 ease-in-out hover:scale-110 hover:brightness-110 hover:animate-pulse active:animate-bounce">
        Ver carta
    </button>


    </section>
  
   
    <!-- Sección 3 -->
    <section class="flex items-center p-8 bg-gray-200">
        <img class="w-1/2 mr-8" src="otra/ruta/de/imagen.jpg" alt="Otra Imagen">
        <div>
            <p class="text-lg font-semibold mb-4">Texto descriptivo</p>
            <button class="bg-green-500 text-white px-4 py-2 mr-4">Botón 1</button>
            <button class="bg-red-500 text-white px-4 py-2">Botón 2</button>
        </div>
    </section>

    @include('components.footer')
</body>
</html>
