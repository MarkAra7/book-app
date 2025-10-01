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
        <a 
        <br>
        @endforeach


    </ul>












</body>






</html>