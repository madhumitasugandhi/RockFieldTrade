@extends('frontend.layout.main')

@section('main-container')

<style>
    .text {
        text-align: justify
    }


    /* Style for the card container with border */
    .card-container {
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        position: relative;
        margin-top: 50px;
    }

    /* The progress buttons should not be affected by the border */
    .progress-step {
        display: flex;
        justify-content: center;
        position: absolute;
        top: -30px;
        left: 50%;
        transform: translateX(-50%);
        background-color: white;
        padding: 0 10px;
    }

    .progress-step button {
        background-color: ;
        border: none;
        color: black;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin: 0 10px;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .progress-step button.active {
        background-color: black;
        color: white;
    }

    /* Style for the card */
    .card {
        border: none;
        box-shadow: none;
        margin-top: 20px;
    }

    .card-header {
        background-color: #fff;
        border-bottom: none;
        padding: 20px;
        font-size: 1.5rem;
        font-weight: bold;
    }

    .card-body {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
    }

    .card-body p {
        font-size: 1rem;
        line-height: 1.6;
    }

    /* Image in the card */
    .card-body img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Helpful buttons */
    .helpful-btns {
        display: flex;
        justify-content: center;
        margin: 20px 0;
    }

    .helpful-btns button {
        background-color: white;
        border: 1px solid #17a2b8;
        color: #17a2b8;
        margin: 0 10px;
        padding: 10px 20px;
        cursor: pointer;
        transition: all 0.3s;
    }

    .helpful-btns button:hover {
        background-color: #17a2b8;
        color: white;
    }

    /* Next button */
    .next-btn {
        background-color: #1273eb;
        color: white;
        padding: 10px 20px;
        margin-top: 20px;
        width: 100%;
        font-size: 1rem;
        text-align: center;
        cursor: pointer;
        border: none;
    }

    .next-btn:hover {
        background-color: #105bb8;
        color: white;
    }

    /* Responsive behavior */
    @media (max-width: 768px) {
        .card-body {
            flex-direction: column;
            align-items: center;
        }

        .card-body img {
            max-width: 100%;
            margin-top: 20px;
        }

        .progress-step button {
            margin: 5px;
        }
    }

    .card-content {
        display: none;
    }

    .card-content.active {
        display: block;
    }

    /* Spacing for helpful buttons and progress */
    .helpful-text {
        margin-top: 40px;
        text-align: center;
        font-weight: 500;
    }
</style>



<div class="container">
    <!-- Card Container with Border -->
    <h3 class="text-center my-4">What is technical analysis?</h3>
    <div class="card-container mb-4">
        <!-- Progress Steps (placed outside the card container) -->
        <div class="progress-step">
            <button class="step-btn active" onclick="showCard(1)">1</button>
            <button class="step-btn" onclick="showCard(2)">2</button>
            <button class="step-btn" onclick="showCard(3)">3</button>
            <button class="step-btn" onclick="showCard(4)">4</button>
            <button class="step-btn" onclick="showCard(5)">5</button>
        </div>

        <!-- Card Content -->
        <div class="card mt-4">

            <div class="card-body">
                <div class="card-content active" id="card1">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">Technical analysis forms a key part of the market. <br>

                                There is no doubt that you will want to know where the price of the asset goes. Well,
                                the answer can be found through looking at the live chart. <br>

                                Even a novice trader can start to intently delve into the trading platform in search of
                                patterns. Oddly enough, they really are there. Any chart is a kind of language that is
                                akin to the one in which mathematicians communicate. A professor in any country can
                                easily figure out parabolic images and universally written formulas.</p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cd1.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card2">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                The same thing occurs with traders and analysts around the world. They have developed
                                their own language to “recognize” trading signals and make trades, according to various
                                strategies. <br> <br>

                                The main tools are called <strong>technical indicators:</strong> various lines (one, two
                                or several at once), which are superimposed on the price chart or appear below it.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cd2.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card3">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                <strong>Indicators</strong> mark the direction of the prevailing trend and
                                <strong>oscillators</strong> signaling the pivot points. They are based on a certain
                                formula, which is automatically calculated and displays the results in a visual mode.
                                <br> <br>

                                It is believed that taking into account the testimony of several indicators at once can
                                give a clear picture of the market situation and help to forecast the further price
                                figures.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cd3.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card4">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                Once again, there are two classes of technical indicators:
                                <ul>
                                    <li>Trend (retarded)</li>
                                    <li>Oscillators (advanced)</li>
                                </ul>
                                <br>
                                First ones are often used to confirm the presence of a price trend and give a signal after the actual turn.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cd4.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card5">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                The oscillators are developed to signalize the trend changes in advance. They measure the strength of the current price dynamics and note, either:
                                <ul>
                                    <li> that the momentum of growth/decline has not dried up,</li>
                                    <li>or that the further correction (inevitable price rollback in the opposite direction) is likely to take place.</li>
                                </ul>
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cd5.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>



            </div>

            {{-- <div class="helpful-text">Was This Article Helpful?</div>
            <div class="helpful-btns">
                <button id="yesBtn">Yes</button>
                <button id="noBtn">No</button>
            </div> --}}

            <button class="btn next-btn" onclick="nextCard()">Next Card &#x2192;</button>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // JavaScript to handle card switching
    let currentCard = 1;

    function showCard(cardNumber) {
        document.querySelectorAll('.card-content').forEach(function (content) {
            content.classList.remove('active');
        });
        document.getElementById('card' + cardNumber).classList.add('active');

        document.querySelectorAll('.step-btn').forEach(function (btn) {
            btn.classList.remove('active');
        });
        document.querySelector('.step-btn:nth-child(' + cardNumber + ')').classList.add('active');

        currentCard = cardNumber;
    }

    function nextCard() {
        currentCard = currentCard < 5 ? currentCard + 1 : 1;
        showCard(currentCard);
    }
</script>

@endsection