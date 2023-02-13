<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINERATE&#169; | Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="https://kit.fontawesome.com/96dcb92c2c.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="kiri">
            <p class="back"><a href="javascript:history.back()"><i class="fa-solid fa-chevron-left"></i> Back</a></p>
            <center>
            <p class="title-movie">Whiplash (2014)</p>
        </center>
        </div>
        <div class="kanan">
            <center>
                <p class="title">CINERATE&#169;</p>
                    <form action="{{route('storeLogin')}}" class="formcoi" method="post">
                        @csrf
                        <label for="email">Your Email</label><br>
                        <input type="email" name="email" placeholder="Email Address" autofocus><br><br>
                        <label for="password">Your Password</label><br>
                        <input type="password" name="password" placeholder="Password"><br>
                        <button type="submit">LOGIN</button>
                    </form>
                    <p class="already">Don't have an account? <a href="/register">Register</a></p>
            </center>
        </div>
    </div>

</body>
</html>