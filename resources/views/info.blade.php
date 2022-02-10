<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <header>
    <ul>
      <li><a href="{{route('info')}}">Info</a></li>
    </ul>
  </header>
  <h3>Info:</h3>
  @if(isset($info))
  <ul>
    @foreach($info as $element)
    <li>{{ $element }}</li>
    @endforeach
  </ul>
  @endif
</body>
</html>