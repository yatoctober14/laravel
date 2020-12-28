<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Control Panel</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/logo-top-1.png')}}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/color-01.css')}}">
	@yield('css')
	
</head>

<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Hotline: +201024795414" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: +201024795414</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								<li class="menu-item" ><a title="Register or Login" href="../login.html">Login</a></li>
								<li class="menu-item" ><a title="Register or Login" href="../register.html">Register</a></li>
								<li class="menu-item lang-menu menu-item-has-children parent">
									<a title="English" href="#"><span class="img label-before"><img src="{{asset('assets/images/lang-en.png')}}" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu lang" >
										<li class="menu-item" ><a title="Arabic" href="#"><span class="img label-before"><img src="{{asset('assets/images/lang-ara.png')}}" alt="lang-ara"></span>Arabic</a></li>
										<li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="{{asset('assets/images/lang-ger.png')}}" alt="lang-ger" ></span>German</a></li>
										<li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="{{asset('assets/images/lang-fra.png')}}" alt="lang-fre"></span>French</a></li>
									</ul>
								</li>
								<li class="menu-item menu-item-has-children parent" >
									<a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
										<li class="menu-item" >
											<a title="Egyptian Pound (EGP)" href="#">Egyptian Pound (EGP)</a>
										</li>
										<li class="menu-item" >
											<a title="Euro (EUR)" href="#">Euro (EUR)</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="{{route('index')}}" class="link-to-home"><img src="{{asset('assets/images/logo-top-1.png')}}" width="50px" alt="Electronics Store"></a>
						</div>

						<div class="wrap-search center-section">
							<div class="wrap-search-form">
								<form action="#" id="form-search-top" name="form-search-top">
									<input type="text" name="search" value="" placeholder="Search here...">
									<button form="form-search-top" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
									<div class="wrap-list-cate">
										<input type="hidden" name="product-cate" value="0" id="product-cate">
										<a href="#" class="link-control">All Category</a>
										<ul class="list-cate">
											<li class="level-0">All Category</li>
											<li class="level-1">-Electronics</li>
											<li class="level-2">Batteries & Chargens</li>
											<li class="level-2">Headphone & Headsets</li>
											<li class="level-2">Mp3 Player & Acessories</li>
											<li class="level-1">-Smartphone & Table</li>
											<li class="level-2">Batteries & Chargens</li>
											<li class="level-2">Mp3 Player & Headphones</li>
											<li class="level-2">Table & Accessories</li>
											<li class="level-1">-Electronics</li>
											<li class="level-2">Batteries & Chargens</li>
											<li class="level-2">Headphone & Headsets</li>
											<li class="level-2">Mp3 Player & Acessories</li>
											<li class="level-1">-Smartphone & Table</li>
											<li class="level-2">Batteries & Chargens</li>
											<li class="level-2">Mp3 Player & Headphones</li>
											<li class="level-2">Table & Accessories</li>
										</ul>
									</div>
								</form>
							</div>
						</div>

						<div class="wrap-icon right-section">
							<div class="wrap-icon-section wishlist">
								<a href="#" class="link-direction">
									<i class="fa fa-heart" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index">0 item</span>
										<span class="title">Wishlist</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section minicart">
								<a href="#" class="link-direction">
									<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index">4 items</span>
										<span class="title">CART</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">
					<div class="header-nav-section">
						<div class="container">
							<ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
								<li class="menu-item"><a href="#" class="link-term">Weekly Featured</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Hot Sale items</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top new items</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top Selling</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top rated items</a><span class="nav-label hot-label">hot</span></li>
							</ul>
						</div>
					</div>

					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								@if(url()->current()==  route('index'))
									<li class="menu-item home-icon">
										<a href="#" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
									</li>
								@else
									<li class="menu-item">
										<a href="{{route('index')}}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
									</li>
								@endif
								<li class="menu-item">
									<a href="../shop.html" class="link-term mercado-item-title">Shop</a>
								</li>

								@if(url()->current()==  route('categories'))
									<li class="menu-item home-icon">
										<a href="#" class="link-term mercado-item-title">Categories</a>
									</li>
								@else
									<li class="menu-item">
										<a href="{{route('categories')}}" class="link-term mercado-item-title">categories</a>
									</li>
								@endif

								@if(url()->current()==  route('brands'))
									<li class="menu-item home-icon">
										<a href="#" class="link-term mercado-item-title">Brands</a>
									</li>
								@else
									<li class="menu-item">
										<a href="{{route('brands')}}" class="link-term mercado-item-title">Brands</a>
									</li>
								@endif
								
								@if(url()->current()==  route('products'))
									<li class="menu-item home-icon">
										<a href="#" class="link-term mercado-item-title">Products</a>	
									</li>
								@else
									<li class="menu-item ">
										<a href="{{route('products')}}" class="link-term mercado-item-title">Products</a>
									</li>
								@endif

								@if(url()->current()==  route('users'))
									<li class="menu-item home-icon">
										<a href="#" class="link-term mercado-item-title">Users</a>	
									</li>
								@else
									<li class="menu-item ">
										<a href="{{route('users')}}" class="link-term mercado-item-title">Users</a>
									</li>
								@endif

								@if(url()->current()==  route('admins'))
									<li class="menu-item home-icon">
										<a href="#" class="link-term mercado-item-title">Admins</a>	
									</li>
								@else
									<li class="menu-item ">
										<a href="{{route('admins')}}" class="link-term mercado-item-title">Admins</a>
									</li>
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
