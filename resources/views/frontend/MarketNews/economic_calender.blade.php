@extends('frontend.layout.main')

@section('main-container')

<style>
    @media (max-width: 768px) {
        .table-responsive-mobile {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch; /* for smooth scrolling */
        }
    }

    .container {
        border-radius: 10px;
    }

    .calendar-table tbody img {
        border: 1px solid #a19e9e;
        width: 30px;
        height: 30px;
    }

    .custom-btn {
        border: 1px solid #c2c7cf;
        color: #0073b7;
        background-color: #ffffff;
        padding: 6px 12px;
        font-weight: 500;
        border-radius: 0;
    }

    .custom-btn:hover {
        background-color: #f0f0f0;
        color: #005bb5;
    }

    .custom-btn.active-today {
        background-color: #105da4;
        color: #ffffff;
        border: 1px solid #105da4;
    }

    .custom-filter-btn {
        border: 1px solid #c2c7cf;
        background-color: #ffffff;
        color: #0073b7;
    }

    .custom-filter-btn:hover {
        background-color: #f0f0f0;
    }

    .calendar-table th {
        background-color: #f4f4f7;
    }

    .table thead th,
    .table td {
        padding: 10px;
    }

    .text-success {
        color: #28a745 !important;
    }

    .text-danger {
        color: #dc3545 !important;
    }

    .flag-icon {
        width: 20px;
        height: 15px;
        margin-right: 5px;
    }

    .align-middle {
        vertical-align: middle !important;
    }

    .bi {
        font-size: 16px;
    }

    thead {
        background-color: #e0e0e0;
    }

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
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
        {
            "colorTheme": "light",
            "isTransparent": false,
            "width": "100%",
            "height": "550",
            "locale": "en",
            "importanceFilter": "-1,0,1",
            "countryFilter": "ar,au,br,ca,cn,fr,de,in,id,it,jp,kr,mx,ru,sa,za,tr,gb,us,eu"
        }
        </script>
    </div>
    <!-- TradingView Widget END -->
</div>

@endsection
