@extends('frontend.layout.main')

@section('main-container')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<!-- ===================== MAM PAGE ===================== -->

<!-- HERO SECTION -->
<section class="mam-hero text-white d-flex align-items-center text-center text-md-start">
  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-md-6 fade-up">
        <h5 class="text-uppercase mb-3 fw-semibold">MAM Account</h5>
        <h1 class="fw-bold mb-3 display-5">
          Manage Multiple Accounts with <span class="text-theme">Precision</span>
        </h1>
        <p class="lead mb-4">
          Optimise returns for your clients and scale your income seamlessly with RockfieldTrade MAM solutions.
        </p>
        <a href="#form-section" class="btn btn-theme px-4 py-2 fw-semibold rounded-1">Open MAM Account</a>
      </div>
      <div class="col-md-6 text-center fade-up delay-1">
        <img src="{{ asset('/assets/images/mam-page.png') }}" alt="MAM Hero" class="img-fluid hero-img">
      </div>
    </div>
  </div>
</section>

<!-- FEATURES SECTION -->
<section class="mam-features py-5 text-dark bg-light">
  <div class="container text-center">
    <h2 class="fw-bold mb-5 text-theme fade-up">Scale your strategy with precision</h2>
    <div class="row g-4">
      <div class="col-md-3 col-sm-6 fade-up">
        <div class="feature-box shadow-sm p-4 h-100" style="border-bottom: 3px solid purple">
          <i class="bi bi-graph-up text-theme fs-2 mb-3"></i>
          <h6>Earn based on performance</h6>
          <p>Optimise your results, maximise your income.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 fade-up delay-1">
        <div class="feature-box shadow-sm p-4 h-100" style="border-bottom: 3px solid crimson">
          <i class="bi bi-arrows-expand text-theme fs-2 mb-3"></i>
          <h6>Scale growth seamlessly</h6>
          <p>Let your clients share and grow their returns with you.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 fade-up delay-2">
        <div class="feature-box shadow-sm p-4 h-100"style="border-bottom: 3px solid orange">
          <i class="bi bi-bullseye text-theme fs-2 mb-3"></i>
          <h6>Execute strategies with precision</h6>
          <p>Place orders faster within a single master account.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 fade-up delay-3">
        <div class="feature-box shadow-sm p-4 h-100" style="border-bottom: 3px solid #25ad13">
          <i class="bi bi-sliders text-theme fs-2 mb-3"></i>
          <h6>Customisable client fund allocation</h6>
          <p>Set allocation rules, risk profiles and more per client.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- BECOME MAM SECTION -->
<section class="mam-steps py-5 text-white" style="background: linear-gradient(120deg,#001f4d,#003a99);">
  <div class="container text-center">
    <h2 class="fw-bold mb-5 fade-up">How to become a Multi-Account Manager (MAM)?</h2>
    <div class="row justify-content-center g-4 text-start">
      <div class="col-md-3 fade-up">
        <div class="p-3 border rounded bg-dark bg-opacity-50 h-100">
          <h6 class="text-theme mb-2">Step 1. Get started with RockfieldTrade</h6>
          <p>Open a live account with RockfieldTrade if you don’t have one already. Contact support to register as a MAM Manager.</p>
        </div>
      </div>
      <div class="col-md-3 fade-up delay-1">
        <div class="p-3 border rounded bg-dark bg-opacity-50 h-100">
          <h6 class="text-theme mb-2">Step 2. Apply for the MAM account</h6>
          <p>Email <strong>support@rockfieldtrade.com</strong> to request setup. Once approved, manage your MAM account directly from your dashboard.</p>
        </div>
      </div>
      <div class="col-md-3 fade-up delay-2">
        <div class="p-3 border rounded bg-dark bg-opacity-50 h-100">
          <h6 class="text-theme mb-2">Step 3. Configure your MAM settings</h6>
          <p>Set allocation models, risk ratios, and start managing the capital effectively for your clients.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE SECTION -->
