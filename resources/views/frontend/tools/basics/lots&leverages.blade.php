@extends('frontend.layout.main')

@section('main-container')

<style>
    
     /* General Text Styling for iPhone 15 */
   


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
    <h3 class="text-center my-4">Lots & Leverage</h3>
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
        </div>

        <!-- Card Content -->
        <div class="card mt-4">

            <div class="card-body">
                <div class="card-content active" id="card1">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">What is a 'lot'?</p>
                            <p>Lots are used to represent the trade volume in units. One standard Lot on Forex is equal
                                to 100,000 units of the base currency of the pair. So, for EUR/USD 1 lot is 100,000
                                euros, for USD/JPY 1 lot is 100,000 US Dollars. <br>
                            </p>
                            <p>
                                Thanks to online brokers, mini and micro-lots are also available to traders.
                            </p>
                            <p>The table below will help you to understand lot sizes:</p>
                            <p><strong>Standard Lot (1.0) = 100,000 of base currency</strong></p>
                            <p><strong>Mini Lot (0.1) = 10,000 of base currency</strong></p>
                            <p><strong>Micro Lot (0.01) = 1,000 of base currency</strong></p>
                            <p>For other assets, each <strong>‘Lot’</strong> represents a standard amount, for example,
                                1 lot of Gold is 100oz. You can find the standard lots for each asset in the RockfieldTrade
                                website specifications.</p>
                            <p>The lot size also determines the value of each pip/tick, which is covered in a separate
                                lesson.</p>
                            <p>At RockfieldTrade all account types allow trade size from 0.01 (micro) and upwards.</p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/c7.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card2">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p>
                                Leverage multiplies traders’ buying power, allowing investors to control a larger
                                investment than their capital, potentially increasing their returns while only investing
                                a percentage of the overall value of the asset in question.
                            </p>
                            <p>However, if you don’t use leverage wisely, it is possible to lose the entire Equity in a
                                very short space of time– and you may not even notice it!</p>
                            <p>Therefore, leverage is a double-edged sword, and you need to consider how much risk you
                                are willing to take.</p>
                            <p>The leverage available to you may vary depending on your Jurisdiction, please refer the
                                RockfieldTrade ‘’Leverage Information’’ for details.</p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cb2.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card3">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                Leverage is often described as being ‘’borrowed’’ funds from the broker, however, this
                                is not technically accurate, because the broker does not add funds to your account,
                                instead, the funds required to place each trade is reduced by the level of leverage you
                                set. <br> <br>

                                For example, if you trade 1 lot of EURUSD, (worth €100,000), with leverage of 1:1 (no
                                leverage), you will need to physically have 100k euros in your account to place this
                                trade. <br> <br>

                                If you have leverage, let’s say of 1:10, then €10,000 will be required to place the same
                                trade, and so on… <br> <br>

                                
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <!--<img src="assets/images/cb3.webp" class="card-img" alt="Financial Market Image">-->
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card4">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                Let's look at two possible scenarios.
                            </p>
                            <p><strong>Scenario A: </strong>With an initial investment of €1000 and leverage of 1:100 (for each euro, you have a buying power of 100), you can open a position of €100,000. Let’s say you ‘’Sell’’ EUR/USD, and the price chart moves down by 100 pips, this means that your profit will be $1000*</p>
                            <p>*Depending on the ‘’Term’’ currency of the pair</p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cb4.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card5">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                <strong>Scenario B:</strong> With an initial investment of €1000, you decide to open a ‘’Buy’’ position of €100,000 on EUR/USD. However, instead of increasing, the chart drops 100 pips. It this case, your deposit of €1000 may be lost.
                            </p>
                            <p>During volatile markets and when using excessive leverage, it is possible for your deposit to disappear almost instantly. This is why it is so important to understand leverage and risk, and its relationship with margin and free margin, which we will discuss in the next lesson.</p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cb5.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card6">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                It is important to understand that using leverage not only magnifies potential profit or loss, but also impacts any costs associated with the trade.
                            </p>
                            <p>
                                For example, let’s say the spread to trade on a certain product is 0.1%, with the price currently at $1000.
                            </p>
                            <p>
                                A client with a $1000 deposit and who trades using no leverage (1:1), will incur a spread of $1, which represents 0.1% of the deposited capital. If the client instead traded, for example, using a leverage of 1:10, the spread would be $10 or 1% of the deposited capital.
                            </p>
                            <p>
                                The same applies to rollover fees, commissions or any other trading costs.
                            </p>
                            <p>
                                The above is just a basic example, to illustrate how leverage has a higher impact on your invested capital, as this is an important concept to understand.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/new3.jpg" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card7">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                Let’s recap the important points from this lesson:
                            <ul>
                                <li>‘Lots’ are used to represent the trade size in Units</li>
                                <li>In FX, 1 lot = 100,000 of the base currency of the traded pair & the minimum trade size is 0.01 (micro lot)</li>
                                <li>Leverage multiplies your buying power, allowing you to trade a larger trade value than your deposit.</li>
                                <li>Double-edged sword- The higher the leverage, the more risk you are taking, so leverage should be used with care
                                </li>
                            </ul>
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/new2.jpg" class="card-img" alt="Financial Market Image">
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
        currentCard = currentCard < 7 ? currentCard + 1 : 1;
        showCard(currentCard);
    }
</script>

@endsection