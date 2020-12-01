@extends('productmodule::admin')
@section('admin_content')
    

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sửa thương hiệu sản phẩm
                        </header>
                        <div class="panel-body">
                            @foreach($edit_brand_product as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('productmodule/update-brand-product/'.$edit_value->brand_id)}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên thương hiệu</label>
                                <input type="text" value="{{$edit_value->brand_name}}" name="brand_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên thương hiệu">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả thương hiệu</label>
                                    <textarea class="form-control" style="resize: none" rows="5" name="brand_product_desc" id="exampleInputPassword1" ">{{$edit_value->brand_desc}}</textarea>
                                </div>
                                
                                <button type="submit" name="update_brand_product" class="btn btn-info">Sửa thương hiệu</button>
                            </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
        </div>
        @endsection