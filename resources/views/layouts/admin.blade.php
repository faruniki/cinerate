<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINERATE&#169; | @yield('title')</title>
    <link rel="stylesheet" href={{asset("assets/css/admin.css")}}>
</head>
<body>


    <div class="container">
        <header class="headernav">
            <nav class="navbar">
                <a href="/dashboard"><li>DASHBOARD</li></a>
                <a href="/users"><li>USERS</li></a>
                <a href="/admin/movies"><li>MOVIES</li></a>
                <a href="{{route('adminReview')}}"><li>REVIEWS</li></a>
            </nav>
        </header>
        <div class="garis"></div>
        @yield('content')
    </div>

</body>
</html>