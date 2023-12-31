<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbl_Content;

class GeneralController extends Controller
{
    public function delivery_information(){
        return view('static_pages.delivery_information');
    }

    public function privacy_policy(){
        return view('static_pages.privacy_policy');
    }
    public function terms_and_conditions(){
        return view('static_pages.terms_and_conditions');
    }
    public function order_and_returns(){
        return view('static_pages.order_and_returns');
    }
    public function customer_service(){
        return view('static_pages.customer_services');
    }
    public function manufactures(){
        return view('static_pages.manufacturers');
    }
    public function about_us(){
        return view('static_pages.about_us');
    }

    public function content_pages($name){
        $content = Tbl_Content::where('slug',$name)->first();
        return view('static_pages.about_us',compact('content'));
    }
}
