<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Oswald:wght@300;400;500&family=Playfair+Display:wght@400;500&family=Poppins:wght@200;300;400;500;600;700&display=swap');

    body, html {
            height: 100%;
            font-family: 'Montserrat', sans-serif;
            background: rgb(23,23,23);
            background: linear-gradient(350deg, rgb(10, 10, 10) 0%, rgb(29, 29, 29) 100%);    margin: 0;
        }

    label {
        color: #FFF;
        font-size: 14px;
        font-weight: 500;
    }

    input {
        margin: 0px 2px;
        margin-top: 10px;
        color: #ffffff;
        text-align: center;
        background-color: rgb(42, 42, 42);    border: 0px;
        border-radius: 2px;
        width: 30%;
        height: 42px;
        font-family: 'Montserrat', sans-serif;
        font-weight: 500;
    }

    .joko {
        margin-top: 29px;
        width: 31%;
        height: 40px;
        background-color: #2c2a2900;
        color: #FFFFFF;
        font-weight: 400;
        font-family: 'Oswald', sans-serif;
        letter-spacing: 1px;
        margin-bottom: 100px;
        border-radius: 100px;
        border: solid 1px;
        font-weight: 400;
        font-size: 14px;
    }

    .joko:hover {
        background-color: #FFF;
        color: #000;
    }
    
    .coko {
        height: 145px;
    }

    </style>
</head>
<body>
    <div class="container">
        <center>
            <div class="coko"></div>
        <form action="{{route('updateUser', $user->id)}}" method="post">
            @csrf
            <label for="name">Username</label><br>
            <input type="text" id="name" name="name" placeholder="{{$user->name}}" autofocus required><br><br><br>
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" placeholder="{{$user->email}}" required><br><br>
            <input type="submit" value="SUBMIT" class="joko">
        </form>
        </center>
    
    </div>
</body>
</html>