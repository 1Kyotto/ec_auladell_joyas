<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')

    </head>
    <body class="grid grid-cols-6 text-center">
        <div class="nav col-span-6 bg-teal-500 grid grid-rows-2">
            <div class="nav-1 row-span-1 pt-4">
                <div class="grid grid-cols-3 gap-3">
                    <div>01</div>
                    <div>02</div>
                    <div>
                        @auth
                            <a href="{{ route('usuarios.logout') }}">Cerrar Sesión</a>
                        @else
                            <a href="{{ route('usuarios.index') }}">Iniciar Sesión</a>
                        @endauth
                    </div>
                </div>
            </div>
            <hr class="w-screen border-t-2 border-black my-1">
            <div class="nav-2 row-span-1 pb-4">
                <div class="grid grid-cols-6 gap-3">
                    <div>04</div>
                    <div>05</div>
                    <div>06</div>
                    <div>07</div>
                    <div>08</div>
                    <div>09</div>
                </div>
            </div>
        </div>

        <div class="main col-span-6 grid grid-cols-6">
            <div class="col-span-2 bg-orange-700">
                @yield('contenido-filtros')
            </div>
            <div class="col-span-4 bg-amber-500">
                @yield('contenido-joyas')
            </div>
        </div>


        <footer class="col-span-6 bg-cyan-600 grid grid-cols-3">
            <div class="col-span-1 text-center">
              Redes sociales
            </div>
            <div class="col-span-1 text-center">
              Informacion
            </div>
            <div class="col-span-1 text-center">
              Servicio al cliente
            </div>
      </footer>
    </body>
</html>