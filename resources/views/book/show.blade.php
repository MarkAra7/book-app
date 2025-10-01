<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$book->title}}</title>
</head>

<body>
    <h2>{{$book->title}}</h2>
    <p>{{$book->author}}</p>

    <a href="{{ url('/book/delete/' . $book->id) }}">Dzēst Šo Grāmatu</a><br><br>

    <a href="/book">Pievienot Jaunu Grāmatu</a><br><br>
    <a href="/book/list">Atpakaļ Pie Gramatu Saraksta</a>

</body>

</html>