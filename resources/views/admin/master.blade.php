<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="{{ URL::asset('js/html5shiv.js') }}"></script>
	<script src="{{ URL::asset('js/respond.min.js') }}"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
					<a class="navbar-brand" href="{!! url('admin'); !!}"><span><img src="{{ URL::asset('images/Company-Logo.png')}}" width="auto" height="35px"></span></a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-4 col-lg-3 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="{{ URL::asset('images/adminImage.png')}}" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Admin</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>

		<ul class="nav menu">
			{{-- Main Admin Menu --}}
			<li class="active"><a href="{!! url('admin/'); !!}"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1" class="collapsed" aria-expanded="false">
				<em class="fa fa-home">&nbsp;</em> Home <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right collapsed" aria-expanded="false"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1" aria-expanded="false" style="height: 0px;">
					<li>
						<a class="" href="{!! url('admin/addPost/slider'); !!}">
							<span class="fa fa-plus">&nbsp;</span> Add Slider
						</a>
					</li>
					<li>
						<a class="" href="{!! url('admin/singlePostType/slider'); !!}">
							<span class="fa fa-list-ul">&nbsp;</span> Slider List
						</a>
					</li>

					<li>
						<a class="" href="{!! url('admin/addPost/testimonial'); !!}">
							<span class="fa fa-plus">&nbsp;</span> Add Testimonial
						</a>
					</li>
					
					<li>
						<a class="" href="{!! url('admin/singlePostType/testimonial'); !!}">
							<span class="fa fa-list-ul">&nbsp;</span> Testimonial List
						</a>
					</li>

					<li>
						<a class="" href="{!! url('admin/addPost/team_member'); !!}">
							<span class="fa fa-plus">&nbsp;</span> Add Team Member
						</a>
					</li>
					
					<li>
						<a class="" href="{!! url('admin/singlePostType/team_member'); !!}">
							<span class="fa fa-list-ul">&nbsp;</span> Team Member List
						</a>
					</li>

					<li>
						<a class="" href="{!! url('admin/addPost/about'); !!}">
							<span class="fa fa-refresh">&nbsp;</span> Update About
						</a>
					</li>
					<li>
						<a class="" href="{!! url('admin/addPost/service'); !!}">
							<span class="fa fa-refresh">&nbsp;</span> Update Service
						</a>
					</li>
					<li>
						<a class="" href="{!! url('admin/addHomeBlock'); !!}">
							<span class="fa fa-refresh">&nbsp;</span> Update 4 Blocks
						</a>
					</li>


					{{-- <li><a class="" href="#">
						<span class="fa fa-list">&nbsp;</span> List
					</a></li> --}}
				</ul>
			</li>			
			<li class="parent "><a data-toggle="collapse" href="#sub-item-2" class="collapsed" aria-expanded="false">
				<em class="fa fa-newspaper-o">&nbsp;</em> Media <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right collapsed" aria-expanded="false"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2" aria-expanded="false" style="height: 0px;">
					<li>
						<a class="" href="{!! url('admin/addMedia'); !!}">
							<span class="fa fa-plus">&nbsp;</span> Add New {{-- News or Advertorials --}}
						</a>
					</li>
					<li>
						<a class="" href="{!! url('admin/singlePostType/White_Papers'); !!}">
							<span class="fa fa-list-ul">&nbsp;</span> White_Papers List
						</a>
					</li>
					<li>
						<a class="" href="{!! url('admin/singlePostType/News'); !!}">
							<span class="fa fa-list-ul">&nbsp;</span> News List
						</a>
					</li>
					<li>
						<a class="" href="{!! url('admin/singlePostType/Downloads'); !!}">
							<span class="fa fa-list-ul">&nbsp;</span> Downloads List
						</a>
					</li>
					<li>
						<a class="" href="{!! url('admin/singlePostType/Gallery'); !!}">
							<span class="fa fa-list-ul">&nbsp;</span> Gallery List
						</a>
					</li>
					<li>
						<a class="" href="{!! url('admin/singlePostType/Events'); !!}">
							<span class="fa fa-list-ul">&nbsp;</span> Events List
						</a>
					</li>

				</ul>
			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-3" class="collapsed" aria-expanded="false">
				<em class="fa fa-user">&nbsp;</em> Partners & Clients <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right collapsed" aria-expanded="false"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-3" aria-expanded="false" style="height: 0px;">
					<li>
						<a class="" href="{!! url('admin/addPost/partners'); !!}">
						<span class="fa fa-refresh">&nbsp;</span> Partners {{-- News or Advertorials --}}
						</a>
					</li>
					<li>
						<a class="" href="{!! url('admin/addPost/clients'); !!}">
						<span class="fa fa-refresh">&nbsp;</span> Clients {{-- News or Advertorials --}}
						</a>
					</li>
				</ul>
			</li>

			<li class="parent "><a data-toggle="collapse" href="#sub-item-4" class="collapsed" aria-expanded="false">
				<em class="fa fa-file-audio-o">&nbsp;</em> Story <span data-toggle="collapse" href="#sub-item-4" class="icon pull-right collapsed" aria-expanded="false"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-4" aria-expanded="false" style="height: 0px;">
					<li>
						<a class="" href="{!! url('admin/addPost/male_shop'); !!}">
						<span class="fa fa-refresh">&nbsp;</span> Male Shops x 2
						</a>
					</li>
					<li>
						<a class="" href="{!! url('admin/addPost/hulhumale'); !!}">
						<span class="fa fa-refresh">&nbsp;</span> Hulhumale’ Link{{--  Serve Plus --}}
						</a>
					</li>
					<li>
						<a class="" href="{!! url('admin/addPost/kulhudhuffushi'); !!}">
						<span class="fa fa-refresh">&nbsp;</span> Kulhudhuffushi
						</a>
					</li>
					<li>
						<a class="" href="{!! url('admin/addPost/addu_city'); !!}">
						<span class="fa fa-refresh">&nbsp;</span> Addu City Link Serve Plus
						</a>
					</li>
					
				</ul>
			</li>			
			<li class="parent "><a data-toggle="collapse" href="#sub-item-5" class="collapsed" aria-expanded="false">
				<em class="fa fa-fort-awesome">&nbsp;</em> Brands <span data-toggle="collapse" href="#sub-item-5" class="icon pull-right collapsed" aria-expanded="false"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-5" aria-expanded="false" style="height: 0px;">
					<li>
						<a class="" href="{!! url('admin/addPost/corporate_brand'); !!}">
						<span class="fa fa-refresh">&nbsp;</span>Corporate Brands
						</a>
					</li>
					<li>
						<a class="" href="{!! url('admin/addPost/product_brands'); !!}">
						<span class="fa fa-refresh">&nbsp;</span>Product Brands
						</a>
					</li>
				</ul>
			</li>	
			<li class="parent "><a data-toggle="collapse" href="#sub-item-6" class="collapsed" aria-expanded="false">
				<em class="fa fa-id-card">&nbsp;</em> Profile <span data-toggle="collapse" href="#sub-item-6" class="icon pull-right collapsed" aria-expanded="false"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-6" aria-expanded="false" style="height: 0px;">
					<li>
						<a class="" href="{!! url('admin/addPost/about_us') !!}">
							<span class="fa fa-refresh">&nbsp;</span>About Us
						</a>
					</li>
					<li>
						<a class="" href="{!! url('admin/addPost/mission') !!}">
							<span class="fa fa-refresh">&nbsp;</span>Mission
						</a>
					</li>
					<li>
						<a class="" href="{!! url('admin/addPost/vision') !!}">
							<span class="fa fa-refresh">&nbsp;</span>Vision
						</a>
					</li>
					<li>
						<a class="" href="{!! url('admin/addPost/values') !!}">
							<span class="fa fa-refresh">&nbsp;</span>Values
						</a>
					</li>
					<li>
						<a class="" href="{!! url('admin/addPost/our_team') !!}">
							<span class="fa fa-refresh">&nbsp;</span>Our Team
						</a>
					</li>		
				</ul>
			</li>		
			<li class="parent "><a data-toggle="collapse" href="#sub-item-7" class="collapsed" aria-expanded="false">
				<em class="fa fa-shield">&nbsp;</em> Services <span data-toggle="collapse" href="#sub-item-7" class="icon pull-right collapsed" aria-expanded="false"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-7" aria-expanded="false" style="height: 0px;">

					<li>
						<a href="{!! url('admin/addPost/f__sla') !!}">
							<span class="fa fa-refresh">&nbsp;</span>SLA
						</a>		
					</li>		
					<li>
						<a href="{!! url('admin/addPost/f__island') !!}">
							<span class="fa fa-refresh">&nbsp;</span>Island Customers
						</a>		
					</li>		
					<li>
						<a href="{!! url('admin/addPost/f__hotel_resort_customer') !!}">
							<span class="fa fa-refresh">&nbsp;</span>Hotel & Resort Customers
						</a>		
					</li>		
					<li>
						<a href="{!! url('admin/addPost/f__government_customer') !!}">
							<span class="fa fa-refresh">&nbsp;</span>Government Customers
						</a>		
					</li>		
					<li>
						<a href="{!! url('admin/addPost/f__wholesale') !!}">
							<span class="fa fa-refresh">&nbsp;</span>Wholesale
						</a>		
					</li>		
					<li>
						<a href="{!! url('admin/addPost/f__retail') !!}">
							<span class="fa fa-refresh">&nbsp;</span>Retail
						</a>		
					</li>
								
				</ul>
			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-8" class="collapsed" aria-expanded="false">
				<em class="fa fa-handshake-o">&nbsp;</em> Link Serve & You <span data-toggle="collapse" href="#sub-item-8" class="icon pull-right collapsed" aria-expanded="false"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-8" aria-expanded="false" style="height: 0px;">

					<li>
						<a href="{!! url('admin/addPost/f__guarantees_warranties') !!}">
							<span class="fa fa-refresh">&nbsp;</span>SLA
						</a>		
					</li>		
					<li>
						<a href="{!! url('admin/addPost/f__goods_return_policy') !!}">
							<span class="fa fa-refresh">&nbsp;</span>Island Customers
						</a>		
					</li>		
					<li>
						<a href="{!! url('admin/addPost/f__career') !!}">
							<span class="fa fa-refresh">&nbsp;</span>Hotel & Resort Customers
						</a>		
					</li>		
					<li>
						<a href="{!! url('admin/addPost/f__job_opportunities') !!}">
							<span class="fa fa-refresh">&nbsp;</span>Government Customers
						</a>		
					</li>					
				</ul>
			</li>										
			<li>
				<a href="{!! url('admin/addPost/privacy_policy'); !!}"><em class="fa fa-lock">&nbsp;</em> Privacy policy</a>
			</li>
			<li>
				<a href="{!! url('subscribes'); !!}"><em class="fa fa-address-book">&nbsp;</em> Subscribers</a></li>
			<li>
				<a href="{!! url('admin/addSocialLink'); !!}"><em class="fa fa-odnoklassniki">&nbsp;</em> Social Links</a>
			</li>
			<li>
				<a href="{!! url('admin/addPost/solution'); !!}"><em class="fa fa-cloud">&nbsp;</em> Solution</a></li>
			<li>
				<a href="{!! url('admin/addPost/contact'); !!}"><em class="fa fa-address-card">&nbsp;</em> Contact Address</a></li>
			<li>
				<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" ><em class="fa fa-power-off">&nbsp;</em> Logout</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                {{ csrf_field() }}
	            </form>
			</li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-8 col-sm-offset-4 col-lg-9 col-lg-offset-3 main">
{{-- 		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div> --}}<!--/.row-->
		
