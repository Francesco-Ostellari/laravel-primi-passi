<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Home</h1>
  <h2>Nome: {{ $name }}</h2>
  <h2>Cognome: {{ $lastname }}</h2>
  <h3>Sports:</h3>
  @if(isset($sports))
  <ul>
    @foreach ($sports as $sport)
      <li>{{ $sport }}</li>
    @endforeach
  </ul>
  @endif
</body>
</html>