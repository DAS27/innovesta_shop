@extends('main')

@section('title', trans('messages.furniture.offices.title'))

@section('content')
    <div class="container">
        <main class="application-main">
            <div class="wrapper content-top">
                <div class="content-top-info content-producs">
                    <h1 class="subtitle">{{ __('messages.furniture.offices.title') }}</h1>
                </div>

                <div class="content-top-image content-producs">
                    <picture>
                        <source
                            media="(max-width:650px)"
                            srcset="{{ asset('img/bcMobileImg.png') }}"
                        />
                        <img src="{{ asset('img/bcImg.png') }}" alt="work space" />
                    </picture>
                </div>

                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">{{ __('messages.breadcrumbs.main') }}</a></li>
                    <li>{{ __('messages.furniture.offices.title') }}</li>
                </ul>
            </div>

            <div class="overwidth">
                <div class="tabs">
                    <button
                        class="tablink active tab1"
                        onclick="openTab(event, 'tab1')"
                    >
                        {{ __('messages.furniture.offices.staff') }}
                    </button>
                    <button class="tablink tab2" onclick="openTab(event, 'tab2')">
                        {{ __('messages.furniture.offices.boss') }}
                    </button>
                    <button class="tablink tab3" onclick="openTab(event, 'tab3')">
                        {{ __('messages.furniture.offices.lounge') }}
                    </button>
                    <button class="tablink tab4" onclick="openTab(event, 'tab4')">
                        {{ __('messages.furniture.offices.conference_hall') }}
                    </button>
                    <button class="tablink tab5" onclick="openTab(event, 'tab5')">
                        {{ __('messages.furniture.offices.waiting_room') }}
                    </button>
                </div>

                <div class="active products-list container wrapper" id="tab1">
                    <div class="product">
                        <div class="product-image-block">
                            <img
                                class="product-image"
                                src="{{ asset('img/bc/staff/tl_series.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">M&W офисные кресла.pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/bc/staff/M&W офисные кресла.pdf') }}"
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
                                    href="{{ asset('assets/bc/staff/M&W офисные кресла.pdf') }}"
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
                                src="{{ asset('img/bc/staff/steel_cabinet.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">M&W тумбы и шкафы для офисов.pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/bc/staff/M&W тумбы и шкафы для офисов.pdf') }}"
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
                                    href="{{ asset('assets/bc/staff/M&W тумбы и шкафы для офисов.pdf') }}"
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
                                src="{{ asset('img/bc/staff/vli_series.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">Cтолы для персонала кубические доп2.pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/bc/staff/столы для персонала кубические доп2.pdf') }}"
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
                                    href="{{ asset('assets/bc/staff/столы для персонала кубические доп2.pdf') }}"
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
                                src="{{ asset('img/bc/staff/slu_series.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">Cтолы для персонала.pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/bc/staff/столы для персонала.pdf') }}"
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
                                    href="{{ asset('assets/bc/staff/столы для персонала.pdf') }}"
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
                                src="{{ asset('img/bc/boss/bop_chairs.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">BOP офисные кресла.pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/bc/boss/BOP офисные кресла.pdf') }}"
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
                                    href="{{ asset('assets/bc/boss/BOP офисные кресла.pdf') }}"
                                    target="_blank"
                                >
                                    <img src="{{ asset('img/icons/lookIcon.svg') }}" alt="eye icon" />
                                    <span>{{ __('messages.btn.show') }}</span>
                                </a>

                                <a class="product-link video-link hidden disabled">
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
                                src="{{ asset('img/bc/boss/leather_chair.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">M&W кресла кожанные.pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/bc/boss/M&W кресла кожанные.pdf') }}"
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
                                    href="{{ asset('assets/bc/boss/M&W кресла кожанные.pdf') }}"
                                    target="_blank"
                                >
                                    <img src="{{ asset('img/icons/lookIcon.svg') }}" alt="eye icon" />
                                    <span>{{ __('messages.btn.show') }}</span>
                                </a>

                                <a class="product-link video-link hidden disabled">
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
                                src="{{ asset('img/bc/boss/M&W_Veneer_High_end_Executive_Table.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">M&W столы для каб рук.pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/bc/boss/M&W столы для каб рук.pdf') }}"
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
                                    href="{{ asset('assets/bc/boss/M&W столы для каб рук.pdf') }}"
                                    target="_blank"
                                >
                                    <img src="{{ asset('img/icons/lookIcon.svg') }}" alt="eye icon" />
                                    <span>{{ __('messages.btn.show') }}</span>
                                </a>

                                <a class="product-link video-link hidden disabled">
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
                                src="{{ asset('img/bc/boss/yqt_series.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">M&W столы, тумбы, шкафы для кабинета.pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/bc/boss/M&W столы, тумбы, шкафы для кабинета.pdf') }}"
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
                                    href="{{ asset('assets/bc/boss/M&W столы, тумбы, шкафы для кабинета.pdf') }}"
                                    target="_blank"
                                >
                                    <img src="{{ asset('img/icons/lookIcon.svg') }}" alt="eye icon" />
                                    <span>{{ __('messages.btn.show') }}</span>
                                </a>

                                <a class="product-link video-link hidden disabled">
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
                                src="{{ asset('img/meetingRoomSetImg.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">M&W шкафы и большие тумбы для каб рук.pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/bc/boss/M&W шкафы и большие тумбы для каб рук.pdf') }}"
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
                                    href="{{ asset('assets/bc/boss/M&W шкафы и большие тумбы для каб рук.pdf') }}"
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
                                src="{{ asset('img/bc/lounge/M&W_sofa.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">M&W диваны для офисов и трц.pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/bc/lounge/M&W диваны для офисов и трц.pdf') }}"
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
                                    href="{{ asset('assets/bc/lounge/M&W диваны для офисов и трц.pdf') }}"
                                    target="_blank"
                                >
                                    <img src="{{ asset('img/icons/lookIcon.svg') }}" alt="eye icon" />
                                    <span>{{ __('messages.btn.show') }}</span>
                                </a>

                                <a class="product-link video-link hidden disabled">
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
                                src="{{ asset('img/bc/lounge/HH_series.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">M&W кресла кожанные.pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/bc/lounge/M&W кофейные(журнальные) столы.pdf') }}"
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
                                    href="{{ asset('assets/bc/lounge/M&W кофейные(журнальные) столы.pdf') }}"
                                    target="_blank"
                                >
                                    <img src="{{ asset('img/icons/lookIcon.svg') }}" alt="eye icon" />
                                    <span>{{ __('messages.btn.show') }}</span>
                                </a>

                                <a class="product-link video-link hidden disabled">
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
                                src="{{ asset('img/bc/lounge/M&W_lounge_chair.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">M&W столы для каб рук.pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/bc/lounge/M&W кресла и стулья для лаунжа.pdf') }}"
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
                                    href="{{ asset('assets/bc/lounge/M&W кресла и стулья для лаунжа.pdf') }}"
                                    target="_blank"
                                >
                                    <img src="{{ asset('img/icons/lookIcon.svg') }}" alt="eye icon" />
                                    <span>{{ __('messages.btn.show') }}</span>
                                </a>

                                <a class="product-link video-link hidden disabled">
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
                                src="{{ asset('img/bc/conference_hall/tl_series.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">M&W офисные кресла высокая спинка.pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/bc/conference_hall/M&W офисные кресла высокая спинка.pdf') }}"
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
                                    href="{{ asset('assets/bc/conference_hall/M&W офисные кресла высокая спинка.pdf') }}"
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
                                src="{{ asset('img/bc/conference_hall/M&W_veneer_meeting_table.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">M&W столы для конф залов.pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/bc/conference_hall/M&W столы для конф залов.pdf') }}"
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
                                    href="{{ asset('assets/bc/conference_hall/M&W столы для конф залов.pdf') }}"
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

                <div class="products-list container wrapper" id="tab5">
                    <div class="product">
                        <div class="product-image-block">
                            <img
                                class="product-image"
                                src="{{ asset('img/bc/waiting_room/waiting_chair.png') }}"
                                alt="meeting Room Set"
                            />
                        </div>
                        <p class="product-title">M&W стулья для ожидания (холл).pdf</p>

                        <div class="product-links">
                            <a
                                class="product-link download-link"
                                href="{{ asset('assets/bc/waiting_room/M&W стулья для ожидания (холл).pdf') }}"
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
                                    href="{{ asset('assets/bc/waiting_room/M&W стулья для ожидания (холл).pdf') }}"
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
