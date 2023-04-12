@extends('layout')
@section('content')

<div class="features_items"><!--features_items-->
	<h2 class="title text-center">KẾT QUẢ TÌM KIẾM</h2>
		@foreach($search_price as $key => $price)
			<div class="col-sm-4">
				<div class="product-image-wrapper">
                    <a href="{{URL::to('/chi-tiet-san-pham/'.$price->product_id)}}">
					    <div class="single-products">
						    <div class="productinfo text-center">
							    <img style="width:250px; height:300px;" src="{{URL::to('public/uploads/product/'.$price->product_image)}}" alt="" />
							    <h2>{{number_format($price->product_price).' '.'VND'}}</h2>
							    <p>{{$price->product_name}}</p>
							    <!-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ Hàng</a> -->
								<button type="button" class="btn btn-default add-to-cart" data-id="{{$price->product_id}}" name="add-to-cart">Thêm Vào Giỏ Hàng</button>
						    </div>						
					    </div>
                    </a>

					<div class="choose">
						<ul class="nav nav-pills nav-justified">
							<li><a href="#"><i class="fa fa-plus-square"></i>Yêu Thích</a></li>
							<li><a href="#"><i class="fa fa-plus-square"></i>So Sánh</a></li>
						</ul>
					</div>
				</div>
			</div>
		@endforeach													
</div><!--features_items-->                   
@endsection