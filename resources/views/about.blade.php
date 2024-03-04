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
<!--
// v0 by Vercel.
// https://v0.dev/t/6zZAWSfbo0K
-->
<div class=" border-t">
  <section class="w-full py-12 md:py-24 lg:py-32 xl:py-40">
    <div class="container grid items-center gap-4 px-4 text-center md:px-6 lg:gap-10">
        <div class="space-y-3">
            <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">
        Sobre Nosotros
            </h2>
            <p class="mx-auto max-w-[700px] text-gray-500 md:text-xl/relaxed 
            lg:text-base/relaxed xl:text-xl/relaxed dark:text-gray-400">
                Descubre la pasión por la comida auténtica. En el corazón de
                nuestra cocina se encuentra el compromiso con los sabores
                frescos y la hospitalidad excepcional.
            </p>
        </div>
        <div class="grid gap-4 md:gap-6 lg:gap-10 xl:gap-16">
            <div class="mx-auto flex w-full items-center justify-center p-4 md:p-8">
                <img src="http://localhost/restaurante_laravel/resources/views/images/cocina.jpg" width="800" height="400" alt="Restaurante" class="aspect-[2/1] overflow-hidden rounded-xl object-cover object-center">
            </div>
            <div class="mx-auto flex w-full items-center justify-center p-4 md:p-8">
                <img src="http://localhost/restaurante_laravel/resources/views/images/plato1.jpg" width="800" height="400" alt="Restaurante" class="aspect-[2/1] overflow-hidden rounded-xl object-cover object-center">
            </div>
        </div>
    </div>
</section>
<section class="w-full py-12 md:py-24 lg:py-32">
    <div class="container grid items-center gap-4 px-4 text-center md:px-6 lg:gap-10">
        <div class="space-y-3">
            <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">
                Nuestra Historia
            </h2>
            <p class="mx-auto max-w-3xl text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed dark:text-gray-400">
                Desde nuestros humildes comienzos como un pequeño puesto de
                comida callejera, siempre hemos buscado ofrecer a nuestros
                clientes una experiencia culinaria excepcional.
            </p>
        </div>
        <div class="grid w-full grid-cols-1 items-stretch justify-center divide-y max-w-3xl mx-auto">
            <div class="mx-auto flex w-full items-center justify-center p-4 sm:p-8">
                <img src="http://localhost/restaurante_laravel/resources/views/images/puestoCalle.jpg" width="600" height="300" alt="Imagen" class="aspect-video overflow-hidden rounded-lg object-contain object-center">
            </div>
            <div class="mx-auto flex w-full items-center justify-center p-4 sm:p-8">
                <img src="http://localhost/restaurante_laravel/resources/views/images/puestoCalle1.jpg" width="600" height="300" alt="Imagen" class="aspect-video overflow-hidden rounded-lg object-contain object-center">
            </div>
        </div>
    </div>
</section>
<section class="w-full py-12 md:py-24 lg:py-32">
    <div class="container grid items-center gap-4 px-4 text-center md:px-6 lg:gap-10">
        <div class="space-y-3">
            <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">
                Nuestro Enfoque
            </h2>
            <p class="mx-auto max-w-3xl text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed dark:text-gray-400">
                En cada plato que servimos, celebramos los ingredientes
                frescos y la creatividad en la cocina. Nuestro enfoque
                culinario único combina tradición y modernidad para
                ofrecer sabores extraordinarios.
            </p>
        </div>
        <div class="grid w-full grid-cols-1 items-stretch justify-center divide-y max-w-3xl mx-auto">
            <div class="mx-auto flex w-full items-center justify-center p-4 sm:p-8">
                <img src="http://localhost/restaurante_laravel/resources/views/images/comida1.jpg" width="600" height="300" alt="Imagen" class="aspect-video overflow-hidden rounded-lg object-contain object-center">
            </div>
            <div class="mx-auto flex w-full items-center justify-center p-4 sm:p-8">
                <img src="http://localhost/restaurante_laravel/resources/views/images/comida2.jpg" width="600" height="300" alt="Imagen" class="aspect-video overflow-hidden rounded-lg object-contain object-center">
            </div>
        </div>
    </div>
</section>
<section class="w-full py-12 md:py-24 lg:py-32">
    <div class="container grid items-center gap-4 px-4 text-center md:px-6 lg:gap-10">
        <div class="space-y-3">
            <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">
                Nuestros Valores
            </h2>
            <p class="mx-auto max-w-3xl text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed dark:text-gray-400">
                En el corazón de nuestro restaurante se encuentran nuestros
                valores fundamentales: calidad, hospitalidad y
                comunidad. Nos esforzamos por ofrecer una experiencia
                excepcional a cada cliente que cruza nuestras puertas.
            </p>
        </div>
        <div class="grid w-full grid-cols-1 items-stretch justify-center divide-y max-w-3xl mx-auto">
            <div class="mx-auto flex w-full items-center justify-center p-4 sm:p-8">
                <img src="http://localhost/restaurante_laravel/resources/views/images/calidad.jpg" width="600" height="300" alt="Imagen" class="aspect-video overflow-hidden rounded-lg object-contain object-center">
            </div>
            <div class="mx-auto flex w-full items-center justify-center p-4 sm:p-8">
                <img src="http://localhost/restaurante_laravel/resources/views/images/hospitalidad.jpg" width="600" height="300" alt="Imagen" class="aspect-video overflow-hidden rounded-lg object-contain object-center">
            </div>
        </div>
    </div>
</section>

@include('components.footer')
</body>
</html>
