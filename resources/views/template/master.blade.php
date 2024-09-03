<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')

    </head>
    <body class="grid grid-cols-6 h-screen text-center">
      <div class="nav col-span-6 bg-teal-500 grid grid-rows-2">
			    <div class="nav-1 row-span-1 pt-4">
                <div class="grid grid-cols-3 gap-3">
                    <div>01</div>
                    <div>02</div>
                    <div>03</div>
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

      @yield('contenido')

      <footer class="col-span-6 bg-cyan-600">
			  FOOTER
		  </footer>
    </body>
</html>