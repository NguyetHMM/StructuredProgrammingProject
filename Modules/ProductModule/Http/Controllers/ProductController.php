<?php

namespace Modules\ProductModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class ProductController extends Controller
{
    public function index()
    {
        return view('productmodule::admin');
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
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $data['product_status'] = $request->product_status;

        $get_image = $request->file('product_image');
        
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('products', $new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->insert($data);
            Session::put('message','Thêm sản phẩm thành công');
            return \redirect()->action([ProductController::class, 'all_product']);
        }else{
            $data['product_image'] = '';
            DB::table('tbl_product')->insert($data);
            Session::put('message','Thêm sản phẩm thành công');
            return \redirect()->action([ProductController::class, 'all_product']);
        }
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
        return view('productmodule::admin')->with('edit_product', $manager_product);
    }

    public function delete_product($product_id){
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

        $get_image = $request->file('product_image');
        
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('products', $new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->where('product_id', $product_id)->update($data);
            Session::put('message','Cập nhật sản phẩm thành công');
            return \redirect()->action([ProductController::class, 'all_product']);
        }else{
            $data['product_image'] = '';
            DB::table('tbl_product')->where('product_id', $product_id)->update($data);
            Session::put('message','Cập nhật sản phẩm thành công');
            return \redirect()->action([ProductController::class, 'all_product']);
        }
    }

}
