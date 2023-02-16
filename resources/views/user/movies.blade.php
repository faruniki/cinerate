<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINERATE&#169; | Movies</title>
    <link rel="stylesheet" href="assets/css/movies.css">
    <script src="https://kit.fontawesome.com/96dcb92c2c.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <header class="headernav">
        <a href="/" class="logo">CINERATE&#169;</a>
        <nav class="navbar">
            <a href="/home"><li>HOME</li></a>
            <a href="/movies"><li>MOVIES</li></a>
            <a href="/review"><li>REVIEW</li></a>
            <a href="/login"><li>LOGOUT</li></a>
        </nav>
    </header>
    <div class="garis"></div>
    <br>
    <center>
        <p class="judulpopular">Movies Recommendations</p>
    </center>
    <br>
    @foreach($movie as $movies)
    <div class="container2">
        <div class="kiri">
            <div class="gambarmovie">
                <img src="assets/img/{{$movies->cover}}" class="coverfilm" alt="">
            </div>
            <div class="deskmovie">
                <p class="judulmovie">{{$movies->judul}}</p>
                <p class="tahunmovie">{{$movies->tahun}}</p>
                <p class="director ya"><b>Director</b>:<br>{{$movies->sutradara}}</p>
                <p class="genre ya"><b>Genre</b>:<br>{{$movies->genre}}</p>
                <p class="actor ya"><b>Actor</b>:<br>{{$movies->pemain}}</p>
                <p class="sinopsis ya"><b>Synopsis:</b><br>{{$movies->sinopsis}}</p>
            </div>
        </div>
    </div>
    <br>
    @endforeach
</div>

<footer>
        <div class="footercoi">
            <div class="footlogo">
                <div class="ea">
                    <div class="anak-ea">
                        <p class="wikbooksfoot">CINERATE&#169;</p>
                        <p class="wikbooksfoot2">Give us your opinion<br> to help peoples.</p>
                    </div>
                    <div class="anak2-ea">
                        
                    </div>
                </div>
                <div class="eaa">
                    <p class="judul2-ea">About Us</p>
                        <p class="desk2-ea">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero cum iste doloribus architecto placeat facilis error debitis aut molestiae quam, id, quod, voluptates dolorum dicta corporis fugiat nostrum beatae officia.</p>

                </div>
            </div>
            <div class="foot1">
                <ul>
                    <p class="special-1"><b>Popular Movies</b></p>
                    <li><a href="/books">Eternals (2021)</a></li>
                    <li><a href="/books">The Boys (2019)</a></li>
                    <li><a href="/books">Man of Steel (2013)</a></li>
                    <li><a href="/books">Fight Club (1999)</a></li>
                    <li><a href="/books">Whiplash (2014)</a></li>
                </ul>
            </div>
            <div class="foot2">
                <ul>
                    <p class="special-2"><b>Pages</b></p>
                    <li><a href="/home">Home</a></li>
                    <li><a href="/movies">Movies</a></li>
                    <li><a href="/review">Review</a></li>
                </ul>
            </div>
            <div class="foot3">
                <ul>
                    <p class="special-3"><b>Action</b></p>
                    <li><a href="/home">Home</a></li>
                    <li><a href="{{route('logout')}}">Logout</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>