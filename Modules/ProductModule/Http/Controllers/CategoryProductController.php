<?php

namespace Modules\ProductModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class CategoryProductController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    public function add_category_product(){
        return view('productmodule::admin.add_category_product');
    }

    public function all_category_product(){
        $all_category_product = DB::table('tbl_category_product')->get();
        $manager_category_product = view('productmodule::admin.all_category_product')
        ->with('all_category_product', $all_category_product);
        return view('admin')->with('all_category_product', $manager_category_product); 
    }


    public function save_category_product(Request $request){
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_product_status;
        
        DB::table('tbl_category_product')->insert($data);
        Session::put('message','Thêm danh mục sản phẩm thành công');
        return \redirect()->action([CategoryProductController::class, 'add_category_product']);       
    }

    public function unactive_category_product($category_product_id){
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update(['category_status'=>0]);
        Session::put('message','Hủy kích hoạt danh mục sản phẩm thành công');
        return \redirect()->action([CategoryProductController::class, 'all_category_product']);
    }

    public function active_category_product($category_product_id){
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update(['category_status'=>1]);
        Session::put('message','Kích hoạt danh mục sản phẩm thành công');
        return \redirect()->action([CategoryProductController::class, 'all_category_product']);
    }

    public function edit_category_product($category_product_id){
        $edit_category_product = DB::table('tbl_category_product')->where('category_id', $category_product_id)->get();
        
        $manager_category_product = view('productmodule::admin.edit_category_product')->with('edit_category_product', $edit_category_product);
        return view('admin')->with('edit_category_product', $manager_category_product);
    }

    public function delete_category_product($category_product_id){
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->delete();
        Session::put('message','Xóa danh mục sản phẩm thành công');
        return \redirect()->action([CategoryProductController::class, 'all_category_product']);
    }

    public function update_category_product(Request $request, $category_product_id){
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update($data);
        Session::put('message','Chỉnh sửa danh mục sản phẩm thành công');
        return \redirect()->action([CategoryProductController::class, 'all_category_product']);
    }

}
