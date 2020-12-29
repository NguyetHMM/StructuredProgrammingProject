<?php

namespace Modules\PaymentModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

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

   

    public function check(){
        $data_product = DB::table('order_detail')->where('order_id',1)->get();

        return view('paymentmodule::shop-checkout')->with('products', $data_product);
    }

    public function checkout(Request $r){
        return \redirect()->action([PaymentModuleController::class, 'show']);
                // return view('paymentmodule::shop-checkout');

    }
}
