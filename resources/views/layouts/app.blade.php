<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Basic Laravel Website</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  </head>
  <body>
    @include('include.navbar')

    <div class="container">
      @if(Request::is('/'))
        @include('include.showcase')
      @endif
      <div class="row">
        <div class="col-md-8 col-lg-8">
          @include('include.messages')
          @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
          @include('include.sidebar')
        </div>
      </div>
    </div>

    <footer id="footer" class="text-center">
      <p>Copyright 2017 &copy; NanSol</p>
    </footer>
  </body>
</html>
