@extends('frontend.layout.main')

@section('main-container')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<!-- ===================== PAMM PAGE (IB THEME STYLE) ===================== -->

<!-- HERO SECTION -->
<section class="pamm-hero text-white d-flex align-items-center text-center text-md-start">
  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-md-6 fade-up">
        <h5 class="text-uppercase mb-3 fw-semibold">PAMM Account</h5>
        <h1 class="fw-bold mb-3 display-5">
          THINK <span class="text-theme">BIGGER</span>
        </h1>
        <p class="lead mb-4">
          Simplify pooled capital oversight and focus on scaling with our PAMM solutions.
        </p>
        <a href="#faq" class="btn btn-theme px-4 py-2 fw-semibold rounded-1">Get Started</a>
      </div>
      <div class="col-md-6 text-center fade-up delay-1">
        <img src="{{ asset('/assets/images/pamm_logo.png') }}" alt="PAMM Hero" class="img-fluid hero-img">
      </div>
    </div>
  </div>
</section>

<!-- OVERVIEW SECTION -->
<section class="pamm-overview py-5 bg-light text-dark">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 text-center fade-up">
        <img src="{{ asset('/assets/images/main-logo2.png') }}" alt="PAMM Overview" class="img-fluid w-50">
      </div>
      <div class="col-lg-6 fade-up delay-1">
        <h2 class="fw-bold mb-3 text-theme">Don’t Go Solo</h2>
        <p class="lead">
          Shared success starts here. PAMM makes fund management easy, so you and your clients can thrive together.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- FEATURES SECTION -->
<section class="pamm-features py-5 text-center bg-white">
  <div class="container">
    <h2 class="fw-bold mb-5 text-theme fade-up">Effortlessly Manage Client Funds</h2>
    <div class="row g-4">
      <div class="col-md-4 col-sm-6 fade-up">
        <div class="feature-box shadow-sm p-4 h-100" style="border-bottom: 3px solid purple">
          <i class="bi bi-currency-dollar text-theme fs-2 mb-3"></i>
          <h5>All Trading Styles Welcome</h5>
          <p>Freedom is key—manage strategies your way.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 fade-up delay-1">
        <div class="feature-box shadow-sm p-4 h-100" style="border-bottom: 3px solid navy">
          <i class="bi bi-display text-theme fs-2 mb-3"></i>
          <h5>Intuitive Interface</h5>
          <p>Built for clarity and total control.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 fade-up delay-2">
        <div class="feature-box shadow-sm p-4 h-100" style="border-bottom: 3px solid rgb(68, 163, 252)">
          <i class="bi bi-arrow-repeat text-theme fs-2 mb-3"></i>
          <h5>Seamless Funding</h5>
          <p>Manage capital effortlessly across accounts.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 fade-up">
        <div class="feature-box shadow-sm p-4 h-100" style="border-bottom: 3px solid navy">
          <i class="bi bi-graph-up text-theme fs-2 mb-3" ></i>
          <h5>Quick Setup</h5>
          <p>Strategies ready for both masters and traders.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 fade-up delay-1">
        <div class="feature-box shadow-sm p-4 h-100" style="border-bottom: 3px solid rgb(68, 163, 252)">
          <i class="bi bi-flag text-theme fs-2 mb-3"></i>
          <h5>Custom Branding</h5>
          <p>Rebrand and personalise as your own.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 fade-up delay-2">
        <div class="feature-box shadow-sm p-4 h-100" style="border-bottom: 3px solid purple">
          <i class="bi bi-lightning-charge text-theme fs-2 mb-3"></i>
          <h5>Lightning Fast</h5>
          <p>Experience top-tier speed and reliability.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ SECTION -->
