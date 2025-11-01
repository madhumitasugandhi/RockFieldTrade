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
    <h3 class="text-center my-4">What is fundamental analysis?</h3>
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
        </div>

        <!-- Card Content -->
        <div class="card mt-4">

            <div class="card-body">
                <div class="card-content active" id="card1">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">Every trader wants to know where the price will go. However, in order to get
                                the most realistic answer to this question, it is necessary not only to observe the
                                chart on the trading platform but also to constantly monitor what is happening in the
                                world. In this, fundamental analysis helps traders. <br> <br>

                                A key referendum, the president’s commentary or a negative statistics publication can
                                have a dramatic effect on the national currency rate. <br> <br>

                                You may have heard phrases like: “The pound fell on the news ... The euro against the
                                dollar jumped up due to the news ...”. Such statements are used by the experts in their
                                daily fundamental market analysis and reviews..</p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cc1.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card2">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">If a well-known company has poorly reported for the quarter and has received
                                less profit than expected, this will upset investors: its shares will no longer be so
                                attractive, will begin to be sold, and the price for them will fall down. <br> <br>

                                A long rainy season in America can ruin the cotton crop: the volume of the available
                                consignment will be less than planned and prices will soar. <br> <br>

                                All of these are important factors that are inextricably linked to trading and are
                                called <strong>fundamental analysis.</strong>
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cc2.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card3">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                <strong>What events should be taken into account?</strong>

                            <ul>
                                <li>economic, geopolitical and social phenomena;</li>
                                <li>economic prospects and the general mood of the market in relation to a particular
                                    country;</li>
                                <li>natural disasters (extreme weather conditions, earthquakes and hurricanes that cause
                                    serious damage);</li>
                                <li> wars and periods of conflict between key countries;
                                </li>
                                <li>political events (presidential elections, referendums, forums);</li>
                                <li>publication of important statistics (economic indicators) by industry or country.
                                </li>
                            </ul>
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cc3.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card4">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                <strong>Natural disasters</strong> <br> <br>
                                When we speak about natural disasters, we mean extreme weather occasions, such as
                                floods, earthquakes, hurricanes and tsunamis. Mass casualties, damage to infrastructure
                                and a general sense of fear can have a detrimental effect on a country's economy,
                                especially since the government will have to allocate a considerable recovery budget.
                                <br> <br>

                                As a result, the national currency inevitably weakens. So, e.g., the Japanese yen
                                slipped by 0.4% against the US dollar after the catastrophic earthquake and tsunami of
                                2011, which led to the death of 15000 people, thousands of wounded and missing.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cc4.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card5">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                <strong>Hostilities</strong> Countries, involved in a military conflict, should finance
                                armaments, cope with losses and even warn them, as well as control the mass
                                consciousness due to fear and chaos reign. All this, of course, destabilizes the
                                economy. <br> <br>

                                Consequently, prolonged confrontation can lead to significant market volatility and
                                cause the depreciation of the national currencies of the warring countries.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cc5.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card6">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">

                            </p>
                            <strong>Political factors</strong> <br> <br>
                            The highlight of this category is the president’s election. This events, as a rule, cause
                            increased fluctuations (volatility) in the national currency course. If it’s the likelihood
                            that the upcoming elections could lead to a change of government is high enough, then
                            political instability will lead to a decline in the exchange rate of national currencies.
                            <br> <br>

                            Other significant events include comments of politicians after the meetings, unexpected
                            management decisions, scandals, international sanctions, confrontations, results of the
                            negotiations of the countries leaders etc.
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cc6.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card7">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                <strong> Economic indicators</strong>
                                The main tool of the professional trader is the Economic Calendar. At the moment of the
                                actual statistic data publication, it immediately appears in the rightmost column. It
                                also indicates the publication time, the name of the indicator, its description, the
                                previous and predicted value. <br> <br>

                                Here are examples of the most important economic indicators (in the Calendar they mark
                                by three exclamation signs):
                            <ul>
                                <li>Central Bank interest rate decision</li>
                                <li>Nonfarm Payrolls (NFP)</li>
                                <li>Unemployment rate</li>
                                <li>Consumer Price Index</li>
                                <li>Gross Domestic Product (GDP)</li>
                            </ul>
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cc7.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card8">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                How does the release of an economic indicator cause price movement? <br> <br>

                                To answer this question, let's take as an example the major employment data outside the
                                agricultural sector in the US – <strong>Nonfarm Payrolls</strong>. This is a monthly
                                report that reflects changes in the number of urban jobs over the past month. Relatively
                                high values are considered positive for the US dollar (USD), causing a growth rate
                                <strong>(the more jobs, the more money from the population, the higher purchasing power,
                                    the stronger economy, the more attractive for investments).</strong> <br> <br>

                                And vise versa: the data below the forecast usually provoke a decrease in USD.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cc8.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card9">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                As a rule, macroeconomic indicators do not affect just one asset, but several at once.
                                <br> <br>

                                For example, Nonfarm Payrolls, although directly related to the United States economy,
                                also affects the movement of the <strong>pound</strong> (GBP) or the <strong>euro</strong> (EUR), because they make pairs
                                with dollar (<strong>GBPUSD</strong> and <strong>EURUSD</strong>, respectively).
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cc9.webp" class="card-img" alt="Financial Market Image">
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
        currentCard = currentCard < 9 ? currentCard + 1 : 1;
        showCard(currentCard);
    }
</script>

@endsection