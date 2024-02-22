<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
            @foreach ($users as $user)
        <li>{{ $user->username }}</li>
        <li>{{ $user->email }}</li>
        @endforeach
    </div>
</body>

</html>