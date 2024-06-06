<!DOCTYPE html>
<html>
<head>
    <title>Crear Menú</title>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
@include('components.dashboard')
<main class="flex-1 p-10">
    <div class="container mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold mb-4">Crear Menú</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('menus.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="nombre" class="block text-gray-700">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
            </div>
            <div>
                <label for="categoria" class="block text-gray-700">Categoría:</label>
                <select id="categoria" name="categoria" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                    <option value="primero" {{ old('categoria') == 'primero' ? 'selected' : '' }}>Primero</option>
                    <option value="segundo" {{ old('categoria') == 'segundo' ? 'selected' : '' }}>Segundo</option>
                    <option value="postre" {{ old('categoria') == 'postre' ? 'selected' : '' }}>Postre</option>
                </select>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar</button>
            </div>
        </form>
    </div>
</main>
</body>
</html>
