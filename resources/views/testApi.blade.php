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
        <h2>{{ $dato[0] }}:{{ $dato[2] }},{{ $dato[1] }}</h2>

        </li>
      @endforeach
    </ul>
  </body>
</html>
