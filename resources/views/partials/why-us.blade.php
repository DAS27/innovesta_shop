<div class="wrapper why-us" id="why-us">
    <div class="why-us-info">
        <div class="why-us-description">
            <h2 class="subtitle why-us-subtitle">{{ __('messages.why_us.title') }}</h2>

            <p class="text why-us-text">{{ __('messages.why_us.desc') }}</p>
        </div>

        <button
            class="black-button see-catalog-button"
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
    </div>

    <div class="variants">
        <div class="variant-block block1">
            <p class="variant-text">{{ __('messages.why_us.options.one') }}</p>
        </div>
        <div class="variant-block block2">
            <p class="variant-text">{{ __('messages.why_us.options.two') }}</p>
        </div>
        <div class="variant-block block3">
            <p class="variant-text">{{ __('messages.why_us.options.three') }}</p>
        </div>
    </div>
</div>
