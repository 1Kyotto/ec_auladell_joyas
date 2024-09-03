<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')

    </head>
    <body class="grid grid-cols-12 h-screen text-center">
        <div class="col-span-2 bg-blue-600">
            SIDEBAR
        </div>
        <div class="col-span-10 grid grid-cols-4 grid-rows-12 bg-orange-600">
            <div class="NAVBAR col-span-4 bg-lime-800 row-span-2">
                NAVBAR
                <div class="nav-1">
                    LOGO
                </div>
                <div class="nav-2">
                    MENU
                </div>
            </div>
            @yield('contenido')
        </div>
    </body>
</html>