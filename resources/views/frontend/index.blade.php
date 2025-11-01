@extends('frontend.layout.main')

@section('main-container')

<style>
	.btn-gradient {
		background: linear-gradient(135deg, #28a745, #20c997);
		/* Green gradient with subtle teal */
		color: white;
		/* Text color */
		padding: 12px 20px;
		border: none;

		font-size: 16px;
		font-weight: bold;
		text-transform: uppercase;
		transition: all 0.4s ease;
		/* Smooth transition */
		box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
		/* Subtle shadow */
	}

	.btn-gradient:hover {
		background: linear-gradient(135deg, #20c997, #28a745);
		/* Reverse gradient on hover */
		box-shadow: 0 12px 20px rgba(0, 0, 0, 0.3);
		/* Stronger shadow on hover */
		transform: translateY(-5px);
		/* Lift the button on hover */
	}

	.btn-gradient:active {
		transform: translateY(0px);
		/* Reset when active */
		box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
		/* Reset shadow on active */
	}


	.card-header2 {
		background: linear-gradient(115deg, #34a853, #1a73e8);
		background-size: 200% 200%;
		/* For smooth animation */
		animation: shine2 4s ease infinite;
		/* Shining effect */
		color: white;
		/* Text color */
		padding: 10px;

		box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
		/* Soft shadow */
	}

	@keyframes shine2 {
		0% {
			background-position: 0% 50%;
		}

		50% {
			background-position: 100% 50%;
		}

		100% {
			background-position: 0% 50%;
		}
	}

	.card-header3 {
		background: linear-gradient(135deg, #87ceeb, #1a73e8);
		/* Sky blue to blue gradient */
		background-size: 200% 200%;
		/* For smooth animation */
		animation: shine3 4s ease infinite;
		/* Shining effect */
		color: white;
		/* Text color */
		padding: 10px;
		box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
		/* Soft shadow */
	}

	@keyframes shine3 {
		0% {
			background-position: 0% 50%;
		}

		50% {
			background-position: 100% 50%;
		}

		100% {
			background-position: 0% 50%;
		}
	}


	/* Ensure carousel buttons stay on top */
	.carousel-buttons {
		position: absolute;
		bottom: 20px;
		left: 50%;
		transform: translateX(-50%);
		display: flex;
		justify-content: center;
		z-index: 10;
	}

	.carousel-buttons button {
		background-color: #000;
		color: #fff;
		border: none;
		padding: 10px 20px;
		margin: 0 5px;
		font-size: 16px;
		cursor: pointer;
		transition: background-color 0.3s ease;
	}

	.carousel-buttons button.active,
	.carousel-buttons button:hover {
		background-color: #e50914;
	}

	/* Centering the carousel caption */
	.carousel-caption {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		display: flex;
		flex-direction: column;
		/* Stack elements vertically */
		align-items: center;
		/* Horizontal centering */
		justify-content: center;
		/* Vertical centering */
		text-align: center;
		/* Center the text */
		color: #fff;
		/* Make sure text is visible over the images */
	}

	.carousel-caption h3 {
		font-size: 40px;
		font-weight: bold;
		margin-top: 10px;
		/* Add margin to separate h3 from p */
	}

	.carousel-caption p {
		font-size: 14px;
	}



	.slider-container {
		overflow: hidden;
		white-space: nowrap;
		width: 100%;
		display: flex;
		justify-content: center;
		padding: 20px;
	}

	.slider {
		display: inline-block;
		white-space: nowrap;
		animation: scroll 15s linear infinite;
	}

	/* Keyframe for continuous sliding without gaps */
	@keyframes scroll {
		0% {
			transform: translateX(0);
		}

		100% {
			transform: translateX(-100%);
		}
	}

	.item {
		display: inline-block;
		padding: 0 30px;
		text-align: center;
	}

	h2 {
		margin: 0;
		font-size: 16px;
		color: white;
	}



	.small-text {
		font-size: 18px;
		vertical-align: super;
	}

	.chart-line {
		width: 100%;
		/*padding: 0px;*/
	}

	.tradingview-widget-container {
		width: 100%;
		height: 400px;
		/* Adjust the height as desired */
	}

	.tradingview-widget-container__widget {
		width: 100%;
		height: 100%;
		/* Makes the widget fill the container */
	}




	.currency-card {
		background-color: #2b2e34;
		color: white;
		padding: 10px 20px;
		text-align: left;
		border-radius: 10px;
		width: 250px;
		margin: 20px;
		/* Add margin to ensure spacing between cards */
		position: relative;
		/* Important to position ::before and ::after correctly */
		display: inline-block;
		/* To ensure all cards are inline */
	}

	/* Before pseudo-element for adding an image before the card */
	.currency-card::before {
		content: '';
		display: block;
		position: absolute;
		top: -30px;
		/* Adjust as needed to position the image */
		left: 125%;
		transform: translateX(-50%);
		width: 40px;
		/* Adjust width of the image */
		height: 80px;
		/* Adjust height of the image */
		background-image: url('assets/images/bid-shape.png');
		/* Replace with your image path */
		background-size: contain;
		background-repeat: no-repeat;
	}

	/* After pseudo-element for adding an image after the card */
	.currency-card::after {
		content: '';
		display: block;
		position: absolute;
		bottom: -30px;
		/* Adjust as needed to position the image */
		left: 125%;
		transform: translateX(-50%);
		width: 40px;
		/* Adjust width of the image */
		height: 80px;
		/* Adjust height of the image */
		background-image: url('assets/images/bid-shape.png');
		/* Replace with your image path */
		background-size: contain;
		background-repeat: no-repeat;
	}

	.card-header {
		background: linear-gradient(145deg, #ff4d4d, #1a73e8);
		/* Red to blue gradient */
		background-size: 200% 200%;
		/* For smooth animation */
		animation: shine 4s ease infinite;
		/* Shining effect */
		color: white;
		/* Text color */
		padding: 10px;
		border-radius: 5px;
		/* Rounded corners */
		box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
		/* Soft shadow */
	}

	@keyframes shine {
		0% {
			background-position: 0% 50%;
		}

		50% {
			background-position: 100% 50%;
		}

		100% {
			background-position: 0% 50%;
		}
	}



	.currency-title {
		font-size: 1.2rem;
		font-weight: bold;
	}

	.spread {
		font-weight: 700;
		font-size: 1.0rem;
		color: red;
		margin-left: 30px;
	}



	.currency-info {
		display: flex;
		justify-content: space-between;
	}

	.currency-value {
		font-size: 1.4rem;
		color: red;
		font-weight: 500;
	}

	.bid,
	.ask {
		text-align: center;
	}

	p {
		color: white;
		font-size: 30px;
	}

	/* Heading with gradient effect */
	.for-head {
		font-size: 2.5rem;
		background: linear-gradient(90deg, #000000, #000000);
		-webkit-background-clip: text;
		color: transparent;
		font-weight: bold;
	}

	.for-head2 {
		font-size: 2.5rem;
		background: linear-gradient(80deg, #000000, #000000);
		-webkit-background-clip: text;
		color: transparent;
		font-weight: bold;
	}

	.icon-box {
		text-align: center;
		padding: 30px;
		background: #ffffff;
		border-radius: 10px;
		box-shadow: 0 5px 20px rgba(60, 190, 241, 0.15);
		transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
	}

	/* Icon styling with hover animation */
	.icon-box i {
		font-size: 45px;
		color: #007bff;
		margin-bottom: 15px;
		transition: color 0.3s ease-in-out;
	}

	/* Hover effects */
	.icon-box:hover {
		transform: translateY(-10px);
		box-shadow: 0 20px 50px rgba(0, 0, 0, 0.684);
		box-shadow: 25px 25px 75px rgba(0, 0, 0, 0.25),
			10px 10px 70px rgba(0, 0, 0, 0.25),
			inset 5px 5px 10px rgba(0, 0, 0, 0.25),

	}

	.icon-box:hover i {
		color: #18ac3d;
		/* Change icon color to green */
	}

	.icon-box h5 {
		font-size: 22px;
		margin-bottom: 10px;
		font-weight: bold;
		color: #333;
	}

	.icon-box p {
		font-size: 15px;
		color: #666;
	}

	/* Responsive adjustments */
	@media (max-width: 768px) {
		h2 {
			font-size: 2rem;
		}

		.icon-box {
			padding: 20px;
		}

		.icon-box i {
			font-size: 40px;
		}
	}

	.why-to-trade {
		position: relative;
		/* Make the parent relative for absolute positioning */
		width: 100%;
		height: auto;
		padding: 50px 20px;

		/* Adjust padding as needed */
	}

	.why-to-trade::before {
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-image: url('assets/images/newimg.jpg');
		background-repeat: no-repeat;
		background-size: cover;

		/* Ensure the background scales properly */
		opacity: 0.7;
		/* Opacity of the background image */
		z-index: -2;
		/* Keep the background behind the black overlay */
	}

	.why-to-trade::after {
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: rgb(255, 255, 255);
		/* Black overlay */
		opacity: 0.5;
		/* Adjust this to control the black transparency */
		z-index: -1;
		/* Ensure it's behind the content but above the background */
	}

	.why-to-trade-content {
		position: relative;
		/* Keep the content on top of everything */
		z-index: 1;
		color: #fff;
		/* White text color to contrast against dark background */

	}

	/* Default (for desktop) */
	.carousel-item.slide-one {
		background-image: url('assets/images/newimg6.jpg');
	}

	.carousel-item.slide-two {
		background-image: url('assets/images/newimg2.jpg');
	}

	.carousel-item.slide-three {
		background-image: url('assets/images/newimg3.jpg');
	}

	.carousel-caption p {}

	@media (max-width: 768px) {
		.table-responsive-mobile {
			width: 100%;
			overflow-x: auto;
			-webkit-overflow-scrolling: touch;
			/* for smooth scrolling */
		}
	}

	.container {
		border-radius: 10px;
	}

	.calendar-table tbody img {
		border: 1px solid #a19e9e;
		width: 30px;
		height: 30px;
	}

	.custom-btn {
		border: 1px solid #c2c7cf;
		color: #0073b7;
		background-color: #ffffff;
		padding: 6px 12px;
		font-weight: 500;
		border-radius: 0;
	}

	.custom-btn:hover {
		background-color: #f0f0f0;
		color: #005bb5;
	}

	.custom-btn.active-today {
		background-color: #105da4;
		color: #ffffff;
		border: 1px solid #105da4;
	}

	.custom-filter-btn {
		border: 1px solid #c2c7cf;
		background-color: #ffffff;
		color: #0073b7;
	}

	.custom-filter-btn:hover {
		background-color: #f0f0f0;
	}

	.calendar-table th {
		background-color: #f4f4f7;
	}

	.table thead th,
	.table td {
		padding: 10px;
	}

	.text-success {
		color: #28a745 !important;
	}

	.text-danger {
		color: #dc3545 !important;
	}

	.flag-icon {
		width: 20px;
		height: 15px;
		margin-right: 5px;
	}

	.align-middle {
		vertical-align: middle !important;
	}

	.bi {
		font-size: 16px;
	}

	thead {
		background-color: #e0e0e0;
	}

	/* Full-width styling for widget container */
	.widget-full-width {
		width: 100%;
		overflow: hidden;
		display: flex;
		justify-content: center;

		/* For mobile screens */
		@media (max-width: 768px) {
			.carousel-item.slide-one {
				background-image: url('assets/images/mobile-slide1.jpg');
				/* Replace with your mobile-specific image */
			}

			.carousel-item.slide-two {
				background-image: url('assets/images/newimg12.jpg');
				/* Replace with your mobile-specific image */
			}

			.carousel-item.slide-three {
				background-image: url('assets/images/newimg14.jpg');
				/* Replace with your mobile-specific image */
			}

			.carousel-caption p {
				font-weight: 300;
				/* Reduced paragraph weight for mobile */
				font-size: 23px !important;
				;
			}

			.carousel-caption {
				bottom: 10%;
				/* Adjust caption position */
				left: 50%;
				width: 100%;
				/* Ensure the caption spans across the screen */
				padding: 0 10px;
				/* Add some padding to avoid text touching edges */
				transform: translateX(-50%);
			}

			/* For tablets and smaller screens */
			.spread {
				margin-left: 20px;
			}
		}


		@media (min-width: 576px) {
			.carousel-caption p {
				font-size: 20px;
			}
		}


	}

	.bxx {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}

	/* From Uiverse.io by Daniel1227k */
	.card {
		position: relative;

		display: flex;
		justify-content: center;
		align-items: center;
		padding-bottom: 70px;
	}

	.card::before {
		content: '';
		position: absolute;
		height: 500px;
		background-color: black
	}

	.card::after {
		content: '';
		position: absolute;
		filter: blur(30px);
	}

	.card b {
		position: absolute;
		inset: 6px;

		z-index: 2;
	}


	}

	.card:hover img {
		scale: 0.5;
		transform: translateY(-70px);
	}

	.card .content {
		position: absolute;

		bottom: 0;



		transform: scale(0);
		transition: 0.5s;
	}

	.card:hover .content {
		transform: scale(1);
		bottom: 20px;
	}

	.content .title {
		position: relative;
		color: #fff;


		text-transform: uppercase;
		text-align: center;
	}



	.content {
		position: relative;
		display: flex;
		justify-content: center;
		align-items: center;
		gap: 8px;

	}

	.body {
		backround-color: white;
		color: black;
		display: flex;
		justify-content: center;
		align-items: center;
		background-attachment: fixed;
		padding: 10px;
	}

	.containerr {
		display: flex;
		justify-content: space-between;
		align-items: center;
		width: 90%;
		max-width: 1200px;
		gap: 20px;
		background-attachment: fixed;
	}

	.cardm {
		width: 300px;
		text-align: center;

	}

	.cardm h3 {
		font-size: 1.5rem;
		margin-bottom: 10px;
	}

	.cardm p {
		font-size: 1rem;
		line-height: 1.6;
		color: black;
	}

	.cardm span {
		display: inline-block;
		background-color: #00aeff;
		color: #f1f1f1;
		font-size: 0.9rem;
		padding: 5px 10px;
		border-radius: 20px;
		margin-bottom: 15px;
		padding: 10px;
	}

	.center-image {
		width: 450px;
		height: auto
	}

	/* Responsive Design */
	@media (max-width: 992px) {
		.containerr {
			flex-direction: column;
			align-items: center;
		}

		.cardm {
			width: 100%;
			margin-bottom: 20px;
		}

		.center-image {
			width: 80%;
			max-width: 400px;
		}
	}

	@media (max-width: 600px) {
		.card h3 {
			font-size: 1.2rem;
		}

		.card p {
			font-size: 0.9rem;
		}

		.center-image {
			width: 100%;
			height: 100%;
		}
	}

	.thrive {
		font-size: 2.5rem;
		background: linear-gradient(80deg, #1cc187, #1900ff);
		-webkit-background-clip: text;
		color: transparent;
		font-weight: bold
	}

	.overview {
		font-size: 2.5rem;
		/*background: linear-gradient(80deg, #00ffcc, #d0ff00);*/
		-webkit-background-clip: text;
		color: black;
		font-weight: bold;
		/*background-color: black;*/

	}

	.center-image {
		width: 300px
			/* Set the desired width */
			height: 300px;
		/* Set the desired height */
		object-fit: cover;
		/* Ensures the image covers the container properly */
		transition: transform 0.3s ease;
		/* Smooth zoom effect */
	}

	.center-image:hover {
		transform: scale(1.2);
		/* Zoom the image on hover */
	}

	.trade-now {
		color: black;
		font-weight: 600;
		padding: 10px 15px;
	}
</style>

<div class="rftx-wrapper">
		<header class="rftx-header" style="background-image: url('assets/video/fallback.jpg');">
			<video autoplay muted loop playsinline webkit-playsinline preload="auto" disablePictureInPicture
				id="bg-video">
				<source src="assets/video/blur3audio.mp4" type="video/mp4" />
			</video>




			<div class="rftx-overlay">
				<div class="rftx-text-block">
					<div class="rftx-slide-box"></div>
					<h1 class="rftx-title">RockfieldTrade</h1>
				</div>

				<div class="rftx-text-block">
					<div class="rftx-slide-box sub"></div>
					<p class="rftx-subtext">
						Where Expertise Meets Opportunity
						<span class="rftx-dot"></span>
					</p>
				</div>

				<div class="rftx-btn-wrapper">
					<a href="https://private.rockfieldtrade.us/signup" class="rftx-trade-btn">Trade Now</a>
				</div>

				<section class="rftx-stats-section">
					<div class="rftx-stats-container">
						<div class="rftx-stats-left">
							<ul>
								<li><span class="arrow">▶</span> 15+ years of Experience</li>
								<li><span class="arrow">▶</span> $10 Mn in withdrawals</li>
								<li><span class="arrow">▶</span> 24/7 WhatsApp Support</li>
							</ul>
						</div>
						<div class="rftx-stats-right">
							<div class="rftx-stat-box">
								<img src="assets/images/family.png" alt="Traders" />
								<div>
									<h2>5M</h2>
									<p>Trader Accounts</p>
								</div>
							</div>
							<div class="rftx-stat-box">
								<img src="assets/images/trophy.png" alt="Transactions" />
								<div>
									<h2>20M</h2>
									<p>Monthly Transactions</p>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</header>
	</div>
	<script src="path/to/iphone-inline-video.min.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', () => {
			const video = document.querySelector('.rftx-bg-video');

			function attemptPlay() {
				video.play().catch(() => {
					console.log("iOS blocked autoplay. Will retry on user action.");
				});
			}

			// Try autoplay
			attemptPlay();

			// Fallback if user interacts
			['touchstart', 'click'].forEach(evt =>
				document.addEventListener(evt, attemptPlay, { once: true })
			);
		});
	</script>




<div class="chart-line">
	<!-- TradingView Widget BEGIN -->
	<div class="tradingview-widget-container">
		<div class="tradingview-widget-container__widget"></div>

		<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js"
			async>
			{
      "symbols": [
        { "proName": "FX_IDC:EURUSD", "title": "EUR to USD" },
        { "proName": "BITSTAMP:BTCUSD", "title": "Bitcoin" },
        { "proName": "BITSTAMP:ETHUSD", "title": "Ethereum" },
        { "description": "Gold", "proName": "OANDA:XAUUSD" },
        { "description": "GBP to USD", "proName": "FX:GBPUSD" },
        { "description": "GBP to JPY", "proName": "OANDA:GBPJPY" },
        { "description": "AUD to USD", "proName": "OANDA:AUDUSD" },
        { "description": "USD to JPY", "proName": "CAPITALCOM:USDJPY" },
        { "description": "NZD to USD", "proName": "OANDA:NZDUSD" },
        { "description": "USD to CAD", "proName": "OANDA:USDCAD" },
        { "description": "GBP to NZD", "proName": "OANDA:GBPNZD" },
        { "description": "USD to CHF", "proName": "OANDA:USDCHF" },
        { "description": "EUR to JPY", "proName": "CAPITALCOM:EURJPY" },
        { "description": "APPLE", "proName": "NASDAQ:AAPL" },
        { "description": "NVIDIA", "proName": "NASDAQ:NVDA" },
        { "description": "Microsoft", "proName": "NASDAQ:MSFT" },
        { "description": "Meta", "proName": "NASDAQ:META" },
        { "description": "Google", "proName": "NASDAQ:GOOGL" }
      ],
      "showSymbolLogo": true,
      "isTransparent": false,
      "displayMode": "adaptive",
      "colorTheme": "dark",
      "locale": "en"
      }
		</script>
	</div>
	<!-- TradingView Widget END -->
</div>


<section class="hero1" style="background-color: #FAFAFA;">
	
    <div class="container1">

	<div class="hero-heading">
    <h1>A New Era of <span>Financial Security</span></h1>
    <p class="intro1">
      Our partners have grown along with MultiBank Group in the past two decades, and our latest entity, MEX Atlantic, is taking our success a step further by offering unparalleled security to our traders. MEX Atlantic has taken out an insurance policy with Lloyd’s of London, the world’s leading insurance market, that protects clients’ funds for up to USD $1 million per account.
    </p>
     
      <div class="cards1">
        <div class="card1" style="border-bottom:2px solid green">
          <img src="assets/images/Shild1.png" alt="Segregated Client Accounts" />
          <h3>Segregated Client Accounts</h3>
          <p>We maintain separate client accounts without merging client and company investments, giving our clients ultimate investment safety.</p>
        </div>
        <div class="card1" style="border-bottom:2px solid orange">
          <img src="assets/images/cash1.png" alt="Capital" />
          <h3>US $322 Million Paid up Capital</h3>
          <p>Due to our accumulated paid-up capital, we are globally recognized as one of the largest online financial derivatives providers.</p>
        </div>
        <div class="card1" style="border-bottom:2px solid yellow">
          <img src="assets/images/approval.png" alt="B Rating" />
          <h3>B Rating with S&amp;P</h3>
          <p>Rated by Standard &amp; Poor’s confirming our ability to meet our financial commitments.</p>
        </div>
        <div class="card1" style="border-bottom:2px solid blue">
          <img src="assets/images/Doller.png" alt="Tier 1 Banking" />
          <h3>Tier 1 Banking</h3>
          <p>We want you to have peace of mind when it comes to where your funds are kept, so all our clients’ capital is stored in tier 1 banks.</p>
        </div>
      </div>
    </div>
  </section>


{{-- Why to trade --}}
<div class="why-to-trade">
	<div class="container why-to-trade-content my-2">
		<div class="text-center mb-5">
			<h2 class="for-head">What can you <span class="title-highlight">Trade with RockfieldTrade?</span></h2>
		</div>
		<div class="row">
			<!-- Forex -->
			<div class="col-lg-4 col-md-6 mb-4 bxx">
				<div class="icon-box">
					<i class="fas fa-exchange-alt"></i>
					<h5>Forex</h5>
					<p>70+ Forex Currency Pairs</p>
				</div>
			</div>
			<!-- Shares -->
			<div class="col-lg-4 col-md-6 mb-4 bxx ">
				<div class="icon-box">
					<i class="fas fa-chart-line"></i>
					<h5>Shares</h5>
					<p>More than 10,000 stocks on global exchanges</p>
				</div>
			</div>
			<!-- Indices -->
			<div class="col-lg-4 col-md-6 mb-4 bxx">
				<div class="icon-box">
					<i class="fas fa-chart-bar"></i>
					<h5>Indices</h5>
					<p>19 major global indices</p>
				</div>
			</div>
			<!-- Commodities -->
			<div class="col-lg-4 col-md-6 mb-4 bxx">
				<div class="icon-box">
					<i class="fas fa-box"></i>
					<h5>Commodities</h5>
					<p>Coffee, natural gas, corn & more</p>
				</div>
			</div>
			<!-- Bonds -->
			<div class="col-lg-4 col-md-6 mb-4 bxx">
				<div class="icon-box">
					<i class="fas fa-file-contract"></i>
					<h5>Bonds</h5>
					<p>US10YR & UK Long Gilt Futures GILT</p>
				</div>
			</div>
			<!-- Metals -->
			<div class="col-lg-4 col-md-6 mb-4 bxx">
				<div class="icon-box">
					<i class="fas fa-cubes"></i>
					<h5>Metals</h5>
					<p>Gold, oil, silver & more</p>
				</div>
			</div>
			<!-- Digital Currencies -->
			<div class="col-lg-4 col-md-6 mb-4 bxx">
				<div class="icon-box">
					<i class="fab fa-bitcoin"></i>
					<h5>Digital Currencies</h5>
					<p>Bitcoin, Ethereum, Ripple, Bitcoin Cash, Litecoin & more</p>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="text-center my-5">
	<h1 class="thrive">Thrive in the Markets </h1>

</div>
<div class="body">

	<div class="containerr">


		<!-- Left Text Cards -->
		<div class="cardm">
			<span>Withdrawals</span>
			<h3>Instant Withdrawals</h3>
			<p>Get your deposits and withdrawals approved the moment you click the button.</p>

			<span>Spreads</span>
			<h3>The Best Spreads On Gold</h3>
			<p>Trade with the tightest & most stable spreads in the market.</p>

			<span>Support</span>
			<h3>24/7 Live Support</h3>
			<p>Get answers in minutes. Contact our support team 24/7 by phone, email, or live chat.</p>
		</div>

		<!-- Center Image -->
		<div>
			<img src="assets/images/newimg10.png" alt="Center Image" class="center-image">
		</div>


		<!-- Right Text Cards -->
		<div class="cardm">
			<span>Execution Speed</span>
			<h3>Ultra-Fast Execution</h3>
			<p>Execute your orders in milliseconds, no matter how big they are.</p>

			<span>Swaps</span>
			<h3>No Overnight Fees</h3>
			<p>Hold your leveraged positions for as long as you like, swap-free. T&C apply.</p>

			<span>Platforms</span>
			<h3>Reliable Platforms</h3>
			<p>Experience the ultimate in stability and execution speed. No matter the size of your order.</p>
		</div>
	</div>
</div>





<div class="container-fluid">

	<div class="row">
		<!-- First Widget -->
		<div class="col-md-12 my-4 py-3">

			<h1 class="overview mb-4 text-center">Market Overview</h1>
			<div class="tradingview-widget-container">

				<div class="tradingview-widget-container__widget"></div>

				<script type="text/javascript"
					src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
					{
  "colorTheme": "dark",
  "dateRange": "1D",
  "showChart": true,
  "locale": "en",
  "largeChartUrl": "",
  "isTransparent": false,
  "showSymbolLogo": true,
  "showFloatingTooltip": false,
  "width": "100%",
  "height": "550",
  "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
  "plotLineColorFalling": "rgba(41, 98, 255, 1)",
  "gridLineColor": "rgba(42, 46, 57, 0)",
  "scaleFontColor": "rgba(209, 212, 220, 1)",
  "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
  "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
  "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
  "tabs": [
    {
      "title": "Forex",
      "symbols": [
        {
          "s": "FX:EURUSD",
          "d": "EUR to USD"
        },
        {
          "s": "FX:GBPUSD",
          "d": "GBP to USD"
        },
        {
          "s": "FX:USDJPY",
          "d": "USD to JPY"
        },
        {
          "s": "FX:USDCHF",
          "d": "USD to CHF"
        },
        {
          "s": "FX:AUDUSD",
          "d": "AUD to USD"
        },
        {
          "s": "FX:USDCAD",
          "d": "USD to CAD"
        },
        {
          "s": "OANDA:NZDJPY",
          "d": "NZD to JPY"
        }
      ],
      "originalTitle": "Forex"
    },
    {
      "title": "Crypto",
      "symbols": [
        {
          "s": "CRYPTO:BTCUSD",
          "d": "BTC to USD"
        },
        {
          "s": "COINBASE:ETHUSD",
          "d": "ETH to USD"
        },
        {
          "s": "BINANCE:SOLUSD",
          "d": "SOL to USD"
        },
        {
          "s": "COINBASE:DOGEUSD",
          "d": "DOG to USD"
        }
      ]
    },
    {
      "title": "Commodities",
      "symbols": [
        {
          "s": "CAPITALCOM:GOLD",
          "d": "XAU to USD"
        }
      ]
    }
  ]
}
				</script>
			</div>
		</div>

		<!-- Second Widget -->
		<!--<div class="col-md-6 mb-4">-->
		<!--     <h1 class="text-center text-light my-2">Mini Chart</h1>-->
		<!--    <div class="embed-widget tradingview-widget-container mt-5">-->
		<!--        <div class="tradingview-widget-container__widget"></div>-->
		<!--        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>-->
		<!--            {-->
		<!--            "symbol": "FX:EURUSD",-->
		<!--            "width": "100%",-->
		<!--            "height": 220,-->
		<!--            "locale": "en",-->
		<!--            "dateRange": "12M",-->
		<!--            "colorTheme": "light",-->
		<!--            "isTransparent": false,-->
		<!--            "autosize": false,-->
		<!--            "largeChartUrl": ""-->
		<!--            }-->
		<!--        </script>-->
		<!--    </div>-->
		<!--</div>-->
	</div>
</div>

{{-- Accouts --}}




  <section class="pt-2">
	<div class="text-center mb-4 mb-2">
		<h2 class="for-head2">EXCEPTIONAL Trading Conditions
			On All Live Accounts</h2>
		<p class="text-dark mt-2" style="font-size: 20px;">Access the markets with an account suitable to your needs.
		</p>
	</div>
  <div class="rfac-container">
	<div class="rfac-card-row">
	  <!-- CARD 1 -->
	  <div class="rfac-card">
		<div class="rfac-card-header">RockfieldStandard</div>
		<div class="rfac-card-body">
		  <p class="rfac-card-subtitle">Take advantage of tight spreads and competitive commissions.</p>
		  <div class="rfac-info"><i class="fas fa-dollar-sign"></i><span><strong>Starting Deposit:</strong> $200</span></div>
		  <div class="rfac-info"><i class="fas fa-coins"></i><span><strong>Base Currencies:</strong> CFD, METALS, CRYPTO, INDICES</span></div>
		  <div class="rfac-info"><i class="fas fa-chart-line"></i><span><strong>Spreads From:</strong> 1.8 pips</span></div>
		  <div class="rfac-info"><i class="fas fa-bolt"></i><span><strong>Max Leverage:</strong> 1:200</span></div>
		  <div class="d-flex justify-content-center mt-3">
			<a href="https://private.rockfieldtrade.us/signup" class="rfac-btn">Create Account</a>
		  </div>
		</div>
	  </div>
  
	  <!-- CARD 2 -->
	  <div class="rfac-card">
		<div class="rfac-card-header1">RockfieldRaw</div>
		<div class="rfac-card-body">
		  <p class="rfac-card-subtitle">Take advantage of tight spreads and competitive commissions.</p>
		  <div class="rfac-info1"><i class="fas fa-dollar-sign"></i><span><strong>Starting Deposit:</strong> $2000</span></div>
		  <div class="rfac-info1"><i class="fas fa-coins"></i><span><strong>Base Currencies:</strong> CFD, METALS, CRYPTO, INDICES</span></div>
		  <div class="rfac-info1"><i class="fas fa-chart-line"></i><span><strong>Spreads From:</strong> 1.5 pips</span></div>
		  <div class="rfac-info1"><i class="fas fa-bolt"></i><span><strong>Max Leverage:</strong> 1:400</span></div>
		  <div class="d-flex justify-content-center mt-3">
			<a href="https://private.rockfieldtrade.us/signup" class="rfac-btn1">Create Account</a>
		  </div>
		</div>
	  </div>
  
	  <!-- CARD 3 -->
	  <div class="rfac-card">
		<div class="rfac-card-header2">RockfieldClassic</div>
		<div class="rfac-card-body">
		  <p class="rfac-card-subtitle">Get access to global markets and trade commission-free.</p>
		  <div class="rfac-info2"><i class="fas fa-dollar-sign"></i><span><strong>Starting Deposit:</strong> $5000</span></div>
		  <div class="rfac-info2"><i class="fas fa-coins"></i><span><strong>Base Currencies:</strong> CFD, METALS, CRYPTO, INDICES</span></div>
		  <div class="rfac-info2"><i class="fas fa-chart-line"></i><span><strong>Spreads From:</strong> 1.2 pips</span></div>
		  <div class="rfac-info2"><i class="fas fa-bolt"></i><span><strong>Max Leverage:</strong> 1:500</span></div>
		  <div class="d-flex justify-content-center mt-3">
			<a href="https://private.rockfieldtrade.us/signup" class="rfac-btn2">Create Account</a>
		  </div>
		</div>
	  </div>
  
	  <!-- CARD 4 -->
	  <div class="rfac-card">
		<div class="rfac-card-header3">RockfieldPremium</div>
		<div class="rfac-card-body">
		  <p class="rfac-card-subtitle">Seamless trading for Android and iOS with low commissions and super-low spreads.</p>
		  <div class="rfac-info3"><i class="fas fa-dollar-sign"></i><span><strong>Starting Deposit:</strong> $10000</span></div>
		  <div class="rfac-info3"><i class="fas fa-coins"></i><span><strong>Base Currencies:</strong> CFD, METALS, CRYPTO, INDICES</span></div>
		  <div class="rfac-info3"><i class="fas fa-chart-line"></i><span><strong>Spreads From:</strong> 0.8 pips</span></div>
		  <div class="rfac-info3"><i class="fas fa-dollar-sign"></i><span><strong>Commission:</strong> $7 per LOT</span></div>
		  <div class="rfac-info3"><i class="fas fa-bolt"></i><span><strong>Max Leverage:</strong> 1:100</span></div>
		  <div class="d-flex justify-content-center mt-3">
			<a href="https://private.rockfieldtrade.us/signup" class="rfac-btn3">Create Account</a>
		  </div>
		</div>
	  </div>
  
	  <!-- CARD 5 -->
	  <div class="rfac-card">
		<div class="rfac-card-header4">RockfieldVIP</div>
		<div class="rfac-card-body">
		  <p class="rfac-card-subtitle">You will benefit from Zero spreads (for 90%+ of the trading day).</p>
		  <div class="rfac-info4"><i class="fas fa-dollar-sign"></i><span><strong>Starting Deposit:</strong> $25000</span></div>
		  <div class="rfac-info4"><i class="fas fa-coins"></i><span><strong>Base Currencies:</strong> CFD, METALS, CRYPTO, INDICES</span></div>
		  <div class="rfac-info4"><i class="fas fa-chart-line"></i><span><strong>Spreads From:</strong> 0.5 pips</span></div>
		  <div class="rfac-info4"><i class="fas fa-dollar-sign"></i><span><strong>Commission:</strong> $2 per LOT</span></div>
		  <div class="rfac-info4"><i class="fas fa-bolt"></i><span><strong>Max Leverage:</strong> 1:100</span></div>
		  <div class="d-flex justify-content-center mt-3">
			<a href="https://private.rockfieldtrade.us/signup" class="rfac-btn4">Create Account</a>
		  </div>
		</div>
	  </div>
	  <div class="rfac-card">
		<div class="rfac-card-header5">RockfieldPlatinum</div>
		<div class="rfac-card-body">
		  <p class="rfac-card-subtitle">You will benefit from Zero spreads (for 90%+ of the trading day).</p>
		  <div class="rfac-info5"><i class="fas fa-dollar-sign"></i><span><strong>Starting Deposit:</strong> $100000</span></div>
		  <div class="rfac-info5"><i class="fas fa-coins"></i><span><strong>Base Currencies:</strong> CFD, METALS, CRYPTO, INDICES, CURRENCIES</span></div>
		  <div class="rfac-info5"><i class="fas fa-chart-line"></i><span><strong>Spreads From:</strong> 0.2 pips</span></div>
		  <div class="rfac-info5"><i class="fas fa-dollar-sign"></i><span><strong>Commission:</strong> $2 per LOT</span></div>
		  <div class="rfac-info5"><i class="fas fa-bolt"></i><span><strong>Max Leverage:</strong> 1:100</span></div>
		  <div class="d-flex justify-content-center mt-3">
			<a href="https://private.rockfieldtrade.us/signup" class="rfac-btn5">Create Account</a>
		  </div>
		</div>
	  </div>
	  
	</div>
  </div>
  </section>

  <script>
	const cards = document.querySelectorAll('.rfac-card');
  
	const revealCardsOnScroll = () => {
	  const triggerBottom = window.innerHeight;
  
	  cards.forEach((card, index) => {
		const cardTop = card.getBoundingClientRect().top;
  
		if (cardTop < triggerBottom - 100) {
		  setTimeout(() => {
			card.classList.add('visible');
		  }, index * 200); // Delay per card
		} else {
		  // Remove class when out of view
		  card.classList.remove('visible');
		}
	  });
	};
  
	window.addEventListener('scroll', revealCardsOnScroll);
	window.addEventListener('load', () => {
	  setTimeout(revealCardsOnScroll, 300);
	});
  </script>
  
   <div class="container-fluid pre-featured-section">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Section -->
        <div class="col-lg-6 mb-5 mb-lg-0 pre-feature-first">
          <p class="pre-feature-topheading text-uppercase">A Multi Asset Brokerage</p>
          <h2 class="pre-featured-heading">Featured In</h2>
          <p class="pre-featured-subtext">
            Our commitment to excellence and innovative trading solutions has garnered recognition from industry experts and influencers.
            We are proud to be recognized as a top player in the financial world, and this recognition further solidifies our dedication
            to providing you with the best trading experience possible.
          </p>
          <p class="fw-bold pre-feature-bottom-heading">Join us to experience firsthand why we’ve earned such prestigious acclaim!</p>
        </div>

        <!-- Right Section -->
        <div class="col-lg-6 pre-feature-second">
          <div class="pre-logo-grid">
            <div class="pre-logo-col"><img src="assets/images/Yahoo!_Finance_logo.webp" alt="Yahoo Finance" /></div>
            <div class="pre-logo-col"><img src="assets/images/business-insider.png" alt="Business Insider" /></div>
            <div class="pre-logo-col"><img src="assets/images/market-insider.png" alt="Markets Insider" /></div>
            <div class="pre-logo-col"><img src="assets/images/bloomberg.png" alt="Bloomberg" /></div>
            <div class="pre-logo-col"><img src="assets/images/investing.png" alt="Investing Again" /></div>
            <div class="pre-logo-col"><img src="assets/images/benzinga.png" alt="Benzinga" /></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

<div class="widget-full-width">
	<!-- TradingView Widget BEGIN -->
	<div class="tradingview-widget-container" style="width: 100%;">
		<div class="tradingview-widget-container__widget"></div>
		<div class="tradingview-widget-copyright">
			<a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank">
				<span class="blue-text">Track all markets on TradingView</span>
			</a>
		</div>
		<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js"
			async>
			{
            "feedMode": "all_symbols",
            "isTransparent": false,
            "displayMode": "regular",
            "width": "100%",
            "height": "550",
            "colorTheme": "light",
            "locale": "en"
        }
		</script>
	</div>
	<!-- TradingView Widget END -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<div class="econx-container">
    <header class="econx-header">
      <h1>Does a Rising Financial Market Equal a Strong Economy?</h1>
      <p>A visual deep dive into the disconnect between Wall Street and Main Street.</p>
    </header>

    <section class="econx-card">
      <h2>GDP – The Mirage of Economic Health</h2>
      <p>Gross Domestic Product (GDP) measures the total value of goods and services produced. A rising GDP may signal economic prosperity at first glance, yet it doesn’t directly reflect improved living standards. For instance, GDP surges during times of war or significant government spending—neither ensures a higher quality of life for the average citizen.</p>
      <p>The stock market’s performance doesn’t drive GDP. Instead, the stock market responds to narratives, profit expectations, and speculative trends. True economic growth depends on actual consumer demand, productivity increases, and fiscal policy—not whether the NYSE or Nasdaq is reaching record highs.</p>
    </section>

    <section class="econx-card">
      <h2>Employment – Wall Street Doesn’t Create Main Street Jobs</h2>
      <p>A popular myth says that rising stocks lead to job creation. In practice, however, companies don’t hire workers simply because their stock price climbs. They expand hiring only when consumer demand justifies it. Many corporations use increased profits to buy back shares or pay dividends—not to build new factories or employ more people.</p>
      <p>Moreover, the unemployment rate can be misleading, as it depends largely on how many people are actively seeking jobs. Therefore, a booming stock market doesn’t necessarily translate into new employment opportunities in local communities.</p>
    </section>

    <section class="econx-card">
      <h2>Inflation – Stocks Respond, But Don’t Control Prices</h2>
      <p>Inflation significantly impacts the stock market, not vice versa. Rising prices often reduce consumer spending, potentially hurting corporate profits and negatively affecting stock values. Yet when companies face higher costs, they typically pass these increases onto consumers rather than absorbing the losses.</p>
      <p>Inflation originates from supply issues, government fiscal policy, and central bank monetary policies—not from the performance of individual stocks or overall financial markets. Thus, the market reacts to inflation but does not drive it.</p>
    </section>

    <section class="econx-card">
      <h2>Interest Rates – A Limited Connection</h2>
      <p>Interest rates demonstrate one potential link between financial markets and the economy. When interest rates are low, investors often shift away from bonds, seeking higher returns in stocks. This transition can temporarily boost stock prices.</p>
      <p>However, elevated stock valuations from lower rates do not inherently benefit the real economy. Companies seldom rely exclusively on public markets for raising capital compared to private lending, venture funding, or retained earnings. Thus, interest rate adjustments influence investor decisions rather than directly fostering economic expansion or job creation.</p>
    </section>

    <section class="econx-card">
      <h2>Currency Strength – Divergent Paths</h2>
      <p>The United States dollar and stock markets rarely move synchronously; they often diverge. A strong dollar can hinder U.S. exports without necessarily causing a market crash. Conversely, a weak dollar can inflate domestic prices without automatically pushing stocks higher. Currency valuation typically reflects trade balances, geopolitical risks, and central bank policy—not quarterly earnings reports or individual stock performances.</p>
    </section>

    <section class="econx-card">
      <h2>What Traders Should Actually Pay Attention To</h2>
      <p>Forget GDP reports, unemployment figures, and inflation data as your primary guides. The true market drivers don't appear solely in government data—they live in investor sentiment, momentum shifts, and market psychology.</p>
      <p>Markets move based on expectations, not simply results. A company can post record profits yet see stock prices fall because investors expected even greater results. The gap between expectation and reality fuels volatility.</p>
      <p>Key factors for traders to monitor include market liquidity, investor positioning, and prevailing narratives. They must track capital flow patterns, identify over-leveraged positions, and observe shifts between fear and greed. Interest rates and central bank policies can spark narratives but are not directly actionable indicators on their own.</p>
    </section>

    <section class="econx-card">
      <h2>Conclusion – The Financial Market as a Mirror, Not a Motor</h2>
      <p>The financial market reflects investor sentiment and speculation, not economic fundamentals. Its performance mirrors investor expectations, not actual economic growth or decline. While financial media often tie daily stock market moves directly to economic health, this relationship is mostly psychological.</p>
      <p>Real individuals rarely feel wealthier simply because the Dow Jones rose, and companies don't construct new factories solely due to higher stock prices.</p>
      <p>Understanding that the stock market is not the economy provides clarity. The real economy and financial markets share some common threads, but the idea that one directly drives the other remains a persistent misconception.</p>
      <p>Whenever you are unsure about market sentiment or coming price action, wait, reevaluate, and think critically. Only when all the signals inspire confidence should you commit to a trade. When in doubt, consider switching to a risk-free demo account to explore theories and strategies. This way, you still gain all the experience and lessons learned without risking your equity.</p>
      <p>To improve your reaction speeds and catch those timely entry points sooner, put a trading app on your phone and get real-time market updates wherever you are.</p>
    </section>
  </div>
 

<div class="mx-5 rafce-color my-5">
	<div class="rfac-promo-container">
	  <div class="rfac-promo-text">
		<div class="rfac-promo-title">Win an iPhone</div>
		<div class="rfac-promo-heading">Trade 50 Lots To Enter Raffle!</div>
		<div class="rfac-promo-subtext">Get a chance to win the latest iPhone.</div>
		<a href="https://private.rockfieldtrade.us/signup" class="rfac-promo-btn">Start Your Trading Journey</a> <br>
		<div class="rfac-terms">*Terms and Conditions Apply</div>
	  </div>
	  <div class="rfac-promo-image">
		<img src="assets/images/iphone16.jpeg" alt="iPhone Illustration">
	  </div>
	</div>
  </div>

@endsection