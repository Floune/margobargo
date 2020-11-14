<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>YogaBanana</title>

        <!-- js -->
        <script src="{{ mix('/js/app.js') }}"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body class="antialiased">
       <h1>yogabananamargoyeahyeah</h1>
       <p>mais</p>
       <div class="rotating">
       <img src="{{asset('images/bah.jpg')}}" alt="">
       </div>
    </body>
</html>
