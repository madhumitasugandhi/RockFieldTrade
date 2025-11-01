<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title> RockfieldTrade</title>
	 <link rel="icon" href="{{url('assets/images/Bhimte Final.png')}}" type="image/png">

	<!-- Bootstrap core CSS -->
	<link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="{{url('assets/css/all.css')}}" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="{{url('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="{{url('assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="{{url('assets/css/style.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Bootstrap CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" 
	integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" 
	referrerpolicy="no-referrer"></script>


	<!-- Bootstrap JS (along with jQuery and Popper.js) -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

	<!-- Popper.js -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




</head>
<style>

	
@import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&display=swap');


@import url('https://fonts.googleapis.com/css2?family=Satisfy&display=swap');










	.navbar-dark .navbar-toggler {
		color: #6bafe1;
		border-color: rgb(0 0 0 / 19%);
	}

	.top-nav {
		position: sticky;
		top: 0;
		z-index: 1050;
		/* Adjust as needed */
	}


	.subtitle {
		color: green;
	}

	/* Full-width dropdown menu */
	.full-width-dropdown {
		position: absolute;
		top: 100%;
		/* Align below the navbar */
		left: 50%;
		transform: translateX(-50%);
		/* Center the entire dropdown */
		width: auto;
		/* Adjust based on the content */
		min-width: 100px;
		/* Set a minimum width for the dropdown */
		padding: 20px;
		z-index: 1000;
		display: none;
		/* Hidden by default */
	}

	.navbar-nav>.dropdown:hover>.dropdown-menu {
		display: block;
		/* Show dropdown on hover */
	}

	.dropdown-menu {
		background-color: #fff;
		border: none;
		box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
	}

	.dropdown-header {
		font-weight: bold;
		text-transform: uppercase;
		color: #333;
		font-size: 16px;

	}

	.dropdown-item {
		color: #555;
	}

	.dropdown-item:hover {
		background-color: #f8f9fa;
		color: #000;
	}

	.logo {
		width: 50px;
		height: 40px;
	}

	/* General styles for title */
	.title {
		/* font-family: "Rubik", serif; */
		/* font-family: "Merienda", serif; */

		font-family: "Alegreya Sans SC", serif;

        font-style: normal;
		font-weight: 400;
		font-size: 30px;
		background: #121FCF;
		background: linear-gradient(to right, #121FCF 8%, #07B943 100%);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
	}

	/* Media query for small screens (like iPhones) */
	@media (max-width: 500px) {

		/* Adjust logo size */
		.logo {
			width: 40px;
			height: 35px;
		}

		/* Adjust title font size */
		.title {
			font-size: 20px;
		}
		.main-login{
		    padding-left:13px;
		    padding-top: 10px;
		}
	}

	/* Ensure the dropdown is responsive */
	@media (max-width: 991px) {
		.full-width-dropdown {
			width: 100%;
			/* On smaller screens, use full width */
			left: 0;
			transform: none;
			/* No need to translate for mobile */
		}
	}
		

.navbar.sticky-top {
    position: sticky;
    top: 0;
    z-index: 1020;
}

	
</style>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/670ca6b82480f5b4f58d00a7/1ia4mmgob';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->

<body>
	<div class="wrapper-main">
	
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-light top-nav sticky-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="/">
					<img src="assets/images/Bhimte Final.png" class="logo" alt="logo" />
				</a>
				<div style="display: flex; flex-direction: column; justify-content: center; align-items: center; line-height: 1;">
					<span class="mainfont" style="margin: 0; padding: 0; ">
						<a href="/" class="title" style="margin: 0; padding: 0; display: inline-block;">RockfieldTrade</a>
					</span>
					<span class="secondfont" style="font-size: 15px; font-weight:600; margin: 0; padding: 0; display: inline-block; color:black;">Trade as an Expert</span>
				</div>

				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
					data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="fas fa-bars"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown">
							<a class="nav-link active dropdown-toggle" href="#" id="marketDropdown"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Market
							</a>
							<div class="dropdown-menu " aria-labelledby="marketDropdown">
								<div class="container">
									<div class="row">
										<div class="col-lg-4 text-center">
											<h6 class="dropdown-header">MARKET</h6>
											<a class="dropdown-item " href="/fxtrading">Fxtrading</a>
											<a class="dropdown-item" href="/future">Future</a>
											<a class="dropdown-item" href="/indices">Indices</a>
											<a class="dropdown-item" href="/metals">Metals</a>
											<a class="dropdown-item" href="/enegeries">Energy</a>
											<a class="dropdown-item" href="/crypto">Crypto</a>
										</div>
										{{-- <div class="col-lg-4">
											<h6 class="dropdown-header">TRADING ACCOUNTS</h6>
											<a class="dropdown-item" href="#">Accounts Overview</a>
											<a class="dropdown-item" href="#">Classic Account</a>
											<a class="dropdown-item" href="#">Raw Account</a>
											<a class="dropdown-item" href="#">Islamic Account</a>
											<a class="dropdown-item" href="#">Demo Account</a>
										</div>
										<div class="col-lg-4">
											<h6 class="dropdown-header">TRADING CONDITIONS</h6>
											<a class="dropdown-item" href="#">Deposit & Withdrawals</a>
											<a class="dropdown-item" href="#">Spreads & Swaps</a>
											<a class="dropdown-item" href="#">Leverage & Margin</a>
											<a class="dropdown-item" href="#">Dynamic Leverage</a>
										</div> --}}
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link moview dropdown-toggle" href="#" id="marketDropdown" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								Tools
							</a>
							<div class="dropdown-menu full-width-dropdown" aria-labelledby="marketDropdown">
								<div class="container">
									<div class="row">
										<div class="col-lg-4">
											<h6 class="dropdown-header">Tools</h6>
											<a class="dropdown-item" href="/basics">Basics</a>
											<a class="dropdown-item" href="/fundamentals">Fundamentals</a>
											<a class="dropdown-item" href="/technicalanalysis">Technical</a>
											<a class="dropdown-item" href="/tradersmistakes">Psychology</a>
										</div>
										{{-- <div class="col-lg-4">
											<h6 class="dropdown-header">TRADING ACCOUNTS</h6>
											<a class="dropdown-item" href="#">Accounts Overview</a>
											<a class="dropdown-item" href="#">Classic Account</a>
											<a class="dropdown-item" href="#">Raw Account</a>
											<a class="dropdown-item" href="#">Islamic Account</a>
											<a class="dropdown-item" href="#">Demo Account</a>
										</div>
										<div class="col-lg-4">
											<h6 class="dropdown-header">TRADING CONDITIONS</h6>
											<a class="dropdown-item" href="#">Deposit & Withdrawals</a>
											<a class="dropdown-item" href="#">Spreads & Swaps</a>
											<a class="dropdown-item" href="#">Leverage & Margin</a>
											<a class="dropdown-item" href="#">Dynamic Leverage</a>
										</div> --}}
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link moview dropdown-toggle" href="#" id="marketDropdown" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								Introduction
							</a>
							<div class="dropdown-menu full-width-dropdown" aria-labelledby="marketDropdown">
								<div class="container">
									<div class="row">
										<div class="col-lg-4">
											<h6 class="dropdown-header">INTRODUCTION</h6>
											<a class="dropdown-item" href="/whyrocktrade">Why RockfieldTrade?</a>
										</div>
										{{-- <div class="col-lg-4">
											<h6 class="dropdown-header">TRADING ACCOUNTS</h6>
											<a class="dropdown-item" href="#">Accounts Overview</a>
											<a class="dropdown-item" href="#">Classic Account</a>
											<a class="dropdown-item" href="#">Raw Account</a>
											<a class="dropdown-item" href="#">Islamic Account</a>
											<a class="dropdown-item" href="#">Demo Account</a>
										</div>
										<div class="col-lg-4">
											<h6 class="dropdown-header">TRADING CONDITIONS</h6>
											<a class="dropdown-item" href="#">Deposit & Withdrawals</a>
											<a class="dropdown-item" href="#">Spreads & Swaps</a>
											<a class="dropdown-item" href="#">Leverage & Margin</a>
											<a class="dropdown-item" href="#">Dynamic Leverage</a>
										</div> --}}
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link moview dropdown-toggle" href="#" id="marketDropdown" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								Market News
							</a>
							<div class="dropdown-menu full-width-dropdown" aria-labelledby="marketDropdown">
								<div class="container">
									<div class="row">
										<div class="col-lg-4">
											<h6 class="dropdown-header">MARKET NEWS</h6>
											<a class="dropdown-item" href="/economic_calender">Economic Calender</a>
											<a class="dropdown-item" href="/market_stories">Market Stories</a>
											<a class="dropdown-item" href="/global_market_perfomance">Global Market Perfomance</a>
											<a class="dropdown-item" href="/real_time_market">Real time Market Action</a>
										</div>
										{{-- <div class="col-lg-4">
											<h6 class="dropdown-header">TRADING ACCOUNTS</h6>
											<a class="dropdown-item" href="#">Accounts Overview</a>
											<a class="dropdown-item" href="#">Classic Account</a>
											<a class="dropdown-item" href="#">Raw Account</a>
											<a class="dropdown-item" href="#">Islamic Account</a>
											<a class="dropdown-item" href="#">Demo Account</a>
										</div>
										<div class="col-lg-4">
											<h6 class="dropdown-header">TRADING CONDITIONS</h6>
											<a class="dropdown-item" href="#">Deposit & Withdrawals</a>
											<a class="dropdown-item" href="#">Spreads & Swaps</a>
											<a class="dropdown-item" href="#">Leverage & Margin</a>
											<a class="dropdown-item" href="#">Dynamic Leverage</a>
										</div> --}}
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link moview dropdown-toggle" href="#" id="marketDropdown" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								Partnership
							</a>
							<div class="dropdown-menu full-width-dropdown" aria-labelledby="marketDropdown">
								<div class="container">
									<div class="row">
										<div class="col-lg-4">
											<h6 class="dropdown-header">PARTNERSHIP</h6>
											<a class="dropdown-item" href="/ib">IB</a>
											<a class="dropdown-item" href="/affiliate">Affiliate Program</a>
											<a class="dropdown-item" href="/pamm">PAMM</a>
											<a class="dropdown-item" href="/mam">MAM</a>
											{{-- <a class="dropdown-item" href="#"></a> --}}
											<!--<a class="dropdown-item" href="/why_partner">Why become a partner with-->
											<!--	Rockfield</a>-->

										</div>
										{{-- <div class="col-lg-4">
											<h6 class="dropdown-header">TRADING ACCOUNTS</h6>
											<a class="dropdown-item" href="#">Accounts Overview</a>
											<a class="dropdown-item" href="#">Classic Account</a>
											<a class="dropdown-item" href="#">Raw Account</a>
											<a class="dropdown-item" href="#">Islamic Account</a>
											<a class="dropdown-item" href="#">Demo Account</a>
										</div>
										<div class="col-lg-4">
											<h6 class="dropdown-header">TRADING CONDITIONS</h6>
											<a class="dropdown-item" href="#">Deposit & Withdrawals</a>
											<a class="dropdown-item" href="#">Spreads & Swaps</a>
											<a class="dropdown-item" href="#">Leverage & Margin</a>
											<a class="dropdown-item" href="#">Dynamic Leverage</a>
										</div> --}}
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link moview dropdown-toggle" href="#" id="marketDropdown" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								Company
							</a>
							<div class="dropdown-menu full-width-dropdown" aria-labelledby="marketDropdown">
								<div class="container">
									<div class="row">
										<div class="col-lg-4">
											<h6 class="dropdown-header">COMPANY</h6>
											<a class="dropdown-item" href="/about_us">About Us</a>
											<a class="dropdown-item" href="/why_partner">Why RockfieldTrade</a>
											<a class="dropdown-item" href="/contact_us">Contact Us</a>
											<a class="dropdown-item" href="/support">Support Help Center</a>
										</div>
										{{-- <div class="col-lg-4">
											<h6 class="dropdown-header">TRADING ACCOUNTS</h6>
											<a class="dropdown-item" href="#">Accounts Overview</a>
											<a class="dropdown-item" href="#">Classic Account</a>
											<a class="dropdown-item" href="#">Raw Account</a>
											<a class="dropdown-item" href="#">Islamic Account</a>
											<a class="dropdown-item" href="#">Demo Account</a>
										</div>
										<div class="col-lg-4">
											<h6 class="dropdown-header">TRADING CONDITIONS</h6>
											<a class="dropdown-item" href="#">Deposit & Withdrawals</a>
											<a class="dropdown-item" href="#">Spreads & Swaps</a>
											<a class="dropdown-item" href="#">Leverage & Margin</a>
											<a class="dropdown-item" href="#">Dynamic Leverage</a>
										</div> --}}
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link moview  dropdown-toggle" href="#" id="marketDropdown" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								LINKS
							</a>
							<div class="dropdown-menu full-width-dropdown" aria-labelledby="marketDropdown">
								<div class="container">
									<div class="row">
										<div class="col-lg-4">
											<h6 class="dropdown-header">LINKS</h6>
											<a class="dropdown-item" href="https://private.rockfieldtrade.us/signin">Sign In</a>
											<a class="dropdown-item" href="https://workspace.rockfieldtrade.us/">Web Trader</a>
											<a class="dropdown-item" href="https://mobile.rockfieldtrade.live/main">Mobile Trader</a>
											<a class="dropdown-item" href="https://private.rockfieldtrade.us/signup">Register</a>
										</div>
										{{-- <div class="col-lg-4">
											<h6 class="dropdown-header">TRADING ACCOUNTS</h6>
											<a class="dropdown-item" href="#">Accounts Overview</a>
											<a class="dropdown-item" href="#">Classic Account</a>
											<a class="dropdown-item" href="#">Raw Account</a>
											<a class="dropdown-item" href="#">Islamic Account</a>
											<a class="dropdown-item" href="#">Demo Account</a>
										</div>
										<div class="col-lg-4">
											<h6 class="dropdown-header">TRADING CONDITIONS</h6>
											<a class="dropdown-item" href="#">Deposit & Withdrawals</a>
											<a class="dropdown-item" href="#">Spreads & Swaps</a>
											<a class="dropdown-item" href="#">Leverage & Margin</a>
											<a class="dropdown-item" href="#">Dynamic Leverage</a>
										</div> --}}
									</div>
								</div>
							</div>
						</li>
					</ul>
					<div class="main-register mx-3">
					    <a class="register" href="https://private.rockfieldtrade.us/signup" title="Register">
				         <span><i class="fa fa-user" aria-hidden="true"></i></span>
				         </a>
					</div>
					<div class="main-login">
					    <a class="login" href="https://private.rockfieldtrade.us/signin" title="SignIn">
				         <span><i class="fa fa-sign-in" aria-hidden="true"></i></span>
				         </a>
					</div>
					
				</div>
				
				    
				   
			</div>
		</nav>