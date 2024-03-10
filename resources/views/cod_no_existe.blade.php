
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
<main class="flex-grow">
    <div class="container mx-auto py-12">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-4">
                <h1 class="text-3xl font-bold text-center mb-4">¡Codigo de reserva no existe o ha caducado!</h1>
                
                <div class="flex justify-center">
                    <a href="http://127.0.0.1:8000/" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded inline-block">Volver al inicio</a>
                </div>
            </div>
        </div>
    </div>
</main>

@include('components.footer')

</body>
</html>


