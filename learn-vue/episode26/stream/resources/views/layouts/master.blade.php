<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My App</title>


        <link rel="stylesheet" href="/css/app.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">

    </head>
    <body>
        <div id="app">

            @include ('partials.header')

            <section class="section">
                <div class="container">
                    <router-view></router-view>
                </div>
            </section>

        </div>

        <script src="/js/app.js"></script>
    </body>
</html>

