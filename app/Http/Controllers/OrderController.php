<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function index()
    {
        return view('order.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstName' => ['required'],
            'email'=>['required'],
            'phone'=>['required'],
            'description' => ['required']
        ]);
        $data=$request->only(['firstName','lastname','email','phone','description']);
        $data['date']=date('Ymd');
        try {
            Storage::disk('local')->append('orders.txt', implode('-', $data));
        } catch (\Exception $error ){
            return  response($error->getMessage(),500);
        }
        return "success";

    }
}
