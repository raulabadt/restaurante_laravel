<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Menu Management</title>
    
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-4">Menu Management</h1>

        <!-- Precio general editable -->
        <div class="mb-4">
            <label class="block text-gray-700">Precio General</label>
            <input type="number" id="generalPrice" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Establecer precio general">
            <button onclick="setGeneralPrice()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2">Guardar Precio General</button>
        </div>

        <!-- Formulario para añadir/editar menús -->
        <form id="menuForm" class="mb-4">
            <input type="hidden" id="menuId">
            <div class="mb-4">
                <label class="block text-gray-700">Nombre</label>
                <input type="text" id="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Categoría</label>
                <select id="categoria" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="primero">Primero</option>
                    <option value="segundo">Segundo</option>
                    <option value="postre">Postre</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Guardar</button>
        </form>

        <!-- Lista de menús -->
        <div id="menuList" class="bg-white shadow-md rounded p-4">
            <!-- Aquí se insertarán los menús -->
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetchMenus();
            loadGeneralPrice();

            document.getElementById('menuForm').addEventListener('submit', function(event) {
                event.preventDefault();
                saveMenu();
            });
        });

        function fetchMenus() {
            fetch('/api/menus')
                .then(response => response.json())
                .then(data => {
                    const menuList = document.getElementById('menuList');
                    menuList.innerHTML = '';
                    data.forEach(menu => {
                        const menuItem = document.createElement('div');
                        menuItem.classList.add('mb-4', 'p-4', 'border', 'rounded', 'flex', 'justify-between', 'items-center');
                        menuItem.innerHTML = `
                            <div>
                                <h3 class="text-lg font-bold">${menu.nombre}</h3>
                                <p>${menu.categoria}</p>
                            </div>
                            <div>
                                <button onclick="editMenu(${menu.id})" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mr-2">Editar</button>
                                <button onclick="deleteMenu(${menu.id})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                            </div>
                        `;
                        menuList.appendChild(menuItem);
                    });
                });
        }

        function saveMenu() {
            const menuId = document.getElementById('menuId').value;
            const nombre = document.getElementById('nombre').value;
            const categoria = document.getElementById('categoria').value;

            const method = menuId ? 'PUT' : 'POST';
            const url = menuId ? `/api/menus/${menuId}` : '/api/menus';

            fetch(url, {
                method: method,
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({ nombre, categoria }),
            })
            .then(response => response.json())
            .then(data => {
                fetchMenus();
                document.getElementById('menuForm').reset();
                document.getElementById('menuId').value = '';
            });
        }

        function editMenu(id) {
            fetch(`/api/menus/${id}`)
                .then(response => response.json())
                .then(menu => {
                    document.getElementById('menuId').value = menu.id;
                    document.getElementById('nombre').value = menu.nombre;
                    document.getElementById('categoria').value = menu.categoria;
                });
        }

        function deleteMenu(id) {
            fetch(`/api/menus/${id}`, {
                method: 'DELETE',
                headers: {
                    'Accept': 'application/json',
                },
            })
            .then(() => fetchMenus());
        }

        function setGeneralPrice() {
            const generalPrice = document.getElementById('generalPrice').value;
            fetch('/api/menus/general_price', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({ generalPrice }),
            })
            .then(response => response.json())
            .then(data => {
                loadGeneralPrice();
            });
        }

        function loadGeneralPrice() {
            fetch('/api/menus/general_price')
                .then(response => response.json())
                .then(data => {
                    if (data.generalPrice !== null) {
                        document.getElementById('generalPrice').value = data.generalPrice;
                    }
                });
        }
    </script>
</body>
</html>
