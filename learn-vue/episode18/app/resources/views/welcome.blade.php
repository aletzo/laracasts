<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
    </head>
    <body>
        <div id="app">

            @verbatim
            <ul>
                <li v-for="skill in skills">{{skill}}</li>
            </ul>
            @endverbatim
        
        </div>

        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>

        <script src="/js/app.js"></script>
    </body>
</html>
