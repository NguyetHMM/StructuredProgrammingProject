@extends('user-layout')
@section('user-content')

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

        <!-- *** LOGIN MODAL END *** -->
        
        
        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        @foreach ($show_detail as $key => $pro)
                        <h1>{{$pro->product_name}}</h1>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
       
        <div id="content">
            <div class="container">

                <div class="row">

                    <!-- *** BODY CONTENT ***
		    _________________________________________________________ -->
                    @foreach ($show_detail as $key => $pro)
                        
                    
                    <div >
                        <div class="row" id="productMain">
                            <div class="col-sm-4">
                                <div id="mainImage">
                                    <img src="{{ asset('products/'.$pro->product_image) }}" alt="" class="img-responsive" style="height: auto;">
                                </div>

                                <!-- /.ribbon -->
                                <!-- /.ribbon -->
                            </div>
                            <div  class="col-sm-4" id="details">
                                <p>
                                    <h4>Product details</h4>
                                    <p>{{ $pro->product_desc }}</p>
                                    <h4>Material & care</h4>
                                    <ul>
                                        <li>Polyester</li>
                                        <li>Machine wash</li>
                                    </ul>
                                    <h4>Size & Fit</h4>
                                    <ul>
                                        <li>Regular fit</li>
                                        <li>The model (height 5'8" and chest 33") is wearing a size S</li>
                                    </ul>
    
                                    <blockquote>
                                        <p><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em>
                                        </p>
                                    </blockquote>
                            </div>
                            <div class="col-sm-4-right">
                                <form action="{{route('addToCart')}}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="text-center">
                                        <label for="quantity" class="text-center" style="margin-right: 3%;"><strong>Quantity</strong></label>
                                        <input type="number" id="quantity" name="product_qty" value="1" style="width: 3%;">
                                    </div>
                                    <input type="hidden" value="124" name="price">   
                                    <input type="hidden" value="3" name="product_id">
                                    <!-- <input type="hidden" value="{{asset('')}}">      -->
                                    <p class="price">{{$pro->product_price}}</p>

                                    <p class="text-center" >
                                        <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                        <button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i>
                                        </button>
                                    </p>

                                </form>
                            </div>

                        </div>


                    
                    </div> 
                    @endforeach  
@endsection