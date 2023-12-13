<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Films;
use DB;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Films::all(); // Retrieve all films from the database
        $genres = $films->pluck('genre'); // Get all the 'genre' values
        return view('films', ['films' => $films,$genres]); // Pass the films to the view
        return $genres; // Return the genres
    }
    public function client()
{
  $films = Films::all(); // Retrieve all films from the database
  return view('client', ['films' => $films]); // Pass the films to the view
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('user.film_add');
        return view('films_add');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
  $request->validate([
      'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
  ]);

  $fileName = time() . '.' . $request->img->extension();
  $request->img->storeAs('public/images', $fileName);

  $film = new Films;
  $film->title = $request->title;
  $film->date = $request->date;
  $film->director = $request->director;
  $film->genre = $request->genre;
  $film->cast = $request->cast;
  $film->plot = $request->plot;
  $film->img = $fileName; // Save the filename, not the file
  $film->rating = $request->rating;
  $film->save();

  return redirect('/admin')->with('success', 'Film added successfully');
}


    public function add()
    {
        return view('film_add');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    $films = Films::all(); // Retrieve all films from the database
    return view('films', ['films' => $films]); // Pass the films to the view
    }
    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film = Films::find($id);
        $film->delete();
     
        return redirect('/admin')->with('success', 'Film deleted successfully');
    }

    
}
