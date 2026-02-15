<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$content}}</h1>
    <form action="/middleware" Method="post">
        `@csrf
        <input type="text"name="content">
        <input type="submit">
    </form>
</body>
</html>