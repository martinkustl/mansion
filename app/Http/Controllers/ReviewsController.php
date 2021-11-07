<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = DB::table('review')
            ->select('review.name', 'review.review', 'review.rating', 'review.created_at as createdAt')
            ->orderBy('createdAt', 'desc')
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

        $review = new Review;
        $review->name = $validatedInputs['name'];
        $review->review = $validatedInputs['review'];
        $review->rating = $validatedInputs['rating'];

        $review->save();

        return redirect("/reviews");
    }
}
