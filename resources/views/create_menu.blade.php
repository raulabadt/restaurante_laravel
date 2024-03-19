<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

<h1 class="text-center my-4 text-2xl">HOLA ESTO ES EL MENÚ</h1>

<div class="flex justify-center">
    <div class="w-1/3 p-4">
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-lg font-bold mb-4">Formulario</h2>
            <form action="/create_menu" method="post">
                @csrf
                <div class="menu-item">
                    <h3 class="font-bold mb-2">Primeros</h3>
                    <select name="primeros[]" multiple class="block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded shadow">
                        <option value="ensalada">Ensalada</option>
                        <option value="sopa">Sopa</option>
                        <option value="pasta">Pasta</option>
                    </select>
                </div>
                <div class="menu-item">
                    <h3 class="font-bold mb-2">Segundos</h3>
                    <select name="segundos[]" multiple class="block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded shadow">
                        <option value="pollo">Pollo</option>
                        <option value="pescado">Pescado</option>
                        <option value="carne">Carne</option>
                    </select>
                </div>
                <div class="menu-item">
                    <h3 class="font-bold mb-2">Postres</h3>
                    <select name="postres[]" multiple class="block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded shadow">
                        <option value="helado">Helado</option>
                        <option value="pastel">Pastel</option>
                        <option value="frutas">Frutas</option>
                    </select>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Intercambiar Platos
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="w-1/3 p-4">
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-lg font-bold mb-4">Platos del Menú</h2>
            <div class="menu-item">
                <h3 class="font-bold mb-2">Primeros</h3>
                @if (request()->isMethod('post'))
                    @foreach (request('primeros', []) as $plato)
                        <p>{{ $plato }}</p>
                    @endforeach
                @endif
            </div>
            <div class="menu-item">
                <h3 class="font-bold mb-2">Segundos</h3>
                @if (request()->isMethod('post'))
                    @foreach (request('segundos', []) as $plato)
                        <p>{{ $plato }}</p>
                    @endforeach
                @endif
            </div>
            <div class="menu-item">
                <h3 class="font-bold mb-2">Postres</h3>
                @if (request()->isMethod('post'))
                    @foreach (request('postres', []) as $plato)
                        <p>{{ $plato }}</p>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

</body>
</html>
