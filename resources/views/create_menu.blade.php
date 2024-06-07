<!DOCTYPE html>
<html>
<head>
    <title>Crear Menú</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
@include('components.dashboard')
<main class="flex-1 p-10">
    <div class="container mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold mb-4">Crear Menú</h1>

        <form action="{{ route('menus.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="nombre" class="block text-gray-700">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm ">
                @error('nombre')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
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
        
        <div class="overflow-x-auto bg-white shadow-md rounded-lg mt-5">
            <table class="min-w-full border-collapse">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2 text-left">Nombre</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Categoría</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    @foreach ($menus as $menu)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $menu->nombre }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $menu->categoria }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ route('menus.edit', $menu->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Modificar</a>
                                <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('¿Estás seguro de eliminar este menú?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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
