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
<body class="bg-orange-400 text-gray-800 flex flex-col min-h-screen">

@include('components.header')

<!--
// v0 by Vercel.
// https://v0.dev/t/rcSGb4ULd2W
-->
<section class="flex-grow px-4 py-12 md:py-24">
    <div class="container mx-auto max-w-4xl md:max-w-6xl lg:max-w-7xl flex flex-col items-center justify-center space-y-8">
        <div class="space-y-2 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold">Lista de espera</h1>
        </div>
     
        <form action="{{ route('listaEspera.whitelist') }}" method="POST">
        @csrf
            <button type="submit" class="flex items-center bg-orange-500 gap-1 px-4 py-2 md:py-3 lg:py-4 cursor-pointer text-gray-800 font-semibold tracking-widest rounded-md duration-300 hover:gap-2 hover:translate-x-3">
                    Cancelar 
                <svg class="w-10 h-10 md:w-12 md:h-12 lg:w-14 lg:h-14" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
            </button>
            
            <button type="submit"  class="flex items-center bg-orange-500 gap-1 px-4 py-2 md:py-3 lg:py-4 cursor-pointer text-gray-800 font-semibold tracking-widest rounded-md duration-300 hover:gap-2 hover:translate-x-3">
                Ir a lista de espera
                <svg class="w-10 h-10 md:w-12 md:h-12 lg:w-14 lg:h-14" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
            </button>
        </form>
    </div>
</section>

@include('components.footer')

</body>
</html>
