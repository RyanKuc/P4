<!doctype html>
<html>
  <head>
    <title>
      @yield('title', 'Ally-Eats')
    </title>
    <meta charset='utf-8'>

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    {{--  bootstrap, fonts, theme --}}
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'>

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>

    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/united/bootstrap.min.css' rel='stylesheet'>

    <link href='/CSS/p4.css' rel='stylesheet'>

  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Ally-Eats</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            @if(Auth::check())
            <ul class="nav navbar-nav">
            <li><a href='/recipes/create'>Add a Recipe</a></li>
            <li><a href='/recipes'>All Recipes</a></li>
            <li><a href='/recipes/myrecipes'>My Recipes</a></li>
            <li><a href='/recipes/likedbyme'>My Liked Recipes</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">CSCI E-15 Projects
                <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="http://P1.ryankucinski.com">P1 Live</a></li>
                  <li><a href="https://github.com/RyanKuc/P1.git">P1 Github</a></li>
                  <li class="divider"></li>
                  <li><a href="http://P2.ryankucinski.com">P2 Live</a></li>
                  <li><a href="https://github.com/RyanKuc/P2.git">P2 Github</a></li>
                  <li class="divider"></li>
                  <li><a href="http://P3.ryankucinski.com">P3 Live</a></li>
                  <li><a href="https://github.com/RyanKuc/P3.git">P3 Github</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href='/logout'>Log out</a></li>
            </ul>

              @else
              <ul class="nav navbar-nav">
              <li><a href='/login'>Log in</a></li>
              <li><a href='/register'>Register</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">CSCI E-15 Projects
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="http://P1.ryankucinski.com">P1 Live</a></li>
                    <li><a href="https://github.com/RyanKuc/P1.git">P1 Github</a></li>
                    <li class="divider"></li>
                    <li><a href="http://P2.ryankucinski.com">P2 Live</a></li>
                    <li><a href="https://github.com/RyanKuc/P2.git">P2 Github</a></li>
                    <li class="divider"></li>
                    <li><a href="http://P3.ryankucinski.com">P3 Live</a></li>
                    <li><a href="https://github.com/RyanKuc/P3.git">P3 Github</a></li>
                  </ul>
                </li>
              </ul>

            @endif

        </div>
      </div>

    </nav>
    {{--  get flash messages --}}

    @if(\Session::has('flash_message'))
    <div class='flash_message'>
      {{ \Session::get('flash_message') }}
    </div>
    @endif

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
