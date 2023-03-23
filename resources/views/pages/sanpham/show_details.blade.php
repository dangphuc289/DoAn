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
												
		{{-- <div class="tab-pane fade" id="reviews" >
			<div class="col-sm-12">
				<ul>
					<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
					<li><a href=""><i class="fa fa-clock-o"></i>08:41 PM</a></li>
					<li><a href=""><i class="fa fa-calendar-o"></i>12 July 2022</a></li>
				</ul>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				<p><b>Đánh Giá Của Bạn:</b></p>
				
				<form action="#">
					<span>
						<input type="text" placeholder="Tên của bạn"/>
						<input type="email" placeholder="Email"/>
					</span>
					<textarea name="" ></textarea>
					<b>Xếp Hạng: </b> <img src="images/product-details/rating.png" alt="" />
					<button type="button" class="btn btn-default pull-right">
						Gửi
					</button>
				</form>
			</div>
		</div>							 --}}
	</div>
</div><!--/category-tab-->
                    
@endsection