
<!DOCTYPE html>
<head>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{asset('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" type="text/css"/>
<link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet"> 
<link rel="stylesheet" href="{{asset('public/backend/css/morris.css')}}" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="{{asset('public/backend/css/monthly.css')}}">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="{{asset('public/backend/js/jquery2.0.3.min.js')}}"></script>
<script src="{{asset('public/backend/js/raphael-min.js')}}"></script>
<script src="{{asset('public/backend/js/morris.js')}}"></script>

</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="{{URL::to('/dashboard')}}" class="logo">
        ADMIN
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="{{URL::to('public/backend/images/11.jpg')}}" width="50px" height="30px" style="border-radius: 50%">
                <span class="username">
                    <?php
                        use Illuminate\Support\Facades\Session;
						$name= Session::get('admin_name');
						if($name){
							echo $name;
							Session::put('message',null);
						}
                    ?>
                </span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="{{URL::to('/logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{URL::to('/dashboard')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Tổng quan</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Danh mục sản phẩm</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('add-category-product')}}">Thêm danh mục sản phẩm</a></li>
						<li><a href="{{URL::to('all-category-product')}}">Liệt kê danh mục sản phẩm</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Thương hiệu sản phẩm</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('add-brand-product')}}">Thêm thương hiệu sản phẩm</a></li>
						<li><a href="{{URL::to('all-brand-product')}}">Liệt kê thương hiệu sản phẩm</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Sản phẩm</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('add-product')}}">Thêm sản phẩm</a></li>
						<li><a href="{{URL::to('all-product')}}">Liệt kê sản phẩm</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-users"></i>
                        <span>Khách Hàng</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('/add-user')}}">Thêm Khách Hàng</a></li>
						<li><a href="{{URL::to('/all-user')}}">Liệt Kê Khách Hàng</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Đơn hàng</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('/manage-order')}}">Quản lý đơn hàng</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Thống kê</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('/manage')}}"> Doanh thu theo tháng</a></li>
                        <li><a href="{{URL::to('/manager-order')}}"> Đơn hàng theo tháng</a></li>
                        <li><a href="{{URL::to('/manage-day')}}"> Doanh thu theo ngày</a></li>
                    </ul>
                </li>

            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
        @yield('admin_content')
</section>
 <!-- footer -->
		  <div class="footer" style="position: fixed; bottom: 0; right:0;">
			<div class="wthree-copyright">
			  <p>©Design by Đặng Phức</p>
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="{{asset('public/backend/js/bootstrap.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/backend/js/scripts.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset('public/backend/js/jquery.scrollTo.js')}}"></script>
<!-- morris JavaScript -->	

<div class="chart" >
    <canvas id="myChart"  style="background-color: white; "></canvas>

    <script>
        // Lấy dữ liệu từ controller truyền sang view
        var months = {!! json_encode($data['months']) !!};
        var totals = {!! json_encode($data['totals']) !!};

        // Tạo biểu đồ
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: months,
                datasets: [{
                    label: 'Tổng giá trị đơn hàng',
                    data: totals,
                    backgroundColor: 'rgb(1,174,239)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }
                // {
                //     label: 'Số đơn hàng',
                //     data: counts,
                //     type: 'line',
                //     fill: false,
                //     borderColor: 'rgb(255, 162, 235)',
                //     borderWidth: 1

                // }
            ]
            },
            
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: Math.max(...totals) + 100000 // Điều chỉnh giá trị trục y
                    }
                }
            }
        });
    </script>
</div>
<style>
    .chart{
        height: 1000px; 
        width:1500px;
        margin-left: 290px;

    }
</style>
</body>
</html>
