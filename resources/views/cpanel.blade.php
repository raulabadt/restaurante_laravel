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
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <input type="text" id="search-nombre" placeholder="Buscar por Nombre" class="w-full border-gray-300 rounded-md px-4 py-2">
                <input type="text" id="search-mail" placeholder="Buscar por Mail" class="w-full border-gray-300 rounded-md px-4 py-2">
                <input type="text" id="search-telf" placeholder="Buscar por Teléfono" class="w-full border-gray-300 rounded-md px-4 py-2">
                <input type="text" id="search-num-adultos" placeholder="Buscar por número de adultos" class="w-full border-gray-300 rounded-md px-4 py-2">
                <input type="text" id="search-num-ninos" placeholder="Buscar por número de niños" class="w-full border-gray-300 rounded-md px-4 py-2">
                <input type="text" id="search-trona" placeholder="Buscar por número de tronas" class="w-full border-gray-300 rounded-md px-4 py-2">
                <input type="text" id="search-fecha" placeholder="Buscar por fecha" class="w-full border-gray-300 rounded-md px-4 py-2">
                <input type="text" id="search-hora" placeholder="Buscar por hora" class="w-full border-gray-300 rounded-md px-4 py-2">
                <input type="text" id="search-alergias" placeholder="Buscar por alergias" class="w-full border-gray-300 rounded-md px-4 py-2">
                <input type="text" id="search-estado" placeholder="Buscar por estado de reserva" class="w-full border-gray-300 rounded-md px-4 py-2">
                <input type="text" id="search-codigo" placeholder="Buscar por Código de cancelación" class="w-full border-gray-300 rounded-md px-4 py-2">
            </div>
            <!-- Tabla de datos -->
            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                <table class="min-w-full border-collapse">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Nombre</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Mail</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Teléfono</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Nº Adultos</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Nº Niños</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Trona</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Fecha</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Hora</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Alergias</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Estado</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Cod Cancelación</th>
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
                            <td class="border border-gray-300 px-4 py-2">{{ $reserva->hora }}</td>
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
        function formatDate(dateString) {
            const options = { year: 'numeric', month: '2-digit', day: '2-digit' };
            return new Date(dateString).toLocaleDateString(undefined, options);
        }

        async function searchReservas() {
            const nombre = document.getElementById('search-nombre').value;
            const mail = document.getElementById('search-mail').value;
            const telf = document.getElementById('search-telf').value;
            const num_adultos = document.getElementById('search-num-adultos').value;
            const num_niños = document.getElementById('search-num-ninos').value;
            const trona = document.getElementById('search-trona').value;
            const fecha = document.getElementById('search-fecha').value;
            const hora = document.getElementById('search-hora').value;
            const alergias = document.getElementById('search-alergias').value;
            const estado = document.getElementById('search-estado').value;
            const codigo = document.getElementById('search-codigo').value;

            const response = await axios.get('/search', {
                params: {
                    nombre: nombre,
                    mail: mail,
                    telf: telf,
                    num_adultos: num_adultos,
                    num_niños: num_niños,
                    trona: trona,
                    fecha: fecha,
                    hora: hora,
                    alergias: alergias,
                    estado: estado,
                    codigo: codigo
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
                    <td class="border border-gray-300 px-4 py-2">${formatDate(reserva.fecha)}</td>
                    <td class="border border-gray-300 px-4 py-2">${reserva.hora}</td>
                    <td class="border border-gray-300 px-4 py-2">${reserva.alergias}</td>
                    <td class="border border-gray-300 px-4 py-2">${reserva.estado}</td>
                    <td class="border border-gray-300 px-4 py-2">${reserva.codigo}</td>
                </tr>`;
                tableBody.innerHTML += row;
            });
        }

        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('input', searchReservas);
        });
    </script>
</body>

</html>
