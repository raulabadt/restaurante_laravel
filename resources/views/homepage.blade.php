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
<body class="bg-gray-100  text-gray-800 ">
    @include('components.header')
    <section class="relative bg-gray-200 h-96 overflow-hidden">
        <img class="w-full h-full object-cover"  src="http://localhost/restaurante_laravel/resources/views/images/barra.png" alt="Mi Foto">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
            <img class="w-32 h-32 mx-auto mb-4 rounded-full"  src="http://localhost/restaurante_laravel/resources/views/images/takeaway.jpg" alt="Otra Imagen">
            <a href="/take_away" class="relative border hover:border-red-600 duration-500 group cursor-pointer text-sky-50  overflow-hidden h-14 w-56 rounded-md bg-red-800 p-2 flex justify-center items-center font-extrabold">
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
            <img class="w-20 h-20 mb-2" src="http://localhost/restaurante_laravel/resources/views/iconos/select1.png" alt="Icono 1">
            <h2 class="font-semibold text-base text-black"> Elige los platos que más te gusten y pide por teléfono: +1 (555) 123-4567</h2>
        </div>

        <!-- Icono 2 -->
        <div class="text-center mb-4">
            <img class="w-20 h-20 mb-2" src="http://localhost/restaurante_laravel/resources/views/iconos/ubicacion1.png" alt="Icono 2">
            <p class="font-semibold text-base text-black">Recógelo en nuestro restaurante</p>
        </div>

        <!-- Icono 3 -->
        <div class="text-center mb-4">
            <img class="w-20 h-20 mb-2" src="http://localhost/restaurante_laravel/resources/views/iconos/reloj2.png" alt="Icono 3">
            <p class="font-semibold text-base text-black">Disfrútalo en tu casa</p>
        </div>
    </section>

    <section class="flex items-center justify-center p-8 bg-orange-200">
        
            <div class="w-full max-w-2xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                <div class="text-center">
                    <h2 class="text-base font-semibold text-black tracking-wide uppercase">Horario</h2>
                    
                    <div class="mt-10"><dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-red-500 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                                        <rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect>
                                        <line x1="16" x2="16" y1="2" y2="6"></line><line x1="8" x2="8" y1="2" y2="6"></line>
                                        <line x1="3" x2="21" y1="10" y2="10"></line>
                                    </svg>
                                </div>
                                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Lunes - Viernes</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">8:00 AM - 10:00 PM</dd>
                        </div>
                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-red-500 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect><line x1="16" x2="16" y1="2" y2="6"></line><line x1="8" x2="8" y1="2" y2="6"></line><line x1="3" x2="21" y1="10" y2="10"></line></svg>
                                </div>
                                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Sábado</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">10:00 AM - 11:00 PM</dd>
                        </div>
                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-red-500 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect><line x1="16" x2="16" y1="2" y2="6"></line><line x1="8" x2="8" y1="2" y2="6"></line><line x1="3" x2="21" y1="10" y2="10"></line></svg>
                                </div>
                                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Domingo</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">10:00 AM - 9:00 PM</dd>
                        </div>
                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-red-500 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect><line x1="16" x2="16" y1="2" y2="6"></line><line x1="8" x2="8" y1="2" y2="6"></line><line x1="3" x2="21" y1="10" y2="10"></line></svg>
                                </div>
                                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Brunch de Domingo</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">10:00 AM - 2:00 PM</dd>
                        </div>
                    </dl>
                </div>
            </div>

    </section>

    <!-- Sección 3 (Botón) -->
    <section class="flex items-center justify-center p-8 bg-orange-200">
        <a href="/menu" class="bg-red-500 hover:bg-red-300 text-white font-bold py-3 px-6 rounded-full shadow-lg hover:text-white shadow-white transform transition-all duration-500 ease-in-out hover:scale-110 hover:brightness-110 hover:animate-pulse active:animate-bounce">
            Ver carta
        </a>


    </section>
  
   
    <!-- Sección 3 -->
    <section class="relative bg-gray-200 h-96 overflow-hidden">
    <img class="w-full h-full object-cover" src="http://localhost/restaurante_laravel/resources/views/images/huevosrotos1.jpg" alt="Mi Foto">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
        <h2 class="text-4xl font-extrabold text-gray-800 mb-2">Especialidades de la casa</h2>
        <div class="w-16 border-b-2 border-gray-800 mx-auto mb-6"></div>
        <p class="text-lg font-semibold text-gray-800">
            Asador tradicional aragonés de corazón, en nuestro restaurante puedes disfrutar de carnes y chuletones a la brasa, pescados y mariscos, los clásicos platos de cuchara o los guisos y asados “de la abuela”.
        </p>
    </div>
</section>


    @include('components.footer')
</body>
</html>
