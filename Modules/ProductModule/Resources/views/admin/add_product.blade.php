@extends('admin')
@section('admin_content')


<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm sản phẩm
            </header>
            <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert" style="color:green; border: 1px solid red">'.$message.'</span>';
                    Session::put('message',null);
                }
            ?>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{route('save-product')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" name="product_name" class="form-control" 
                                placeholder="Tên sản phẩm" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                            <input type="text" name="product_price" class="form-control" 
                                placeholder="Giá sản phẩm" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                            <input type="file" id="imgInp" name="product_image" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label >Mô tả sản phẩm</label>
                            <textarea class="form-control" style="resize: none" rows="5" name="product_desc"
                                 placeholder="Mô tả sản phẩm" required></textarea>
                        </div>
                        <div class="form-group">
                            <label >Nội dung sản phẩm</label>
                            <textarea class="form-control" style="resize: none" rows="5" name="product_content"
                                 placeholder="Nội dung sản phẩm " required></textarea>
                        </div>
                        <div class="form-group">
                            <label >Danh mục sản phẩm</label>
                            <select name="product_cate" class="form-control input-sm m-bot15" required>
                                @foreach($cate_product as $key => $cate)
                                <option value="{{($cate->category_id)}}">{{$cate->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Thương hiệu sản phẩm</label>
                            <select name="product_brand" class="form-control input-sm m-bot15" required>
                                @foreach($brand_product as $key => $brand)
                                <option value="{{($brand->brand_id)}}">{{$brand->brand_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Tùy chọn hiển thị</label>
                            <select name="product_status" class="form-control input-sm m-bot15" required>
                                <option value="1">Hiển thị</option>
                                <option value="0">Ẩn</option>

                            </select>
                        </div>

                        <button type="submit" name="add_product" class="btn btn-info">Thêm sản phẩm</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
</div>
@endsection