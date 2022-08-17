<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('checkOut');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function checkOut($product) {
        $product = Product::findOrFail($product);

        return view('checkout' , compact('product'));
    }

    public function checkOutSave(Request $request) {
        $product = Product::findOrFail($request->product);
        Order::create([
            'product_name' => $product->name,
            'price' => $product->price
        ]);
        return back()->with('success' , 'added order successfully');
    }
}
