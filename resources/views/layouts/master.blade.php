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
            <a class="navbar-brand" href="#">Ally-Eats</a>
          </div>
          <div>
            <ul class="nav navbar-nav">
              @if(Auth::check())
              <li><a href='/'>Home</a></li>
              <li><a href='/recipes/create'>Add a Recipe</a></li>
              <li><a href='/recipes/show'>All Recipes</a></li>
              <li><a href='/'>My Recipes</a></li>
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
        <br>
        <br>
        &copy; {{ date('Y') }} Ryan Kucinski
      </footer>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </body>
</html>
