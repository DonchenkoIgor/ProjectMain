<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function saveReview(Request $request)
    {
        $review = Review::create([
            'clientName' => $request->input('clientName'),
            'clientMessage' => $request->input('clientMessage'),
        ]);


        return response()->json([
            'clientName' => $review->clientName,
            'clientMessage' => $review->clientMessage,
            'created_at' => $review->formatted_created_at,
        ]);
    }
}
