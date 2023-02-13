<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINERATE&#169; | Review</title>
    <link rel="stylesheet" href="assets/css/review.css">
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
    <div class="container2">
        <div class="comment">
            <center>
                <form action="{{route('postReview')}}" method="post">
                    @csrf
                    <p class="judulmessages">Review</p>
                    <p class="deskmessages">Just be honest here.</p>
                    <textarea class="textmovie" name="movie_name" placeholder="What Movie?"></textarea>
                    <textarea class="textcoi" name="tahun" placeholder="What Year?  "></textarea>
                    <br>
                    <textarea class="textrate" name="review" placeholder="Your Opinion"></textarea>

                    <br>
                    <button type="submit" value="Submit" class="submitcoi">SUBMIT</button>
                </form>

            </center>
        </div>
    </div>
    <p class="people">People's Review : </p>
    @foreach($review as $reviews)
    <div class="container1">
        <div class="atasgua">
            <div class="dari">
                <p class="daripengirim">{{Auth::User()->name}}</p>
                <p class="kapan">{{$reviews->created_at}}</p>
            </div>
            <div class="filmnyah">
                <p class="judulfilm">Title : {{$reviews->movie_name}}</p>
                <p class="nilaifilm">Year : {{$reviews->tahun}}</p>
            </div>
        </div>
        <div class="opini">
            <p class="pesan">Opinion :</p>
            <p class="opininyah">{{$reviews->review}}</p>
        </div>
    </div>
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
                    <p class="judul2-ea">Thank You</p>
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
                    <li><a href="/login">Logout</a></li>
                    <li><a href="/loginadmin">Admin</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>