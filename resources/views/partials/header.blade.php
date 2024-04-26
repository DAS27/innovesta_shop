<header class="header">
    <nav class="wrapper header-block">
        <div class="logo-with-search">
            <a href="{{ url('/') }}">
                <img class="logo" src="{{ asset('img/icons/appLogo.svg') }}"  alt="innovesta logo"/>
            </a>

            <div class="search">
                <input
                    class="search-input"
                    placeholder="По названию или артикулу"
                    onfocus="onSearchFocusDesktop()"
                    onfocusout="onSearchFocusOutDesktop()"
                    oninput="filterVariantsDesktop()"
                />
                <img src="{{ asset('img/icons/searchIcon.svg') }}" alt="" />

                <div class="search-variants"></div>
            </div>
        </div>

        <div class="navigation">
            <a class="nav-link" href="{{ url('/#why-us') }}">{{ __('messages.links.about_us') }}</a>
            <a class="nav-link" href="{{ url('/#showroom') }}">{{ __('messages.links.show_room') }}</a>
        </div>

        <div class="catalog-with-order">
            <img
                class="catalog-icon"
                src="{{ asset('img/icons/burgerIcon.png') }}"
                alt=""
                onclick="openModal('catalog', true)"
            />

            <button class="order" onclick="openModal('chat', true)">
                {{ __('messages.btn.create_order') }}
                <img src="{{ asset('img/icons/orderIcon.svg') }}" alt="" />
            </button>
        </div>
    </nav>
</header>
