<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($genreData as $value)
<a href="/songs/{{$value->name}}">{{$value->name}}</a>
<br>
@endforeach
</body>
</html>