<?php

namespace Modules\OrderModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
class OrderModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('ordermodule::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('ordermodule::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show()
    {
        return view('ordermodule::showOrderForm');
    }

    public function addToCart(Request $request)
    {
        // Handle save to database 
        $data_product = DB::table('order_detail')->where('order_id','1')->get();
        // $data['product_id'] = $request->product_id;
        // $data['order_id'] = $request->product_id;
        // $data['price'] = $request->price;
        // $data['quantity'] = $request->product_qty;
        // $data['size'] = $request->size;
        // dd($data);
        // foreach($data_product as $data1){
        //     dd($data1->quantity);
        // }
        return view('ordermodule::showOrderForm')->with('products', $data_product);
    }

    public function updateCart(){
        return view('ordermodule::index');
    }
    public function show_detail($product_id){
        $product = DB::table('tbl_product')->where('product_id',$product_id)->get();
        return view('ordermodule::productDetail')->with('show_detail', $product);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('ordermodule::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
