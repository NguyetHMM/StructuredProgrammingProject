<?php

namespace Modules\ProductModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Session;

class ProductModuleController extends Controller
{
   public function index()
    {
        return view('productmodule::index');
    }
}
