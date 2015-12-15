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

    <nav>

    </nav>

    <section>

      @yield('content')

    </section>

    <footer>

    </footer>
    @yield('body')
  </body>
</html>
