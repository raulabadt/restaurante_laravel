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
        <div class="w-full max-w-md p-4">
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-lg font-bold mb-4">Menu</h2>
                <form action="{{ route('menu.store') }}" method="post" id="menu-form">
                    @csrf
                    <div class="menu-item mb-4">
                        <h3 class="font-bold mb-2">Primeros</h3>
                        <div class="checkboxes space-y-2">
                            <div>
                                <input type="checkbox" name="primeros[]" value="ensalada" id="ensalada" class="mr-2">
                                <label for="ensalada">Ensalada</label>
                            </div>
                            <div>
                                <input type="checkbox" name="primeros[]" value="sopa" id="sopa" class="mr-2">
                                <label for="sopa">Sopa</label>
                            </div>
                            <div>
                                <input type="checkbox" name="primeros[]" value="pasta" id="pasta" class="mr-2">
                                <label for="pasta">Pasta</label>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item mb-4">
                        <h3 class="font-bold mb-2">Segundos</h3>
                        <div class="checkboxes space-y-2">
                            <div>
                                <input type="checkbox" name="segundos[]" value="pollo" id="pollo" class="mr-2">
                                <label for="pollo">Pollo</label>
                            </div>
                            <div>
                                <input type="checkbox" name="segundos[]" value="pescado" id="pescado" class="mr-2">
                                <label for="pescado">Pescado</label>
                            </div>
                            <div>
                                <input type="checkbox" name="segundos[]" value="carne" id="carne" class="mr-2">
                                <label for="carne">Carne</label>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item mb-4">
                        <h3 class="font-bold mb-2">Postres</h3>
                        <div class="checkboxes space-y-2">
                            <div>
                                <input type="checkbox" name="postres[]" value="helado" id="helado" class="mr-2">
                                <label for="helado">Helado</label>
                            </div>
                            <div>
                                <input type="checkbox" name="postres[]" value="pastel" id="pastel" class="mr-2">
                                <label for="pastel">Pastel</label>
                            </div>
                            <div>
                                <input type="checkbox" name="postres[]" value="frutas" id="frutas" class="mr-2">
                                <label for="frutas">Frutas</label>
                            </div>
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
    </div>
</body>
</html>
