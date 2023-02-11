@extends('layouts.admin')

@section('title', 'Users')
@section('content')

    <link rel="stylesheet" href="assets/css/user.css">

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

@endsection