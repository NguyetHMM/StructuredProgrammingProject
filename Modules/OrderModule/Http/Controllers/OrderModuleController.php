<?php

namespace Modules\OrderModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

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
        $data_product = DB::table('order_detail')->get()->where('product_id','2');
        // $data['product_id'] = $request->product_id;
        // $data['order_id'] = $request->product_id;
        // $data['price'] = $request->price;
        // $data['quantity'] = $request->product_qty;
        // $data['size'] = $request->size;
        // dd($data);
        return view('order::showOrderForm')->with('all_product', $data_product);
        // return view('ordermodule::showOrderForm');
    }

    public function show_detail(){
        return view('ordermodule::productDetail');
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
