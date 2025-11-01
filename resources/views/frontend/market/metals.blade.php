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
                <source src="https://videos.pexels.com/video-files/9629254/9629254-sd_640_360_24fps.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="overlay"></div>
    <div class="container xyz">
        <!-- Page Heading/Breadcrumbs -->
       <h1 class="sub-head">Precious Metals</h1>
 <p class="text-light">Trade CFDs on Spot Metals and unmask new trading opportunities</p>
    </div>
</div>

<!--<div class="full-title">-->
<!--    <video autoplay muted loop id="bg-video">-->
<!--        <source src="https://videos.pexels.com/video-files/9629254/9629254-sd_640_360_24fps.mp4" type="video/webm">-->
<!--        Your browser does not support HTML5 video.-->
<!--    </video>-->
<!--    <div class="overlay"></div>-->
<!--    <div class="container xyz">-->
        <!-- Page Heading/Breadcrumbs -->
<!--        <h1 class="sub-head">Precious Metals</h1>-->
<!--        <p class="text-light">Trade CFDs on Spot Metals and unmask new trading opportunities</p>-->
<!--    </div>-->
<!--</div>-->

<div class="container-fluid about-main">
    <!-- About Content -->
    <div class="forex-content">
        <h1 class="mb-4 "><strong>Trade Metals with RockfieldTrade</strong></h1>
        <div class="row main">
            
            <div class="col-lg-6 col-md-6 col-sm-6">
               <p>
                Trading spot metals allows investors to expand their portfolio by taking long or short positions on spot gold and silver. We ensure that your orders are executed at the most accurate and competitive prices. Spot gold is more valuable than spot silver, but they both share strong price movements.
               </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
               <p>
                Trading spot metals is often considered as a safe, haven investment, especially at times of economic uncertainty. You may practice trading spot metals on a free demo account before trading on your real account.
               </p>
            </div>

        </div>
    </div>
    <!-- /.row -->
</div>

@endsection