<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
    </head>
    <body>
      <div class="container">
          @yield('content')
      </div>

      @yield('footer')
    </body>
</html>
