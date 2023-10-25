<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Brand;
use App\Models\Family;
use App\Models\Type;
use App\Models\PrinterModel;
use App\Models\Product;
use App\Models\ModelProduct;
use App\Models\ImagesProduct;
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

    public function uploadCSV(Request $request)
    {
        if ($request->hasFile('csv')) {
            $file = $request->file('csv');
            $tmpFilePath = $file->getRealPath();

            $csv = array_map('str_getcsv', file($tmpFilePath));
            $header = $csv[0];
            unset($csv[0]);

            foreach ($csv as $row) {
                $data = array_combine($header, $row);
                $brand_id = Brand::where('name','like','%'.$data['Brand'].'%')->pluck('id')->first();
                $family_id = Family::where('name','like','%'.$data['Family'].'%')->pluck('id')->first();
                $type_id = Type::where('name','like','%'.$data['Type'].'%')->pluck('id')->first();
                $check = Product::where('name','like','%'.$data['Name'].'%')
                ->where('brand_id',$brand_id)
                ->where('family_id',$family_id)
                ->where('type_id',$type_id)->count();
                if($check == 0){
                    $product = Product::create([
                        'name' => $data['Name'],
                        'brand_id' => $brand_id,
                        'family_id' => $family_id,
                        'type_id' => $type_id,
                        'price' => $data['Price'],
                        'description' => $data['Description'],
                        'stocks' => $data['Stocks'],
                    ]);
                    foreach (explode("|",$data['Models']) as $key => $value) {
                        $model_id = PrinterModel::where('name','like','%'.$value.'%')->pluck('id')->first();
                        if($model_id != null){
                            ModelProduct::create([
                                'product_id' => $product->id,
                                'model_id' => $model_id,
                            ]);
                        }
                    }

                    foreach (explode("|",$data['image']) as $image) {
                        ImagesProduct::create([
                            'product_id'=>$product->id,
                            'image'=>'uploads/'.$image,
                        ]);
                    }
                }
            }

            return redirect()->back()->with('message','CSV file uploaded and processed Successfully.');
        } else {
            return 'No file uploaded.';
        }
    }

    public function downloadFile()
    {
        $filePath = public_path('products.csv');
        $headers = [
            'Content-Type' => 'text/csv',
        ];

        return response()->download($filePath, 'products.csv', $headers);
    }

}
