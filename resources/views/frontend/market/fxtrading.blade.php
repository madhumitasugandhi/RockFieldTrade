@extends('frontend.layout.main')

@section('main-container')

<style>

      /* Optional: Customize the "Register Here" button */
    .swal-register-btn {
        background-color: #4CAF50;  /* Green */
        color: white;
        padding: 10px 24px;
        font-size: 16px;
    }

    /* Optional: General styling for the SweetAlert */
    @media (max-width: 768px) {
        .swal2-popup {
            width: 90% !important;
            font-size: 14px !important;
        }
    }

    @media (min-width: 769px) {
        .swal2-popup {
            width: 400px !important;
        }
    }
    
    container.xyz {
        position: absolute;
        /* bottom: -50px; */
        /* Adjust this to control the position from the bottom */
        width: 100%;
        text-align: center;
        z-index: 1;
    }

    .sub-head {
        animation: slide-in-left 1s ease-in-out;
        color: white;
    }

    .text-light {
        font-size: 25px;
    }

    @keyframes slide-in-left {
        0% {
            transform: translateX(-100%);
            opacity: 0;
        }

        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .main {
        text-align: justify;
    }

    .main p {
        font-size: 13px;
    }

    .forex-content {
        margin-left: 45px;
        margin-right: 45px;
    }

    @media (max-width: 768px) {
        .forex-content {
            margin-left: 15px;
            margin-right: 15px;
        }
    }

    /* Transparent background with image */
    .modal-background {
        background: white;
        /* Adjust the transparency */
        position: relative;
    }

    /* Adding background image for modal */
    .modal::before {
        content: '';
        background-image: url('assets/images/slide3.jpg');
        /* Set your image path */
        background-size: cover;
        background-position: center;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 0.4;
        /* Adjust the opacity for the image */
        z-index: -1;
        /* Make sure the image stays behind the modal content */
    }

    /* Hiding the scrollbar but keeping functionality */
    .scrollable-content {
        max-height: 400px;
        overflow-y: auto;
    }

    /* Hide scrollbar for WebKit browsers */
    .scrollable-content::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for other browsers */
    .scrollable-content {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }

    .img-fluid {
        height: 200px;
    }
</style>

<div class="full-title">
    <video autoplay muted playsinline loop id="bg-video">
                <source src="https://videos.pexels.com/video-files/3752548/3752548-sd_640_360_24fps.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="overlay"></div>
    <div class="container xyz">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="sub-head">Forex Trading</h1>
        <p class="text-light">Trade CFDs on 70+ FX pairs and benefit from tight spreads and fast order execution</p>
    </div>
</div>


<div class="container-fluid about-main">
    <!-- About Content -->
    <div class="forex-content">
        <h1 class="mb-4 "><strong>What is Forex?</strong></h1>
        <div class="row main">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <p>
                    The foreign exchange market (FX) as a whole, consists of many types of markets, including Spot FX,
                    Future derivatives, Forward Derivatives, and finally the CFD derivatives market, which is the most
                    popular for retail clients. All forex trading transactions combined make up the largest and most
                    liquid financial market, with an average daily volume of over $5 trillion.
                </p>
                <p>The FX CFD derivatives market is made up of buyers and sellers, the main participants being large
                    international banks, who place orders via electronic trading systems. This market is traded OTC (not
                    traded on any regulated exchange) and as such there is no uniform price but each of the main
                    international banks is providing its own quotes with the spot market acting as the point of
                    reference for the quotes provided.</p>
                <p>
                    It is worth mentioning that the spot FX market is also an OTC market dominated by the large
                    international banks.
                </p>
                <p>
                    In forex trading, spot price of a currency pair is influenced by several factors, such as the
                    economic outlook and geopolitical events in that region, as well as news data releases which may be
                    perceived positively or negatively by the market.
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <p>
                    Contracts for difference (CFDs), allow traders to buy (go long) or sell (go short), and make profit
                    or loss from price movements, without having to physically purchase and exchange the underlying
                    currency.
                </p>
                <p>
                    FX is quoted in pairs, with each representing a global currency or economy. The first currency is
                    called the ‘base’ currency (representing the volume you wish to trade) and the second is called the
                    ‘term’ or ‘quote’ currency (representing the current exchange rate).
                </p>
                <p>
                    For example, the price of EUR/USD represents the amount of $USD that can be exchanged for €1.
                </p>
                <p><strong>EUR/USD = 1.11361</strong></p>
                <p>This means that currently, €1 is equal to <strong>$1.11361</strong></p>
                <p>Prices are constantly fluctuating based on market conditions.</p>
                <p>To put it simply, traders would go long if they believe that the base currency will rise in value
                    against the term currency and would profit from an increase in price. On the other hand, if traders’
                    believe that the value of the base currency will fall in relation to the term, they will place a
                    sell trade to try to profit from falling prices. If prices move</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <p>
                    in the opposite direction to the traders’ forecast, they will make a loss.
                </p>
                <p>
                    FX currency trading is typically calculated in Pips, meaning that depending on your trade size, each
                    pip is equal to a specific monetary value of the ‘term’ currency. This pip value is used to
                    determine the PnL (profit or loss), based on how many pips you gain or lose in a trade, and is also
                    used to display spread (the difference between the bid and ask prices).
                </p>
                <p>
                    At RockfieldTrade we quote all FX pairs to an extra digit after the pip, meaning that the last digit in any
                    quote refers to a Point (10% of a Pip).
                </p>
                <p>
                    In FX currency trading, fractional pricing allows us to offer tighter spreads and provide more
                    accurate pricing.
                </p>
                <p>
                    If you are new to online forex trading, we would recommend going through our online educational
                    section to familiarise yourself with the market and how ‘Contracts for Difference’ trading works. We
                    also provide ‘watch and learn’ videos and PDF guides.
                </p>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>


<div class="services-bar">
    <div class="container article-main">
        <h1 class="text-center article-heading mb-4">Forex Articles</h1>
        <!-- Services Section -->
        <div class="row">


            <div class="col-lg-4 mb-4">
                <div class="card ">
                    <div class="card-img">
                        <img class="img-fluid" src="assets/images/5.webp" alt="" />
                    </div>
                    <div class="card-body text-center">
                        <h4 class="card-header mb-4"><a href="#" data-toggle="modal" data-target="#infoModal"> What is
                                Leverage in Trading?</a> </h4>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-background">
                        {{-- <img class="img-fluid" src="assets/images/why-to-trade-bg.jpg" style="height: 300px;"
                            alt="" /> --}}
                        <div class="modal-header">
                            <h5 class="modal-title" id="infoModalLabel">What is Leverage in Trading?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="scrollable-content" style="max-height: 400px; overflow-y: auto;">
                                <p>
                                    Leverage in trading refers to the use of borrowed capital to increase the potential
                                    return of an investment. It allows traders to open larger positions than they would
                                    be able to with their own capital alone. By using leverage, traders can control a
                                    substantial amount of an asset with a relatively small amount of their own money,
                                    effectively multiplying their exposure to the market. For example, with a leverage
                                    ratio of 100:1, a trader can control $100,000 worth of an asset by investing only
                                    $1,000 of their own capital. <br>

                                    Leverage amplifies both gains and losses, making it a powerful but risky tool in
                                    trading. When the market moves in the trader’s favor, the returns on the leveraged
                                    position can be significantly higher than on an unleveraged position. However, if
                                    the market moves against the trader, the losses can also be magnified to the same
                                    extent. This dual-edged nature of leverage means that while it can enhance potential
                                    profits, it also increases the risk of substantial losses, potentially exceeding the
                                    initial investment. Therefore, leverage requires careful management and a deep
                                    understanding of market dynamics to be used effectively and responsibly.
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 mb-4">
                <div class="card ">
                    <div class="card-img">
                        <img class="img-fluid" src="assets/images/4.webp" alt="" />
                    </div>
                    <div class="card-body">
                        <h4 class="card-header text-center mb-0"><a href="#" data-toggle="modal"
                                data-target="#infoModal2">
                                What are the Top 10 Most Valuable Companies in the World</a> </h4>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="infoModal2" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-background">
                        {{-- <img class="img-fluid" src="assets/images/why-to-trade-bg.jpg" style="height: 300px;"
                            alt="" /> --}}
                        <div class="modal-header">
                            <h5 class="modal-title" id="infoModalLabel"> What are the Top 10 Most Valuable
                                Companies in the World </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="scrollable-content" style="max-height: 400px; overflow-y: auto;">
                                <p>
                                    In 2024, the global economic landscape is shaped by a select group of powerhouse
                                    companies that lead their respective industries. These corporations are not just
                                    leaders in market capitalization; they also drive innovation, shape consumer
                                    behavior, and contribute significantly to economic growth. Their influence spans
                                    various sectors, including technology, healthcare, finance, and energy, reflecting
                                    the diverse yet interconnected nature of the modern economy. These companies have
                                    established themselves through their core products and services, strategic
                                    acquisitions, technological advancements, and global market expansions. Their
                                    leadership, forward-thinking strategies, and resilience in the face of global
                                    challenges make them central pillars of the economic infrastructure.
                                </p>
                                <ul>
                                    <li>1. APPLE (AAPL)</li>
                                    <li>2. MICROSOFT (MSFT)</li>
                                    <li>3. ARAMCO</li>
                                    <li>4. ALPHABET (GOOGLE) (GOOG)</li>
                                    <li>5. AMAZON (AMZN)</li>
                                    <li>6. BERKSHIRE HATHAWAY (BRKB)</li>
                                    <li>7. UNITEDHEALTH (UNH)</li>
                                    <li>8. JOHNSON & JOHNSON (JNJ)</li>
                                    <li>9. TESLA (TSLA)</li>
                                    <li>VISA (V)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card ">
                    <div class="card-img">
                        <img class="img-fluid" src="assets/images/3.webp" alt="" />
                    </div>
                    <div class="card-body text-center ">
                        <h4 class="card-header mb-4"><a href="#" data-toggle="modal" data-target="#infoModal3">
                                What Is Market Cap?</a> </h4>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="infoModal3" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-background">
                        {{-- <img class="img-fluid" src="assets/images/why-to-trade-bg.jpg" style="height: 300px;"
                            alt="" /> --}}
                        <div class="modal-header">
                            <h5 class="modal-title" id="infoModalLabel">What Is Market Cap?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="scrollable-content" style="max-height: 400px; overflow-y: auto;">
                                <p>
                                    Market capitalization, commonly referred to as market cap, is the total value of a
                                    company's outstanding shares of stock. It is calculated by multiplying the current
                                    share price by the total number of outstanding shares. For example, if a company has
                                    10 million shares outstanding and the current share price is $50, the market cap
                                    would be $500 million. This metric provides a simple yet powerful way to understand
                                    the overall value of a company in the eyes of investors. <br>

                                    Market cap is a key indicator of a company's size, which investors use to compare
                                    companies and gauge their relative market positions. It allows for quick assessments
                                    of a company's scale and market influence without delving into more complex
                                    financial details. Larger market cap companies are typically well-established with a
                                    significant market presence, while smaller market cap companies might be newer or in
                                    growth phases. By looking at market cap, investors can also infer the company's
                                    market liquidity, as larger companies often have more actively traded shares. This
                                    makes market cap an essential tool in portfolio construction, risk management, and
                                    strategic investment planning.
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 mb-4">
                <div class="card ">
                    <div class="card-img">
                        <img class="img-fluid" src="assets/images/2.webp" alt="" />
                    </div>
                    <div class="card-body text-center ">
                        <h4 class="card-header mb-0"><a href="#" data-toggle="modal" data-target="#infoModal4"> Top 15
                                Strongest Currencies in the World</a> </h4>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="infoModal4" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-background">
                        {{-- <img class="img-fluid" src="assets/images/why-to-trade-bg.jpg" style="height: 300px;"
                            alt="" /> --}}
                        <div class="modal-header">
                            <h5 class="modal-title" id="infoModalLabel">Top 15 Strongest Currencies in the World</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="scrollable-content" style="max-height: 400px; overflow-y: auto;">
                                <p>When discussing the strongest currencies globally, it's essential to consider their
                                    value relative to the US Dollar (USD) as a benchmark. Here is a list of the top 15
                                    strongest currencies in the world based on their exchange rates against the USD:</p>
                                <ul>
                                    <li>Kuwaiti Dinar (KWD)</li>
                                    <li>Bahraini Dinar (BHD)</li>
                                    <li>Omani Rial (OMR)</li>
                                    <li>Jordanian Dinar (JOD)</li>
                                    <li>British Pound Sterling (GBP)</li>
                                    <li>Cayman Islands Dollar (KYD)</li>
                                    <li>Euro (EUR)</li>
                                    <li>Swiss Franc (CHF)</li>
                                    <li>US Dollar (USD)</li>
                                    <li>Canadian Dollar (CAD)</li>
                                    <li>Australian Dollar (AUD)</li>
                                    <li>Singapore Dollar (SGD)</li>
                                    <li>Brunei Dollar (BND)</li>
                                    <li>Libyan Dinar (LYD)</li>
                                    <li>New Zealand Dollar (NZD)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 mb-4">
                <div class="card ">
                    <div class="card-img">
                        <img class="img-fluid" src="assets/images/bull.jpg" alt="" />
                    </div>
                    <div class="card-body text-center ">
                        <h4 class="card-header mb-4"><a href="#" data-toggle="modal" data-target="#infoModal5">What is a
                                Bull Market?</a> </h4>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="infoModal5" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-background">
                        {{-- <img class="img-fluid" src="assets/images/why-to-trade-bg.jpg" style="height: 300px;"
                            alt="" /> --}}
                        <div class="modal-header">
                            <h5 class="modal-title" id="infoModalLabel">What is a Bull Market? </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="scrollable-content" style="max-height: 400px; overflow-y: auto;">
                                <p>
                                    A bull market is a financial market condition characterized by rising prices of
                                    securities or expectations of price increases. Although the term is most commonly
                                    associated with the stock market, it can apply to any traded asset, such as bonds,
                                    currencies, and commodities. Essentially, a bull market represents a period of
                                    optimism and positive investor sentiment, with a general trend of increasing asset
                                    prices. <br>

                                    A bull market is marked by a sustained increase in market prices over time, driven
                                    by strong economic indicators, high investor confidence, and positive market
                                    sentiment. These upward trends are not short-term spikes but extended periods where
                                    prices rise consistently. Investors feel confident about the economy's future
                                    prospects, which fuels further buying and drives prices even higher. <br>

                                    Key drivers of a bull market include robust economic conditions, such as low
                                    unemployment rates, high GDP growth, and strong corporate earnings. These factors
                                    contribute to higher disposable income and increased spending, boosting company
                                    revenues and profitability. High investor confidence plays a crucial role as well,
                                    as optimistic investors are more likely to invest in various assets, pushing their
                                    prices up. <br>

                                    Positive market sentiment, often fueled by favorable news, government policies, and
                                    geopolitical stability, helps maintain the momentum of a bull market. For instance,
                                    news of technological advancements, successful mergers and acquisitions, or
                                    supportive fiscal policies can enhance investor confidence and contribute to the
                                    bullish trend. <br>

                                    Understanding the characteristics and phases of a bull market is essential for
                                    investors and traders, as it helps them make informed decisions and strategize
                                    accordingly to maximize returns while managing risks.
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 mb-4">
                <div class="card ">
                    <div class="card-img">
                        <img class="img-fluid" src="assets/images/a1.jpeg" alt="" />
                    </div>
                    <div class="card-body text-center ">
                        <h4 class="card-header mb-4"><a href="#" data-toggle="modal" data-target="#infoModal6">
                                What is Dogs of the Dow?</a> </h4>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="infoModal6" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-background">
                        {{-- <img class="img-fluid" src="assets/images/why-to-trade-bg.jpg" style="height: 300px;"
                            alt="" /> --}}
                        <div class="modal-header">
                            <h5 class="modal-title" id="infoModalLabel">What is Dogs of the Dow?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="scrollable-content" style="max-height: 400px; overflow-y: auto;">
                                <p>
                                    The Dogs of the Dow is a popular investment strategy that focuses on
                                    high-dividend-yielding stocks within the Dow Jones Industrial Average (DJIA). The
                                    term "Dogs of the Dow" refers to the 10 stocks in the DJIA with the highest dividend
                                    yields at the beginning of each year. The strategy is based on the idea that these
                                    high-yield stocks are undervalued and will eventually revert to their mean value,
                                    providing both dividend income and capital appreciation. <br>

                                    Originating from the concept of value investing, the Dogs of the Dow strategy aims
                                    to identify and capitalize on the potential recovery of stocks that have temporarily
                                    fallen out of favor. High dividend yields often indicate that a stock's price has
                                    dropped relative to its dividend payout, suggesting that the market might have
                                    overreacted to short-term issues. By focusing on these stocks, the strategy aims to
                                    achieve a balance between income generation and capital growth. <br>

                                    The simplicity of the Dogs of the Dow strategy makes it appealing to a wide range of
                                    investors, from beginners to seasoned professionals. It requires minimal maintenance
                                    and involves clear, straightforward rules for selecting and managing investments.
                                    This approach not only makes it easy to implement but also helps to mitigate some of
                                    the emotional biases that can affect investment decisions.
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 mb-4">
                <div class="card ">
                    <div class="card-img">
                        <img class="img-fluid" src="assets/images/6.webp" alt="" />
                    </div>
                    <div class="card-body text-center ">
                        <h4 class="card-header mb-4"><a href="#" data-toggle="modal" data-target="#infoModal7">
                                What Is ETF Trading?</a> </h4>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="infoModal7" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-background">
                        {{-- <img class="img-fluid" src="assets/images/why-to-trade-bg.jpg" style="height: 300px;"
                            alt="" /> --}}
                        <div class="modal-header">
                            <h5 class="modal-title" id="infoModalLabel">Is It Good to Trade ETFs?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="scrollable-content" style="max-height: 400px; overflow-y: auto;">
                                <p>
                                    Exchange-Traded Funds (ETFs) are investment funds that are traded on stock
                                    exchanges, similar to individual stocks. They are designed to track the performance
                                    of a specific index, sector, commodity, or asset. Trading ETFs can be a good
                                    strategy for both novice and experienced investors due to their diversification,
                                    liquidity, and cost-efficiency.
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card ">
                    <div class="card-img">
                        <img class="img-fluid" src="assets/images/8.webp" alt="" />
                    </div>
                    <div class="card-body text-center ">
                        <h4 class="card-header mb-4"><a href="#" data-toggle="modal" data-target="#infoModal8">
                            What is the US Dollar Index?</a> </h4>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="infoModal8" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-background">
                        {{-- <img class="img-fluid" src="assets/images/why-to-trade-bg.jpg" style="height: 300px;"
                            alt="" /> --}}
                        <div class="modal-header">
                            <h5 class="modal-title" id="infoModalLabel">What is the US Dollar Index?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="scrollable-content" style="max-height: 400px; overflow-y: auto;">
                               <p>The US Dollar Index, first introduced in 1973, provides a weighted geometric mean of the dollar's value relative to a basket of six major currencies: the euro (EUR), Japanese yen (JPY), British pound sterling (GBP), Canadian dollar (CAD), Swedish krona (SEK), and Swiss franc (CHF). The index is calculated using exchange rates and serves as a gauge of the dollar's strength or weakness in global markets. A rising USDX indicates a strengthening dollar, while a declining USDX suggests a weakening dollar.</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 mb-4">
                <div class="card ">
                    <div class="card-img">
                        <img class="img-fluid" src="assets/images/7.webp" alt="" />
                    </div>
                    <div class="card-body text-center ">
                        <h4 class="card-header mb-4"><a href="#" data-toggle="modal" data-target="#infoModal9">
                                What is Earnings Per Share (EPS)?</a> </h4>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="infoModal9" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-background">
                        {{-- <img class="img-fluid" src="assets/images/why-to-trade-bg.jpg" style="height: 300px;"
                            alt="" /> --}}
                        <div class="modal-header">
                            <h5 class="modal-title" id="infoModalLabel">What is Earnings Per Share (EPS)?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="scrollable-content" style="max-height: 400px; overflow-y: auto;">
                                <h1>Earnings Per Share: An Introduction</h1>
                                <p>
                                    Earnings Per Share (EPS) is a key financial metric used by investors to assess a
                                    company's profitability on a per-share basis. It represents the portion of a
                                    company's profit allocated to each outstanding share of common stock. EPS is a
                                    crucial indicator in financial analysis as it helps investors understand how much
                                    money a company is making for each share and provides insight into the company’s
                                    financial health and performance.
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- /.row -->
    </div>
</div>



@endsection