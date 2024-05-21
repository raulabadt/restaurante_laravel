<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Mi Página Web</title>
</head>
<body class=" bg-orange-400 text-gray-800">
@include('components.header')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Menú del Restaurante</h1>

        <h2 class="text-xl font-semibold mb-4">Primeros</h2>
        <div id="primeros-list">
            @if($primeros->isEmpty())
                <div class="text-center py-4">
                <h3 class="text-lg font-bold">No hay primeros disponibles en este momento.</h3>
                </div>
            @else
            @foreach ($primeros as $plato)
            <div class="menu-item mb-4 bg-white p-4 md:p-6 rounded shadow-md">
                <h3 class="text-lg font-bold">{{ $plato->nombre }}</h3>
            </div>
            @endforeach
            @endif
        </div>

        <h2 class="text-xl font-semibold mb-4">Segundos</h2>
        <div id="segundos-list">
            @if($segundos->isEmpty())
                <div class="text-center py-4">
                <h3 class="text-lg font-bold">No hay segundos disponibles en este momento.</h3>
                </div>
            @else
                @foreach ($segundos as $plato)
                <div class="menu-item mb-4 bg-white p-4 md:p-6 rounded shadow-md">
                    <h3 class="text-lg font-bold">{{ $plato->nombre }}</h3>
                </div>
                @endforeach
            @endif
        </div>


        <h2 class="text-xl font-semibold mb-4">Postres</h2>
        <div id="postres-list">
            @if($postres->isEmpty())
                <div class="text-center py-4">
                <h3 class="text-lg font-bold">No hay postres disponibles en este momento.</h3>
                </div>
            @else
            @foreach ($postres as $plato)
            <div class="menu-item mb-4 bg-white p-4 md:p-6 rounded shadow-md">
                <h3 class="text-lg font-bold">{{ $plato->nombre }}</h3>
            </div>
            @endforeach
            @endif
        </div>
        <h2 class="text-xl font-semibold mb-4">Precio</h2>
        <div id="postres-list">
            @foreach ($postres as $plato)
            <div class="menu-item mb-4 bg-white p-4 md:p-6 rounded shadow-md">
            <h3 class="text-lg font-bold">{{ $plato->precio }} €</h3>
            </div>
            @endforeach
        </div>
    </div>
    @include('components.footer')
</body>
</html>



