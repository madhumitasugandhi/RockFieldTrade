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
    <h3 class="text-center my-4">Support and resistance levels</h3>
    <div class="card-container mb-4">
        <!-- Progress Steps (placed outside the card container) -->
        <div class="progress-step">
            <button class="step-btn active" onclick="showCard(1)">1</button>
            <button class="step-btn" onclick="showCard(2)">2</button>
            <button class="step-btn" onclick="showCard(3)">3</button>
            <button class="step-btn" onclick="showCard(4)">4</button>
            <button class="step-btn" onclick="showCard(5)">5</button>
            <button class="step-btn" onclick="showCard(6)">6</button>
            <button class="step-btn" onclick="showCard(7)">7</button>
            <button class="step-btn" onclick="showCard(8)">8</button>
            <button class="step-btn" onclick="showCard(9)">9</button>
            <button class="step-btn" onclick="showCard(10)">10</button>
        </div>

        <!-- Card Content -->
        <div class="card mt-4">

            <div class="card-body">
                <div class="card-content active" id="card1">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">Look here, we put two levels on the chart. Unlike the trend line,
                                <strong>support</strong> (below) and <strong>resistance</strong> (above) are always
                                horizontal. <br> <br>

                                To build these levels by yourself, you need to determine the points where the constant
                                price stop is regularly taking place. <br> <br>

                                The chart on the right displays the <strong>resistance level</strong> is an upper limit
                                of the price channel, and the <strong>support level</strong> is its lower border.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/ce1.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card2">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">Note that all that is correct for the upward trend only. For the downward
                                movement, it will be vise versa: the <strong>resistance level</strong> – a lower limit,
                                and the <strong>support level</strong> – the upper one. <br> <br>

                                As soon as the chart breaks through one of the levels, this can be a strong signal of a
                                further decline or increase.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/ce2.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card3">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                Sometimes it is impossible to establish unambiguous support/resistance levels: then it
                                is better to determine <strong>areas.</strong> <br> <br>

                                You can put on <strong>support and resistance</strong> on RockfieldTrade trading platforms by
                                bodies or shadows of the candles.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/ce3.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card4">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                How to use support and resistance levels? <br> <br>

                                Look at the chart: (a), (b) and (c) may well be excellent points for opening
                                <strong>Buy</strong> trades; (d), (e) and (f) would be good opportunities for
                                <strong>Sell</strong> positions. <br> <br>

                                Of course, signals of support and resistance levels are not enough. You need to
                                strengthen your decision with technical indicators (see next lessons).
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/ce4.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card5">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                Please note that <strong>support</strong> levels can later become
                                <strong>resistances</strong> and vice versa, depending on whether the asset price falls
                                or rises. <br> <br>

                                Look at the chart. As you can see, the asset price tested the resistance level twice
                                (points 1 and 2). After the movement beyond the range limits, the resistance became the
                                support level (points 3 and 4).
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/ce5.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card6">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                How to find out whether the asset chart simply tests the support/resistance level or is
                                it going to break through and go further? <br> <br>

                                It is believed that the more often the price chart reaches the level and turns then back
                                (<strong>tests</strong> it), the stronger this area is and the harder it will be for the
                                price to go through. It is not recommended to open trades in the middle of the range
                                (when the price is between support and resistance), as further movement can be an
                                unpredictable direction.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/ce6.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card7">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                <strong>When is it best to open a trade using support and resistance?</strong> <br> <br>

                                After the price has started moving from level to level, open a position after the first
                                new candle formed from the border inside the range. <br> <br>

                                In this case, the trade should be closed even before the chart touches the opposite
                                line, because the price may simply not reach it at all.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/ce7.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card8">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            If the price chart goes beyond the support level, you need to wait until 1-2 candles appear
                            to confirm the breakthrough and then you can open a trade in the same direction. <br> <br>

                            Consider that in this case, the support will become the resistance. <br> <br>

                            These descriptions are just for example and are not a guide to action.
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/ce8.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card9">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                <strong>Where is better to place Stop Loss?</strong> <br> <br>

                                E.g. we have opened a trade, 5 pips below the Support. Then Stop Loss makes sense to set
                                at the same distance just above the level.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/ce9.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card10">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                Similarly, if the asset price overcomes the Resistance, you can open a trade, for example, 5 points higher than this level, and Stop Loss will be below.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/c10.webp" class="card-img" alt="Financial Market Image">
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
        currentCard = currentCard < 10 ? currentCard + 1 : 1;
        showCard(currentCard);
    }
</script>

@endsection