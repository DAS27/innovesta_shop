<div class="wrapper setup">
    <div class="bottom-description">
        <div>
            <h2 class="subtitle">{{ __('messages.support.title') }}</h2>
            <h3 class="product-h3">{{ __('messages.support.subtitle') }}</h3>
        </div>

        <p class="text bottom-text">{{ __('messages.support.desc') }}</p>

        <button
            class="order bottom-order"
            onclick="openModal('chat', true)"
        >
            {{ __('messages.btn.create_order') }}
            <img src="{{ asset('img/icons/orderIcon.svg') }}" alt="order icon" />
        </button>
    </div>

    <div class="bottom-image-block">
        <img class="bottom-image" src="{{ asset('img/supportImage.png') }}" alt="support image" />
    </div>
</div>
