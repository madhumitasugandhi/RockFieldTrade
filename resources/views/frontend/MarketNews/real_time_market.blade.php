@extends('frontend.layout.main')

@section('main-container')

<style>
    /* Full-width styling for widget container */
    .widget-full-width {
        width: 100%;
        overflow: hidden;
        display: flex;
        justify-content: center;
    }
</style>

<div class="widget-full-width">
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container" style="width: 100%;">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright">
            <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank">
                <span class="blue-text">Track all markets on TradingView</span>
            </a>
        </div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-heat-map.js" async>
        {
            "width": "100%",
            "height": "400",
            "currencies": [
                "EUR",
                "USD",
                "JPY",
                "GBP",
                "CHF",
                "AUD",
                "CAD",
                "NZD",
                "CNY"
            ],
            "isTransparent": false,
            "colorTheme": "light",
            "locale": "en",
            "backgroundColor": "#ffffff"
        }
        </script>
    </div>
    <!-- TradingView Widget END -->
</div>

@endsection
