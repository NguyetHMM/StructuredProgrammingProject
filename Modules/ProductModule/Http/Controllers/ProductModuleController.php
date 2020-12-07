<?php

namespace Modules\ProductModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class ProductModuleController extends Controller
{
   public function index()
    {
        return view('productmodule::index');
    }
    public function home(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get();
        $all_product = DB::table('tbl_product')->where('product_status','1')->orderby('tbl_product.product_id','desc')->get();
        // dd($all_product);  
        return view('productmodule::user.home')->with('all_product', $all_product)
        ->with('category', $cate_product)
        ->with('brand', $brand_product);
    }


}   
