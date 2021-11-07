<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{
    //

    public function index()
    {
        $reviews = DB::table('review')
            ->orderBy('created_at')
            ->get();

        return view('reviews.reviews', ['reviews' => $reviews]);
    }

    public function createReview(Request $request)
    {
        $validatedInputs = $request->validate([
            'name' => 'required',
            'review' => 'required',
            'rating' => 'required | numeric'
        ]);

        dump($validatedInputs);


        $review = new Review;
        $review->name = $validatedInputs['name'];
        $review->review = $validatedInputs['review'];
        $review->rating = $validatedInputs['rating'];

        $review->save();

        return view('reviews.reviews');
    }
}
