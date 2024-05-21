<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Menú del Restaurante</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    @include('components.dashboard')

    <!-- Esto es para depuración, luego debes quitarlo -->

    <main class="flex-1 p-4 md:p-10 overflow-auto">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-2xl font-bold mb-6">Gestionar Menú del Restaurante</h1>

            <div class="flex flex-col md:flex-row justify-between">
                <div class="w-full md:w-2/4 md:pr-4">
                    <h2 class="text-xl font-semibold mb-4">Primeros</h2>
                    <div id="primeros-list">
                        @foreach ($primeros as $menu)
                        <div class="menu-item mb-4 bg-white p-4 md:p-6 rounded shadow-md">
                            <form action="{{ route('update_menu', $menu->id) }}" method="POST" class="space-y-4">
                                @csrf
                                @method('PUT')
                                <input type="text" name="nombre" value="{{ $menu->nombre }}" class="w-full p-2 border border-gray-300 rounded">
                                <textarea name="descripcion" class="w-full p-2 border border-gray-300 rounded">{{ $menu->descripcion }}</textarea>
                             
                                <input type="hidden" name="categoria" value="primero">
                                <div class="flex justify-between">
                                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Actualizar</button>
                                    <form action="{{ route('delete_menu', $menu->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('¿Estás seguro?')" class="bg-red-500 text-white px-4 py-2 rounded">Eliminar</button>
                                    </form>
                                </div>
                            </form>
                        </div>
                        @endforeach
                    </div>

                    <h2 class="text-xl font-semibold mb-4">Segundos</h2>
                    <div id="segundos-list">
                        @foreach ($segundos as $menu)
                        <div class="menu-item mb-4 bg-white p-4 md:p-6 rounded shadow-md">
                            <form action="{{ route('update_menu', $menu->id) }}" method="POST" class="space-y-4">
                                @csrf
                                @method('PUT')
                                <input type="text" name="nombre" value="{{ $menu->nombre }}" class="w-full p-2 border border-gray-300 rounded">
                                <textarea name="descripcion" class="w-full p-2 border border-gray-300 rounded">{{ $menu->descripcion }}</textarea>
                               
                                <input type="hidden" name="categoria" value="segundo">
                                <div class="flex justify-between">
                                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Actualizar</button>
                                    <form action="{{ route('delete_menu', $menu->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('¿Estás seguro?')" class="bg-red-500 text-white px-4 py-2 rounded">Eliminar</button>
                                    </form>
                                </div>
                            </form>
                        </div>
                        @endforeach
                    </div>

                    <h2 class="text-xl font-semibold mb-4">Postres</h2>
                    <div id="postres-list">
                        @foreach ($postres as $menu)
                        <div class="menu-item mb-4 bg-white p-4 md:p-6 rounded shadow-md">
                            <form action="{{ route('update_menu', $menu->id) }}" method="POST" class="space-y-4">
                                @csrf
                                @method('PUT')
                                <input type="text" name="nombre" value="{{ $menu->nombre }}" class="w-full p-2 border border-gray-300 rounded">
                                <textarea name="descripcion" class="w-full p-2 border border-gray-300 rounded">{{ $menu->descripcion }}</textarea>
                              
                                <input type="hidden" name="categoria" value="postre">
                                <div class="flex justify-between">
                                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Actualizar</button>
                                    <form action="{{ route('delete_menu', $menu->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('¿Estás seguro?')" class="bg-red-500 text-white px-4 py-2 rounded">Eliminar</button>
                                    </form>
                                </div>
                            </form>
                        </div>
                        @endforeach
                    </div>
                    <h2 class="text-xl font-semibold mb-4">Precio</h2>
                    <div id="postres-list">
                        @foreach ($postres as $menu)
                        <div class="menu-item mb-4 bg-white p-4 md:p-6 rounded shadow-md">
                            <form action="{{ route('update_menu', $menu->id) }}" method="POST" class="space-y-4">
                                @csrf
                                @method('PUT')
                               
                                <input type="number" name="precio" value="{{ $menu->precio }}" class="w-full p-2 border border-gray-300 rounded">
                                <input type="hidden" name="categoria" value="postre">
                                <div class="flex justify-between">
                                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Actualizar</button>
                                    <form action="{{ route('delete_menu', $menu->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('¿Estás seguro?')" class="bg-red-500 text-white px-4 py-2 rounded">Eliminar</button>
                                    </form>
                                </div>
                            </form>
                        </div>
                        @endforeach
                    </div>
                </div>
               

                <div class="w-full md:w-2/4">
                    <h2 class="text-xl font-semibold mb-4">Añadir Nuevo Plato</h2>
                    <form action="{{ route('add_menu') }}" method="POST" class="space-y-4 bg-white p-4 md:p-6 rounded shadow-md">
                        @csrf
                        <input type="text" name="nombre" placeholder="Nombre" class="w-full p-2 border border-gray-300 rounded">
                        <textarea name="descripcion" placeholder="Descripción" class="w-full p-2 border border-gray-300 rounded"></textarea>
                        <input type="number" name="precio" placeholder="Precio" class="w-full p-2 border border-gray-300 rounded">
                        <select name="categoria" class="w-full p-2 border border-gray-300 rounded">
                            <option value="primero">Primero</option>
                            <option value="segundo">Segundo</option>
                            <option value="postre">Postre</option>
                        </select>
                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Añadir Plato</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
