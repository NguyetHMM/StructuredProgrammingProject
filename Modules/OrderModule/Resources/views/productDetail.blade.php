<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>


    <div id="all">
        @include('layouts.header')

        @foreach ($show_detail as $key => $pro)

            <div id="heading-breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <h1>{{ $pro->product_name }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div id="content">
            <div class="container">

                <div class="row">

                    <!-- *** BODY CONTENT ***-->
                    @foreach ($show_detail as $key => $pro)


                        <div>
                            <div class="row" id="productMain">
                                <div class="col-sm-4">
                                    <div id="mainImage">
                                        <img src="{{ asset('products/' . $pro->product_image) }}" alt=""
                                            class="img-responsive" style="height: auto;">
                                    </div>

                                    <!-- /.ribbon -->
                                    <!-- /.ribbon -->
                                </div>
                                <div class="col-sm-4" id="details">
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
                                        <p><em>Define style this season with Armani's new range of trendy tops, crafted
                                                with intricate details. Create a chic statement look by teaming this
                                                lace number with skinny jeans and pumps.</em>
                                        </p>
                                    </blockquote>
                                </div>
                                <div class="col-sm-4-right">
                                    <form action="{{ route('addToCart') }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="text-center">
                                            <label for="quantity" class="text-center"
                                                style="margin-right: 3%;"><strong>Quantity</strong></label>
                                            <input type="number" id="quantity" name="product_qty" value="1"
                                                style="width: 3%;">
                                        </div>
                                        <input type="hidden" value="124" name="price">
                                        <input type="hidden" value="3" name="product_id">
                                        <!-- <input type="hidden" value="{{ asset('') }}">      -->
                                        <p class="price">{{ $pro->product_price }}</p>

                                        <p class="text-center">
                                            <button type="submit" class="btn btn-template-main"><i
                                                    class="fa fa-shopping-cart"></i> Add to cart</button>
                                            <button type="submit" class="btn btn-default" data-toggle="tooltip"
                                                data-placement="top" title="Add to wishlist"><i
                                                    class="fa fa-heart-o"></i>
                                            </button>
                                        </p>

                                    </form>
                                </div>

                            </div>



                        </div>
                    @endforeach
                </div>
                @include('layouts.footer')

                <!-- #### JAVASCRIPT FILES ### -->

                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                <script>
                    window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')

                </script>
                <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

                <script src="js/jquery.cookie.js"></script>
                <script src="js/waypoints.min.js"></script>
                <script src="js/jquery.counterup.min.js"></script>
                <script src="js/jquery.parallax-1.1.3.js"></script>
                <script src="js/front.js"></script>





</body>

</html>
