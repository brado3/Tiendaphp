<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('materialize/css/materialize.css') }}"/>
</head>
<body>
<nav class=" deep-purple darken-2" >
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html" class="deep-purple lighten-3">Sass</a></li>
        <li><a href="badges.html" class="deep-purple lighten-3">Components</a></li>
        <li><a href="collapsible.html" class="deep-purple lighten-3">JavaScript</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
      @yield('contenido')
  </div>
  <script src="{{ asset('materialize/js/materialize.js') }}">

  </script>
    
</body>
</html>