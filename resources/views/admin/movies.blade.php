<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="col-sm-12 my-4">
    <form action="{{route('createMovie')}}">
        <button type="submit" class="btn btn-success">Add+</button>
    </form>
    <table class="table mt-2">
        <thead>
            <tr class="table-dark">
                <th>No</th>
                <th>Cover</th>
                <th>Name</th>
                <th>Director</th>
                <th>Genre</th>
                <th>Actor</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $i = 1; ?>
        @foreach($movie as $movies)
        <tbody>
            <tr>
                <td>{{$i++}}</td>
                <td><img src="{{asset("assets/images/". $movies->cover)}}" style="height:100px; width:90px; object-fit: cover;"></td>
                <td>{{$movies->judul}}</td>
                <td>{{$movies->sutradara}}</td>
                <td>{{$movies->genre}}</td>
                <td>{{$movies->pemain}}</td>
                <td>
                    <form action="{{route('deleteMovie', $movies->id)}}" method="post">
                        @csrf
                        <a href="{{route('editMovie', $movies->id)}}" class="btn btn-primary">Edit</a>
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    </div>
</body>
</html>