@extends('main')

@section('title', trans('messages.gc'))

@section('content')
    <div class="container">
        <main class="application-main">
            <div class="wrapper content-top">
                <div class="content-top-info content-producs">
                    <h1 class="subtitle">{{ __('messages.restaurant') }}</h1>
                </div>

                <div class="content-top-image content-producs">
                    <picture>
                        <source
                            media="(max-width:650px)"
                            srcset="{{ asset('img/rcMobileImg.png') }}"
                        />
                        <img src="{{ asset('img/rcImg.png') }}" alt="work space" />
                    </picture>
                </div>

                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">{{ __('messages.breadcrumbs.main') }}</a></li>
                    <li>{{ __('messages.restaurant') }}</li>
                </ul>
            </div>

            <div class="overwidth">
                <div class="tabs">
                    <button
                        class="tablink active tab1"
                        onclick="openTab(event, 'tab1')"
                    >
                        {{ __('messages.furniture.hotel.meeting_room') }}
                    </button>
                    <button class="tablink tab2" onclick="openTab(event, 'tab2')">
                        {{ __('messages.furniture.hotel.adjustable_table_chair') }}
                    </button>
                    <button class="tablink tab3" onclick="openTab(event, 'tab3')">
                        {{ __('messages.furniture.hotel.angular_solutions') }}
                    </button>
                </div>

                <div class="active products-list container wrapper" id="tab1"></div>
                <div class="products-list container wrapper" id="tab2"></div>
                <div class="products-list container wrapper" id="tab3"></div>
            </div>

            @include('partials.setup')
        </main>
    </div>
@endsection
<script src="{{ asset("js/productsPageTabs.js") }}"></script>
