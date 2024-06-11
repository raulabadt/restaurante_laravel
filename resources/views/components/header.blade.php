<header class="flex items-center justify-between px-4 py-4 bg-gray-800 flex-wrap">
  <a href="{{ route('homepage') }}" class="flex items-center">
  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chef-hat" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M12 3c1.918 0 3.52 1.35 3.91 3.151a4 4 0 0 1 2.09 7.723l0 7.126h-12v-7.126a4 4 0 1 1 2.092 -7.723a4 4 0 0 1 3.908 -3.151z" />
  <path d="M6.161 17.009l11.839 -.009" />
</svg>

    <span class="text-white ml-1 text-base md:text-lg">MI RESTAURANTE</span>
  </a>
  <nav class="flex items-center space-x-4">
    <a class="text-white hover:text-gray-300 text-base md:text-lg" href="{{ route('about') }}">Nosotros</a>
    <a class="text-white hover:text-gray-300 text-base md:text-lg" href="{{ route('take_away') }}">Para Llevar</a>
    <a class="text-white hover:text-gray-300 text-base md:text-lg" href="{{ route('menus.publicados') }}">Menu</a>
    <a class="text-white hover:text-gray-300 text-base md:text-lg" href="{{ route('reserve') }}">Reservas</a>
    <a class="text-white hover:text-gray-300 text-base md:text-lg" href="{{ route('contact') }}">Contacto</a>
  </nav>
</header>
