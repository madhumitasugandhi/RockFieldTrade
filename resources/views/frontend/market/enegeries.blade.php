@extends('frontend.layout.main')

@section('main-container')

<style>
    container.xyz {
        position: absolute;
        /* bottom: -50px; */
        /* Adjust this to control the position from the bottom */
        width: 100%;
        text-align: center;
        z-index: 1;
    }

    .sub-head {
        animation: slide-in-left 1s ease-in-out;
        color: white;
    }

    .text-light {
        font-size: 25px;
    }

    @keyframes slide-in-left {
        0% {
            transform: translateX(-100%);
            opacity: 0;
        }

        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .main {
        text-align: justify;
    }

    .main p {
        font-size: 13px;
    }

    .forex-content {
        margin-left: 45px;
        margin-right: 45px;
    }

    @media (max-width: 768px) {
        .forex-content {
            margin-left: 15px;
            margin-right: 15px;
        }
    }

    /* Transparent background with image */
    .modal-background {
        background: white;
        /* Adjust the transparency */
        position: relative;
    }

    /* Adding background image for modal */
    .modal::before {
        content: '';
        background-image: url('assets/images/slide3.jpg');
        /* Set your image path */
        background-size: cover;
        background-position: center;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 0.4;
        /* Adjust the opacity for the image */
        z-index: -1;
        /* Make sure the image stays behind the modal content */
    }

    /* Hiding the scrollbar but keeping functionality */
    .scrollable-content {
        max-height: 400px;
        overflow-y: auto;
    }

    /* Hide scrollbar for WebKit browsers */
    .scrollable-content::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for other browsers */
    .scrollable-content {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }

    .sub-head {
        /*background-color: rgb(25, 25, 243);*/
        color: white;
        width: 28%;
        /*padding: 10px;*/
        margin-top: 150px;
    }

    /* Media queries for responsiveness */
    @media screen and (max-width: 768px) {
        .sub-head {
            font-size: 30px;
            width: 50%;
        }

        .text-light {
            font-size: 18px;
        }
    }

    @media screen and (max-width: 480px) {
        .sub-head {
            font-size: 20px;
            width: 48%;
        }

        .text-light {
            font-size: 14px;
        }
    }
</style>

<div class="full-title">
    <video autoplay muted playsinline loop id="bg-video">
                <source src="https://videos.pexels.com/video-files/2544523/2544523-sd_640_360_24fps.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="overlay"></div>
    <div class="container xyz">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="sub-head">CFDs on Energy</h1>
        <p class="text-light">Trade CFDs on Spot Energy such as Brent oil, WTI and Natural Gas and diversify your portfolio</p>
    </div>
</div>

<!--<div class="full-title">-->
<!--    <video autoplay muted loop id="bg-video">-->
<!--        <source src="https://videos.pexels.com/video-files/2544523/2544523-sd_640_360_24fps.mp4" type="video/webm">-->
<!--        Your browser does not support HTML5 video.-->
<!--    </video>-->
<!--    <div class="overlay"></div>-->
<!--    <div class="container xyz">-->
        <!-- Page Heading/Breadcrumbs -->
<!--        <h1 class="sub-head">CFDs on Energy</h1>-->
<!--        <p class="text-light">Trade CFDs on Spot Energy such as Brent oil, WTI and Natural Gas and diversify your portfolio</p>-->
<!--    </div>-->
<!--</div>-->

<div class="container-fluid about-main">
    <!-- About Content -->
    <div class="forex-content">
        <h1 class="mb-4 "><strong>Trade Spot Energy with RockfieldTrade</strong></h1>
        <div class="row main">

            <div class="col-lg-4 col-md-4 col-sm-4">
                <p>
                    Here at RockfieldTrade, we offer our clients trading on spot energy, such as Brent, WTI and Natural Gas,
                    which are considered to be the most important raw material resources on the planet. <br>
                    Review the assets above and discover the possibility of new trading opportunities in the financial
                    market. <br>

                    CFDs on energy are a popular choice for short-term trading, especially when there is a surge in
                    energy consumption, as during periods of active growth, demand increases. Prices are determined by
                    global supply and demand for the physical product. <br>

                    Often referred to as “black gold”, Oil is usually denominated in U.S. Dollars (hence the term
                    ‘Petrodollar’), so a weak dollar will commonly cause Oil prices to rise, as the price of the product
                    is directly influenced by the value of the currency. <br>

                    Oil-producing nations have a dramatic effect on the supply, and therefore the price, as they may
                    withdraw or
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <p>
                    boost the physical quantity of barrels available in the market. <br>

                    For example, since the mid-90s, the US imposed sanctions on Iran have prevented Iranian oil from
                    entering the marketplace, widening the gap between supply and demand which results in higher prices.
                    Another noteworthy event occurred in 2014 when a much lower demand from the EU and China caused a
                    sharp decrease due to the excess supply. For many years, the US government has been building up its
                    oil reserves and should these be released to the market, or used domestically, energy prices may
                    drop sharply as a result. <br>

                    In the case of NatGas, an alternative energy commodity to oil, historical analysis shows a general
                    correlation between the two, considering that natural gas is often released during the oil drilling
                    process, and they are commonly produced by the same companies or nations.
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <p> 
                    In conclusion, a multitude of economic factors can affect the price of energy, including inflation
                    rates, political or military tensions in producing nations, natural disasters, production costs and
                    of course, OPEC decisions. <br>

                    Trading CFDs on energy allows you to speculate on price movement, without having to physically
                    acquire the underlying asset. As prices fluctuate, traders make profit or loss depending on their
                    position and direction in the market. Learn more by visiting our Educational Section, and feel free
                    to practice trading on spot energy on our free demo account before going live. <br>

                    Select an asset above to see real-time charts of spot energy, and start trading with RockfieldTrade today,
                    for the ability to buy or sell energy CFDs (Contract for Difference) through our award-winning
                    trading platforms. <br>

                    Trade spot energy with RockfieldTrade!
                </p>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>

@endsection