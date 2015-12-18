<!doctype html>
<html>
    <head>
      <title>

      </title>
      <meta charset='utf-8'>

      <meta name='viewport' content='width=device-width, initial-scale=1'>

      {{--  bootstrap, fonts, theme --}}
      <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'>

      <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>

      <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/united/bootstrap.min.css' rel='stylesheet'>

      <link href='/CSS/p4.css' rel='stylesheet'>

      @yield('head')

    </head>
    <body>

      {{--  get flash messages --}}

      @if(\Session::has('flash_message'))
      <div class='flash_message'>
        {{ \Session::get('flash_message') }}
      </div>
      @endif

      <header>

      </header>

      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="#">Ally-Eats</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              @if(Auth::check())
              <li><a href='/'>Home</a></li>
              <li><a href='/recipes/create'>Add a Recipe</a></li>
              <li><a href='/recipes/show'>All Recipes</a></li>
              <li><a href='/recipes/myrecipes'>My Recipes</a></li>
              <li><a href='/recipes/likedbyme'>My Liked Recipes</a></li>
              <li><a href='/logout'>Log out</a></li>
              @else
              <li><a href='/'>Home</a></li>
              <li><a href='/login'>Log in</a></li>
              <li><a href='/register'>Register</a></li>
              @endif
            </ul>
          </div>
        </div>

      </nav>

      <section>

        @yield('content')

      </section>

      <footer>
        &copy; {{ date('Y') }} Ryan Kucinski
      </footer>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </body>
</html>
