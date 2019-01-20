<!doctype html>
<html lang="en">
<head>
	<title>ADMIN</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{url('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('admin/assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{url('admin/assets/vendor/chartist/css/chartist-custom.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{url('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{url('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{url('admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{url('admin/assets/img/favicon.png')}}">

	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="{{url('adminpanel')}}">Parking App</a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				
					<div id="navbar-menu">
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="{{route('adminhome')}}" class="active"><i class="lnr lnr-home"></i> <span>Thông Kê</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-list"></i> <span></span>Bãi đổ<i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="{{route('listpark')}}" class="">Danh sách</a></li>
									<li><a href="" class="">Thêm mới</a></li>
								</ul>
							</div>
						</li>
						<li><a href="{{route('order')}}" ><i class="fa fa-user-secret"></i> <span>Booking</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</nav>
			</div>
		</div>

		@yield('content')





	
	<!-- Javascript -->
	<script src="{{url('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{url('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{url('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{url('admin/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{url('admin/assets/vendor/chartist/js/chartist.min.js')}}"></script>
	<script src="{{url('admin/assets/scripts/klorofil-common.js')}}"></script>
	<script src="{{url('admin/ckeditor/ckeditor.js')}}" type="text/javascript" language="javascript"></script>
</body>

</html>
