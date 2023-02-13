

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINERATE&#169; | Login</title>
    <link rel="stylesheet" href="assets/css/register.css">
    <script src="https://kit.fontawesome.com/96dcb92c2c.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="kanan">
            <center>
                <p class="title joko">CINERATE&#169;</p>
                    <form action="{{route('storeRegister')}}" class="formcoi" method="post">
                        @csrf
                        <label for="username">Your Username</label><br>
                        <input type="text" name="name" placeholder="Username" autofocus><br><br>
                        <label for="email">Your Email</label><br>
                        <input type="email" name="email" placeholder="Email Address"><br><br>
                        <label for="password">Your Password</label><br>
                        <input type="password" name="password" placeholder="Password"><br>
                        <button type="submit">REGISTER</button>
                    </form>
                    <p class="already">Already have an account? <a href="/login">Login</a></p>
            </center>
        </div>
        <div class="kiri">
            <p class="back"><a href="javascript:history.back()"><i class="fa-solid fa-chevron-left"></i> Back</a></p>
        <center>
            <p class="title-movie">Fight Club (1999)</p>
        </center>
        </div>
    </div>

</body>
</html>