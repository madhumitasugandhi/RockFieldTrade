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
        width: 23%;
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
            width: 38%;
        }

        .text-light {
            font-size: 14px;
        }
    }
</style>

<div class="full-title">
    <video autoplay muted playsinline loop id="bg-video">
                <source src="https://videos.pexels.com/video-files/4299246/4299246-sd_640_360_30fps.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="overlay"></div>
    <div class="container xyz">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="sub-head">Spot Indices</h1>
         <p class="text-light">Trade CFDs on popular Indices from across Europe, Asia and America.</p>
    </div>
</div>

<!--<div class="full-title">-->
<!--    <video autoplay muted loop id="bg-video">-->
<!--        <source src="https://videos.pexels.com/video-files/4299246/4299246-sd_640_360_30fps.mp4" type="video/webm">-->
<!--        Your browser does not support HTML5 video.-->
<!--    </video>-->
<!--    <div class="overlay"></div>-->
<!--    <div class="container xyz">-->
        <!-- Page Heading/Breadcrumbs -->
<!--        <h1 class="sub-head">Spot Indices</h1>-->
<!--        <p class="text-light">Trade CFDs on popular Indices from across Europe, Asia and America.</p>-->
<!--    </div>-->
<!--</div>-->

<div class="container-fluid about-main">
    <!-- About Content -->
    <div class="forex-content">
        <h1 class="mb-4 "><strong>What Are Indices?</strong></h1>
        <div class="row main">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <p>World indices are indicators of price changes for a certain group of securities. The stock exchange
                    index can be explained as a “basket” of shares united by a common basis. Trading indices can be
                    compared to opening positions on the courses of several dozen stocks at once. <br>

                    The most important thing is determining the exact stocks or bonds each index is formed from. The set
                    of shares included in the spot index value calculation determines the information that can be
                    obtained by observing the dynamics of its course. <br>

                    In general, the main purpose of world indices is to create a powerful indicator for investors to
                    characterise the direction of companies’ quotes in a particular industry.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <p>
                    Studying the dynamics of major indices helps to understand the impact of certain events on the value
                    of securities. <br>

                    During trading indices, keep in mind that the reaction to the economic news published may not
                    correspond with expectations and forecasts. <br>

                    For example, if there is a rise in oil prices, it is logical to expect an increase in the shares of
                    all the oil companies. <br>

                    However, different stocks grow at different speeds, while some of them may not respond to such news
                    at all. In this case, the spot index helps traders to understand the overall trend of this market
                    segment without the need to assess the position of lots of different companies.
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <p>
                    Observation and trading indices give insights into how the different sectors of the economy trade in comparison with each other. Here at RockfieldTrade we are glad to offer the trading of CFD on major indices, which makes it possible to join the price movement not only for a rise, but also a fall. <br>

Trading indices is popular among RockfieldTrade traders due to its comprehensive terms, accurate quotes from several suppliers and versatile analytics. After all, in order to understand the logic of the index behaviour, you need to pay attention to the corporate news of each of the companies included, as well as on events affecting the wider industry as a whole.
                </p>
            </div>

        </div>
    </div>
    <!-- /.row -->
</div>

@endsection