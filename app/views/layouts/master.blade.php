
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>@yield('meta-title', 'registration.it')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- FontAwesome CSS -->

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css">

    <!-- Custom CSS -->

    <link rel="stylesheet" href="{{asset("assets/css/core.css")}}" type="text/css" />
    <link rel="stylesheet" href="{{asset("assets/css/responsive.css")}}" type="text/css" />

 
  </head>

  <body>

    @include('layouts.partials.nav')

    <div class="container">

      @yield('content')

    </div><!-- /.container -->

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

  </body>
</html>