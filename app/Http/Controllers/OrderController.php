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
        //dump($orders[0]->customer);
        //dump($orders[0]->campaign);
        //dump($orders[0]->address);
        dd($orders[0]->orderPackage[0]->packageProducts);

        $package = Package::find(2);
        dd($package->packageProducts);

        // dd($orders);
    }
}
