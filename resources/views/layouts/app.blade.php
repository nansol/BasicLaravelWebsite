<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}"/>

    <title>Basic Laravel Website</title>
</head>
<body>
    @include('include.navbar')

    <div class="container">
        @if(Request::is('/'))
            @include('include.showcase')
        @endif
        <div class="row">
            <div class="col-md-8 col-lg-8">
                @yield('content')
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4">
                @include('include.sidebar')
            </div>
        </div>
    </div>

    <footer id="footer" class="text-center">
        <p>Copyright 2019 &copy; NanSol</p>
    </footer>

</body>
</html>
