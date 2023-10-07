<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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

    public function dashboard()
    {
        return view('dashboard');
    }

    public function all_orders(){
        if(Auth::user()->user_type == "admin"){
            $orders = Order::with(['user'])->get();
        }elseif(Auth::user()->user_type == "user"){
            $orders = Order::with(['user'])->where('user_id',Auth::user()->id)->get();
        }
        return view('orders.index',compact('orders'));
    }

    public function order_detail($id){
        $order = Order::with(['user','details','details.products'])->find($id);
        return view('orders.detail',compact('order'));
    }

    public function order_edit($id){
        $order = Order::find($id);
        return view('orders.edit',compact('order'));
    }

    public function order_update($id,Request $request){
        $order = Order::find($id);
        $order->status = \Str::slug($request->status);
        $order->save();
        return redirect()->route('orders')->with('success','Status Changed Successfully for the order.');
    }
}
