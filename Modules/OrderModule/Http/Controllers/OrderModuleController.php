<?php

namespace Modules\OrderModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Modules\OrderModule\Entities\OrderDetailModel as OrderDetailModel;
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
        $products = DB::table('order_detail')->get();
        return view('ordermodule::showOrderForm',compact('products'));
    }

    public function addToCart(Request $request)
    {
        $addQuantity = DB::table('order_detail')->where('product_id',$request->product_id)->get();
        // Handle save to database 
        // dd($request->product_qty);

        if($addQuantity[0]->quantity){
            // $addQuantity = OrderDetailModel::find($check);
            $qty = $addQuantity[0]->quantity;
            DB::table('order_detail')
            ->where('product_id',$request->product_id)
            ->update(['quantity' => ($qty+$request->product_qty)]);
            
        } else{
            $data['product_id'] = $request->product_id;
            $data['order_id'] = $request->product_id;
            $data['price'] = $request->price;
            $data['quantity'] = $request->product_qty;

            DB::table('order_detail')->insert($data);
        }
        return redirect()->action([OrderModuleController:: class,'show']);
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
