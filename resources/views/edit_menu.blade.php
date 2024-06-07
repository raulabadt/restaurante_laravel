<!DOCTYPE html>
<html>
<head>
    <title>Editar Menú</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
@include('components.dashboard')
<main class="flex-1 p-10">
    <div class="container mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold mb-4">Editar Menú</h1>

        <form action="{{ route('menus.update', $menu->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="nombre" class="block text-gray-700">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $menu->nombre) }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm >
                @error('nombre')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="categoria" class="block text-gray-700">Categoría:</label>
                <select id="categoria" name="categoria" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                    <option value="primero" {{ old('categoria', $menu->categoria) == 'primero' ? 'selected' : '' }}>Primero</option>
                    <option value="segundo" {{ old('categoria', $menu->categoria) == 'segundo' ? 'selected' : '' }}>Segundo</option>
                    <option value="postre" {{ old('categoria', $menu->categoria) == 'postre' ? 'selected' : '' }}>Postre</option>
                </select>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Actualizar</button>
            </div>
        </form>
    </div>
</main>

@if (session('success'))
    <div id="successModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-6 rounded shadow-md text-center">
            <p class="text-lg font-semibold">{{ session('success') }}</p>
            <button onclick="closeModal('successModal')" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cerrar</button>
        </div>
    </div>
@endif

@if ($errors->any())
    <div id="errorModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-6 rounded shadow-md text-center">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button onclick="closeModal('errorModal')" class="mt-4 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Cerrar</button>
        </div>
    </div>
@endif

<script>
    function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
    }
</script>
</body>
</html>
