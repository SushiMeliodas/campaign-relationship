<?php

namespace App\Http\Controllers;

use App\Package;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showIndexPage(Request $request, Order $order)
    {
        $orders = Order::all();
        // $orders = Order::find(1);
        // dd($orders[0]->customer);
        // dump($orders[0]->campaign);
        // dump($orders[0]->address);
        // dd($orders[0]->orderPackage[0]->packageProducts);

        // dd($orders);

        return view('index', compact('orders'));
    }
}
