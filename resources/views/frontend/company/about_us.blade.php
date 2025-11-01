@extends('frontend.layout.main')

@section('main-container')

<style>
    .ib_img2{
        width: 300px;
        height: auto;
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
            <img src="assets/images/ib.jpg" alt="IB Image">
            <div class="overlay"></div> <!-- Black transparent overlay -->
            <div class="text-overlay">
                <h1>ABOUT US</h1>
                <p class="mt-4">At RockfieldTrade, we believe that trading should be accessible, transparent, and rewarding. Founded by a team of passionate traders and financial experts, our mission is to empower individuals and institutions with the tools and knowledge they need to succeed in the dynamic world of trading.</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-light">
    <div class="second my-3 mx-5">
       
        <div class="row d-flex align-items-center"> 
        <div class="col-lg-12 col-sm-6">
             <h2 class="pt-3">Our Vision</h2>
              <p style="font-size:16px;">We envision a trading environment where anyone, regardless of their experience level, can confidently navigate the markets. Our platform is designed to simplify the trading process, providing a seamless experience that caters to both novice and seasoned traders.</p>
              <h2 class="mt-3">Our Values</h2>
              <ul class="custom-list">
                    <li><strong>Integrity:</strong> We prioritize honesty and transparency in all our dealings, ensuring that our clients receive clear information and fair opportunities.</li>
                    <li><strong>Innovation:</strong> We continuously strive to enhance our platform with cutting-edge technology, offering advanced features that keep our users ahead of the curve.</li>
                    <li><strong>Education:</strong> We believe that informed traders make better decisions. That’s why we provide extensive educational resources, from webinars to articles, to help you refine your skills.</li>
                    
                </ul>
              <h3 class="mt-3">What We Offer</h3>
              <ul class="custom-list">
                    <li><strong>User-Friendly Platform:</strong> Our trading platform is intuitive and designed for ease of use, allowing you to focus on making informed trading decisions.</li>
                    <li><strong>Wide Range of Assets:</strong> Trade a diverse array of financial instruments, including stocks, commodities, forex, and cryptocurrencies.</li>
                    <li><strong>Expert Support:</strong> Our dedicated support team is available to assist you at every step, ensuring you have the help you need when you need it.</li>
                    
                </ul>
              </div>
        </div>
    <div class="row">
        <div class="col-lg-12 col-sm-6">
            <p class="mt-5 text-center" style="font-size:18px;"><strong>Join Us: </strong> At RockfieldTrade, we’re more than just a trading platform; we’re a community of traders who share insights, strategies, and successes. Whether you’re looking to trade for fun, grow your portfolio, or engage in professional trading, you’ll find a welcoming space here.</p>
        </div>
    </div>
    </div>
</div>


@endsection