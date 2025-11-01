@extends('frontend.layout.main')

@section('main-container')


<style>
    /* Content Wrapper Styling */
    .content-wrapper {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f8f9fa;
        /* Light grey background */
        border-radius: 8px;
        /* Rounded corners */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Subtle shadow */
    }

    /* Section Styling */
    .content-wrapper>div {
        padding: 20px;
        margin-bottom: 20px;
        background-color: #ffffff;
        /* White background */
        border-radius: 8px;
        /* Rounded corners */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        /* Light shadow */
        transition: transform 0.3s, box-shadow 0.3s;
        /* Smooth transition */
    }

    .content-wrapper>div:hover {
        transform: translateY(-5px);
        /* Slight lift on hover */
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        /* More prominent shadow */
    }

    /* Decorative Line */
    .content-wrapper {
        position: relative;
        /* Set a relative position for context */
    }

    .content-wrapper h2 {
        position: relative;
        /* Required to position the ::after pseudo-element */
    }

    .content-wrapper h2::after {
        content: '';
        display: block;
        width: 100px;
        height: 3px;
        background-color: #007bff;
        /* Primary color */
        position: absolute;
        transition: transform 0.3s ease;
        bottom: -5px;
        left: 0;
    }

    .content-wrapper h2:hover::after {
        transform: translateX(100px);
    }

    /* Paragraph Styling */
    .content-wrapper p {
        font-size: 1rem;
        line-height: 1.6;
        color: #666;
        /* Medium grey text */
        margin-bottom: 0;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .content-wrapper {
            padding: 10px;
        }

        .content-wrapper>div {
            padding: 15px;
        }

        .content-wrapper h2 {
            font-size: 1.25rem;
        }

        .content-wrapper p {
            font-size: 0.9rem;
        }
    }



    .text {
        text-align: justify;
    }

    .head-img {
        position: relative;
        /* Needed for positioning the overlay and text */
        height: 300px;
        /* Adjust height as needed */
        overflow: hidden;
        /* Hide any overflow */
    }

    .head-img img {
        width: 100%;
        height: auto;
        display: block;
    }

    .overlay {
        position: absolute;
        /* Position the overlay */
        top: 0;
        left: 0;
        width: 200%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        /* Black transparent overlay */
        z-index: 1;
        /* Place it above the image */
    }

    .text-overlay {
        position: absolute;
        /* Position the text on top of the image and overlay */
        top: 50%;
        /* Center the text vertically */
        left: 50%;
        /* Center the text horizontally */
        transform: translate(-50%, -50%);
        /* Adjust for perfect centering */
        color: white;
        /* Text color */
        text-align: center;
        /* Center align text */
        z-index: 2;
        /* Place text above the overlay */
        font-size: 24px;
        /* Adjust as needed */
    }

    .text-overlay h1 {
        margin: 0;
        /* Remove default margins */
        font-size: 32px;
        /* Adjust as needed */
        font-weight: bold;
        /* Make the heading bold */
    }

    .text-overlay p {
        margin: 0;
        /* Remove default margins */
        font-size: 18px;
        /* Adjust as needed */
    }

    .container-fluid {
        width: 100%;
        padding-right: 0px;
        padding-left: 0px;
        margin-right: 0px;
        margin-left: 0px;
    }
</style>
<!-- full Title -->
<div class="full-title">
    <div class="container-fluid">
        <!-- Page Heading/Breadcrumbs -->
        <div class="head-img m-0 p-0">
            <img src="assets/images/all-title-bg.jpg" alt="">
            <div class="overlay"></div> <!-- Black transparent overlay -->
            <div class="text-overlay">
                <h1>WHY TO CHOOSE ROCKFIELDTRADE</h1>
                <p class="mt-4">RockfieldTrade has grown to become one of the largest  Forex CFD provider in
                    the world by giving traders what they really want.</p>
            </div>
        </div>
    </div>
</div>

<div class="container content-wrapper my-2">
    <div class="low-spread ">
        <h2 class="sub-heading">Low Spreads</h2>
        <p class="text">Our mission is to provide traders with the lowest spreads possible during all market conditions.
            We have invested heavily in technology and establishing strong relationships with some of the largest and
            most reliable liquidity providers in the market. We are constantly adding and tweaking our technology in
            order to bring our traders the best possible conditions in the industry.</p>
    </div>

    <div class="fast-execution">
        <h2>Fast Execution</h2>
        <p>RockfieldTrade utilises enterprise grade hardware on our trade servers in the NY4 & LD5 data centre in New
            York & London respectively. Our trader servers are collocated with the data server of our pricing providers
            in these data centres. Dedicated fibre optic cross connects us and our pricing providers to ensure the
            lowest latency and fastest possible trade execution for our clients.</p>
    </div>

    <div class="superior-tech ">
        <h2>Superior Technology</h2>
        <p>RockfieldTrade has partnered with the world’s best trading technology companies to bring you the ultimate
            trading experience and cutting edge trading tools. These tools include: Depth of Market (DoM), inbuilt
            spread monitoring, ladder trading, automated close of trades with custom order templates, and more. Our
            iPhone and Android trading applications have been optimised to provide you the best possible mobile trading
            experience.</p>
    </div>

    <div class="adv-trading-tools ">
        <h2>Advanced Trading Tools</h2>
        <p>Our additions to RockfieldTrade such as a one click trade module, market depth, spread monitor, trade risk
            calculator, and advanced order types previously not available on RockfieldTrade make for a better trading
            experience.</p>
    </div>

    <div class="trust-transparency ">
        <h2>Trust and Transparency</h2>
        <p>Trust and Transparency form the basis of RockfieldTrade's core values. RockfieldTrade is a regulated
            Forex CFD provider that applies Raw Spreads on its main and most famous account type, so there is no
            requotes, no price manipulation and no restrictions.</p>
    </div>

</div>





@endsection