@extends('main')

@section('title', trans('messages.furniture.cw.title'))

@section('content')
    <div class="container">
        <main class="application-main">
            <div class="wrapper content-top">
                <div class="content-top-info content-producs">
                    <h1 class="subtitle">{{ __('messages.furniture.cw.title') }}</h1>
                </div>

                <div class="content-top-image content-producs">
                    <picture>
                        <source
                            media="(max-width:650px)"
                            srcset="{{ asset('img/cwMobileImg.png') }}"
                        />
                        <img src="{{ asset('img/cwImg.png') }}" alt="work space" />
                    </picture>
                </div>

                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">{{ __('messages.breadcrumbs.main') }}</a></li>
                    <li>{{ __('messages.breadcrumbs.cw') }}</li>
                </ul>
            </div>

            <div class="overwidth">
                <div class="tabs">
                    <button
                        class="tablink active tab1"
                        onclick="openTab(event, 'tab1')"
                    >
                        {{ __('messages.furniture.cw.chairs') }}
                    </button>
                    <button class="tablink tab2" onclick="openTab(event, 'tab2')">
                        {{ __('messages.furniture.cw.tables') }}
                    </button>
                    <button class="tablink tab3" onclick="openTab(event, 'tab3')">
                        {{ __('messages.furniture.cw.capsules') }}
                    </button>
                    <button class="tablink tab4" onclick="openTab(event, 'tab4')">
                        {{ __('messages.furniture.cw.training_room') }}
                    </button>
                </div>

                <div class="active products-list container wrapper" id="tab1">
                    <div class="product">
                        <div class="product-image-block">
                            <img
                                class="product-image"
                                src="{{ asset('img/cw/TL_series.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">M&W офисные кресла.pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/cw/chairs/M&W офисные кресла.pdf') }}"
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
                                    href="{{ asset('assets/cw/chairs/M&W офисные кресла.pdf') }}"
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
                                src="{{ asset('img/cw/T3_T8_series.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">Столы для оупенспэйса кубические доп.pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/cw/tables/cтолы для оупенспэйса кубические доп.pdf') }}"
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
                                    href="{{ asset('assets/cw/tables/cтолы для оупенспэйса кубические доп.pdf') }}"
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
                    <div class="product">
                        <div class="product-image-block">
                            <img
                                class="product-image"
                                src="{{ asset('img/cw/T8_series.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">Столы для оупенспэйса кубические доп1.pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/cw/tables/столы для оупенспэйса кубические доп1.pdf') }}"
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
                                    href="{{ asset('assets/cw/tables/столы для оупенспэйса кубические доп1.pdf') }}"
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
                    <div class="product">
                        <div class="product-image-block">
                            <img
                                class="product-image"
                                src="{{ asset('img/cw/T3_series.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">Столы для оупенспэйса кубические доп1.pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/cw/tables/столы для оупенспэйса кубические.pdf') }}"
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
                                    href="{{ asset('assets/cw/tables/столы для оупенспэйса кубические.pdf') }}"
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

                <div class="products-list container wrapper" id="tab3">
                    <div class="product">
                        <div class="product-image-block">
                            <img
                                class="product-image"
                                src="{{ asset('img/cw/M&W_office_pod.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">M&W офисные станции (капсулы).pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/cw/capsules/M&W офисные станции (капсулы).pdf') }}"
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
                                    href="{{ asset('assets/cw/capsules/M&W офисные станции (капсулы).pdf') }}"
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

                <div class="products-list container wrapper" id="tab4">
                    <div class="product">
                        <div class="product-image-block">
                            <img
                                class="product-image"
                                src="{{ asset('img/cw/M&W_writing_board.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">M&W Доски для писания.pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/cw/training_room/M&W Доски для писания.pdf') }}"
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
                                    href="{{ asset('assets/cw/training_room/M&W Доски для писания.pdf') }}"
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
                    <div class="product">
                        <div class="product-image-block">
                            <img
                                class="product-image"
                                src="{{ asset('img/cw/training_chair.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">M&W офисные кресла.pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/cw/training_room/M&W стулья для обучения.pdf') }}"
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
                                    href="{{ asset('assets/cw/training_room/M&W стулья для обучения.pdf') }}"
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