{{-- 		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div> --}}<!--/.row-->
		
		<div class="panel panel-container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              @if(Session::has('success'))
              <div class="alert alert-success">
                <strong>Success!</strong> {{ Session::get('success') }}
              </div>
              @endif
              
              @if(Session::has('error'))
              <div class="alert alert-danger">
                <strong>Error!</strong> {{ Session::get('error') }}
              </div>
              @endif   
                         
              @if(count($errors)>0)
              <div class="alert alert-danger">
                <strong>Error!</strong> 
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
              </div>
              @endif


            </div>
          </div>			
			@yield('content')
{{-- 			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
							<div class="large">120</div>
							<div class="text-muted">New Orders</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
							<div class="large">52</div>
							<div class="text-muted">Comments</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large">24</div>
							<div class="text-muted">New Users</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
							<div class="large">25.2k</div>
							<div class="text-muted">Page Views</div>
						</div>
					</div>
				</div>
			</div> --}}<!--/.row-->
		</div>

	</div>	<!--/.main-->
	
	<script src="{{ URL::asset('js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	{{-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> --}}
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=lqzao4m0yjucdmxlhhwmmmmx4ekeejewdcpfuzdak15143zh"></script>
	<script src="{{ URL::asset('js/custom.js') }}"></script>
	@yield('custom_page_script')
		
</body>
</html>