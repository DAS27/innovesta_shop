@extends('main')

@section('title', trans('messages.furniture.mall.title'))

@section('content')
    <div class="container">
        <main class="application-main">
            <div class="wrapper content-top">
                <div class="content-top-info content-producs">
                    <h1 class="subtitle">{{ __('messages.furniture.mall.title') }}</h1>
                </div>

                <div class="content-top-image content-producs">
                    <picture>
                        <source
                            media="(max-width:650px)"
                            srcset="{{ asset('img/trcMobileImg.png') }}"
                        />
                        <img src="{{ asset('img/trcImg.png') }}" alt="work space" />
                    </picture>
                </div>

                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">{{ __('messages.breadcrumbs.main') }}</a></li>
                    <li>{{ __('messages.breadcrumbs.mall') }}</li>
                </ul>
            </div>

            <div class="overwidth">
                <div class="tabs">
                    <button class="tablink active tab1" onclick="openTab(event, 'tab1')">
                        {{ __('messages.furniture.mall.sofas_poufs') }}
                    </button>
                    <button class="tablink tab2" onclick="openTab(event, 'tab2')">
                        {{ __('messages.furniture.mall.armchairs_chairs') }}
                    </button>
                </div>

                <div class="active products-list container wrapper" id="tab1">
                    <div class="product">
                        <div class="product-image-block">
                            <img
                                class="product-image"
                                src="{{ asset('img/mall/armchairs_chairs/M&W_lounge_chair.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">M&W диваны для офисов и трц.pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/mall/armchairs_chairs/M&W кресла и стулья для лаунжа.pdf') }}"
                                download
                            >
                                <img
                                    src="{{ asset('img/icons/downloadIcon.svg') }}"
                                    alt="download icon"
                                />
                                <span>{{ __('messages.btn.download') }}</span>
                            </a>

                            <div class="half-width">
                                <a
                                    class="product-link look-link"
                                    href="{{ asset('assets/mall/armchairs_chairs/M&W кресла и стулья для лаунжа.pdf') }}"
                                    target="_blank"
                                >
                                    <img src="{{ asset('img/icons/lookIcon.svg') }}" alt="eye icon" />
                                    <span>{{ __('messages.btn.show') }}</span>
                                </a>

                                <a class="product-link video-link disabled">
                                    <img src="{{ asset('img/icons/videoIconHidden.svg') }}" alt="play icon" />
                                    <span>{{ __('messages.btn.video') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="products-list container wrapper" id="tab2">
                    <div class="product">
                        <div class="product-image-block">
                            <img
                                class="product-image"
                                src="{{ asset('img/mall/sofas_poufs/M&W_sofa.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">M&W диваны для офисов и трц.pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/mall/sofas_poufs/M&W диваны для офисов и трц.pdf') }}"
                                download
                            >
                                <img
                                    src="{{ asset('img/icons/downloadIcon.svg') }}"
                                    alt="download icon"
                                />
                                <span>{{ __('messages.btn.download') }}</span>
                            </a>

                            <div class="half-width">
                                <a
                                    class="product-link look-link"
                                    href="{{ asset('assets/mall/sofas_poufs/M&W диваны для офисов и трц.pdf') }}"
                                    target="_blank"
                                >
                                    <img src="{{ asset('img/icons/lookIcon.svg') }}" alt="eye icon" />
                                    <span>{{ __('messages.btn.show') }}</span>
                                </a>

                                <a class="product-link video-link disabled">
                                    <img src="{{ asset('img/icons/videoIconHidden.svg') }}" alt="play icon" />
                                    <span>{{ __('messages.btn.video') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('partials.setup')
        </main>
    </div>
@endsection
<script src="{{ asset("js/productsPageTabs.js") }}"></script>
