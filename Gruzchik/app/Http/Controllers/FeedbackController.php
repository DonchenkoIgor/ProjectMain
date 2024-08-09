<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function feedback(Request $request)
    {
       $validated = $request->validate([
           'userPhone' => 'required|string|max:20',
       ]);

       Feedback::create([
           'userPhone' => $validated['userPhone']
       ]);

        return response()->json(['success' => true]);
    }
}
