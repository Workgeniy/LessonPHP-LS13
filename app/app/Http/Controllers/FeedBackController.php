<?php

namespace App\Http\Controllers;

use App\Jobs\FirstJob;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    public function index()
    {
        return view("feedback.feedback",['menu' => config('top.menu'), 'page' => 'Feedback']);
    }

    public function post(Request $request)
    {
        $validated = $request->validate([            
            'email' => 'required|email',
            'phone' => 'required',
            'text' => 'required',        
        ]);

        FirstJob::dispatch($validated['email'], $validated['phone'], $validated['text']);
       

        return redirect()->route('main')->with('status', 'The leter was sent');
    }
}
