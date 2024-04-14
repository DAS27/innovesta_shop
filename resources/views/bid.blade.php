@extends('main')

@section('title', 'Оставить заявку')

@section('content')
    <div class="container">
        <main class="application-main">
            <div class="wrapper application-top">
                <div class="content-top-info">
                    <h1 class="subtitle">Поможем с обустройством помещения!</h1>

                    <p class="text application-info-text">
                        Мы всегда готовы предоставить вам бесплатно поддержку и
                        консультации, чтобы помочь вам с любыми вопросами или запросами,
                        связанными с выбором мебели для вашего коммерческого пространства.
                    </p>
                </div>

                <div class="content-top-image">
                    <picture>
                        <source
                            media="(max-width:650px)"
                            srcset="{{ asset('img/applicationMobileImg.png') }}"
                        />
                        <img src="{{ asset('img/applicationImg.png') }}" alt="work space" />
                    </picture>
                </div>

                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">Главная</a></li>
                    <li>Обустройство помещения</li>
                </ul>
            </div>

            <div class="overwidth form-block">
                <h3 class="form-title">Отправить заявку</h3>

                <p class="text form-text">
                    Укажите в заявке, какую задачу вы хотите решить, а мы подберём
                    инструменты для ее достижения.
                </p>

                <form class="form" method="POST">
                    @csrf
                    {{ csrf_field() }}
                    <div class="input-row fi">
                        <div class="input-block">
                            <label for="fname"><span class="required">*</span> Имя</label>
                            <input
                                class="input"
                                type="text"
                                id="fname"
                                name="first_name"
                                required
                            />
                        </div>

                        <div class="input-block">
                            <label for="lname">Фамилия</label>
                            <input class="input" type="text" id="lname" name="last_name" />
                        </div>
                    </div>

                    <div>
                        <p class="radio-label">Предпочтительный способ связи</p>
                        <div class="input-row input-row-radio">
                            <div class="radio-block">
                                <input
                                    type="radio"
                                    id="all"
                                    name="contact_method"
                                    value="both"
                                    checked
                                />
                                <label for="all">Все</label>
                            </div>

                            <div class="radio-block">
                                <input
                                    type="radio"
                                    id="email-radio"
                                    name="contact_method"
                                    value="email"
                                />
                                <label for="email-radio">Электронная почта</label>
                            </div>

                            <div class="radio-block">
                                <input
                                    type="radio"
                                    id="phone-radio"
                                    name="contact_method"
                                    value="phone"
                                />
                                <label for="phone-radio">Номер телефона</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-row connect-types">
                        <div class="input-block">
                            <label for="email">Электоронная почта</label>
                            <input
                                class="input"
                                type="email"
                                id="email"
                                name="email"
                                placeholder="example@gmail.com"
                            />
                        </div>

                        <div class="input-block">
                            <label for="number">
                                <span class="required">*</span> Номер телефона</label>
                            <input
                                class="input"
                                type="tel"
                                id="phone"
                                name="phone"
                                placeholder="+7(___)___-__-__"
                                required
                            />
                        </div>
                    </div>

                    <div class="input-row room-info">
                        <div class="input-block">
                            <label for="room-types">Тип помещения</label>
                            <select class="select" name="room-types" id="room-types">
                                <option value="mall">Для ТРЦ</option>
                                <option value="business_center">Бизнес центры</option>
                                <option value="hotel">Гостиничный бизнес</option>
                                <option value="restaurant">Рестораны и кафе</option>
                                <option value="coworking_space">Сoworking пространсва</option>
                                <option value="gaming_club">Gaming клубы</option>
                            </select>
                        </div>

                        <div class="input-block">
                            <label for="room-size">Размеры помещения</label>
                            <input
                                class="input"
                                type="number"
                                id="room-size"
                                name="room_dimensions"
                                placeholder="... кв.м"
                            />
                            <p class="tip">Какого размера ваше помещение в кв.м</p>
                        </div>
                    </div>

                    <div class="input-row">
                        <div class="input-block">
                            <label for="comments">Комментарии для консультанта</label>
                            <textarea
                                name="comments"
                                id="comments"
                                placeholder="Например: Хочу обустроить небольшое помещение кафе в стиле ретро"
                            ></textarea>
                            <p class="tip">
                                Опишите ваши предпочтения и пожелания для обустроиства
                                помещения
                            </p>
                        </div>
                    </div>

                    <div class="input-row">
                        <div class="input-block room-scheme">
                            <p>Схема помещения</p>
                            <div class="upload-container">
                                <label class="room-scheme-label" for="room-scheme">
                    <span class="room-scheme-label-text"
                    >Выберете файл или перенесите в эту область (допустимый
                      форматы файла - png, jpeg, pdf)</span
                    >
                                    <p class="upload-button black-button">
                                        Выбрать файл
                                        <svg
                                            width="14"
                                            height="15"
                                            viewBox="0 0 14 15"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M0.25 13.25H13.75V14.75H0.25V13.25ZM7.75 3.371V11.75H6.25V3.371L1.69675 7.925L0.63625 6.8645L7 0.5L13.3638 6.86375L12.3032 7.92425L7.75 3.3725V3.371Z"
                                                fill="white"
                                            />
                                        </svg>
                                    </p>
                                </label>
                                <input
                                    class="room-scheme-upload"
                                    type="file"
                                    id="room-scheme"
                                    name="room_scheme"
                                />
                            </div>
                            <p class="tip">Максимальное количество файлов 10 шт, 100 мб</p>
                        </div>
                    </div>

                    <div class="input-row">
                        <div class="input-block">
                            <label for="item">Название или артикул</label>
                            <input class="input" type="text" name="sku"/>
                            <p class="tip">
                                Введите название или артикул понравившихся товаров из каталога
                            </p>

                            <div
                                class="black-button see-catalog-button acticle-page"
                                onclick="openModal('catalog')"
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
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="order article-page">
                        <span>Отправить заявку</span>
                        <img src="{{ asset('img/icons/applicationSendIcon.svg') }}" alt="bid send logo" />
                    </button>
                </form>
            </div>
        </main>
    </div>
@endsection
