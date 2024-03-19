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
 
<!-- Content -->
<main class="flex-1 p-10">

    <!-- CPanel -->
    <div>
        <h2 class="text-2xl font-semibold mb-4">CPanel</h2>
        <!-- Buscador -->
        <input type="text" id="search" placeholder="Buscar..." class="w-full border-gray-300 rounded-md px-4 py-2 mb-4">
        <!-- Tabla de datos -->
        <table class="w-full border-collapse border border-gray-300">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border border-gray-300 px-4 py-2">ID</th>
                    <th class="border border-gray-300 px-4 py-2">Nombre</th>
                    <th class="border border-gray-300 px-4 py-2">Mail</th>
                    <th class="border border-gray-300 px-4 py-2">Telefono</th>
                    <th class="border border-gray-300 px-4 py-2">Nº Adultos</th>
                    <th class="border border-gray-300 px-4 py-2">Nº Niños</th>
                    <th class="border border-gray-300 px-4 py-2">Trona</th>
                    <th class="border border-gray-300 px-4 py-2">Fecha</th>
                    <th class="border border-gray-300 px-4 py-2">Hora</th>
                    <th class="border border-gray-300 px-4 py-2">Alergias</th>
                    <th class="border border-gray-300 px-4 py-2">Estado</th>
                    <th class="border border-gray-300 px-4 py-2">Cod Cancelacion</th>
                </tr>
            </thead>
            <tbody id="table-body">
                @foreach ($datos as $dato)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $dato->id }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $dato->nombre }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $dato->mail }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $dato->telefono }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $dato->num_adultos }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $dato->num_niños }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $dato->trona }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $dato->fecha->format('Y-m-d') }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $dato->hora }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $dato->alergias }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $dato->estado }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $dato->codigo }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

</body>

</html>
