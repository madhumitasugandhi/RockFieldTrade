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
    <h3 class="text-center my-4">Fooled By Randomness</h3>
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
                            <p class="text"><strong>Mistake 1:</strong> You trade practically non-stop, trying to open
                                as many positions as possible. You constantly sit in front of the platform and try to
                                catch even the slightest price changes. <br> <br>

                                <strong>What it leads to:</strong> Your action begin to become more chaotic, leading to
                                negative results. This is due a potentially large number of rushed trades and
                                irresponsible money management. <br> <br>

                                <strong>How to avoid:</strong> Remember that the financial market is the place where the
                                number of open trades does not matter. It is better to practise quality over quantity.
                                <br> <br>

                                Here your result depends not on the time spent, but on the kind of positions you have
                                concluded and the trading month’s total. If you cannot cope with your emotions, learn
                                how to use trading robots. It may turn out that you will like this style of trading.
                                Moreover, RockfieldTrade provides VPS – a virtual server for hosting EAs. The software algorithm
                                will work even when you are not near a laptop..
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cf1.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card2">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text"><strong>Mistake 2:</strong> You are trying to trade all assets and
                                indicators in a row, indiscriminately, trying to become a specialist in everything. <br>
                                <br>

                                <strong>What it leads to:</strong> In the pursuit of new material, you do not have time
                                to learn and master the previous instruments. You constantly miss the appropriate
                                moments to open positions, according to the signals you have already studied. <br> <br>

                                <strong>How to avoid:</strong> In order to learn how to get the first stable results,
                                begin to understand the behavior of one particular asset and the factors that affect the
                                change in its price. Select those technical indicators whose operation you understand.
                                Check out the RockfieldTrade Educational courses and videos. Practice on a demo account. Only
                                after doing all this should you draw conclusions – such as whether the strategy is
                                suitable for you or not – before moving on to the next topic. Such a consistent approach
                                will help you to avoid missing the tools best suited to your trading style.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cf2.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card3">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                <strong>Mistake 3:</strong> You open a rash trade in the hope that the market will
                                finally turn in your preferred direction. <br> <br>

                                <strong>What it leads to:</strong> You become angry and think that the market "moves
                                only against you". However, this is not the case: the market operates irrespective of
                                your involvement. If you continue to lament the markets as being “against you”, then you
                                are jeopardizing all of your trading results. <br> <br>

                                <strong>How to avoid:</strong> Accept, once and for all, the fact that such behaviour is
                                a gross violation of risk management. Yes, once a chart may suddenly turn in "your"
                                direction. However, if this does not happen on another occasion, you may get a losing
                                trade – or even more than one. Therefore, learn to say “stop” to yourself every time
                                such emotions appear.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cf3.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card4">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                <strong>Mistake 4:</strong> You are ignoring supplementary education/practice. <br> <br>

                                <strong>What it leads to:</strong> You think that you already know everything about
                                trading, forgetting that the financial market is a complex, vibrant structure that is
                                constantly changing and requires more and more new knowledge. The market does not
                                forgive either the lack of knowledge or excessive self-confidence, quickly putting
                                everything in its place. <br> <br>

                                <strong>How to avoid:</strong> Attend RockfieldTrade webinars, study Educational courses, deepen
                                your practical skills and socialise with like-minded people on social networks. This way
                                you will evolve not only as a trader, but also as a person.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cf4.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card5">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                <strong>Mistake 5:</strong> You ignore money and risk management. <br> <br>

                                <strong>What it leads to:</strong> After each unsuccessful trade you understand that you
                                were in the wrong but continue to blame somebody else (or the circumstances). <br> <br>

                                <strong>How to avoid:</strong> Invest just a small percentage of your account balance
                                amount into a position. Experienced traders often open trades of 5-10% and do not keep
                                the entire deposit on the trading account. This is because there is the reliable RockfieldTrade
                                Wallet: with it, part of your deposit is protected from market fluctuations. Try to
                                comply with this rule and evaluate its effectiveness.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cf5.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card6">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                <strong> Mistake 6:</strong> You do not have clear rules for opening and closing
                                positions – instead you choose to trade randomly. <br> <br>

                                <strong> What it leads to:</strong> Regardless of your experience, you turn into an
                                amateur who relies only on luck and intuition. However, in fact, one of your mistaken
                                trading ideas follows on to another, and continuous research of strategies fails to
                                bring any results. <br> <br>

                                <strong>How to avoid:</strong> Remember that a trading plan is a document that can be
                                called a "passport" of your trading. For tangible results to appear, need to accustom
                                yourself to such creating a trading plan for several months. Each week, you need to
                                analyse your positions and adjust the strategy. By the way, its conditions should be
                                written on paper, by hand. You should also clarify under what conditions you will both
                                open and close a See the next card.
                            </p>

                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cf6.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card7">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                <strong>Mistake 7:</strong> You do not keep a Trader's Journal and do not analyse it.
                                <br> <br>

                                <strong>What it leads to:</strong> From month to month you get the same results, which
                                leads to disappointment in trading. <br> <br>

                                <strong>How to avoid:</strong> It’s worth understanding that if you don’t know the kind
                                of trader you are, or the advantages and disadvantages of your trades, then you will not
                                be able to develop. A Journal is a mirror that demonstrates the essence of your trading
                                style. It protects you from committing the same mistakes. Having studied the weaknesses
                                of your strategy (or even the manifestations of your emotions), you can find the right
                                solution.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cf7.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card8">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                <strong>Mistake 8:</strong> You are not taking a break from the market. <br> <br>

                                <strong>What it leads to:</strong> Loss of concentration, lack of new ideas,
                                nervousness, potential quarrels with loved ones and poor health. <br> <br>

                                <strong>How to avoid:</strong> Learn to relax and not be distracted. Start writing down
                                how much time you spent on trading and the results you achieved. Paradox: if you start
                                monitoring the market less, it will positively affect your productivity and interest.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cf8.webp" class="card-img" alt="Financial Market Image">
                        </div>
                    </div>
                </div>
                <div class="card-content " id="card9">
                    <div class="row">
                        <div class="col-lg-7 col-sm-6">
                            <p class="text">
                                <strong>Mistake 9:</strong> You substitute trading for an emotionally charged life. <br>
                                <br>

                                <strong>What it leads to:</strong> You perform deliberately risky operations only in
                                order to experience a range of all kinds of feelings. As a result, rash actions can lead
                                to an unsuccessful bidding outcome. <br> <br>

                                <strong>How to avoid:</strong> Accept the fact that the financial market is intended
                                primarily for work, not for adrenaline. Live a busy life, enjoy every day, try new
                                things, travel, do what brings you positivity, and then you will have a different
                                attitude to trading. You will begin to trade calmly and make informed decisions.
                            </p>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <img src="assets/images/cf9.webp" class="card-img" alt="Financial Market Image">
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