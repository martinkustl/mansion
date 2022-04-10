<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\StaticFile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = DB::table('review')
            ->select('review.id', 'review.name', 'review.review', 'review.rating', 'review.created_at as createdAt', 'review.answered_at as answeredAt', 'review.answer')
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

        return redirect(url("/reviews"));
    }

    public function createReviewAnswer(Request $request)
    {
        $validatedInputs = $request->validate([
            'answer' => 'required',
        ]);

        $reviewId = $request->id;

        $review = Review::where('id', $reviewId)->first();
        $review->answer = $validatedInputs['answer'];
        $review->answered_at = Carbon::now();

        $review->save();

        return redirect(url("/reviews"));
    }

    public function deleteReview(Request $request)
    {
        $reviewId = $request->id;

        DB::table('review')->where('id', '=', $reviewId)->delete();

        return redirect(url("/reviews"));
    }
}
