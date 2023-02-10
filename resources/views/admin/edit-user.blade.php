<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form action="{{route('updateUser', $user->id)}}" method="post">
        @csrf
        <label for="name">Username</label>
        <input type="text" id="name" name="name" placeholder="{{$user->name}}" autofocus required>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="{{$user->email}}" required>
        <input type="submit" value="Submit">
    </form>
    </div>
</body>
</html>