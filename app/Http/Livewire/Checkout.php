<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetails;
use Livewire\Component;
use Auth;
use DB;
use App\Models\Product;
use Illuminate\Support\Facades\Cookie;


class Checkout extends Component
{
    public $cart_items = [];
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
    public $shipping_amount;
    public $grand_total;

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
            if(Cookie::get('shopping_cart')){
                $cookie_data = stripslashes(Cookie::get('shopping_cart'));
                $data = json_decode($cookie_data);
                $this->total = 0;
                foreach ($data as $key => $value) {
                    $value->products = Product::with('images')->where('id',$value->product_id)->first();
                    $this->total += ($value->quantity*$value->price);
                }
            }else{
                $data = [];
                $this->total = 0;
            }
        }
        if(Auth::check()){
            $this->cart_items = $data;
        }
        $this->grand_total = $this->total+$this->shipping_amount;
        return view('livewire.checkout',compact('data'))->layout('shopping_cart');
    }

    public function submitForm(){
        $this->validate();
        if (!($this->total < 99 && $this->shipping_amount == 0)) {
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
                'shipping_amount' => $this->shipping_amount,
                'grand_total' => $this->grand_total,
            ]);

            if(Auth::check()){
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
            }else{
                $cookie_data = stripslashes(Cookie::get('shopping_cart'));
                $data = json_decode($cookie_data);
                foreach ($data as $key => $value) {
                    OrderDetails::create([
                        'order_id' => $order->id,
                        'product_id'=> $value->product_id,
                        'product_price' => $value->price,
                        'quantity' => $value->quantity,
                    ]);
                }
                Cookie::queue(Cookie::forget('cookieName'));
            }
            return redirect()->to('/order_confirmation/'.$order->id);

        }else{
            $this->addError('shipping_method','Must Select a Shipping Type');
        }
    }
}
