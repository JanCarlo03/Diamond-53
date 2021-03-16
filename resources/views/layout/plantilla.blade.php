<!DOCTYPE html>
<html lang="es">
<header>
    <title>Diamond</title>
    <meta charset="UTF-8">
    <meta name="title" content="Laravel.DSM">
    <meta name="description" content="Descripción de la WEB">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <style>.demo-animate-all:not(.gallery), .demo-animate-all:not(.gallery) *, .demo-animate-all:not(.gallery) *:before, .demo-animate-all:not(.gallery) *:after { transition: all 0.5s ease-in-out; }.demo-controls .property .classes { display: none; }.demo-controls .property[data-requires] { display: none; }.demo-controls .property[data-requires].active { display: inline; }.demo-controls .property .tooltip { position: relative; }.demo-controls .property .tooltip:before { content: 'Click to change!'; font-size: 0.7rem; position: absolute; bottom: 100%; left: 0; background: #47D3E5; color: #ffffff; line-height: 1; white-space: nowrap; font-weight: bold; border-radius: 0.125rem; padding: 0.325rem 0.425rem; animation: demo-controls-tooltip 1.5s forwards; animation-delay: 1s; opacity: 0; }.demo-controls .property .tooltip:after { content: ''; position: absolute; bottom: calc(100% - 0.25rem); left: 0.5rem; border-left: solid 0.5rem transparent; border-right: solid 0.5rem transparent; border-top: solid 0.5rem #47D3E5; width: 0.5rem; height: 0.5rem; animation: demo-controls-tooltip 1.5s forwards; animation-delay: 1s; opacity: 0; }@keyframes demo-controls-tooltip {0% { opacity: 0; transform: translateY(0); }10% { opacity: 1; transform: translateY(0.125rem); }20% { opacity: 1; transform: translateY(-0.125rem); }30% { opacity: 1; transform: translateY(0.125rem); }40% { opacity: 1; transform: translateY(-0.125rem); }50% { opacity: 1; transform: translateY(0.125rem); }60% { opacity: 1; transform: translateY(0); }90% { opacity: 1; }100% { opacity: 0; }}</style>
</header>
<body>

        <div class="contenedor">

        @yield('cabecera')
      
        </div>

                      <div class = "infoGeneral">

                      @yield('infoGeneral')

                      </div>
    
                                    <div class = "pie">

                                    @yield('pie')

                                    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demo.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/mdb.min.js"></script>

</body>
</html>