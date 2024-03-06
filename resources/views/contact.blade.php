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
<body class=" bg-orange-400 text-gray-800 ">
@include('components.header')

<!--
// v0 by Vercel.
// https://v0.dev/t/9boEGJ8hecW
-->
<section class="flex items-center justify-center p-8 bg-orange-200">
<h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">Contacto</h2>

</section>

<section class="p-8 bg-orange-200 flex flex-col sm:flex-row items-center justify-center">
        <p class="text-lg leading-6 font-medium text-gray-900 mb-4 sm:mb-0 sm:mr-16">Llama a este número: 673 83 75 97</p>
        <p class="text-lg leading-6 font-medium text-gray-900 ml-0 sm:ml-16">Manda un correo a: info@mirestaurante.com</p>
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
  
  @include('components.footer')

</body>
</html>

