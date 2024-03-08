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
<body class="bg-orange-400 text-gray-800">
@include('components.header')

<!--
// v0 by Vercel.
// https://v0.dev/t/9boEGJ8hecW
-->


<div class="container mx-auto px-4 sm:px-6 lg:px-8">

<section class="py-12 md:py-24 lg:py-32">



  <section class="flex items-center justify-center p-8 bg-orange-400">
      
          <div class="w-full max-w-2xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
              <div class="text-center">
              <h2 class="text-3xl font-bold tracking-tighter sm:text-5xl">Menú del Día</h2>
          
                  <div class="mt-10">
                      <dl class="space-y-10">
                          <div class="relative">
                              <dt>
                                  <div class="text-red-500 font-bold">Primeros</div>
                              </dt>
                              <dd class="mt-2 text-base text-gray-900">
                                  <ul>
                                      <li>Plato del día 1</li>
                                      <li>Plato del día 2</li>
                                      <li>Plato del día 3</li>
                                      <!-- Agrega más platos del día aquí si es necesario -->
                                  </ul>
                              </dd>
                          </div>
                          <div class="relative">
                              <dt>
                                  <div class="text-red-500 font-bold">Segundos</div>
                              </dt>
                              <dd class="mt-2 text-base text-gray-900">
                                  <ul>
                                      <li>Entrada 1</li>
                                      <li>Entrada 2</li>
                                      <li>Entrada 3</li>
                                      <!-- Agrega más entradas aquí si es necesario -->
                                  </ul>
                              </dd>
                          </div>
                          <div class="relative">
                              <dt>
                                  <div class="text-red-500 font-bold">Postres</div>
                              </dt>
                              <dd class="mt-2 text-base text-gray-900">
                                  <ul>
                                      <li>Plato Principal 1</li>
                                      <li>Plato Principal 2</li>
                                      <li>Plato Principal 3</li>
                                      <!-- Agrega más platos principales aquí si es necesario -->
                                  </ul>
                              </dd>
                          </div>
                       
                          <div class="relative">
                              <dt>
                                  <div class="mt-2 text-3x1 text-gray-900">*****Se incluyen bebidas como vino, cerveza, refrescos, cafe, agua y pan*****</div>
                              </dt>

                              <dt>
                                  <div class="mt-2 text-3x1 font-bold  text-gray-900">PRECIO 15,85</div>
                              </dt>
                              
                          </div>
                        
                      </dl>
                  </div>
              </div>
          </div>

  </section>
  </section>
</div>    
  
  @include('components.footer')

</body>
</html>
