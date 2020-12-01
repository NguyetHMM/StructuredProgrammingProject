<?php

namespace Modules\ProductModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('productmodule::admin');
    }

    public function add_category_product(){
        return view('productmodule::admin.add_category_product');
    }

    public function all_category_product(){
        $all_category_product = DB::table('tbl_category_product')->get();
        $manager_category_product = view('productmodule::admin.all_category_product')->with('all_category_product', $all_category_product);
        return view('productmodule::admin')->with('all_category_product', $manager_category_product); 
    }


    public function save_category_product(Request $request){
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_product_status;
        
        $add_category = DB::table('tbl_category_product')->insert($data);
        $all_category_product = DB::table('tbl_category_product')->get();
        return view('productmodule::admin.all_category_product')->with('all_category_product',$all_category_product);       
    }

    public function unactive_category_product($category_product_id){
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update(['category_status'=>0]);
        $all_category_product = DB::table('tbl_category_product')->get();
        return view('productmodule::admin.all_category_product')->with('all_category_product', $all_category_product);
    }

    public function active_category_product($category_product_id){
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update(['category_status'=>1]);
        $all_category_product = DB::table('tbl_category_product')->get();
        return view('productmodule::admin.all_category_product')->with('all_category_product', $all_category_product);
    }

    public function edit_category_product($category_product_id){
        $edit_category_product = DB::table('tbl_category_product')->where('category_id', $category_product_id)->get();
        
        $manager_category_product = view('productmodule::admin.edit_category_product')->with('edit_category_product', $edit_category_product);
        return view('productmodule::admin')->with('edit_category_product', $manager_category_product);
    }

    public function delete_category_product($category_product_id){
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->delete();
        $all_category_product = DB::table('tbl_category_product')->get();
        return view('productmodule::admin.all_category_product')->with('all_category_product',$all_category_product);
    }

    public function update_category_product(Request $request, $category_product_id){
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update($data);
        $all_category_product = DB::table('tbl_category_product')->get();
        return view('productmodule::admin.all_category_product')->with('all_category_product',$all_category_product);
    }

}
