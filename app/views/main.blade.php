<!doctype html>
<html>
<head> 
  <meta charset="utf-8">
  <title>FB With Angular</title>
  @section('css')
  <link rel="stylesheet" href="css/bootstrap.css">
  @stop
  @yield('css-section')
</head>
<body>
  
  @yield('content')
  
  @section('js')
    <script src="http://connect.facebook.net/en_US/all.js"></script>
  @stop
  @yield('jssection')
</body>
</html>
