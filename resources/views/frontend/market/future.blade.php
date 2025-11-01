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
            width: 45%;
        }

        .text-light {
            font-size: 14px;
        }
    }
</style>

<div class="full-title">
    <video autoplay muted playsinline loop id="bg-video">
                <source src="https://videos.pexels.com/video-files/2675509/2675509-sd_640_360_24fps.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="overlay"></div>
    <div class="container xyz">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="sub-head">Futures Trading</h1>
        <p class="text-light">Trade CFDs on Futures from around the world and explore endless trading opportunities</p>
    </div>
</div>


<!--<div class="full-title">-->
<!--    <video autoplay muted loop id="bg-video">-->
<!--        <source src="assets/video/futures.webm" type="video/webm">-->
<!--        Your browser does not support HTML5 video.-->
<!--    </video>-->
<!--    <div class="overlay"></div>-->
<!--    <div class="container xyz">-->
        <!-- Page Heading/Breadcrumbs -->
<!--        <h1 class="sub-head">Futures Trading</h1>-->
<!--        <p class="text-light">Trade CFDs on Futures from around the world and explore endless trading opportunities</p>-->
<!--    </div>-->
<!--</div>-->

<div class="container-fluid about-main">
    <!-- About Content -->
    <div class="forex-content">
        <h1 class="mb-4 "><strong>What is Future?</strong></h1>
        <div class="row main">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <p>
                    Futures are financial contracts for the specific asset to be bought or sold at a set time in the
                    future. The final price level is determined by both parties, a buyer and a seller, and is known as
                    the forward price. The specified date of the future payment is known as the expiration date.
                    <br>
                    Contract for difference (CFD) on futures allow for trade on the price fluctuations of a wide range
                    of assets: commodities, indices and energy. If investors make a forecast
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <p>about the quotes increase, they open a Buy position on the trading platform. If they think the chart
                    will move down, they make an online order to Sell. Start trading futures with RockfieldTrade to diversify
                    your investor account!</p>
            </div>

        </div>
    </div>
    <!-- /.row -->
</div>

@endsection