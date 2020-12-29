<?php

namespace Modules\ProductModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function index()
    {
        return view('admin');
    }
    
    public function add_product(){
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();

        return view('productmodule::admin.add_product')->with('cate_product', $cate_product)
        ->with('brand_product', $brand_product);
        
    }

    public function all_product(){
        $all_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')
        ->join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')
        // ->select('tbl_product.*', 'tbl_category_product.category_name', 'tbl_brand.brand_name')
        ->orderby('tbl_product.product_id','desc')->get();
        // dd($all_product);  

        $manager_product = view('productmodule::admin.all_product')->with('all_product', $all_product);
        return view('admin')->with('all_product', $manager_product); 
    }


    public function save_product(Request $request){
        $request->validate([
            'product_image' => 'required|image'
        ]);

        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $data['product_status'] = $request->product_status;

        // $get_image = $request->file('product_image');
        
        $request->product_image->store('images','public');
        $fileName = $request->file('product_image')->hashName(); 
        
        $data['product_image'] = $fileName;
        DB::table('tbl_product')->insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return \redirect()->action([ProductController::class, 'all_product']);
    }

    public function unactive_product($product_id){
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status'=>0]);
        Session::put('message','Hủy kích hoạt sản phẩm thành công');
        return \redirect()->action([ProductController::class, 'all_product']);
    }

    public function active_product($product_id){
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status'=>1]);
        Session::put('message','Kích hoạt sản phẩm thành công');
        return \redirect()->action([ProductController::class, 'all_product']);
    }

    public function edit_product($product_id){
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();
        $edit_product = DB::table('tbl_product')->where('product_id', $product_id)->get();
        
        $manager_product = view('productmodule::admin.edit_product')->with('edit_product', $edit_product)
        ->with('cate_product', $cate_product)
        ->with('brand_product', $brand_product);
        return view('admin')->with('edit_product', $manager_product);
    }

    public function delete_product($product_id){
        $image = DB::table('tbl_product')->where('product_id', $product_id)->select('product_image')->get();
        Storage::delete('/public/images/'.$image[0]->product_image);
        DB::table('tbl_product')->where('product_id', $product_id)->delete();
        Session::put('message','Xóa sản phẩm thành công');
        return \redirect()->action([ProductController::class, 'all_product']);
    }

    public function update_product(Request $request, $product_id){
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $data['product_status'] = $request->product_status;
        $image = DB::table('tbl_product')->where('product_id', $product_id)->select('product_image')->get();
        if($request->product_image){
            Storage::delete('/public/images/'.$image[0]->product_image);
            $request->product_image->store('images','public');
            $fileName = $request->file('product_image')->hashName();
            $data['product_image'] = $fileName;

        }
        // dd($image[0]->product_image);
        DB::table('tbl_product')->where('product_id', $product_id)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
        return \redirect()->action([ProductController::class, 'all_product']);
        
    }

}
