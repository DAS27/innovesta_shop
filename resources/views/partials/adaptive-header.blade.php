<header class="adaptive-header">
    <div
        id="nav-icon3"
        class="pushmenu"
        onclick="pushmenuFunction(true)"
    ></div>

    <nav class="sidebar"></nav>
    <div class="hidden-overley"></div>

    <!-- <img
        src="{{ asset('img/icons/searchIcon.svg') }}"
        alt=""
        onclick="openSidebarSearch(true)"
    /> -->

    <a class="logo" href="{{ url('/') }}">
        <img src="{{ asset('img/icons/appLogo.svg') }}"  alt="'" />
    </a>

    <div class="phone-block phone" onclick="pushmenuFunction()">
        <img src="{{ asset('img/icons/phoneBlackIcon.svg') }}" alt="phone icon" />
    </div>

    <img
        src="{{ asset('img/icons/orderIcon.svg') }}"
        alt=""
        onclick="openModal('chat', true)"
    />
</header>
