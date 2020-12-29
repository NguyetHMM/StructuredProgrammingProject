@extends('user-layout')
@section('user-content')
        <div id="heading-breadcrumbs">
            <div class="container">
 
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">

                    <div class="col-sm-3">
                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Categories</h3>
                            </div>

                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked category-menu">
                                    <li>
                                        @foreach($category as $key => $cate)
                                        <ul>
                                            <li><a href="#" value="{{($cate->category_id)}}">{{$cate->category_name}}</a>
                                            </li>
                                        </ul>
                                        @endforeach
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Brands</h3>
                                <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i>
                                    <span class="hidden-sm">Clear</span></a>
                            </div>

                            <div class="panel-body">

                                <form>
                                    <div class="form-group">
                                        @foreach($brand as $key => $brand)
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="{{($brand->brand_id)}}">{{$brand->brand_name}}
                                            </label>
                                        </div>  
                                        @endforeach
                                    </div>

                                    <button class="btn btn-default btn-sm btn-template-main"><i
                                            class="fa fa-pencil"></i> Apply</button>
                                </form>

                            </div>
                        </div>

                        <div class="banner">
                            <a href="shop-category.html">
                                <img src="{{asset('Order/img/banner.jpg')}}" alt="sales 2014" class="img-responsive">
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-9">

                        <div class="row products">
                            @foreach($all_product as $key => $pro)
                            <div class="col-md-4 col-sm-6">
                                <div class="product">
                                    <div class="image">
                                        <a href="{{URL::to('ordermodule/productDetail/'.$pro->product_id)}}">
                                            <img src = "{{ asset('products/'.$pro->product_image) }}" alt="" class="img-responsive image1">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h3><a href="{{URL::to('ordermodule/productDetail/'.$pro->product_id)}}">{{ $pro->product_name }}</a>
                                        </h3>
                                        <p class="price">{{ $pro->product_price }}</p>
                                        <p class="buttons">
                                            <a href="shop-detail.html" class="btn btn-default">View detail</a>
                                            <a href="shop-basket.html" class="btn btn-template-main"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>


                        <div class="row">

                            <div class="col-md-12 banner">
                                <a href="#">
                                    <img src="img/banner2.jpg" alt="" class="img-responsive">
                                </a>
                            </div>

                        </div>

                        <div class="pages">

                            <p class="loadMore">
                                <a href="#" class="btn btn-template-main"><i class="fa fa-chevron-down"></i> Load
                                    more</a>
                            </p>

                            <ul class="pagination">
                                <li><a href="#">&laquo;</a>
                                </li>
                                <li class="active"><a href="#">1</a>
                                </li>
                                <li><a href="#">2</a>
                                </li>
                                <li><a href="#">3</a>
                                </li>
                                <li><a href="#">4</a>
                                </li>
                                <li><a href="#">5</a>
                                </li>
                                <li><a href="#">&raquo;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="get-it">
            <div class="container">
                <div class="col-md-8 col-sm-12">
                </div>
                <div class="col-md-4 col-sm-12">
                </div>
            </div>
        </div>
@endsection