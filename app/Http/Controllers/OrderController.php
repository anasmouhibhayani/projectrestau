<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        // dd($request);
     
        $orders = Order::all();

        return view('backoffice.order',[
            'orders' => $orders
        ]);
    }
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'full_name' => 'required|string',
            'food_name' => 'required|string',
            'order_details' => 'required|string',
            'address' => 'required|string',
            'phone_number' => 'required|numeric',
            'quantity' => 'required|numeric',
            'delivery_time' => 'required|date_format:Y-m-d\TH:i',
        ]);

        DB::table('orders')->insert([
            'full_Name' => $validatedData['full_name'],
            'food_name' => $validatedData['food_name'],
            'order_detaille' => $validatedData['order_details'],
            'Your_adress' => $validatedData['address'],
            'Numbre' => $validatedData['phone_number'],
            'How_much' => $validatedData['quantity'],
            'when_you_want' => $validatedData['delivery_time'],
        ]);

        return redirect('/myweb')->with('success', 'Order created successfully');
    }
}