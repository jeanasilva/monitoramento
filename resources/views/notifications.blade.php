<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-mail Usuário</title>
</head>
<body>

    <h1>{{ $user->name }}</h1>

    @foreach ($user->notifications as $notification)

        <pre>

            {{$notification}}

        </pre>

    @endforeach

</body>
</html>
