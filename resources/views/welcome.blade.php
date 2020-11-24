<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@500&display=swap" rel="stylesheet">
        <title>YogaBanana</title>

        <!-- js -->
        <script src="{{ mix('/js/app.js') }}"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <div class="container">

           @include("partials.menu")

            @include("partials.content")

            <div class="footer">
                <ul>
                    <li>insta</li>
                    <li>fb</li>
                    <li>twitter</li>
                </ul>
            </div>

        </div>


    </body>
</html>
