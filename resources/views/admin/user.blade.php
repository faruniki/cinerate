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
    <table class="table">
        <thead>
            <tr class="table-dark">
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $i = 1; ?>
        @foreach($user as $users)
        <tbody>
            <tr>
                <td>{{$i++}}</td>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                <td>
                    <form action="{{route('deleteUser', $users->id)}}" method="post">
                        @csrf
                        <a href="{{route('editUser', $users->id)}}" class="btn btn-primary">Edit</a>
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