<?php

namespace App\Http\Controllers;
use App\Models\Films;
use App\Models\User;
use App\Models\User_Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class UserReviewController extends Controller
{

    public function show($id)
{
   $film = Films::find($id);
   return view('reviews', ['film' => $film]);

}

public function addReview($id)
{
   $film = Films::find($id);
   return view('add_review', ['film' => $film]);
}

public function store(Request $request, $filmid)
{
  $request->validate([
      'rating' => 'required|integer|min:1|max:5',
      'review' => 'required|string',
      'userid' => 'required|integer',
      'filmid' => 'required|integer',
      'username' => 'required|string',
      'film_title' => 'required|string',
  ]);

  $review = new User_Review;
  $review->userid = $request->userid;
  $review->filmid = $request->filmid;
  $review->review = $request->review;
  $review->username = Auth::user()->name;
  $review->film_title = $request->film_title;
  $review->rating = $request->rating;
  $review->review_date = now();

  // Manually insert the record into the database
  DB::table('user_review')->insert([
      'userid' => $review->userid,
      'filmid' => $review->filmid,
      'review' => $review->review,
      'username' => $review->username,
      'film_title' => $review->film_title,
      'rating' => $review->rating,
      'review_date' => $review->review_date,
  ]);

  return redirect()->back()->with('success', 'Your review has been submitted successfully.');
}

public function reviewShow($id)
{
   $film = Films::find($id);
   $reviews = User_Review::where('filmid', $id)->get();
   
  $averageRating = $reviews->avg('rating');

  return view('review_list', compact('film', 'reviews', 'averageRating'));

//    return view('reviews', compact('film', 'reviews'));
}
public function showReviews()
{
  $film = Films::all();
  $reviews = User_Review::where('filmid')->get();
  
 $averageRating = $reviews->avg('rating');

 return view('review_list', compact('film', 'reviews', 'averageRating'));
}

public function showByGenre($id)
{
  $genre = DB::table('films')->where('genre', $id)->first();
  return view('genre_show', ['genre' => $genre]);
}

}
