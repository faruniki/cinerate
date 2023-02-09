<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINERATE&#169; | Register</title>
</head>
<body>
    <form action="{{route('storeRegister')}}" method="post">
        @csrf
        <label for="username">Your Username</label>
        <input type="text" name="name">
        <label for="email">Your Email</label>
        <input type="email" name="email">
        <label for="password">Your Password</label>
        <input type="password" name="password">
        <button type="submit">Register</button>
    </form>
</body>
</html>