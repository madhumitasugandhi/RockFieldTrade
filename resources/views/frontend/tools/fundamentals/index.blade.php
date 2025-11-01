@extends('frontend.layout.main')

@section('main-container')

<style>
    .next {
        display: inline-block;
        /* To make the div adjust to content size */
        background-color: #f0f0f0;
        /* Set the background color */
        border-radius: 50%;
        /* Make it round */
        padding: 15px;
        /* Space inside the circle */
        width: 50px;
        /* Set a fixed width */
        height: 50px;
        /* Set a fixed height */
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 10px auto;
        /* Centers the icon */
    }

    .next i {
        font-size: 20px;
        /* Adjust icon size */
        color: #333;
        /* Icon color */
    }

    .card {
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        background-color: #0b9152;
        box-shadow: 0 4px 8px rgba(248, 237, 237, 0.1);
        background-color: ;
        margin: 20px;
        height: 150px;
    }

    /* .card:hover{
        background-color: white;
        color: black;
    } */

    .card:hover {
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        transform: translateY(-5px);
    }

    .hover-box {
        text-decoration: none;
        color: inherit;
    }

    .dot-full {
        width: 50px;
        height: 50px;
        background-color: rgba(94, 235, 188, 0.5);
        color: black;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 10px;
    }

    .dot-full i {
        font-size: 18px;
        color: #555;
    }

    .card-body {
        text-align: center;
    }

    .card-img-top {
        font-size: 23px;
        font-weight: 600;
        color: white;
        margin-top: 15px;
        line-height: 1.4;
    }

    .card:hover .card-img-top {
        color: black;
        /* font-weight: 300; */
    }

    .card-img-top:hover {
        color: black;

    }
    
     .g3t7w9-body-container {
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      justify-content: center;
    }

    .l9a8d1-cards-wrapper {
      width: 100%;
      max-width: 950px;
    }

    .z1y6k2-cards-row {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 30px;
    }

    .p4s7j2-custom-card {
      position: relative;
      flex: 1 1 280px;
      height: 450px;
      background-size: cover;
      background-position: center;
      border-radius: 16px;
      overflow: hidden;
      transition: transform 0.4s ease;
      cursor: pointer;
      min-width: 280px;
      max-width: 400px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    }

    .p4s7j2-custom-card:hover {
      transform: scale(1.08);
      z-index: 10;
    }

    .q5u3w8-card-overlay {
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent 40%);
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 20px;
      color: #fff;
    }

    .a1b9c7-card-title {
      font-size: 20px;
      font-weight: bold;
    }

    /* Styling the View More Button */
    .s4v1u8-view-btn {
      margin-top: 12px;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 14px;
      font-weight: 600;
      cursor: pointer;
      text-decoration: none; /* Remove underline */
      opacity: 0;
      transform: translateY(15px);
      transition: opacity 0.3s ease, transform 0.3s ease, text-decoration 0.3s ease;
    }

    .p4s7j2-custom-card:hover .s4v1u8-view-btn {
      opacity: 1;
      transform: translateY(0);
    }

    .s4v1u8-view-btn:hover {
      text-decoration: none; /* Ensure no underline on hover */
      color: white;
    }

    @media (max-width: 768px) {
      .z1y6k2-cards-row {
        flex-direction: column;
        align-items: center;
      }

      .p4s7j2-custom-card {
        width: 90%;
        height: 70vh;
        flex: 1 1 500px;
      }
    }
</style>

<div class="portfolio-col">
    <!--<div class="container">-->
    <!--    <div class="row">-->
    <!--        <div class="col-lg-6 col-sm-6 text-center portfolio-item">-->
    <!--            <div class="card h-90">-->
    <!--                <a class="hover-box" style="text-decoration: none;" href="/fanalysis">-->
    <!--                    <div class="dot-full">-->
    <!--                    </div>-->
    <!--                    <div class="card-body mb-5">-->
    <!--                        <h1 class="card-img-top">What is fundamental analysis?-->

    <!--                        </h1>-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--                <div class="next text-center">-->
    <!--                    <a href="/fanalysis"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->





    <!--        {{-- <div class="pagination_bar">-->
                <!-- Pagination -->
    <!--            <ul class="pagination justify-content-center">-->
    <!--                <li class="page-item">-->
    <!--                    <a class="page-link" href="#" aria-label="Previous">-->
    <!--                        <span aria-hidden="true">&laquo;</span>-->
    <!--                        <span class="sr-only">Previous</span>-->
    <!--                    </a>-->
    <!--                </li>-->
    <!--                <li class="page-item">-->
    <!--                    <a class="page-link" href="#">1</a>-->
    <!--                </li>-->
    <!--                <li class="page-item">-->
    <!--                    <a class="page-link" href="#">2</a>-->
    <!--                </li>-->
    <!--                <li class="page-item">-->
    <!--                    <a class="page-link" href="#">3</a>-->
    <!--                </li>-->
    <!--                <li class="page-item">-->
    <!--                    <a class="page-link" href="#" aria-label="Next">-->
    <!--                        <span aria-hidden="true">&raquo;</span>-->
    <!--                        <span class="sr-only">Next</span>-->
    <!--                    </a>-->
    <!--                </li>-->
    <!--            </ul>-->
    <!--        </div> --}}-->
    <!--    </div>-->
        <!-- /.container -->
    <!--</div>-->

     <div class="g3t7w9-body-container">
    <div class="l9a8d1-cards-wrapper">
      <div class="z1y6k2-cards-row">
        
        <div class="p4s7j2-custom-card" style="background-image: url('assets/images/ver1.jpg');">
          <div class="q5u3w8-card-overlay">
            <div class="a1b9c7-card-title">What is fundamental analysis?</div>
            <a href="/fanalysis" class="s4v1u8-view-btn">View More</a>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection