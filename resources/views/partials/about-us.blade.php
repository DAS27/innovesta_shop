<div class="wrapper about">
    <div class="about-info">
        <div class="title-block">
            <h1 class="title">
                Предоставим
                <img class="title-image" src="{{ asset('img/small img.png') }}" alt="" />
                уникальные решения <br />
                для вашего пространства
            </h1>
        </div>

        <div class="text about-text">
            Наши функциональные и стильные решения предназначены для различных
            коммерческих объектов, идеально сочетая в себе стиль и
            практичность, чтобы ваше рабочее пространство было как комфортным,
            так и продуктивным.
        </div>

        <button
            class="black-button see-catalog-button about-button"
            onclick="openModal('catalog', true)"
        >
            Посмотреть каталог
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

            <span class="example-text"
            >Эксклюзивные решения для любого интерьера</span
            >
        </div>
    </div>

    <div class="about-image">
        <img src="{{ asset('img/about-main.png') }}" alt="" />
    </div>
</div>
