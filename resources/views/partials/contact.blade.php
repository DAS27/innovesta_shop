<div class="contacts">
    <div class="wrapper contacts">
        <div class="phone-block phone" onclick="onContactsClick()">
            <img src="{{ asset('img/icons/phoneIcon.svg') }}" alt="phone icon" />
            <span>+7 701 999 7980</span>
            <img src="{{ asset('img/icons/downArrowIcon.svg') }}" alt="" />

            <div class="contacts-popup">
                <a class="contacts-popup-variant" href="tel:+77019997980">
                    <img
                        class="contact-popup-variant-img"
                        src="{{ asset('img/icons/phoneBlackIcon.svg') }}"
                        alt="phone icon"
                    />
                    <p class="contact-popup-info">+7 701 999 7980</p>
                </a>

                <a
                    class="contacts-popup-variant"
                    href="mailto:i.mustapayev@mercurydesigns.kz"
                >
                    <img
                        class="contact-popup-variant-img"
                        src="{{ asset('img/icons/emailIcon.svg') }}"
                        alt="email icon"
                    />
                    <p class="contact-popup-info">i.mustapayev@mercurydesigns.kz</p>
                </a>

                <a class="contacts-popup-variant" href="https://wa.me/77019997980?text=">
                    <img
                        class="contact-popup-variant-img"
                        src="{{ asset('img/icons/wsBlackIcon.svg') }}"
                        alt="whatsapp image"
                    />
                    <p class="contact-popup-info">+7 701 999 7980</p>
                </a>

                <a class="contacts-popup-variant" href="https://t.me/ilyasmenace">
                    <img
                        class="contact-popup-variant-img"
                        src="{{ asset('img/icons/tgBlackIcon.svg') }}"
                        alt="telegram icon"
                    />
                    <p class="contact-popup-info">+7 701 999 7980</p>
                </a>
            </div>
        </div>

        <div class="right-side">
            <div class="socials-links">
                <a
                    class="social-link"
                    href="https://wa.me/77019997980?text="
                    target="_blank"
                >
                    <img src="{{ asset('img/icons/wsIcon.svg') }}" alt="whatsApp icon') }}" />
                </a>

                <a
                    class="social-link"
                    href="https://t.me/ilyasmenace"
                    target="_blank"
                >
                    <img src="{{ asset('img/icons/tgIcon.svg') }}" alt="telegram icon') }}"/>
                </a>

{{--                <a--}}
{{--                    class="social-link"--}}
{{--                    href="https://www.instagram.com/"--}}
{{--                    target="_blank"--}}
{{--                >--}}
{{--                    <img src="{{ asset('img/icons/igIcon.svg') }}" alt="instagram icon') }}" />--}}
{{--                </a>--}}
            </div>

            <div class="language-block">
                <select class="language">
                    <option value="ru">ru</option>
                    <option value="kz">kz</option>
                </select>
            </div>
        </div>
    </div>
</div>
