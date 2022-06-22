<?php

namespace App\Http\Controllers;

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
            'firstName'=>['required'],
            'description'=>['required']
        ]);
        $data=$request->only(['firstName','lastname','description']);
        $data['date']=date('Ymd');
        try {
            Storage::disk('local')->append('feedbacks.txt', implode('-', $data));
        } catch (\Exception $error){
            return  response($error->getMessage(),500);
        }

        return "success";
    }
}
