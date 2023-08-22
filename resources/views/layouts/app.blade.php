<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Devstagram - @yield('title-nav')</title>
      @vite('resources/css/app.css')
    </head>
    <body class="antialiased">  
      <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
          <h1 class="text-3xl font-black">
            @yield('title')
          </h1>

          <nav>
            <a class="font-bold uppercase text-gray-600 text-sm"href="#">Login</a>
            <a class="font-bold uppercase text-gray-600 text-sm"href="{{ route('register') }}">Crear Cuenta</a>
          </nav>
        </div>
      </header>

      <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3x1 mb-10">
          @yield('titulo-main')
        </h2>
        @yield('contenido-main')
      </main>

      <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
        Devstagram - Todos los derechos reservdos @php echo date('Y')@endphp
      </footer>
    </body>
</html>