<section id="faq" class="pamm-faq py-5 bg-light text-dark">
  <div class="container">
    <h2 class="fw-bold text-center mb-5 text-theme fade-up">Frequently Asked Questions</h2>

    <div class="accordion accordion-flush" id="faqAccordion">
      
      <!-- 1 -->
      <div class="accordion-item fade-up">
        <h1 class="accordion-header" id="heading1">
          <button class="accordion-button collapsed fw-semibold  bg-transparent" type="button"
            data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
            1. What is a PAMM account?
          </button>
        </h1>
        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-dark-75 ps-4">
            A PAMM (Percentage Allocation Management Module) account allows professional traders to manage multiple investor accounts simultaneously. Profits and losses are distributed proportionally based on each investor’s contribution.
          </div>
        </div>
      </div>

      <!-- 2 -->
      <div class="accordion-item fade-up delay-1">
        <h2 class="accordion-header" id="heading2">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
            2. Who can become a PAMM Master?
          </button>
        </h2>
        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Any experienced trader with a proven track record can apply to become a PAMM Master and start managing pooled funds for multiple investors. As a PAMM master, you may manage multiple forex trading accounts using their capital and such pooled money, with an aim to generate profits.
          </div>
        </div>
      </div>

      <!-- 3 -->
      <div class="accordion-item fade-up delay-2">
        <h2 class="accordion-header" id="heading3">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
            3. How do investors benefit from PAMM accounts?
          </button>
        </h2>
        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Investors can access expert trading strategies without needing to trade themselves. They benefit from the professional trader’s expertise and earn a share of the profits.
          </div>
        </div>
      </div>

      <!-- 4 -->
      <div class="accordion-item fade-up">
        <h2 class="accordion-header" id="heading4">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
            4. How are profits and losses allocated in a PAMM account?
          </button>
        </h2>
        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Profits and losses are automatically distributed to investors based on their percentage contribution to the total fund. This ensures fair and transparent allocation.
          </div>
        </div>
      </div>

      <!-- 5 -->
      <div class="accordion-item fade-up delay-1">
        <h2 class="accordion-header" id="heading5">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
            5. What fees do PAMM Masters charge?
          </button>
        </h2>
        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            PAMM Masters typically charge a performance fee based on profits generated. These fees are agreed upon before investors join the PAMM account.
          </div>
        </div>
      </div>

      <!-- 6 -->
      <div class="accordion-item fade-up delay-2">
        <h2 class="accordion-header" id="heading6">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
            6. Can I withdraw my funds from a PAMM account at any time?
          </button>
        </h2>
        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, investors can typically withdraw their funds at designated intervals or as per the terms set by the PAMM Master.
          </div>
        </div>
      </div>

      <!-- 7 -->
      <div class="accordion-item fade-up">
        <h2 class="accordion-header" id="heading7">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
            7. How does RockfieldTrade support PAMM Masters and investors?
          </button>
        </h2>
        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            RockfieldTrade provides a user-friendly platform, real-time performance tracking, flexible fee structures, and dedicated support to ensure a seamless experience for both PAMM Masters and investors.
          </div>
        </div>
      </div>

      <!-- 8 -->
      <div class="accordion-item fade-up delay-1">
        <h2 class="accordion-header" id="heading8">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
            8. Is there a minimum investment required for PAMM accounts?
          </button>
        </h2>
        <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, the minimum investment varies based on the PAMM Master’s requirements. These details are provided before you invest.
          </div>
        </div>
      </div>

      <!-- 9 -->
      <div class="accordion-item fade-up delay-2">
        <h2 class="accordion-header" id="heading9">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
            9. Are PAMM accounts suitable for beginners?
          </button>
        </h2>
        <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            PAMM accounts are ideal for beginners looking to invest without actively trading, as professional traders manage the funds on their behalf.
          </div>
        </div>
      </div>

      <!-- 10 -->
      <div class="accordion-item fade-up">
        <h2 class="accordion-header" id="heading10">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
            10. How do I get started with a PAMM account?
          </button>
        </h2>
        <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            To get started, simply sign up with RockfieldTrade, select a PAMM account to invest in, or apply to become a PAMM Master and begin managing funds.
          </div>
        </div>
      </div>

      <!-- 11 -->
      <div class="accordion-item fade-up delay-1">
        <h2 class="accordion-header" id="heading11">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
            11. How does a PAMM account work?
          </button>
        </h2>
        <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Investors trading on their own often face challenges due to various reasons such as limited capital and trading knowledge. A high-performance PAMM solution resolves this: as a PAMM Master, you can combine funds from multiple investors, aligning with their chosen trading strategy. Clients earn profits based on their percentage contribution, and you earn performance fees accordingly.
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CONTENT + FORM SECTION -->
<section id="form-section" class="pamm-content py-5 bg-light text-dark">
  <div class="container">
    <div class="row align-items-center g-4">
      <!-- LEFT CONTENT -->
      <div class="col-lg-6 fade-up">
        <h2 class="fw-bold mb-4 text-theme">PAMM Account — Percentage Allocation Management Module</h2>
        <p class="lead">
          The PAMM (Percentage Allocation Management Module) solution by RockfieldTrade enables professional traders to manage multiple investor accounts through a single master account. 
          Profits and losses are distributed automatically and proportionally, offering full transparency and control for both masters and investors.
        </p>
        <ul class="list-unstyled mt-3">
          <li class="mb-2"><i class="bi bi-check-circle text-theme me-2"></i> Manage multiple investor accounts easily</li>
          <li class="mb-2"><i class="bi bi-check-circle text-theme me-2"></i> Automatic profit and loss distribution</li>
          <li class="mb-2"><i class="bi bi-check-circle text-theme me-2"></i> Real-time performance monitoring</li>
          <li class="mb-2"><i class="bi bi-check-circle text-theme me-2"></i> Transparent and secure fund allocation</li>
          <li class="mb-2"><i class="bi bi-check-circle text-theme me-2"></i> Ideal for both masters and investors</li>
        </ul>
        <h5 class="mt-5 fw-semibold">Need assistance? We’re here to help.</h5>
        <p>Email us at <a href="mailto:support@rockfieldtrade.com" class="text-theme fw-bold">support@rockfieldtrade.com</a> or fill out the form to get started.</p>
      </div>

      <!-- RIGHT FORM -->
      <div class="col-lg-6 fade-up delay-1">
        <div class="form-card shadow-lg p-4 bg-white rounded">
          <h4 class="fw-bold mb-4 text-center text-theme">Open Your PAMM Account</h4>
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label fw-semibold">First Name</label>
                <input type="text" class="form-control" placeholder="Enter first name">
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Last Name</label>
                <input type="text" class="form-control" placeholder="Enter last name">
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Country</label>
                <input type="text" class="form-control" placeholder="Your country">
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Phone</label>
                <input type="text" class="form-control" placeholder="+1 234 567 890">
              </div>
              <div class="col-12">
                <label class="form-label fw-semibold">Email</label>
                <input type="email" class="form-control" placeholder="example@email.com">
              </div>
              <div class="col-12">
                <label class="form-label fw-semibold">Message</label>
                <textarea class="form-control" rows="3" placeholder="Write your message"></textarea>
              </div>
              <div class="col-12 text-center">
                <button type="submit" class="btn btn-theme px-4 py-2 mt-3 fw-semibold">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ===================== STYLES ===================== -->
