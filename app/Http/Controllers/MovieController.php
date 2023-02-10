<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie = Movie::get();
        return view('admin.movies', compact('movie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createMovie()
    {
        return view('admin.create-movie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeMovie(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tahun' => 'required',
            'genre' => 'required',
            'sutradara' => 'required',
            'pemain' => 'required',
            'sinopsis' => 'required',
            'cover' => 'required',
        ]);

        Movie::create([
            'judul' => $request->judul,
            'tahun' => $request->tahun,
            'genre' => $request->genre,
            'sutradara' => $request->sutradara,
            'pemain' => $request->pemain,
            'sinopsis' => $request->sinopsis,
            'cover' => $request->cover,
        ]);
        return redirect(route('adminMovies'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function editMovie(Movie $movie, $id)
    {
        $movie = Movie::where('id', $id)->first();
        return view('admin.edit-movie', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function updateMovie(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'tahun' => 'required',
            'genre' => 'required',
            'sutradara' => 'required',
            'pemain' => 'required',
            'sinopsis' => 'required',
            'cover' => 'required',
        ]);

        $movie = Movie::where('id', $id)->first();

        $movie->update($request->all());
        return redirect(route('adminMovies'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function deleteMovie(Movie $movie, $id)
    {
        Movie::where('id', $id)->delete();
        return redirect(route('adminMovies'));
    }
}
