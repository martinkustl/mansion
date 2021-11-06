<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    //

    public function index()
    {

        return view('reviews.reviews');
    }

    public function createReview(Request $request)
    {
        $validatedInputs = $request->validate([
            'name' => 'required',
            'review' => 'required'
        ]);

        $review = new Review;
        $review->name = $validatedInputs['name'];
        $review->review = $validatedInputs['review'];

        $review->save();

        return view('reviews.reviews');
    }
}
