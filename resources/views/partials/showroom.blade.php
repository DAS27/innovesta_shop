<div class="wrapper showrooms" id="showroom">
    <div class="showroom-image-block">
        <img
            class="showroom-image"
            src="{{ asset('img/showroomImg.png') }}"
            alt="showroom image"
        />
    </div>

    <div class="showroom-description">
        <div>
            <h2 class="subtitle">{{ __('messages.showroom.title') }}</h2>

            <p class="text showroom-text">{{ __('messages.showroom.desc') }}</p>
        </div>

        <div class="showroom-info-block">
            <div class="showroom-info">
                <div>
                    <img
                        class="showroom-info-image"
                        src="{{ asset('img/icons/blackStarImg.svg') }}"
                        alt="star"
                    />
                </div>

                <p class="showroom-info-text">{{ __('messages.showroom.info.part_1') }}</p>
            </div>

            <div class="showroom-info">
                <div>
                    <img
                        class="showroom-info-image"
                        src="{{ asset('img/icons/blackLeafImg.svg') }}"
                        alt="leaf"
                    />
                </div>

                <p class="showroom-info-text">{{ __('messages.showroom.info.part_2') }}</p>
            </div>
        </div>

        <p class="text">{{ __('messages.showroom.info.part_3') }}</p>
    </div>
</div>
