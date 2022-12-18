<!DOCTYPE html>
<html lang="en">
<head>
  <title>TaskNeManager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">TaskNeManager</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ route('pocetna') }}">Početna</a></li>
        <li><a href="{{ route('novi-zadatak') }}">Novi zadatak</a></li>
        <li><a href="{{ route('zavrseni-zadaci') }}">Završeni zadaci</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
      @yield('main')
  </div>

</body>
</html> 