@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhật danh mục sản phẩm
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
                            @foreach($edit_category_product as $key => $edit_value)
                            <form role="form" action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" method="post">
                                {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <input type="text" value="{{$edit_value->category_name}}" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả danh mục</label>
                                <textarea class="form-control" style="resize: none" rows="5" name="category_product_desc" id="exampleInputPassword1" placeholder="Mô tả danh mục"
                                >{{$edit_value->category_desc}}</textarea>
                            </div>
                            <div class="form-group">
                            
                            
                            <button type="submit" name="update_category" class="btn btn-info">Cập nhật</button>
                        </form>
                        </div>
                            @endforeach
                        </div>
                    </section>

            </div>
            
@endsection