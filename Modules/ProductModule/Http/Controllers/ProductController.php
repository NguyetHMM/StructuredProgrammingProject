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

        return view('productmodule::admin.add_product')->with('cate_product', $cate_product)->with('brand_product', $brand_product);
        
    }

    public function all_product(){
        $all_product = DB::table('tbl_product')->orderby('product_id','desc')->get();
        $manager_product = view('productmodule::admin.all_product')->with('all_product', $all_product);
        return view('productmodule::admin')->with('all_product', $manager_product); 
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

        $get_image = $request->file('product_imgae');
        if($get_image){
            $new_image = rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/products', $new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->insert($data);
            Session::put('message','Thêm sản phẩm thành công');
            return \redirect()->action([ProductController::class, 'add_product']);
        }
        $data['product_image'] = '';
        DB::table('tbl_product')->insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return \redirect()->action([ProductController::class, 'add_product']);       
    }

    public function unactive_product($product_id){
        DB::table('tbl_product')->where('id', $product_id)->update(['status'=>0]);
        Session::put('message','Hủy kích hoạt sản phẩm thành công');
        return \redirect()->action([ProductController::class, 'all_product']);
    }

    public function active_product($product_id){
        DB::table('tbl_product')->where('id', $product_id)->update(['status'=>1]);
        Session::put('message','Kích hoạt sản phẩm thành công');
        return \redirect()->action([ProductController::class, 'all_product']);
    }

    public function edit_product($product_id){
        $edit_product = DB::table('tbl_product')->where('id', $product_id)->get();
        
        $manager_product = view('productmodule::admin.edit_product')->with('edit_product', $edit_product);
        return view('productmodule::admin')->with('edit_product', $manager_product);
    }

    public function delete_product($product_id){
        DB::table('tbl_product')->where('id', $product_id)->delete();
        Session::put('message','Xóa sản phẩm thành công');
        return \redirect()->action([ProductController::class, 'all_product']);
    }

    public function update_product(Request $request, $product_id){
        $data = array();
        $data['name'] = $request->product_name;
        $data['desc'] = $request->product_desc;
        DB::table('tbl_product')->where('id', $product_id)->update($data);
        Session::put('message','Chỉnh sửa sản phẩm thành công');
        return \redirect()->action([ProductController::class, 'all_product']);
    }

}
