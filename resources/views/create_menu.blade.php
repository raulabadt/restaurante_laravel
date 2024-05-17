<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Menú</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
        .menu-items {
            display: flex;
            flex-direction: column;
            width: 300px;
        }
        .menu-item {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 5px;
            background-color: #f9f9f9;
            cursor: grab;
        }
        .menu-item.dragging {
            opacity: 0.5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Restaurant Menu Builder</h1>
        <div id="menu-builder">
            <div class="menu-items" id="menu-items">
                <!-- Los elementos del menú se cargarán aquí -->
            </div>
            <button id="save-menu">Guardar Menú</button>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let draggedItem = null;

            fetch('/api/menus')
                .then(response => response.json())
                .then(data => {
                    const menuItemsContainer = document.getElementById('menu-items');
                    data.forEach(item => {
                        const menuItem = document.createElement('div');
                        menuItem.classList.add('menu-item');
                        menuItem.setAttribute('data-id', item.id);
                        menuItem.innerHTML = `
                            <h2>${item.name}</h2>
                            <p>${item.description}</p>
                            <p>${item.price}</p>
                            <p>${item.category}</p>
                        `;
                        menuItemsContainer.appendChild(menuItem);
                        addDragAndDropEvents(menuItem);
                    });
                });

            function addDragAndDropEvents(menuItem) {
                menuItem.addEventListener('dragstart', function () {
                    draggedItem = menuItem;
                    setTimeout(function () {
                        menuItem.classList.add('dragging');
                    }, 0);
                });

                menuItem.addEventListener('dragend', function () {
                    setTimeout(function () {
                        draggedItem = null;
                        menuItem.classList.remove('dragging');
                    }, 0);
                });

                menuItem.addEventListener('dragover', function (e) {
                    e.preventDefault();
                });

                menuItem.addEventListener('drop', function (e) {
                    e.preventDefault();
                    if (draggedItem) {
                        this.parentNode.insertBefore(draggedItem, this.nextSibling);
                    }
                });
            }

            document.getElementById('save-menu').addEventListener('click', function () {
                const menuItems = document.querySelectorAll('.menu-item');
                const orderedItems = Array.from(menuItems).map(item => item.getAttribute('data-id'));
                fetch('/api/menus', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ order: orderedItems }),
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Menú guardado:', data);
                })
                .catch(error => {
                    console.error('Error al guardar el menú:', error);
                });
            });
        });
    </script>
</body>
</html>
