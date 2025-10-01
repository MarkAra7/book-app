<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$book->title}}</title>
</head>

<body>
    <h2>{{$book->title}}</h2>
    <p>{{$book->author}}</p><br>
    <form method="POST" action="/book/delete/{{ $book->id }}">

        @csrf

        @method('DELETE')

        <button type="submit"

            onclick="return confirm('Are you sure you want to delete this book?')"

            class="btn btn-ghost btn-xs text-error">

            Delete

        </button>

    </form>


    <a href="/book">Pievienot Jaunu Grāmatu</a><br><br>
    <a href="/book/list">Atpakaļ Pie Gramatu Saraksta</a>

</body>

</html>