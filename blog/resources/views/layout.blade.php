<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>yep yep app</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
          rel="stylesheet"
    >
    
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>

    @include('partials.nav')

    @include ('partials.flash')

    @include ('partials.errors')

    <main role="main">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    @yield('content')
                </div>
                <div class="col-md-2">
                    @include('partials.sidebar')
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')

</body>
</html>

