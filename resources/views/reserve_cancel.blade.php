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
<body class= bg-orange-400 text-gray-800 ">

@include('components.header')

<!--
// v0 by Vercel.
// https://v0.dev/t/rcSGb4ULd2W
-->
<div class="px-4 py-12 md:py-24">
    <div class="mx-auto max-w-2xl space-y-8 ">
        <div class="space-y-2">
            <h1 class="text-3xl font-bold">Cancela tu reserva</h1>
        </div>
        <form id="tuFormulario" action="{{ route('enviar.reserva') }}" method="post"  class="space-y-4">
        @csrf
       
            <div class="space-y-2">
                
                <input class="rounded-full bg-red-100 text-xl border-2 border-red-500 p-52  placeholder-red-400 focus:text-red-950 focus:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-500"
                placeholder="Introduce el codigo "/>

            </div>
            

            <button type="submit" class="flex items-center bg-orange-500 gap-1 px-4 py-2 mt-10 cursor-pointer text-gray-800 font-semibold tracking-widest rounded-md duration-300 hover:gap-2 hover:translate-x-3">
                Cancelar reserva
                <svg class="w-10 h-10" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
            </button>


        </form>

    </div>
</div>



@include('components.footer')

</body>

</html>
