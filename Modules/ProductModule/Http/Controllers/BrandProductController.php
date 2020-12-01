<?php

namespace Modules\ProductModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class BrandProductController extends Controller
{
    public function index()
    {
        return view('productmodule::admin');
    }

    public function add_brand_product(){
        return view('productmodule::admin.add_brand_product');
    }

    public function all_brand_product(){
        $all_brand_product = DB::table('tbl_brand')->get();
        $manager_brand_product = view('productmodule::admin.all_brand_product')->with('all_brand_product', $all_brand_product);
        return view('productmodule::admin')->with('all_brand_product', $manager_brand_product); 
    }


    public function save_brand_product(Request $request){
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
        $data['brand_status'] = $request->brand_product_status;
        
        DB::table('tbl_brand')->insert($data);
        Session::put('message','Thêm thương hiệu sản phẩm thành công');
        return \redirect()->action([BrandProductController::class, 'add_brand_product']);       
    }

    public function unactive_brand_product($brand_product_id){
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->update(['brand_status'=>0]);
        Session::put('message','Hủy kích hoạt thương hiệu sản phẩm thành công');
        return \redirect()->action([BrandProductController::class, 'all_brand_product']);
    }

    public function active_brand_product($brand_product_id){
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->update(['brand_status'=>1]);
        Session::put('message','Kích hoạt thương hiệu sản phẩm thành công');
        return \redirect()->action([BrandProductController::class, 'all_brand_product']);
    }

    public function edit_brand_product($brand_product_id){
        $edit_brand_product = DB::table('tbl_brand')->where('brand_id', $brand_product_id)->get();
        
        $manager_brand_product = view('productmodule::admin.edit_brand_product')->with('edit_brand_product', $edit_brand_product);
        return view('productmodule::admin')->with('edit_brand_product', $manager_brand_product);
    }

    public function delete_brand_product($brand_product_id){
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->delete();
        Session::put('message','Xóa thương hiệu sản phẩm thành công');
        return \redirect()->action([BrandProductController::class, 'all_brand_product']);
    }

    public function update_brand_product(Request $request, $brand_product_id){
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->update($data);
        Session::put('message','Chỉnh sửa thương hiệu sản phẩm thành công');
        return \redirect()->action([BrandProductController::class, 'all_brand_product']);
    }

}
