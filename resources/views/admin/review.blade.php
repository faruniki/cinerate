@extends('layouts.admin')

@section('title', 'Users')
@section('content')

    <link rel="stylesheet" href={{asset("assets/css/user.css")}}>

    <table class="table">
        <thead class="theadcoi">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Year</th>
                <th>Review</th>
            </tr>
        </thead>
        <?php $i = 1; ?>
        @foreach($review as $reviews)
        <tbody>
            <tr>
                <td>{{$i++}}</td>
                <td>{{$reviews->movie_name}}</td>
                <td>{{$reviews->tahun}}</td>
                <td>{{$reviews->review}}</td>
                <td>
                    <form action="{{route('deleteReview', $reviews->id)}}" method="post">
                        @csrf
                        <button type="submit" class="delete-btn">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>

@endsection