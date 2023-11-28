<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index1()
    {
        $movies = Movie::all();
            $today = now()->format('Y-m-d');
            $upcomingMovies = [];
            $nowMovies = [];

            foreach ($movies as $movie) {
                $releaseDate = $movie->ReleaseDate;
                if (strtotime($releaseDate) >= strtotime($today . ' + 10 days')) {
                    $upcomingMovies[] = $movie;
                } else {
                    $nowMovies[] = $movie;
                }
            }
            return view('adminPanel', compact('upcomingMovies', 'nowMovies'));
    }

    public function index2()
    {
            $movies = Movie::all();
            $today = now()->format('Y-m-d');
            $upcomingMovies = [];
            $nowMovies = [];

            foreach ($movies as $movie) {
                $releaseDate = $movie->ReleaseDate;
                if (strtotime($releaseDate) >= strtotime($today . ' + 10 days')) {
                    $upcomingMovies[] = $movie;
                } else {
                    $nowMovies[] = $movie;
                }
            }
            return view('homepage', compact('upcomingMovies', 'nowMovies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'Cover' => ['required', 'image'],
            'GenreName' => ['required', 'string', 'max:255'],
            'Title' => ['required', 'string', 'max:255'],
            'Director' => ['required', 'string', 'max:255'],
            'Description' => ['required', 'string', 'max:255'],
            'Duration' => ['required', 'integer', 'min:1'],
            'Rating' => ['required', 'integer', 'min:1', 'max:5'],
            'ReleaseDate' => ['required']
        ]);

        $filename = $request->file('Cover')->getClientOriginalName();
        $request->file('Cover')->storeAs('/public' . '/' . $request->Title . '/' . $filename);

        Movie::create([
            'Cover' => $filename,
            'GenreName' => $request->GenreName,
            'Title' => $request->Title,
            'Director' => $request->Director,
            'Description' => $request->Description,
            'Duration' => $request->Duration,
            'Rating' => $request->Rating,
            'ReleaseDate' => $request->ReleaseDate
        ]);

        return redirect('/admin-panel');
    }

    public function detail($id)
    {
        $movie = Movie::where('MovieID', $id)->first();
        return view('detail', compact('movie'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
