@extends('frontend.layout.main')

@section('main-container')


 <style>
 .contact-details ul {
    list-style: none;
    margin: 0px;
    padding: 0px;
    float: right;
}
      .contact-info {
        padding: 100px 0 50px;
        /*background: linear-gradient(135deg, #fff 50%, #fffaf0 50%);*/
      }

      .container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 30px;
      }

      .info-box,
      .map-box {
        flex: 1;
        min-width: 300px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transform: translateY(50px);
        opacity: 0;
        animation: fadeInUp 1.5s ease-in-out forwards;
      }

      .info-box:hover,
      .map-box:hover {
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        transform: translateY(0);
      }

      .info-box h2,
      .map-box h2 {
        color: #1273eb; /* Golden */
        font-family: "Playfair Display", serif;
        font-size: 1.8rem;
        margin-bottom: 15px;
        position: relative;
      }

      .info-box h2::after,
      .map-box h2::after {
        content: "";
        position: absolute;
        width: 40px;
        height: 2px;
        background-color: #1273eb;
        left: 0;
        bottom: -10px;
        transition: width 0.3s ease;
      }

      .info-box:hover h2::after,
      .map-box:hover h2::after {
        width: 80px;
      }

      .info-box p,
      .map-box p {
        font-size: 1.1rem;
        color: #333;
        line-height: 1.6;
      }

      .map-box iframe {
        width: 100%;
        height: 300px;
        border: none;
        border-radius: 10px;
      }

      .footer {
        background-color: #222;
        padding: 20px;
        text-align: center;
        transition: background-color 0.3s ease;
      }

      .footer p {
        color: #ffd700; /* Golden */
        font-size: 1rem;
      }

      /* Animations */
      @keyframes fadeInLogo {
        from {
          opacity: 0;
          transform: translateY(-30px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      @keyframes fadeInUp {
        0% {
          opacity: 0;
          transform: translateY(50px);
        }
        100% {
          opacity: 1;
          transform: translateY(0);
        }
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        .container {
          flex-direction: column;
        }

        .info-box,
        .map-box {
          min-width: 100%;
        }
      }
    </style>
    
     <section class="contact-info">
      <div class="container">
        <div class="info-box">
          <h2>Contact Information</h2>
          <br>
          <br>
          <p>
            <strong>Address:</strong> 260-270 Butterfield, Great Marlings, Luton, Bedfordshire, England, LU2 8DL
          </p>
          <br>
          <p>
            <strong>Company Registration Number:</strong> 08476387
          </p>
          <br>
          <p><strong>Phone:</strong> ‪+44 7346 084708</p>
          <br>
          <p><strong>Email:</strong> support@rockfieldtrade.com</p>
        </div>
        <div class="map-box">
          <h2>Our Location</h2>
          <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.973350508823!2d-0.10363792434232068!3d51.51370491024391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604acc2a10b55%3A0xc6954469af1a2e8b!2s33%20Ludgate%20Hill%2C%20London%20EC4M%207AA%2C%20UK!5e0!3m2!1sen!2sin!4v1729836954192!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2461.1104701353056!2d-0.3907513243125048!3d51.91369558094244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876485bf7e6470f%3A0xac91e76920526bdc!2sFoxley%20Kingham%20(FKCA%20Ltd)!5e0!3m2!1sen!2sin!4v1758196409171!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>
    <h2 class="text-center" style="color: #1e334c;">New Zealand Office Address</h2>

     <section class="contact-info pt-2">
      <div class="container">
        <div class="info-box">
          <h2>Contact Information</h2>
          <br>
          <br>
          <p>
            <strong>Address:</strong> 32 Grey Street, Wellington Central, Wellington 6011, New Zealand
          </p>
          
          <br>
          <p><strong>Phone:</strong> +6498024971</p>
          <br>
          <p><strong>Email:</strong> support@rockfieldtrade.com</p>
        </div>
        <div class="map-box">
          <h2>Our Location</h2>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2998.117504915703!2d174.7732693752788!3d-41.284547040257166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d38afd4e2680dbf%3A0x362ef8f18aeaf929!2s32%20Grey%20Street%2C%20Wellington%20Central%2C%20Wellington%206011%2C%20New%20Zealand!5e0!3m2!1sen!2sin!4v1744780354711!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         
        </div>
      </div>
    </section>

@endsection