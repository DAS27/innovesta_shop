<div class="wrapper about">
    <div class="about-info">
        <div class="title-block">
            <h1 class="title">
                {{ __('messages.about_us.title.part_1') }}
                <img class="title-image" src="{{ asset('img/small img.png') }}" alt="" />
                {!! __('messages.about_us.title.part_2')  !!}
            </h1>
        </div>

        <div class="text about-text">{{ __('messages.about_us.desc') }}</div>

        <button
            class="black-button see-catalog-button about-button"
            onclick="openModal('catalog', true)"
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
        </button>

        <div class="examples">
            <div class="example-container">
                <img
                    class="example-image"
                    src="{{ asset('img/smallImg2.png') }}"
                    alt=""
                />
                <img
                    class="example-image"
                    src="{{ asset('img/smallImg1.png') }}"
                    alt=""
                />
                <img
                    class="example-image"
                    src="{{ asset('img/smallImg3.png') }}"
                    alt=""
                />
            </div>

            <span class="example-text">{{ __('messages.about_us.examples_text') }}</span
            >
        </div>
    </div>

    <div class="about-image">
        <img src="{{ asset('img/about-main.png') }}" alt="" />
    </div>
</div>
