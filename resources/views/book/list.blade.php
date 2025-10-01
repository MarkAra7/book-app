<!DOCTYPE html>

<html>

<head>


</head>

<body>

    <h2>List of books</h2>
    <ul>
        @foreach ($books as $book)
        <br>
        <li>Title: {{$book->title}}</li>
        <li>Author: {{$book->author}}</li>
        <br>

        <a href="{{ url('/book/' . $book->id) }}">Vairāk informācijas</a>
        <br><br><br>
        @endforeach


    </ul>


    <a href="/book">Pievienot Grāmatu</a>












</body>






</html>