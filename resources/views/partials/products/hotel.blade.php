@extends('main')

@section('title', 'Мебель для гостиничного бизнеса')

@section('content')
<div class="container">
    <main class="application-main">
        <div class="wrapper content-top">
            <div class="content-top-info content-producs">
                <h1 class="subtitle">Мебель для гостиничного бизнеса</h1>
            </div>

            <div class="content-top-image content-producs">
                <picture>
                    <source
                        media="(max-width:650px)"
                        srcset="{{ asset('img/gbMobileImg.png') }}"
                    />
                    <img src="{{ asset('img/gbImg.png') }}" alt="work space" />
                </picture>
            </div>

            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}">Главная</a></li>
                <li>Мебель для гостиничного бизнеса</li>
            </ul>
        </div>

        <div class="overwidth">
            <div class="tabs">
                <button
                    class="tablink active tab1"
                    onclick="openTab(event, 'tab1')"
                >
                    Комплект для переговорных
                </button>
                <button class="tablink tab2" onclick="openTab(event, 'tab2')">
                    Регулируемые столы и стулья
                </button>
                <button class="tablink tab3" onclick="openTab(event, 'tab3')">
                    Угловые решения
                </button>
            </div>

            <div class="active products-list container wrapper" id="tab1">
                <div class="product">
                    <div class="product-image-block">
                        <img
                            class="product-image"
                            src="{{ asset('img/meetingRoomSetImg.png') }}"
                            alt="meeting Room Set"
                        />
                    </div>
                    <p class="product-title">M&W регулируемый стол (T).pdf</p>

                    <div class="product-links">
                        <a
                            class="product-link download-link"
                            href="{{ asset('assets/M&W high-end executive table（NP）.pdf') }}"
                            download
                        >
                            <img
                                src="{{ asset('img/icons/downloadIcon.svg') }}"
                                alt="download icon"
                            />
                            <span>Скачать</span>
                        </a>

                        <div class="half-width">
                            <a
                                class="product-link look-link"
                                href="{{ asset('assets/M&W high-end executive table（NP）.pdf') }}"
                                target="_blank"
                            >
                                <img src="{{ asset('img/icons/lookIcon.svg') }}" alt="eye icon" />
                                <span>Просмотр</span>
                            </a>

                            <a class="product-link video-link" disable>
                                <img src="{{ asset('img/icons/videoIcon.svg') }}" alt="play icon" />
                                <span>Видео</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="product-image-block">
                        <img
                            class="product-image"
                            src="{{ asset('img/meetingRoomSetImg.png') }}"
                            alt="meeting Room Set"
                        />
                    </div>
                    <p class="product-title">M&W Veneer Meeting Table.pdf</p>

                    <div class="product-links">
                        <a
                            class="product-link download-link"
                            href="{{ asset('assets/M&W Veneer Meeting Table（NP）.pdf') }}"
                            download
                        >
                            <img
                                src="{{ asset('img/icons/downloadIcon.svg') }}"
                                alt="download icon"
                            />
                            <span>Скачать</span>
                        </a>

                        <div class="half-width">
                            <a
                                class="product-link look-link"
                                href="{{ asset('assets/M&W Veneer Meeting Table（NP）.pdf') }}"
                                target="_blank"
                            >
                                <img src="{{ asset('img/icons/lookIcon.svg') }}" alt="eye icon" />
                                <span>Просмотр</span>
                            </a>

                            <a class="product-link video-link">
                                <img src="{{ asset('img/icons/videoIcon.svg') }}" alt="play icon" />
                                <span>Видео</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="product-image-block">
                        <img
                            class="product-image"
                            src="{{ asset('img/meetingRoomSetImg.png') }}"
                            alt="meeting Room Set"
                        />
                    </div>
                    <p class="product-title">M&W Veneer Back Cabinet.pdf</p>

                    <div class="product-links">
                        <a
                            class="product-link download-link"
                            href="{{ asset('assets/M&W Veneer Back Cabinet（NP）.pdf') }}"
                            download
                        >
                            <img
                                src="{{ asset('img/icons/downloadIcon.svg') }}"
                                alt="download icon"
                            />
                            <span>Скачать</span>
                        </a>

                        <div class="half-width">
                            <a
                                class="product-link look-link"
                                href="{{ asset('assets/M&W Veneer Back Cabinet（NP）.pdf') }}"
                                target="_blank"
                            >
                                <img src="{{ asset('img/icons/lookIcon.svg') }}" alt="eye icon" />
                                <span>Просмотр</span>
                            </a>

                            <a class="product-link video-link">
                                <img src="{{ asset('img/icons/videoIcon.svg') }}" alt="play icon" />
                                <span>Видео</span>
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
                            src="{{ asset('img/meetingRoomSetImg.png') }}"
                            alt="meeting Room Set"
                        />
                    </div>
                    <p class="product-title">M&W не регулируемый стол (T).pdf</p>

                    <div class="product-links">
                        <a
                            class="product-link download-link"
                            href="{{ asset('assets/M&W high-end executive table（NP）.pdf') }}"
                            download
                        >
                            <img
                                src="{{ asset('img/icons/downloadIcon.svg') }}"
                                alt="download icon"
                            />
                            <span>Скачать</span>
                        </a>

                        <div class="half-width">
                            <a
                                class="product-link look-link"
                                href="{{ asset('assets/M&W high-end executive table（NP）.pdf') }}"
                                target="_blank"
                            >
                                <img src="{{ asset('img/icons/lookIcon.svg') }}" alt="eye icon" />
                                <span>Просмотр</span>
                            </a>

                            <a class="product-link video-link">
                                <img src="{{ asset('img/icons/videoIcon.svg') }}" alt="play icon" />
                                <span>Видео</span>
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
                            src="{{ asset('img/meetingRoomSetImg.png') }}"
                            alt="meeting Room Set"
                        />
                    </div>
                    <p class="product-title">M&W угловой стол (T).pdf</p>

                    <div class="product-links">
                        <a
                            class="product-link download-link"
                            href="{{ asset('assets/M&W office pod（NP）.pdf') }}"
                            download
                        >
                            <img
                                src="{{ asset('img/icons/downloadIcon.svg') }}"
                                alt="download icon"
                            />
                            <span>Скачать</span>
                        </a>

                        <div class="half-width">
                            <a
                                class="product-link look-link"
                                href="{{ asset('assets/M&W office pod（NP）.pdf') }}"
                                target="_blank"
                            >
                                <img src="{{ asset('img/icons/lookIcon.svg') }}" alt="eye icon" />
                                <span>Просмотр</span>
                            </a>

                            <a class="product-link video-link">
                                <img src="{{ asset('img/icons/videoIcon.svg') }}" alt="play icon" />
                                <span>Видео</span>
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
