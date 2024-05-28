<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    @include('components.dashboard')

    <!-- Content -->
    <main class="flex-1 p-10">

        <!-- CPanel -->
        <div class="container mx-auto">
            <h2 class="text-2xl font-semibold mb-4">CPanel</h2>
            <!-- Buscador -->
            <input type="text" id="search" placeholder="Buscar..." class="w-full border-gray-300 rounded-md px-4 py-2 mb-4" oninput="searchReservas()">
            <!-- Tabla de datos -->
            <div class="overflow-x-auto min-w-full">
                <table class="min-w-full border-collapse border border-gray-300">
                    <thead class="bg-gray-200">
                        <tr class="text-xs md:text-base">
                            <th class="border border-gray-300 px-2 py-1 md:px-4 md:py-2">ID</th>
                            <th class="border border-gray-300 px-2 py-1 md:px-4 md:py-2">Nombre</th>
                            <th class="border border-gray-300 px-2 py-1 md:px-4 md:py-2">Mail</th>
                            <th class="border border-gray-300 px-2 py-1 md:px-4 md:py-2">Telefono</th>
                            <th class="border border-gray-300 px-2 py-1 md:px-4 md:py-2">Nº Adultos</th>
                            <th class="border border-gray-300 px-2 py-1 md:px-4 md:py-2">Nº Niños</th>
                            <th class="border border-gray-300 px-2 py-1 md:px-4 md:py-2">Trona</th>
                            <th class="border border-gray-300 px-2 py-1 md:px-4 md:py-2">Fecha</th>
                            <th class="border border-gray-300 px-2 py-1 md:px-4 md:py-2">Hora</th>
                            <th class="border border-gray-300 px-2 py-1 md:px-4 md:py-2">Alergias</th>
                            <th class="border border-gray-300 px-2 py-1 md:px-4 md:py-2">Estado</th>
                            <th class="border border-gray-300 px-2 py-1 md:px-4 md:py-2">Cod Cancelacion</th>
                        </tr>
                    </thead>

                    <tbody id="table-body">
                        @foreach ($reservas as $reserva)
                       
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $reserva->id }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $reserva->nombre }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $reserva->mail }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $reserva->telf }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $reserva->num_adultos }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $reserva->num_niños }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $reserva->trona }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $reserva->fecha->format('Y-m-d') }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $reserva->hora->format('H:i')}}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $reserva->alergias }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $reserva->estado }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $reserva->codigo }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script>
        async function searchReservas() {
            const query = document.getElementById('search').value;
            const response = await axios.get('/search', {
                params: {
                    query: query
                }
            });

            const reservas = response.data;
            const tableBody = document.getElementById('table-body');
            tableBody.innerHTML = '';

            reservas.forEach(reserva => {
                const row = `<tr>
                    <td class="border border-gray-300 px-4 py-2">${reserva.id}</td>
                    <td class="border border-gray-300 px-4 py-2">${reserva.nombre}</td>
                    <td class="border border-gray-300 px-4 py-2">${reserva.mail}</td>
                    <td class="border border-gray-300 px-4 py-2">${reserva.telf}</td>
                    <td class="border border-gray-300 px-4 py-2">${reserva.num_adultos}</td>
                    <td class="border border-gray-300 px-4 py-2">${reserva.num_niños}</td>
                    <td class="border border-gray-300 px-4 py-2">${reserva.trona}</td>
                    <td class="border border-gray-300 px-4 py-2">${reserva.fecha}</td>
                    <td class="border border-gray-300 px-4 py-2">${reserva.hora}</td>
                    <td class="border border-gray-300 px-4 py-2">${reserva.alergias}</td>
                    <td class="border border-gray-300 px-4 py-2">${reserva.estado}</td>
                    <td class="border border-gray-300 px-4 py-2">${reserva.codigo}</td>
                </tr>`;
                tableBody.innerHTML += row;
            });
        }
    </script>
</body>

</html>
