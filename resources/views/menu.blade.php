<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Mi Página Web</title>
    <!-- Agrega enlaces a tus archivos de estilo CSS aquí -->
    <!-- <link rel="stylesheet" href="styles.css"> -->
    
  
</head>
<body class="bg-gray-100 bg-orange-400 text-gray-800 dark:text-gray-100">
@include('components.header')
<section class="py-16">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-3xl font-bold">Menú</h2>
                <div class="flex items-center">
                    <button class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">Para llevar</button>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-orange-100 shadow-md p-6">
                    <h3 class="text-xl font-bold mb-2">Plato 1</h3>
                    <p class="text-gray-700">Descripción del plato. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="text-gray-700 mt-2">$10.99</p>
                    <button class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded mt-2">Añadir al carro</button>
                </div>
                <div class="bg-orange-100 shadow-md p-6">
                    <h3 class="text-xl font-bold mb-2">Plato 2</h3>
                    <p class="text-gray-700">Descripción del plato. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="text-gray-700 mt-2">$12.99</p>
                    <button class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded mt-2">Añadir al carro</button>
                </div>
                <div class="bg-orange-100 shadow-md p-6">
                    <h3 class="text-xl font-bold mb-2">Plato 3</h3>
                    <p class="text-gray-700">Descripción del plato. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="text-gray-700 mt-2">$9.99</p>
                    <button class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded mt-2">Añadir al carro</button>
                </div>

                <div class="bg-orange-100 shadow-md p-6">
                    <h3 class="text-xl font-bold mb-2">Plato 4</h3>
                    <p class="text-gray-700">Descripción del plato. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="text-gray-700 mt-2">$10.99</p>
                    <button class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded mt-2">Añadir al carro</button>
                </div>
                <div class="bg-orange-100 shadow-md p-6">
                    <h3 class="text-xl font-bold mb-2">Plato 5</h3>
                    <p class="text-gray-700">Descripción del plato. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="text-gray-700 mt-2">$12.99</p>
                    <button class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded mt-2">Añadir al carro</button>
                </div>
                <div class="bg-orange-100 shadow-md p-6">
                    <h3 class="text-xl font-bold mb-2">Plato 6</h3>
                    <p class="text-gray-700">Descripción del plato. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="text-gray-700 mt-2">$9.99</p>
                    <button class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded mt-2">Añadir al carro</button>
                    
                </div>
                
            </div>
            
        </div>
    </section>

@include('components.footer')
</body>
</html>
