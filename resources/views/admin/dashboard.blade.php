@extends('admin_layout')
@section('admin_content')
<div class="market-updates">
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-2">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-eye"> </i>
            </div>
             <div class="col-md-8 market-update-left">
             <h4>Lượt ghé thăm</h4>
            <h3>126</h3>
            <p>Tổng số khách hàng đã ghé thăm.</p>
          </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-1">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-users" ></i>
            </div>
            <div class="col-md-8 market-update-left">
            <h4>Người dùng</h4>
                <h3>{{$count_user}}</h3>
                <p>Tổng số tài khoản người dùng.</p>
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-3">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-usd"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Sản phẩm</h4>
                <h3>{{$count_pr}}</h3>
                <p>Tổng số lượng các mặt hàng.</p>
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-4">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Đơn hàng</h4>
                <h3>{{$count}}</h3>
                <p>Tổng số đơn hàng đã được đặt.</p>
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
   <div class="clearfix"> </div>
</div>	
<!-- //market-->
{{-- <div class="row">
    <div class="panel-body">
        <div class="col-md-12 w3ls-graph">
            <!--agileinfo-grap-->
                <div class="agileinfo-grap">
                    <div class="agileits-box">
                        <header class="agileits-box-header clearfix">
                            <h3>Visitor Statistics</h3>
                                <div class="toolbar">
                                    
                                    
                                </div>
                        </header>
                        <div class="agileits-box-body clearfix">
                            <div id="hero-area"></div>
                        </div>
                    </div>
                </div> --}}
<!--//agileinfo-grap-->

        </div>
    </div>
</div>
@endsection