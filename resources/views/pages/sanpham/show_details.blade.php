@extends('layout')
@section('content')

@foreach($product_details as $key => $value)
<div class="product-details"><!--product-details-->
	<div class="col-sm-5">
		<div class="view-product">
			<img src="{{URL::to('public/uploads/product/'.$value->product_image)}}" alt="" />
			{{-- <h3>ZOOM</h3> --}}
		</div>
		<div id="similar-product" class="carousel slide" data-ride="carousel">
			
				<!-- Controls -->
				<a class="left item-control" href="#similar-product" data-slide="prev">
				<i class="fa fa-angle-left"></i>
				</a>
				<a class="right item-control" href="#similar-product" data-slide="next">
				<i class="fa fa-angle-right"></i>
				</a>
		</div>

	</div>
	<div class="col-sm-7">
		<div class="product-information"><!--/product-information-->
			<img src="images/product-details/new.jpg" class="newarrival" alt="" />
			<h2>{{$value->product_name}}</h2>
			{{-- <p>Sản Phẩm ID: {{$value->product_id}}</p> --}}
			<img src="images/product-details/rating.png" alt="" />

			<form action="{{URL::to('/save-cart')}}" method="POST">
				{{ csrf_field() }}
				<span>
					<span>{{number_format($value->product_price).' '.'VND'}}</span>
					<label>Số Lượng:</label>
					<input name="qty" type="number" min="1" value="1" />
					<input name="productid_hidden" type="hidden" value="{{$value->product_id}}" />
					<button type="submit" class="btn btn-fefault cart">
						<i class="fa fa-shopping-cart"></i>
						Thêm Vào Giỏ Hàng
					</button>
					
			</span>
			</form>

			<p><b>Điều Kiện:</b> Còn hàng</p>
			<p><b>Tình Trạng:</b> Mới 100%</p>
			<p><b>Danh Mục:</b> {{$value->category_name}}</p>
			<p><b>Thương Hiệu:</b> {{$value->brand_name}}</p>
			<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
		</div><!--/product-information-->
	</div>
</div><!--/product-details-->
@endforeach

<div class="category-tab shop-details-tab"><!--category-tab-->
	<div class="col-sm-12">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#details" data-toggle="tab">Mô Tả</a></li>
			{{-- <li><a href="#reviews" data-toggle="tab">Đánh Giá</a></li> --}}
		</ul>
	</div>
	<div class="tab-content">
		<div class="tab-pane fade active in" id="details" >
			<p>
				{!!$value->product_desc!!}                                
			</p>																						
		</div>
												
	</div>
</div><!--/category-tab-->
<div class="recommended_items"><!--recommended_items-->
	<h2 class="title text-center">Sản phẩm liên quan</h2>
	
	<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
			@foreach($relate as $key => $lienquan)	
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<img style="width: 250px; height: 280px" src="{{URL::to('public/uploads/product/'.$lienquan->product_image)}}" alt="" />
								<h2>{{number_format($lienquan->product_price).' '.'VND'}}</h2>
								<p>{{$lienquan->product_name}}</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ Hàng</a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
</div><!--/recommended_items-->
{{-- tru so luong --}}
@endsection