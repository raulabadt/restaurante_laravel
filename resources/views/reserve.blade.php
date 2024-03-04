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
<body class="bg-gray-100 bg-orange-400 text-gray-800 dark:text-gray-100 ">

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
                <label for="adultos" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Número de adultos</label>
                <input type="number" id="adultos" name="adultos" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" placeholder="0" required>
            </div>
            <div class="space-y-2">
                <label for="niños" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Número de niños</label>
                <input type="number" id="niños" name="niños" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" placeholder="0" required>
            </div>
            <div class="space-y-2">
                <label class="text-sm font-medium leading-none" for="trona">¿Necesitas trona?</label>
                <div class="flex items-center space-x-4">
                    <input type="radio" id="yes" name="trona" value="yes">
                    <label for="yes">Sí</label>
                    <input type="radio" id="no" name="trona" value="no">
                    <label for="no">No</label>
                </div>
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
           

            <!-- <div class="space-y-2">
                <label class="text-sm font-medium leading-none">Selecciona la mesa en la que quieres comer:</label>
                <img src="http://localhost/restaurante_laravel/resources/views/images/plano_restaurante.jpg" alt="Plano del restaurante" width="600" usemap="#mesas">
                <map name="mesas">
                    <area shape="RECTANGLE" coords="48,121,277,223" alt="Mesa 1" href="#mesa1">
                    <area shape="RECTANGLE" coords="327,119,594,239" alt="Mesa 2" href="#mesa2">
                    <area shape="RECTANGLE" coords="691,127,1074,237" alt="Mesa 3" href="#mesa3">
                    <area shape="RECTANGLE" coords="37,367,321,482" alt="Mesa 4" href="#mesa4">
                    <area shape="RECTANGLE" coords="386,357,655,489" alt="Mesa 5" href="#mesa5"> -->
                    <!-- Agrega más áreas sensibles de tipo rectángulo según sea necesario -->
                <!-- </map>
            </div> -->

            <button type="submit" class="flex items-center bg-orange-500 text-white gap-1 px-4 py-2 cursor-pointer text-gray-800 font-semibold tracking-widest rounded-md duration-300 hover:gap-2 hover:translate-x-3">
                Reservar
                <svg class="w-5 h-5" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
            </button>

        </form>
        <!-- <script>
            document.addEventListener("DOMContentLoaded", function() {
                document.querySelector("img[usemap]").addEventListener("click", function(event) {
                    var areaClicked = event.target;
                    if (areaClicked.tagName === "AREA") {
                        document.getElementById("mesaSeleccionada").value = areaClicked.getAttribute("alt");
                    }
                });
            });
        </script> -->
       
    </div>
</div>

@include('components.footer')

</body>

</html>
