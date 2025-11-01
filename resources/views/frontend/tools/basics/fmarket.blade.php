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
    <h3 class="text-center my-4">What is Financial Market ?</h3>
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
                            <p class="text">A financial market forms part of a global ecosystem and refers in general to
                                any marketplace where financial assets are bought and sold. <br>

                                There are physical stock exchanges in major financial centres, such as London, New York,
                                Chicago, Tokyo, Sydney, Moscow etc. The trading sessions take place within the local
                                business hours of these cities between Monday and Friday. <br>

                                Trading can be a physical purchase of assets or through derivatives, both exchange and
                                OTC traded, allowing traders from all over the world to buy and sell a variety of
                                currencies and commodities via online platforms.</p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/c1.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card2">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">There is a wide range of assets available for trading:
                            <ul>
                                <li><strong>FX world currencies</strong>, combined in pairs (for example, you can buy
                                    euros for dollars, trading on EUR/USD)</li>
                                <li><strong>Stocks</strong> of major companies (Apple, Facebook, Coca-Cola etc.)</li>
                                <li><strong>Energy </strong> (such as oil and natural gas)</li>
                                <li><strong>Metals</strong> (gold, silver, platinum)</li>
                                <li><strong>Indices</strong> (Dow Jones, Dax, S&P 500 etc)</li>
                                <li><strong>Futures</strong>, contracts for the future supply of products (on cotton,
                                    soybeans, wheat, etc.)</li>
                            </ul>
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/c2.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card3">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                Traders (sellers and buyers) make transactions between themselves. Approximately 85% of
                                them are speculative traders, who don’t need physical barrels of crude oil or bags of
                                wheat: they seek to profit from the rise or fall of an assets’ prices. <br>

                                To trade, they use online platforms, such as RockfieldTrade, which provide live
                                prices, multiple order types and analytical tools. <br>

                                When traders believe that the price of an instrument will increase, they place a
                                <strong>“Buy”</strong>
                                trade, in the hope of earning as the price rises and closing the trade in a profit. When
                                they believe that the price will decline, they will <strong>“Sell”</strong> in the hope
                                of earning a
                                profit as the price falls. <br>

                                If the trade goes in the opposite direction to the traders’ forecast, they will make a
                                loss. Once a trade is ‘’closed’’ the Profit or Loss will be added or deducted to the
                                Account Balance. <br>
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/c3.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card4">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                The price (quotation) of an instrument changes constantly, often updating every second,
                                reflecting the supply and demand for a specific product throughout the world. <br>

                                When there are a lot of people on the market who want to buy an asset (currency, stock,
                                metal), the demand subsequently grows. <br>

                                As the demand begins to increase, so does the price. This is because the bidders become
                                so interested in opening a Buy position that they are willing to accept a higher price.
                                <br>

                                Conversely, when there is a low demand for a product, prices will generally fall, as
                                more and more traders are selling, and this forces buyers to agree with prices that are
                                not ideal for them. <br>

                                It is important to note that whilst global supply and demand has a significant influence
                                on the pricing of the asset itself, the speculative (CFD) market pricing is derived from
                                the asset’s price and is not influenced by the demand/supply for the CFD product.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/c4.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card5">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                Factors that affect an asset’s quoted price include among others:
                                <ul>
                                    <li><strong>News: </strong>Negative data for any country leads to a decrease in the value of its national currency. Positive data, on the other hand, can lead to increase.</li>
                                    <li><strong>Central Bank policy: </strong> Interest rate decisions and the statements of the central banks' representatives.</li>
                                    <li><strong>Corporate reports: </strong> Companies whose shares are listed on the stock exchange regularly publish their financial results. These figures can have significant effect on the share’s price especially if they are significantly different from analysts’ expectations.</li>
                                    <li><strong>Government data: </strong>Includes the unemployment rate, inflation level and trade balance reports. Markets closely follow not only the numbers but also any comments made regarding changes to monetary policy.</li>
                                </ul>
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/c5.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card6">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                Now let's find out who are the main financial market participants.
                            </p>
                            <p>
                                <strong>Major banks</strong> <br>
                                UBS, Deutsche Bank, JPMorgan Chase, Citibank, and Goldman Sachs conduct a huge number of daily transactions on foreign currencies and FX derivatives, both for their own purposes and at the request of their clients (corporations, governments, hedge funds, large private investors).
                            </p>
                            <p><strong>Governments and central banks</strong> <br>
                                The main representatives of this type are European Central Bank, the Federal Reserve System, the Bank of Japan and the Bank of England, who are responsible for managing the national currency rate and control the presence of other banks on the market.
                            </p>
                            <p><strong>Small banks, commercial companies and hedge funds</strong> <br>
                                They participate in the selling of products, exchanging one physical currency for another (and may also be involved with speculative trades).
                            </p>
                            <p><strong>Brokerage companies</strong> <br>
                                These are intermediaries between private traders and the financial market. With the services of an online CFD broker, you can trade online from anywhere.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/c6.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card7">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                Let’s recap the most important factors of this lesson:
                                <ul>
                                    <li>The financial market is made up of buyers and sellers. Transactions can take place at a physical exchange or through OTC derivatives via online platforms which allow speculation on price movement.</li>
                                    <li>A range of assets are available including Foreign Exchange, Precious Metals, Stocks & Indices, Futures and more.</li>
                                    <li>Traders Buy to earn from an increase in price and Sell to earn from a decrease. Traders incur a loss when the trade goes in the opposite direction to their forecast.</li>
                                    <li>Supply and Demand heavily influence the price movement, as well as market news, Central Banks’ policies, financial results releases and macroeconomic data reports.</li>
                                    <li>The financial market participants include major and central banks, governments, small banks, hedge funds and brokerage companies.</li>
                                </ul>
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/new1.jpg" class="card-img" alt="Financial Market Image">
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