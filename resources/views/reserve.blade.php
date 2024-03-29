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
            <h1 class="text-3xl font-bold">Haz tu reserva</h1>
        </div>
        <form id="tuFormulario" action="{{ route('enviar.reserva') }}" method="post"  class="space-y-4">
        @csrf
        <input type="hidden" id="mesaSeleccionada" name="mesa" value="">
            <div class="space-y-2">
                <label for="name" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Nombre y Apellidos</label>
                <input type="text" id="name" name="name" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" placeholder="Ingrese su nombre" required>
            </div>
            <div class="space-y-2">
                <label for="mail" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Introduce tu mail</label>
                <input type="text" id="mail" name="mail" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" placeholder="Introduce el mail" required>
            </div>
            <div class="space-y-2">
                <label for="telf" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Numero de telefono</label>
                <input type="text" id="telf" name="telf" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" placeholder="Numero de telefono" required>
            </div>
            <div class="space-y-2">
                <label for="adultos" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Número de adultos</label>
                <input type="number" id="adultos" name="adultos" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" placeholder="0" required>
            </div>
            <div class="space-y-2">
                <label for="niños" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Número de niños</label>
                <input type="number" id="niños" name="niños" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" placeholder="0" required>
            </div>
            <div class="space-y-2">
                <label for="trona" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Número de tronas</label>
                <input type="number" id="trona" name="trona" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" placeholder="0" required>
            </div>
            <div class="space-y-2">
                <label for="date" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Fecha</label>
                <input type="date" id="date" name="date" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" required>
            </div>
            <div class="space-y-2">
                <label for="time" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Hora</label>
                <input type="time" id="time" name="time" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" required>
            </div>
            <div class="space-y-2">
                <label for="alergias" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Alergias ó intolerancias</label>
                <textarea id="alergias" name="alergias" class="flex w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 min-h-[100px]" placeholder="Alergias ó intolerancias" required></textarea>
            </div>

            <button type="submit" class="flex items-center bg-orange-500 gap-1 px-4 py-2 cursor-pointer text-gray-800 font-semibold tracking-widest rounded-md duration-300 hover:gap-2 hover:translate-x-3">
                Reservar
                <svg class="w-5 h-5" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
            </button>
            <a href="/reserve_cancel" class="flex items-center bg-orange-500 gap-1 px-4 py-2 cursor-pointer text-gray-800 font-semibold tracking-widest rounded-md duration-300 hover:gap-2 hover:translate-x-3">
                Cancelar reserva
                <svg class="w-5 h-5" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
            </a>

        </form>
     
    </div>
</div>

@include('components.footer')

</body>

</html>
