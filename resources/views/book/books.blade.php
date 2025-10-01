<!DOCTYPE html>

<html>

<head>


</head>

<body>

    <h2>Add Books</h2>
    <form action="book/add" method="post">
            @csrf
        <label for="title">Book title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="author">Books Author:</label><br>
        <input type="text" id="author" name="author"><br>
        <input type="submit" value="Submit">




    </form>

</body>

</html>