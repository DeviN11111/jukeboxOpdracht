<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($songData as $value)
<a href="/song/{{$value->name}}">{{$value->name}}</a>
<br>
<a href="/song/{{$value->name}}">{{$value->duration}}</a>
<br>
<a href="/song/{{$value->name}}">{{$value->artist}}</a>
<br>
@endforeach
    
</body>
</html>