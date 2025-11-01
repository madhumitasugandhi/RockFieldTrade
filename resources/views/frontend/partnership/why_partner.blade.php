@extends('frontend.layout.main')

@section('main-container')

<style>
    .feature-card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #fff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Card Hover Animation */
    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    /* Icon Animation */
    .feature-card img {
        transition: transform 0.3s ease;
    }

    .feature-card:hover img {
        transform: scale(1.1);
    }

    .custom-list {
        margin-bottom: 0;
        /* Ensures no extra space below the list */
    }

    .custom-list li::marker {
        color: #0056b3;
        /* Blue marker */
        font-size: 1.5em;
        /* Increase the size of the marker */
    }

    .custom-list li {
        position: relative;
        list-style-type: none;
        /* Remove default marker */
        padding-left: 2em;
        /* Add space for the custom marker */
    }

    .custom-list li::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 12px;
        /* Set width of rectangle */
        height: 12px;
        /* Set height of rectangle */
        background-color: #0056b3;
        /* Blue color for rectangle */
        border-radius: 2px;
        /* Slight rounding of the corners, adjust as needed */
    }


    .ib_img {
        width: 100%;
        height: auto;
    }

    .b-abc {
        color: blue;
    }

    .text {
        text-align: justify;
    }

    .head-img {
        position: relative;
        height: 300px;
        overflow: hidden;
    }

    .head-img img {
        width: 100%;
        height: auto;
        display: block;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 200%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 1;
    }

    .text-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        text-align: center;
        z-index: 2;
        font-size: 24px;
    }

    .text-overlay h1 {
        margin: 0;
        font-size: 32px;
        font-weight: bold;
    }

    .text-overlay p {
        margin: 0;
        font-size: 18px;
    }

    .container-fluid {
        width: 100%;
        padding: 0;
        margin: 0;
    }

    @media (max-width: 768px) {
        .head-img {
            height: 200px;
        }

        .text-overlay {
            font-size: 18px;
        }

        .text-overlay h1 {
            font-size: 24px;
        }

        .text-overlay p {
            font-size: 14px;
        }
    }

    @media (max-width: 576px) {
        .head-img {
            height: 150px;
        }

        .text-overlay {
            font-size: 16px;
        }

        .text-overlay h1 {
            font-size: 20px;
        }

        .text-overlay p {
            font-size: 12px;
        }

        .container .row>div {
            text-align: center;
        }
    }
</style>

<!-- full Title -->
<div class="full-title">
    <div class="container-fluid">
        <!-- Page Heading/Breadcrumbs -->
        <div class="head-img m-0 p-0">
            <img src="assets/images/why_partner.jpg" alt="IB Image">
            <div class="overlay"></div> <!-- Black transparent overlay -->
            <div class="text-overlay">
                <h1>WHY CHOOSE ROCKFIELDTRADE</h1>
                <p class="mt-4">Give your trading strategy the advantage with our better-than-market conditions.</p>
            </div>
        </div>
    </div>
</div>

<div class="container text-center my-5">
    <h1 class="mb-3">Take your trading to the next level</h1>
    <p class="mb-5">Our leading market conditions, trading features, and proprietary protections give your strategy the
        advantage it deserves.</p>

    <div class="row">
        <!-- Card 1: Best spreads on gold -->
        <div class="col-md-4 mb-4 d-flex">
            <div class="feature-card p-4 border rounded">
                <div class="icon mb-3">
                    <!-- Optional icon goes here -->
                    <img src="assets/images/p1.svg" alt="">
                </div>
                <h5 class="card-title">Best spreads on gold</h5>
                <p class="card-text">When the gold market moves, our pricing stays tight & stable.</p>
            </div>
        </div>

        <!-- Card 2: Stop Out Protection -->
        <div class="col-md-4 mb-4 d-flex">
            <div class="feature-card p-4 border rounded">
                <div class="icon mb-3">
                    <!-- Optional icon goes here -->
                    <img src="assets/images/p2.svg" alt="">
                </div>
                <h5 class="card-title">Stop Out Protection</h5>
                <p class="card-text">Experience fewer stop outs with a unique protection feature designed to delay or
                    completely avoid stop outs.</p>
            </div>
        </div>

        <!-- Card 3: No overnight fees -->
        <div class="col-md-4 mb-4 d-flex">
            <div class="feature-card p-4 border rounded">
                <div class="icon mb-3">
                    <!-- Optional icon goes here -->
                    <img src="assets/images/p3.svg" alt="">
                </div>
                <h5 class="card-title">No overnight fees</h5>
                <p class="card-text">Hold overnight positions for free on all FX majors, most FX minors, gold, crypto,
                    and indices.</p>
            </div>
        </div>

        <div class="row">
            <!-- Card 4: -->
            <div class="col-md-4 mb-4 d-flex">
                <div class="feature-card p-4 border rounded">
                    <div class="icon mb-3">
                        <!-- Optional icon goes here -->
                        <img src="assets/images/p4.svg" alt="">
                    </div>
                    <h5 class="card-title">Ultra-fast execution</h5>
                    <p class="card-text">Execute trades in milliseconds on RockfieldTrade
                         Terminals.</p>
                </div>
            </div>
            <!-- Card 5: -->
            <div class="col-md-4 mb-4 d-flex">
                <div class="feature-card p-4 border rounded">
                    <div class="icon mb-3">
                        <!-- Optional icon goes here -->
                        <img src="assets/images/p5.svg" alt="">
                    </div>
                    <h5 class="card-title">0% stop out level</h5>
                    <p class="card-text">Stay in the markets for longer with a 0% margin level stop out on all accounts.
                    </p>
                </div>
            </div>
            <!-- Card 6: -->
            <div class="col-md-4 mb-4 d-flex">
                <div class="feature-card p-4 border rounded">
                    <div class="icon mb-3">
                        <!-- Optional icon goes here -->
                        <img src="assets/images/p6.svg" alt="">
                    </div>
                    <h5 class="card-title">Customizable leverage</h5>
                    <p class="card-text">Modify your leverage to suit your risk management strategy with flexible
                        leverage up to 1:unlimited.</p>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection