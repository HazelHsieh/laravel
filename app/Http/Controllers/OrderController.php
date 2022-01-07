<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::get();
        return view('backstage.user.user',compact('user'));
    }

    public function look($id)
    {
        $order = Order::find($id);
        return view('backstage.user.user-look',compact('user'));
    }
}
