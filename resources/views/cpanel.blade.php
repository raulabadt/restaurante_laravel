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

                    @foreach ($datos as $dato)
                        <td class="border border-gray-300 px-4 py-2">{{ $dato->id }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $dato->nombre }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $dato->mail }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $dato->telf }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $dato->num_adultos }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $dato->num_niños }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $dato->trona }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $dato->fecha }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $dato->hora }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $dato->alergias }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $dato->estado }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $dato->codigo }}</td>

                    @endforeach
                    <tbody id="table-body">
                        <!-- Aquí se agregarán las filas de la tabla dinámicamente desde JavaScript -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- <script>
        // Datos de ejemplo para la tabla
        const data = [
            { id: 1, nombre: "Producto 1", mail: "raulabadtorralba@gmail.com" },
            { id: 2, nombre: "Producto 2", mail: "dani@gmail.com" },
            { id: 3, nombre: "Producto 3", mail: "carlos@gmail.com" }
            
            // Puedes agregar más datos según tu base de datos
        ];

        // Función para renderizar las filas de la tabla
        function renderTable() {
            const tableBody = document.getElementById('table-body');
            tableBody.innerHTML = '';
            data.forEach(item => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td class="border border-gray-300 px-4 py-2">${item.id}</td>
                    <td class="border border-gray-300 px-4 py-2">${item.nombre}</td>
                    <td class="border border-gray-300 px-4 py-2">${item.mail}</td>
                    <td class="border border-gray-300 px-4 py-2">${item.telefono}</td>
                    <td class="border border-gray-300 px-4 py-2">${item.adultos}</td>
                    <td class="border border-gray-300 px-4 py-2">${item.niños}</td>
                    <td class="border border-gray-300 px-4 py-2">${item.trona}</td>
                    <td class="border border-gray-300 px-4 py-2">${item.fecha}</td>
                    <td class="border border-gray-300 px-4 py-2">${item.hora}</td>
                    <td class="border border-gray-300 px-4 py-2">${item.alergias}</td>
                    <td class="border border-gray-300 px-4 py-2">${item.estado}</td>
                    <td class="border border-gray-300 px-4 py-2">${item.codCancel}</td>
                `;
                tableBody.appendChild(row);
            });
        }

        // Llamada inicial para renderizar la tabla
        renderTable();

        // Función para filtrar datos según el texto ingresado en el buscador
        document.getElementById('search').addEventListener('input', function(e) {
            const searchText = e.target.value.toLowerCase();
            const filteredData = data.filter(item => {
                return item.nombre.toLowerCase().includes(searchText) || item.descripcion.toLowerCase().includes(searchText);
            });
            renderTable(filteredData);
        });
    </script> -->

</body>

</html>