<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Task</h1>
    <form action="/tasks/create" method="post">
        @csrf
        <input type="text" name="title">
        <input type="text" name="description">
        <button type="submit">Submit</button>
    </form>
</body>
</html>