<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
@include('components.dashboard')
<h1 class="text-center my-4 text-2xl">TU MENU A TU ANTOJO</h1>

<div class="flex justify-center">
    <div class="w-1/3 p-4">
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-lg font-bold mb-4">Menu</h2>
            <form action="{{ route('menu.store') }}" method="post" id="menu-form">
                @csrf
                <div class="menu-item">
                    <h3 class="font-bold mb-2">Primeros</h3>
                    <div class="checkboxes">
                        <input type="checkbox" name="primeros[]" value="ensalada" id="ensalada">
                        <label for="ensalada">Ensalada</label><br>
                        <input type="checkbox" name="primeros[]" value="sopa" id="sopa">
                        <label for="sopa">Sopa</label><br>
                        <input type="checkbox" name="primeros[]" value="pasta" id="pasta">
                        <label for="pasta">Pasta</label><br>
                    </div>
                </div>
                <div class="menu-item">
                    <h3 class="font-bold mb-2">Segundos</h3>
                    <div class="checkboxes">
                        <input type="checkbox" name="segundos[]" value="pollo" id="pollo">
                        <label for="pollo">Pollo</label><br>
                        <input type="checkbox" name="segundos[]" value="pescado" id="pescado">
                        <label for="pescado">Pescado</label><br>
                        <input type="checkbox" name="segundos[]" value="carne" id="carne">
                        <label for="carne">Carne</label><br>
                    </div>
                </div>
                <div class="menu-item">
                    <h3 class="font-bold mb-2">Postres</h3>
                    <div class="checkboxes">
                        <input type="checkbox" name="postres[]" value="helado" id="helado">
                        <label for="helado">Helado</label><br>
                        <input type="checkbox" name="postres[]" value="pastel" id="pastel">
                        <label for="pastel">Pastel</label><br>
                        <input type="checkbox" name="postres[]" value="frutas" id="frutas">
                        <label for="frutas">Frutas</label><br>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Publicar 
                    </button>
                </div>
            </form>
        </div>
    </div>




</body>
</html>




</body>
</html>

