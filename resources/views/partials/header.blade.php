<header class="header">
    <nav class="wrapper header-block">
        <div class="logo-with-search">
            <a href="{{ url('/') }}">
                <img class="logo" src="{{ asset('img/icons/appLogo.svg') }}"  alt="innovesta logo"/>
            </a>

{{--            <div class="search">--}}
{{--                <input--}}
{{--                    class="search-input"--}}
{{--                    placeholder="По названию или артикулу"--}}
{{--                    onfocus="onSearchFocus()"--}}
{{--                    onfocusout="onSearchFocusOut()"--}}
{{--                />--}}
{{--                <img src="{{ asset('img/icons/searchIcon.svg') }}" alt="" />--}}

{{--                <div class="search-variants">--}}
{{--                    <div class="variant">--}}
{{--                        <p class="variant-name">--}}
{{--                            Veneer High-end Executive--}}
{{--                            <b>Table</b>--}}
{{--                        </p>--}}
{{--                        <p class="tip">Сoworking пространсва</p>--}}
{{--                    </div>--}}
{{--                    <div class="variant">--}}
{{--                        <p class="variant-name">Veneer Meeting <b>Table</b></p>--}}
{{--                        <p class="tip">Сoworking пространсва</p>--}}
{{--                    </div>--}}
{{--                    <div class="variant">--}}
{{--                        <p class="variant-name">Big <b>Table</b></p>--}}
{{--                        <p class="tip">ТРЦ</p>--}}
{{--                    </div>--}}
{{--                    <div class="variant">--}}
{{--                        <p class="variant-name">--}}
{{--                            Veneer High-end Executive--}}
{{--                            <b>Table</b>--}}
{{--                        </p>--}}
{{--                        <p class="tip">Сoworking пространсва</p>--}}
{{--                    </div>--}}
{{--                    <div class="variant">--}}
{{--                        <p class="variant-name">Big <b>Table</b></p>--}}
{{--                        <p class="tip">ТРЦ</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>

        <div class="navigation">
            <a class="nav-link" href="{{ url('/#why-us') }}">О нас</a>
            <a class="nav-link" href="{{ url('/#showroom') }}">Шоурумы</a>
        </div>

        <div class="catalog-with-order">
            <img
                class="catalog-icon"
                src="{{ asset('img/icons/burgerIcon.png') }}"
                alt=""
                onclick="openModal('catalog', true)"
            />

            <button class="order" onclick="openModal('chat', true)">
                Оформить заказ
                <img src="{{ asset('img/icons/orderIcon.svg') }}" alt="" />
            </button>
        </div>
    </nav>
</header>
