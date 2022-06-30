<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Providers\DataImportProvider;

class OrderController extends Controller
{

    public function index()
    {
        return view('order.index');
    }


    public function store(Request $request)
    {
        $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'description' => ['required']
        ]);

        $validated = $request->only(['firstname', 'lastname', 'email', 'phone', 'description']);
        $order = Order::create($validated);
        if ($order){
            return redirect()->route('order')
                ->with('success','You order has been saved successfully!');
        }
        return back()->with('error','Error! Please try again');

    }
}
