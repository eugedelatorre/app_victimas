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
<<<<<<< HEAD
        <h2>{{ $dato[0] }}:{{ $dato[1] }},{{ $dato[2] }}</h2>



=======
          <h2>{{ $dato[0] }}</h2>
          <strong>{{ $dato[1] }}</strong>
          <strong>{{ $dato[2] }}</strong>
>>>>>>> 72b5794bfa33317bc08a6812e37ef0e34d22931b
        </li>
      @endforeach
    </ul>
  </body>
</html>
