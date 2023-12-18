<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Document</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
<!-- Contiene il contenuto principale della pagina. All'interno di questo div, includo header, contenuto specifico di ogni pagina (@yield("content")), e il footer. -->
   <div>
    <!-- Area dinamica dove viene inserito il contenuto specifico di ogni pagina. Questo layout può essere a sua volta esteso da altre viste, fornendo il proprio contenuto tramite la sezione @section("content"). -->
     @yield("content")
   </div>

</body>

</html>