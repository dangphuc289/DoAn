@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhật thương hiệu sản phẩm
                        </header>
                        <?php
                        use Illuminate\Support\Facades\Session;
		                    $message = Session::get('message');
		                    if($message){
			                    echo '<span class="text-alert">'.$message.'</span>';
			                    Session::put('message',null);
		                    }
	                    ?>
                        <div class="position-center">
                            @foreach($edit_brand_product as $key => $edit_value)
                            <form role="form" action="{{URL::to('/update-brand-product/'.$edit_value->brand_id)}}" method="post">
                                {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên thương hiệu</label>
                                <input type="text" value="{{$edit_value->brand_name}}" name="brand_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả</label>
                                <textarea class="form-control" style="resize: none" rows="5" name="brand_product_desc" id="exampleInputPassword1" placeholder="Mô tả danh mục"
                                >{{$edit_value->brand_desc}}</textarea>
                            </div>
                            <div class="form-group">
                            
                            
                            <button type="submit" name="update_brand" class="btn btn-info">Cập nhật</button>
                        </form>
                        </div>
                            @endforeach
                        </div>
                    </section>

            </div>
            
@endsection