<?php

namespace Modules\PaymentModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
class PaymentModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('paymentmodule::index');
    }

   

    public function show(){
        $data_product = DB::table('orders')->where('user_id',Auth::user()->id)->get();
        // dd($data_product);
        return view('paymentmodule::shop-checkout')->with('products', $data_product);
    }

    public function checkout(Request $request){
        // dd($request);
        $order = [
            'user_id' => Auth::user()->id,
            'state' => "paid",
            'total' => $request->total,
            'orderDate' => now()
        ];

        DB::table('orders')->insert($order);
        return \redirect()->action([PaymentModuleController::class, 'show']);
        // return view('paymentmodule::shop-checkout');

    }
}
