<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Oswald:wght@300;400;500&family=Playfair+Display:wght@400;500&family=Poppins:wght@200;300;400;500;600;700&display=swap');

body {
            height: 100%;
            font-family: 'Montserrat', sans-serif;
            background: rgb(23,23,23);
            background: linear-gradient(350deg, rgb(10, 10, 10) 0%, rgb(29, 29, 29) 100%);    margin: 0;
        }

    label {
        color: #FFF;
        font-size: 14px;
    }

    .inputyah {
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

    textarea {
        margin: 0px 2px;
        margin-top: 10px;
        color: #ffffff;
        text-align: center;
        background-color: rgb(42, 42, 42);    border: 0px;
        border-radius: 2px;
        width: 30%;
        height: 60px;
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

    .file-input {
      color: #FFF;
      background-color: #2c2a2900;
    }

    form {
      margin-top: 20px;
    }
    

</style>
</head>
<body>
<div class="container">
<center>
  <form action="{{route('storeMovie')}}" method="post">
    @csrf
    <br>
    <label for="judul">Name</label><br>
    <input class="inputyah" type="text" id="judul" name="judul" autofocus required ><br><br><br>
    <label for="sutradara">Director</label><br>
    <input class="inputyah" type="text" id="sutradara" name="sutradara" required><br><br><br>
    <label for="genre">Genre</label><br>
    <input class="inputyah" type="text" id="genre" name="genre" required><br><br><br>
    <label for="pemain">Main Actor</label><br>
    <input class="inputyah" type="text" id="pemain" name="pemain" required><br><br><br>
    <label for="tahun">Release Year</label><br>
    <input class="inputyah" type="text" id="tahun" name="tahun" required><br><br><br>
    <label for="sinopsis">Synopsis</label><br><br>
    <textarea id="sinopsis" name="sinopsis" required></textarea><br><br><br>
    <label for="cover">Choose Cover</label><br><br>
    <input type="file" class="file-input inputyah" id="cover" name="cover" required><br><br>
    <input type="submit" class="joko" value="SUBMIT">
  </form>
</center>
</div>
</body>
</html>