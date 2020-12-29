@extends('main')
@section('product_name')
    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>PAYMENT MODULE</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div id="content">
            <div class="container">

                <div class="row">

                    <div class="col-md-9 clearfix" id="checkout">

                        <div class="box">
                            <form method="post" action="shop-checkout2.html">

                                <ul class="nav nav-pills nav-justified">
                                    <li class="active"><a href="#"><!--<i class="fa fa-map-marker">--></i><br>Payment</a>
                                    </li>
                                    {{-- <li class="disabled"><a href="#"><i class="fa fa-truck"></i><br>Delivery Method</a>
                                    </li>
                                    <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Payment Method</a>
                                    </li>
                                    <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a>
                                    </li> --}}
                                </ul>

                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="firstname"></label>
                                                <input type="text" class="form-control" placeholder="Frist Name" id="firstname" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="lastname"></label>
                                                <input type="text" class="form-control" placeholder="Last Name" id="lastname" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="street"></label>
                                                <input type="text" class="form-control" placeholder="Address" id="street" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email"></label>
                                                <input type="text" class="form-control" placeholder="Email" id="email" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="phone_num"></label>
                                                <input type="text" class="form-control" placeholder="Phone number" id="phone_num" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="box-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back to basket</a>
                                    </div>
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-template-main">Continue to Delivery Method<i class="fa fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.box -->

                    </div>
                
                    <!-- /.col-md-9 -->

                    <div class="col-md-3">

                        <div class="box" id="order-summary">
                            <div class="box-header">
                                <h3>Order summary</h3>
                            </div>
                            <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>
                                       
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <?php
                                        $cost_cart = 0;
                                        $ship=30000
						                ?>
						                @foreach ($products as $val)
						                 <?php 
						                 	$total = $val->price * $val->quantity;
						                	$cost_cart += $total
                                         ?>
                                        @endforeach

                                        <tr>
                                            <td>Order subtotal</td>
                                            <th>{{$cost_cart}}</th>
                                            
                                        </tr>
                                        <tr>
                                            <td>Delivery Money</td>
                                            <th>{{$ship}}</th>
                                        </tr>
                                        <?php
                                        $total=$cost_cart + $ship
						                ?>
                                        
                                        <tr class="Total">
                                            <td>Total Money</td>
                                            <th>{{$total}}</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
@endsection