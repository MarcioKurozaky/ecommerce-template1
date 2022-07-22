<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //


    public function ViewProduct(){

    	return view('frontend.product');

    } // end method



    public function ProductDetail(){

    	return view('frontend.product_detail');

    } // end method

}
