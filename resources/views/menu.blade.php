<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');
        .chalkboard {
            font-family: 'Indie Flower', cursive;
            background-color: #2D2A2B;
            color: #FFFFFF;
            padding: 20px;
            border: 10px solid #8B4513;
            width: 400px;
            margin: 0 auto;
        }
        .chalkboard .highlight {
            color: #FFCCCC;
        }
        .chalkboard .price {
            font-size: 3rem;
            color: #FFFFCC;
        }
        .chalkboard .subtext {
            color: #CCFFFF;
        }
        .chalkboard .section {
            margin-bottom: 20px;
        }
    </style>
</head>
<body class=" bg-orange-400 text-gray-800 ">
    <!-- Navigation -->
    @include('components.header')

    <!-- Menu Board -->
    <div class="chalkboard mt-4 mb-4">
        <h1 class="text-4xl">MENÚ DEL DÍA</h1>

        <div class="section">
        <ul>
                @foreach ($menus->where('categoria', 'primero') as $menu)
                <li>{{ $menu->nombre }}</li>
                @endforeach
            </ul>
            <div class="border-b-2 border-blue-500 my-2"></div>
            <ul>
                @foreach ($menus->where('categoria', 'segundo') as $menu)
                    <li>{{ $menu->nombre }}</li>
                @endforeach
            </ul>
            <div class="border-b-2 border-blue-500 my-2"></div>
            <ul>
                @foreach ($menus->where('categoria', 'postre') as $menu)
                <li>{{ $menu->nombre }}</li>
                @endforeach
            </ul>
        </div>
        <div class="section">
           
                <h2 class="price">15€</h2>
                <p class="subtext">IVA INCLUIDO</p>
         
        </div>
        <p class="highlight">PAN Y UNA BEBIDA</p>
    </div>
    <!-- Footer -->
    @include('components.footer')
</body>
</html>   
