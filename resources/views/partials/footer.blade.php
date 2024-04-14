<footer class="footer">
    <div class="container footer-container wrapper">
        <div class="footer-info">
            <div class="footer-decsription">
                <a href="{{ url('/') }}">
                    <img class="footer-logo" src="{{ asset('img/icons/appLogo.svg') }}"  alt=""/>
                </a>

                <p class="footer-text text">
                    Предоставляем широкий выбор высококачественной мебели для
                    различных коммерческих объектов
                </p>
            </div>

            <div class="navigation">
                <a class="nav-link" href="{{ url('/#why-us')}}">О нас</a>
                <a class="nav-link" href="{{ url('/#showroom') }}">Шоурумы</a>
            </div>

            <div class="footer-contacts">
                <a class="contact-info" href="tel:+77019997980">
                    <img src="{{ asset('img/icons/phoneBlackIcon.svg') }}" alt="phone icon" />
                    <span>+7 701 999 7980</span>
                </a>
                <a
                    class="contact-info"
                    href="mailto:i.mustapayev@mercurydesigns.kz"
                >
                    <img src="{{ asset('img/icons/emailIcon.svg') }}" alt="email icon" />
                    <span>i.mustapayev@mercurydesigns.kz</span>
                </a>
                <div class="contact-info">
                    <img src="{{ asset('img/icons/locationIcon.svg') }}" alt="location icon" />
                    <span>г. Алматы, улица Байзакова, дом 280.</span>
                </div>
                <div class="contact-info">
                    <img src="{{ asset('img/icons/timeIcon.svg') }}" alt="time icon" />
                    <span>Ежедневно с 09:00 до 18:00</span>
                </div>
            </div>
        </div>

        <hr />

        <div class="footer-terms">
            <p class="rights">©2024 PMDesing. All rights reserved</p>

            <p class="term">Terms & Privacy</p>

            <div class="socials-links">
                <a
                    class="social-link"
                    href="https://wa.me/77019997980?text="
                    target="_blank"
                >
                    <img src="{{ asset('img/icons/wsGreyIcon.svg') }}" alt="whatsApp icon" />
                </a>

                <a
                    class="social-link"
                    href="https://t.me/ilyasmenace"
                    target="_blank"
                >
                    <img src="{{ asset('img/icons/tgGreyIcon.svg') }}" alt="telegram icon" />
                </a>

{{--                <a--}}
{{--                    class="social-link"--}}
{{--                    href="https://www.instagram.com/"--}}
{{--                    target="_blank"--}}
{{--                >--}}
{{--                    <img src="{{ asset('img/icons/igGreyIcon.svg') }}" alt="instagram icon" />--}}
{{--                </a>--}}
            </div>
        </div>
    </div>
</footer>
