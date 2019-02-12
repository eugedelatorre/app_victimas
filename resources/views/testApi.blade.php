<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      @foreach ($arrayParaLaVista as $dato)
        <li>
          <h2>{{ $dato[0] }}</h2>
          <strong>{{ $dato[1] }}</strong>
          <strong>{{ $dato[2] }}</strong>
        </li>
      @endforeach
    </ul>
  </body>
</html>