<style>
  :root {
    --theme-blue: #1a73e8;
    --theme-dark: #000814;
  }

  .text-theme {
    color: var(--theme-blue);
  }

  .btn-theme {
    background-color: var(--theme-blue);
    color: white;
    border: none;
    transition: all 0.3s ease;
  }

  .btn-theme:hover {
    background-color: #155fc4;
    transform: translateY(-3px);
  }

  .pamm-hero {
    background: linear-gradient(120deg, #001f4d, #003a99);
  }

  .hero-img {
    animation: float 4s ease-in-out infinite;
    max-height: 450px;
  }

  @keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
  }

  .feature-box {
    border-radius: 10px;
    background: #ffffff;
    transition: all 0.3s ease;
  }
  .feature-box:hover {
    transform: translateY(-6px);
    box-shadow: 0 6px 20px rgba(26, 115, 232, 0.25);
  }
  .feature-box:hover i {
		color: #18ac3d;
		/* Change icon color to green */
	}
  /* Accordion + / - */
  .accordion-button {
    background: transparent;
    color: rgb(37, 36, 36);
    font-weight:600;
    box-shadow:none !important;
  }

  .accordion-button::after {
    content: '+';
    color: var(--theme-blue);
    font-size: 22px;
    transform: none !important;
    background: none !important;
  }
  .accordion-button:not(.collapsed)::after {
    content: '–';
    color: var(--theme-blue);
  }
  .accordion-button:not(.collapsed) { color: var(--theme-blue); background: rgba(255,255,255,0.9); }

  .accordion-body { border-left:2px solid var(--theme-blue); margin-left:10px; padding-left:15px; color:#2c2e30; }

  @media (max-width: 992px) {
    .hero-img { max-width: 300px; margin-top: 20px; }
  }
</style>

<!-- ===================== JS ===================== -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const animated = document.querySelectorAll('.fade-up');
    const observer = new IntersectionObserver(entries => {
      entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
    }, { threshold: 0.2 });
    animated.forEach(el => observer.observe(el));
  });
</script>

@endsection
