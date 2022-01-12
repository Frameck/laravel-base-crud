<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics</title>
</head>
<body>
    <ul>
        <li>
            @foreach($comics as $comic)
                {{ $comic }}
            @endforeach
        </li>
    </ul>
</body>
</html>