<section class="mam-benefits py-5 bg-light text-dark">
  <div class="container text-center">
    <h2 class="fw-bold mb-5 text-theme fade-up">Why choose MAM account by RockfieldTrade</h2>
    <div class="row g-4">
      @php
        $benefits = [
          ['Manage unlimited client accounts','Scale confidently with no limit on accounts.'],
          ['Full freedom in your strategy','Scalp, hedge, or use Expert Advisors (EAs).'],
          ['A flexible allocation model','Distribute funds efficiently via multiple methods.'],
          ['Order management','Set stop-loss, take-profit and pending orders easily.'],
          ['Partial close control','Close trades partially without disrupting investor positions.'],
          ['EA-friendly trading','Automate strategies with full Expert Advisor support.'],
          ['Instant bulk execution','Execute orders across all accounts instantly.'],
          ['Real-time trade monitoring','Track performance live for you and your clients.'],
          ['24/7 support','Get assistance anytime from our dedicated team.']
        ];
      @endphp
      @foreach($benefits as $b)
      <div class="col-md-4 col-sm-6 fade-up">
        <div class="feature-box shadow-sm p-4 h-100">
          <i class="bi bi-check-circle text-theme fs-3 mb-3"></i>
          <h6>{{ $b[0] }}</h6>
          <p>{{ $b[1] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- HOW TO GET STARTED -->
<section class="mam-getstarted py-5 text-center text-white" style="background: linear-gradient(120deg,#001f4d,#003a99);">
  <div class="container">
    <h2 class="fw-bold mb-5 fade-up">How to get started with a MAM account</h2>
    <div class="row justify-content-center g-4">
      <div class="col-md-3 fade-up">
        <div class="p-4 border rounded bg-dark bg-opacity-50 h-100">
          <h5 class="text-theme mb-2">1. Apply</h5>
          <p>Apply to become a MAM Manager with RockfieldTrade.</p>
        </div>
      </div>
      <div class="col-md-3 fade-up delay-1">
        <div class="p-4 border rounded bg-dark bg-opacity-50 h-100">
          <h5 class="text-theme mb-2">2. Manage</h5>
          <p>Link client accounts and manage multiple portfolios easily.</p>
        </div>
      </div>
      <div class="col-md-3 fade-up delay-2">
        <div class="p-4 border rounded bg-dark bg-opacity-50 h-100">
          <h5 class="text-theme mb-2">3. Earn</h5>
          <p>Earn commissions and performance fees as you manage investor funds.</p>
        </div>
      </div>
    </div>
    <a href="#" class="btn btn-theme mt-4 px-4 py-2">Sign up now</a>
  </div>
</section>

<!-- FAQ SECTION -->
<section id="faq" class="mam-faq py-5 bg-light text-dark">
  <div class="container">
    <h2 class="fw-bold text-center mb-5 text-theme fade-up">FAQ on MAM Account</h2>

    <div class="accordion accordion-flush" id="faqAccordion">
      @php
        $faqs = [
          ['What is a MAM account?', 'A MAM (Multi-Account Manager) account enables skilled fund managers to execute strategies across multiple investor accounts, offering precise control and automated trade allocation.'],
          ['How do I open a MAM account?', 'Register a live account with RockfieldTrade. Once approved, start trading and managing client accounts using our advanced allocation tools.'],
          ['What benefits do MAM masters enjoy?', 'As a MAM Master, gain access to user-friendly dashboards, dedicated support, and a secure environment ideal for managing CFD portfolios.'],
          ['What are the key differences between a MAM and PAMM account?', 'MAM provides individualised trading access across separate investor accounts, offering greater flexibility, whereas PAMM pools investor funds into one account.'],
          ['How can MAM masters withdraw earnings?', 'MAM Masters can conveniently withdraw their earnings via RockfieldTrade’s secure dashboard, with performance fees processed instantly.']
        ];
      @endphp

      @foreach($faqs as $i => $faq)
      <div class="accordion-item fade-up delay-{{$i%3}}">
        <h2 class="accordion-header" id="heading{{$i}}">
          <button class="accordion-button collapsed fw-semibold bg-transparent" type="button"
            data-bs-toggle="collapse" data-bs-target="#collapse{{$i}}" aria-expanded="false"
            aria-controls="collapse{{$i}}">
            <span class="me-2 text-theme">{{ $i+1 }}.</span> {{ $faq[0] }}
          </button>
        </h2>
        <div id="collapse{{$i}}" class="accordion-collapse collapse" aria-labelledby="heading{{$i}}" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            {{ $faq[1] }}
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- CONTENT + FORM SECTION -->
<section id="form-section" class="mam-content py-5 bg-light text-dark">
  <div class="container">
    <div class="row align-items-center g-4">
      <!-- LEFT CONTENT -->
      <div class="col-lg-6 fade-up">
        <h2 class="fw-bold mb-4 text-theme">MAM Account — Multi Account Management</h2>
        <p class="lead">
          The MAM (Multi-Account Manager) solution is designed for professional traders who manage multiple trading accounts. 
          With RockfieldTrade MAM, you can execute bulk trades across all client accounts in a single click — saving time and increasing accuracy.
        </p>
        <ul class="list-unstyled mt-3">
          <li class="mb-2"><i class="bi bi-check-circle text-theme me-2"></i> Manage unlimited accounts simultaneously</li>
          <li class="mb-2"><i class="bi bi-check-circle text-theme me-2"></i> Flexible fund allocation methods</li>
          <li class="mb-2"><i class="bi bi-check-circle text-theme me-2"></i> Real-time performance tracking</li>
          <li class="mb-2"><i class="bi bi-check-circle text-theme me-2"></i> Full EA (Expert Advisor) support</li>
          <li class="mb-2"><i class="bi bi-check-circle text-theme me-2"></i> Instant trade execution & transparency</li>
        </ul>
        <h5 class="mt-5 fw-semibold">Need assistance? We’re here to help.</h5>
        <p>Email us at <a href="mailto:support@rockfieldtrade.com" class="text-theme fw-bold">support@rockfieldtrade.com</a> or fill out the form to get started.</p>
      </div>

      <!-- RIGHT FORM -->
      <div class="col-lg-6 fade-up delay-1">
        <div class="form-card shadow-lg p-4 bg-white rounded">
          <h4 class="fw-bold mb-4 text-center text-theme">Open Your MAM Account</h4>
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

  .text-theme { color: var(--theme-blue); }

  .btn-theme {
    background-color: var(--theme-blue);
    color: #fff;
    transition: all 0.3s ease;
    border: none;
  }
  .btn-theme:hover {
    background-color: #155fc4;
    transform: translateY(-3px);
  }

  .mam-hero {
    background: linear-gradient(120deg, #001f4d, #003a99);
  }

  .hero-img {
    animation: float 4s ease-in-out infinite;
    max-height: 500px;
  }

  @keyframes float {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
  }

  .form-card {
    border-top: 4px solid var(--theme-blue);
    transition: 0.3s ease;
  }
  .form-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(26,115,232,0.2);
  }

  input, textarea {
    border-radius: 6px !important;
    border: 1px solid #ccc !important;
  }
  input:focus, textarea:focus {
    border-color: var(--theme-blue) !important;
    box-shadow: 0 0 5px rgba(26,115,232,0.3) !important;
  }

  [class*="fade-"] {
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.7s ease;
  }
  .visible { opacity: 1 !important; transform: none !important; }
  .delay-1{transition-delay:0.2s;}
  @keyframes float {
    0%,100%{transform:translateY(0);}
    50%{transform:translateY(-10px);}
  }

  .feature-box {
    border-radius: 10px;
    background: #fff;
    transition: all 0.3s ease;
  }
  .feature-box:hover { transform: translateY(-6px); box-shadow: 0 6px 20px rgba(26,115,232,0.25); }

  .feature-box:hover i {
		color: #18ac3d;
		/* Change icon color to green */
	}

 .accordion-button {
    background: transparent;
    color: #000;
    font-weight: 600;
    box-shadow: none !important;
  }

  /* Replace arrows with + / − icons */
  .accordion-button::after {
    content: '+';
    font-size: 1.5rem;
    font-weight: bold;
    color: var(--theme-blue);
    transform: none !important;
    background-image: none !important;
  }

  .accordion-button:not(.collapsed)::after {
    content: '−';
    color: var(--theme-blue);
  }

  .accordion-button:not(.collapsed) {
    background-color: #f0f6ff;
    color: var(--theme-blue);
  }

  .accordion-body {
    border-left: 3px solid var(--theme-blue);
    margin-left: 10px;
    padding-left: 15px;
    color: #2c2e30;
  }

  [class*="fade-"] {
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.7s ease;
  }
  .visible { opacity: 1 !important; transform: none !important; }
  .delay-1{transition-delay:0.2s;}
  .delay-2{transition-delay:0.4s;}
  .delay-3{transition-delay:0.6s;}
</style>

<!-- ===================== JS ===================== -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  const animated = document.querySelectorAll('.fade-up');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('visible'); });
  }, { threshold: 0.2 });
  animated.forEach(el => observer.observe(el));
});
</script>

@endsection
