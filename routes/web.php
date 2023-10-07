<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Order;
use App\Models\Brand;
use App\Models\Type;
use App\Models\ContactUs;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\PrinterModelController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\ProductController;

use App\Http\Livewire\HomeProduct;
use App\Http\Livewire\ShoppingCart;
use App\Http\Livewire\Checkout;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/all_product', function () {
    return view('all_products');
})->name('all_products');

Route::get('/shipping_and_tracking', function () {
    return view('shipping_and_tracking');
})->name('shipping_and_tracking');

Route::get('/contact_us', function () {
    return view('contact_us');
})->name('contact_us');

Route::post('/post_contact_us', function(Request $request){
    $input = $request->all();
    ContactUs::create($input);
    return redirect()->back()->with('success','Request Submitted Successfully.');
})->name('contact_us.post');

Route::get('/order_confirmation/{id}', function ($id) {
    $data = Order::with(['details.products','user'])->find($id);
    return view('order_confirmation',compact('data'));
})->name('order_confirmation');

Route::get('/product_detail/{id}', function ($id) {
    return view('product_detail',compact('id'));
})->name('product_detail');

Route::get('/shopping_cart',ShoppingCart::class)->name('shopping_cart');
Route::get('/checkout',Checkout::class)->name('checkout');

Route::get('/view_brand_details/{view_brand_details}',function($view_brand_details){
    if($view_brand_details != 'brands'){
        $brand = Brand::where('name','like','%'.$view_brand_details.'%')->first();
        if($brand){
            $data = Type::where('brand_id',$brand->id)->get();
        }else{
            $data = [];
        }
    }else{
        $data = Brand::all();
    }
    return view('brands_view_page',compact('view_brand_details','data'));
})->name('view_brand_details');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard',[App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

// Routes for the BrandController
Route::resource('brands', BrandController::class);
Route::put('brands/{brand}/restore', [BrandController::class, 'restore'])->name('brands.restore');
Route::delete('brands/{brand}/force-delete', [BrandController::class, 'forceDelete'])->name('brands.forceDelete');
Route::get('brands/soft/deleted', [BrandController::class, 'softDeleted'])->name('brands.softDeleted');


// Routes for the TypeController
Route::resource('types', TypeController::class);
Route::put('types/{type}/restore', [TypeController::class, 'restore'])->name('types.restore');
Route::delete('types/{type}/force-delete', [TypeController::class, 'forceDelete'])->name('types.forceDelete');
Route::get('types/soft/deleted', [TypeController::class, 'softDeleted'])->name('types.softDeleted');


// Routes for the FamilyController
Route::resource('families', FamilyController::class);
Route::put('families/{family}/restore', [FamilyController::class, 'restore'])->name('families.restore');
Route::delete('families/{family}/force-delete', [FamilyController::class, 'forceDelete'])->name('families.forceDelete');
Route::get('families/soft/deleted', [FamilyController::class, 'softDeleted'])->name('families.softDeleted');


// Routes for the ModelController
Route::resource('models', PrinterModelController::class);
Route::put('models/{model}/restore', [PrinterModelController::class, 'restore'])->name('models.restore');
Route::delete('models/{model}/force-delete', [PrinterModelController::class, 'forceDelete'])->name('models.forceDelete');
Route::get('models/soft/deleted', [PrinterModelController::class, 'softDeleted'])->name('models.softDeleted');

// Routes for the ProductController
Route::resource('products', ProductController::class);
Route::put('products/{model}/restore', [ProductController::class, 'restore'])->name('products.restore');
Route::delete('products/{model}/force-delete', [ProductController::class, 'forceDelete'])->name('products.forceDelete');
Route::get('products/soft/deleted', [ProductController::class, 'softDeleted'])->name('products.softDeleted');
Route::get('products_images', [ProductController::class, 'images'])->name('products.images');
Route::delete('products_images_destroy/{id}', [ProductController::class, 'images_destroy'])->name('products.image_destroy');


// Routes for the CategoryController
Route::resource('categories', CategoryController::class);
Route::put('categories/{category}/restore', [CategoryController::class, 'restore'])->name('categories.restore');
Route::delete('categories/{category}/force-delete', [CategoryController::class, 'forceDelete'])->name('categories.forceDelete');


////////////-------------------Filter routes--------------------\\\\\\\\\\\\\\\\

// Route for filtering data by brand_id in FilterController
Route::get('filter/brands/{brand_id}', [FilterController::class, 'filterByBrand'])->name('filter.brands');

// Route for filtering data by type_id in FilterController
Route::get('filter/types/{type_id}', [FilterController::class, 'filterByType'])->name('filter.types');

// Route for filtering data by family_id in FilterController
Route::get('filter/families/{family_id}', [FilterController::class, 'filterByFamily'])->name('filter.families');


Route::get('all/orders', [App\Http\Controllers\HomeController::class, 'all_orders'])->name('orders');
Route::get('order/{id}', [App\Http\Controllers\HomeController::class, 'order_detail'])->name('order_detail_page');
Route::post('admin/update/order/{id}', [App\Http\Controllers\HomeController::class, 'order_update'])->name('order.update');
