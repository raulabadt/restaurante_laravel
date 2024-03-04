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
<body class="bg-gray-100 bg-orange-400 text-gray-800 dark:text-gray-100">
@include('components.header')

<div class="flex flex-col min-h-screen">

  <section class="py-12 md:py-24 lg:py-32">
    <div class="container flex flex-col items-center justify-center gap-4 px-4 md:px-6">
      <div class="text-center">
        <h2 class="text-3xl font-bold tracking-tighter sm:text-5xl">Comida para Llevar</h2>
        <p class="mx-auto max-w-[600px] text-gray-500 md:text-xl lg:text-base/relaxed xl:text-xl/relaxed dark:text-gray-400">
          Disfruta de nuestros deliciosos platos en la comodidad de tu hogar. Haz tu pedido y deja que el sabor
          hable por sí mismo.
        </p>
      </div>
      <div class="grid gap-6 md:grid-cols-2 lg:gap-12">
        <div class="flex flex-col gap-2">
          <img
            src="http://localhost/restaurante_laravel/resources/views/images/comida1.jpg"
            width="600"
            height="400"
            alt="Image"
            class="aspect-video overflow-hidden rounded-xl object-cover object-center"
          />
        </div>
        <div class="flex flex-col gap-2">
          <img
          src="http://localhost/restaurante_laravel/resources/views/images/comida2.jpg"
            width="600"
            height="400"
            alt="Image"
            class="aspect-video overflow-hidden rounded-xl object-cover object-center"
          />
        </div>
      </div>
      <div class="flex flex-col gap-2 min-[400px]:flex-row">
        <a
          class="inline-flex h-10 items-center justify-center rounded-md bg-gray-900 px-8 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300"
          href="/menu"
          rel="ugc"
        >
          Ordenar Ahora
        </a>
      </div>
    </div>
  </section>
  
    <section class="flex items-center justify-center p-8 bg-orange-400">
        
            <div class="w-full max-w-2xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                <div class="text-center">
                <h2 class="text-3xl font-bold tracking-tighter sm:text-5xl">Horario de Atención</h2>
            
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
  
</div>
@include('components.footer')
</body>
</html>
