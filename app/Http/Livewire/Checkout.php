<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetails;
use Livewire\Component;
use Auth;
use DB;

class Checkout extends Component
{
    public $cart_items;
    public $total;

    public $first_name;
    public $last_name;
    public $company_name;
    public $country;
    public $address;
    public $appartment;
    public $city;
    public $state;
    public $zip_code;
    public $phone;
    public $email;
    public $notes;

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'company_name' => 'required',
        'country' => 'required',
        'address' => 'required',
        'appartment' => 'required',
        'city' => 'required',
        'state' => 'required',
        'zip_code' => 'required',
        'phone' => 'required',
        'email' => 'required',
    ];

    public function render()
    {
        if(Auth::check()){
            $data = Cart::with(['products','products.images'])->where('user_id',auth()->user()->id)->where('status','pending')->get();
            $this->total = Cart::where('user_id', auth()->user()->id)
            ->where('status','pending')
            ->select(DB::raw('SUM(quantity * price) as total'))
            ->value('total');
        }else{
            $data = [];
            $this->total = 0;
        }
        $this->cart_items = $data;
        return view('livewire.checkout',compact('data'))->layout('shopping_cart');
    }

    public function submitForm(){
        $this->validate();

        $order = Order::create([
            'user_id' => Auth::check()?Auth::user()->id:null,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'company_name' => $this->company_name,
            'country' => $this->country,
            'address' => $this->address,
            'appartment' => $this->appartment,
            'city' => $this->city,
            'state' => $this->state,
            'zip_code' => $this->zip_code,
            'phone' => $this->phone,
            'email' => $this->email,
            'notes' => $this->notes,
            'status' => 'order-placed',
            'price' => $this->total,
        ]);

        foreach ($this->cart_items as $key => $value) {
            OrderDetails::create([
                'order_id' => $order->id,
                'product_id'=> $value->product_id,
                'product_price' => $value->price,
                'quantity' => $value->quantity,
            ]);
            $item = Cart::find($value->id);
            $item->status = "order-placed";
            $item->save();
        }

        return redirect()->to('/');
    }
}
