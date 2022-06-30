<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Feedback;
use App\QueryBuilders\QueryBuilderFeedbacks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use mysql_xdevapi\Exception;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('feedback.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'description' => ['required']
        ]);
        $validated = $request->only(['firstname', 'lastname', 'description']);
        $feedback=Feedback::create($validated);
        if($feedback){
            return redirect()
                ->route('feedback')
                ->with('success','your feedback has been sent successfully!');
        }
        back()->with('error','Error. Please try again');

    }
}
