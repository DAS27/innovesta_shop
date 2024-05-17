@extends('main')

@section('title', 'Оставить заявку')

@section('content')
    <div class="container">
        <main class="application-main">
            <div class="wrapper application-top">
                <div class="content-top-info">
                    <h1 class="subtitle">{{ __('messages.bid.title') }}</h1>

                    <p class="text application-info-text">{{ __('messages.bid.desc') }}</p>
                </div>

                <div class="content-top-image">
                    <picture>
                        <source
                            media="(max-width:650px)"
                            srcset="{{ asset('img/applicationMobileImg.png') }}"
                        />
                        <img src="{{ asset('img/applicationImg.png') }}" alt="work space" />
                    </picture>
                </div>

                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">{{ __('messages.breadcrumbs.main') }}</a></li>
                    <li>{{ __('messages.breadcrumbs.bid') }}</li>
                </ul>
            </div>

            <div class="overwidth form-block">
                <h3 class="form-title">{{ __('messages.form.send_bid') }}</h3>

                <p class="text form-text">
                    {{ __('messages.form.send_bid_desc') }}
                </p>

                <form class="form" id="bid-form" method="POST">
                    @csrf
                    <div class="input-row fi">
                        <div class="input-block">
                            <label for="fname">
                                <span class="required">*</span>
                                    {{ __('messages.form.first_name') }}
                            </label>
                            <input
                                class="input"
                                type="text"
                                id="fname"
                                name="first_name"
                                required
                            />
                        </div>

                        <div class="input-block">
                            <label for="lname">{{ __('messages.form.last_name') }}</label>
                            <input class="input" type="text" id="lname" name="last_name" />
                        </div>
                    </div>

                    <div>
                        <p class="radio-label">{{ __('messages.form.contact_method') }}</p>
                        <div class="input-row input-row-radio">
                            <div class="radio-block">
                                <input
                                    type="radio"
                                    id="all"
                                    name="contact_method"
                                    value="both"
                                    checked
                                />
                                <label for="all">{{ __('messages.form.all') }}</label>
                            </div>

                            <div class="radio-block">
                                <input
                                    type="radio"
                                    id="email-radio"
                                    name="contact_method"
                                    value="email"
                                />
                                <label for="email-radio">{{ __('messages.form.email') }}</label>
                            </div>

                            <div class="radio-block">
                                <input
                                    type="radio"
                                    id="phone-radio"
                                    name="contact_method"
                                    value="phone"
                                />
                                <label for="phone-radio">{{ __('messages.form.phone') }}</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-row connect-types">
                        <div class="input-block">
                            <label for="email">{{ __('messages.form.email') }}</label>
                            <input
                                class="input"
                                type="email"
                                id="email"
                                name="email"
                                placeholder="example@gmail.com"
                            />
                        </div>

                        <div class="input-block">
                            <label for="number">
                                <span class="required">*</span>{{ __('messages.form.phone') }}</label>
                            <input
                                class="input"
                                type="tel"
                                id="phone"
                                name="phone"
                                placeholder="+7(___)___-__-__"
                                required
                                minlength="16"
                            />
                        </div>
                    </div>

                    <div class="input-row room-info">
                        <div class="input-block">
                            <label for="room-types">{{ __('messages.form.room_type') }}</label>
                            <select class="select" name="room_type" id="room-types">
                                <option value="mall" selected>{{ __('messages.mall') }}</option>
                                <option value="business_center">{{ __('messages.bc') }}</option>
                                <option value="hotel">{{ __('messages.hotel') }}</option>
                                <option value="restaurant">{{ __('messages.restaurant') }}</option>
                                <option value="coworking_space">{{ __('messages.cw') }}</option>
                                <option value="gaming_club">{{ __('messages.gc') }}</option>
                            </select>
                        </div>

                        <div class="input-block">
                            <label for="room-size">{{ __('messages.form.room_size') }}</label>
                            <input
                                class="input"
                                type="number"
                                id="room-size"
                                name="room_dimensions"
                                placeholder="... кв.м"
                            />
                            <p class="tip">{{ __('messages.form.room_size_tip') }}</p>
                        </div>
                    </div>

                    <div class="input-row">
                        <div class="input-block">
                            <label for="comments">{{ __('messages.form.comments') }}</label>
                            <textarea
                                name="comment"
                                id="comments"
                                placeholder="{{ __('messages.form.comment_placeholder') }}"
                            ></textarea>
                            <p class="tip">
                                {{ __('messages.form.comment_placeholder_2') }}
                            </p>
                        </div>
                    </div>

                    <div class="input-row">
                        <div class="input-block room-scheme">
                            <p>{{ __('messages.form.room_area') }}</p>
                            <div class="upload-container">
                                <label class="room-scheme-label" for="room-scheme">
                                    <span class="room-scheme-label-text"
                                    >{{ __('messages.form.file_upload_placeholder') }}
                                    </span>
                                    <p class="upload-button black-button">
                                        {{ __('messages.form.file_upload') }}
                                        <svg
                                            width="14"
                                            height="15"
                                            viewBox="0 0 14 15"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M0.25 13.25H13.75V14.75H0.25V13.25ZM7.75 3.371V11.75H6.25V3.371L1.69675 7.925L0.63625 6.8645L7 0.5L13.3638 6.86375L12.3032 7.92425L7.75 3.3725V3.371Z"
                                                fill="white"
                                            />
                                        </svg>
                                    </p>
                                </label>
                                <input
                                    class="room-scheme-upload"
                                    type="file"
                                    id="room-scheme"
                                    name="files"
                                    accept=".png, .jpeg, .jpg, .pdf"
                                    multiple
                                />
                            </div>
                            <div class="preview"></div>
                            <p class="tip">{{ __('messages.form.file_upload_max_file_placeholder', ['max' => '10']) }}</p>
                        </div>
                    </div>

                    <div class="input-row">
                        <div class="input-block">
                            <label for="item">{{ __('messages.form.sku') }}</label>
                            <input class="input" type="text" name="sku"/>
                            <p class="tip">{{ __('messages.form.sku_placeholder') }}</p>

                            <div
                                class="black-button see-catalog-button acticle-page"
                                onclick="openModal('catalog')"
                            >
                                {{ __('messages.btn.show_catalog') }}
                                <svg
                                    width="18"
                                    height="16"
                                    viewBox="0 0 18 16"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M0 0H18V2H0V0ZM0 7H18V9H0V7ZM0 14H18V16H0V14Z"
                                        fill="white"
                                    />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="order article-page">
                        <span>{{ __('messages.btn.send') }}</span>
                        <img src="{{ asset('img/icons/applicationSendIcon.svg') }}" alt="bid send logo" />
                    </button>
                </form>
            </div>
        </main>
    </div>
@endsection
