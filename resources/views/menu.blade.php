<!DOCTYPE html>
<html>
<head>
    <title>Menú del Día</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .menu-board {
            background-color: #f3f4f6; /* Light gray background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            max-width: 800px;
            margin: auto;
        }
        .menu-board h1 {
            color: #d97706; /* Amber */
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .menu-board h2 {
            color: #9b2c2c; /* Red */
            font-size: 1.75rem;
            margin-top: 20px;
        }
        .menu-board p {
            font-size: 1.25rem;
            line-height: 1.5;
            margin-top: 10px;
        }
        .menu-board .price {
            text-align: center;
            font-size: 2.5rem;
            color: #2d3748; /* Gray */
            margin-top: 20px;
        }
        .menu-board .note {
            text-align: center;
            font-size: 1.25rem;
            color: #4a5568; /* Gray */
            margin-top: 10px;
        }
    </style>
</head>
<body class="bg-orange-400 text-gray-800">
@include('components.header')
<main class="flex-1 p-10">
    <div class="menu-board bg-white">
        <h1>Menú del Día</h1>
        <div class="mt-10">
            <h2>Primeros</h2>
            <p>
                @foreach ($menus->where('categoria', 'primero') as $menu)
                    - {{ $menu->nombre }}<br>
                @endforeach
            </p>
        </div>
        <div class="mt-10">
            <h2>Segundos</h2>
            <p>
                @foreach ($menus->where('categoria', 'segundo') as $menu)
                    - {{ $menu->nombre }}<br>
                @endforeach
            </p>
        </div>
        <div class="mt-10">
            <h2>Postres</h2>
            <p>
                @foreach ($menus->where('categoria', 'postre') as $menu)
                    - {{ $menu->nombre }}<br>
                @endforeach
            </p>
        </div>
        <div class="note mt-10">
            <p>***** Se incluyen bebidas como vino, cerveza, refrescos, café, agua y pan *****</p>
        </div>
        <div class="price">
            11,35 €
        </div>
        <div class="note mt-2">
            <p>IVA INCLUIDO</p>
        </div>
    </div>
</main>
</body>
</html>
