const locale = document.cookie.split('; ').find(row => row.startsWith('locale=')).split('=')[1];

const translations = {
    ru: {
        text_us: "Написать нам",
        write_wa: "Написать WhatsApp",
        write_tg: "Написать Telegram",
        create_order: "Оформить заказ на сайте",
        catalog: {
            title: "Каталог",
            cw: 'Коворкинг пространства',
            gc: 'Гейминг клубы',
            bc: 'Офисы',
            hotel: 'Гостиничный бизнес',
            mall: 'ТРЦ',
            restaurant: 'Рестораны и кафе',
        },
        bid: {
            create: 'Оформить заказ',
            success: 'Заявка успешно отправлена!',
            success_text: 'Вам ответят в течении дня'
        },
        links: {
            about_us: 'О нас',
            show_room: 'Шоурумы',
        },
        furniture: {
            mall: {
                title: 'Для ТРЦ',
                sofas_poufs: 'Диваны и пуфы для холла',
                armchairs_chairs: 'Кресла и стулья для холла',
                food_court_tables: 'Столы для фудкорта',
                food_court_chairs: 'Стулья для фудкорта',
            },
            cw: {
                title: 'Коворкинг пространства',
                chairs: 'Кресла',
                tables: 'Столы',
                capsules: 'Офисные станции (капсулы)',
                training_room: 'Мебель для тренинг румов'
            },
            gc: {
                title: 'Гейминг клубы',
            },
            offices: {
                title: 'Оффисы',
                staff: 'Мебель для персонала',
                boss: 'Кабинет руководителя',
                lounge: 'Мебель для приемной и лаунж-зон',
                conference_hall: 'Мебель для конференц-залов',
                waiting_room: 'Скамьи для ожидания',
            },
            hotel: {
                title: 'Гостиничный бизнес',
                meeting_room: 'Комплект для переговорных',
                adjustable_table_chair: 'Регулируемые столы и стулья',
                angular_solutions: 'Угловые решения',
            },
            restaurant: {
                title: 'Рестораны и кафе',
            }
        }
    },
    kz: {
        text_us: "Бізге жазыңыз",
        write_wa: "WhatsApp жазу",
        write_tg: "Telegram жазу",
        create_order: "Веб-сайтта тапсырыс беру",
        catalog: {
            title: "Каталог",
            cw: 'Коворкинг кеңістіктері',
            gc: 'Ойын клубтары',
            bc: 'Офистер',
            hotel: 'Қонақ үй бизнесі',
            mall: 'Сауда орталығына арналған',
            restaurant: 'Мейрамханалар мен кафелер',
        },
        bid: {
            create: 'Тапсырысты рәсімдеу',
            success: 'Өтінім сәтті қабылданды!',
            success_text: 'Біз сізге күні бойы жауап береміз'
        },
        links: {
            about_us: 'Біз туралы',
            show_room: 'Шоурумдар',
        },
        breadcrumbs: {
            main: 'Басты бет',
        },
        furniture: {
            mall: {
                title: 'Сауда орталықтарына арналған жиһаз',
                sofas_poufs: 'Холлға арналған дивандар мен пуфтар',
                armchairs_chairs: 'Холлға арналған креслолар мен демалыс орындықтары',
                food_court_tables: 'Фудкортқа арналған үстелдер',
                food_court_chairs: 'Фудкорт қа арналған орындықтар',
            },
            offices: {
                title: 'Оффистер',
                staff: 'Қызметкерлерге арналған жиһаз',
                boss: 'Басшы кабинеті',
                lounge: 'Қабылдау және демалыс бөлмелеріне арналған жиһаз',
                conference_hall: 'Конференц-залдарға арналған жиһаз',
                waiting_room: 'Күту аймағына арналған орындықтар',
            },
            cw: {
                title: 'Коворкинг кеңістіктері',
                chairs: 'Креслолар',
                tables: 'Үстелдер',
                capsules: 'Кеңсе станциялары (капсулалар)',
                training_room: 'Тренинг бөлмелеріне арналған жиһаз'
            },
            gc: {
                title: 'Ойын клубтары',
            },
            hotel: {
                title: 'Қонақ үй бизнесі',
                meeting_room: 'Жиналыс бөлмесі жинағы',
                adjustable_table_chair: 'Реттелетін үстелдер мен орындықтар',
                angular_solutions: 'Бұрыштық жиһаз',
            },
            restaurant: {
                title: 'Мейрамханалар мен кафелер',
            },
        }
    }
}

const variants = [
    { name: "Диваны и пуфы для холла", tip: "Мебель для ТРЦ", url: "/mall" },
    { name: "Кресла и стулья для холла", tip: "Мебель для ТРЦ", url: "/mall" },
    { name: "Столы для фудкорта", tip: "Мебель для ТРЦ", url: "/mall" },
    { name: "Стулья для фудкорта", tip: "Мебель для ТРЦ", url: "/mall" },

    { name: "Кресла", tip: "Коворкинг пространства", url: "/coworking" },
    { name: "Столы", tip: "Коворкинг пространства", url: "/coworking" },
    { name: "Офисные станции (капсулы)", tip: "Коворкинг пространства", url: "/coworking" },
    { name: "Мебель для тренинг румов", tip: "Коворкинг пространства", url: "/coworking" },

    { name: "Мебель для персонала", tip: "Мебель для БЦ", url: "/business-center" },
    { name: "Кабинет руководителя", tip: "Мебель для БЦ", url: "/business-center" },
    { name: "Мебель для приемной и лаунж-зон", tip: "Мебель для БЦ", url: "/business-center" },
    { name: "Мебель для конференц-залов", tip: "Мебель для БЦ", url: "/business-center" },
    { name: "Скамьи для ожидания", tip: "Мебель для БЦ", url: "/business-center" },

    { name: "Комплект для переговорных", tip: "Мебель для гостиничного бизнеса", url: "/business-center" },
    { name: "Регулируемые столы и стулья", tip: "Мебель для гостиничного бизнеса", url: "/business-center" },
    { name: "Угловые решения", tip: "Мебель для гостиничного бизнеса", url: "/business-center" },
];

function changeImage(imageNumber) {
    const imageElement = document.querySelector(".directions-image");

    imageElement.src = `./img/directionImg${imageNumber}.png`;
}

function openTab(evt, tabName) {
    const tabcontent = document.querySelectorAll(".products-list");
    for (let i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    const tablinks = document.querySelectorAll(".tablink");

    for (let i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
    }

    document.getElementById(tabName).style.display = "flex";

    evt.currentTarget.classList.add("active");
}

function bodyMargin() {
    const windowInnerWidth = document.documentElement.clientWidth;
    const bodyElementHTML = document.getElementsByTagName("body")[0];
    const scrollbarWidth =
        parseInt(window.innerWidth) - parseInt(windowInnerWidth);

    bodyElementHTML.style.marginRight = "-" + scrollbarWidth + "px";
}

function onModalClose() {
    const windowInnerWidth = document.documentElement.clientWidth;
    const modalBackground = document.querySelector(".modalBackground");
    modalBackground.style.display = "none";

    if (windowInnerWidth >= 1366) {
        bodyMargin();
    }
}

function onModalBackgroundClick(event) {
    const windowInnerWidth = document.documentElement.clientWidth;
    const modalBackground = document.querySelector(".modalBackground");

    if (event.target === modalBackground) {
        modalBackground.style.display = "none";
        if (windowInnerWidth >= 1366) {
            bodyMargin();
        }
    }
}

function fillCatalogProducts(productType, isMainPage = false) {
    const productsList = document.querySelector(".catalog-products");
    const pagesPath = isMainPage ? "./pages" : ".";

    switch (productType) {
        case "trc": {
            productsList.innerHTML = `
        <a class="modal-catalog-product" href="/mall">
          ${translations[locale].furniture.mall.sofas_poufs}
        </a>
        <a class="modal-catalog-product" href="/mall">
          ${translations[locale].furniture.mall.armchairs_chairs}
        </a>
        <a class="modal-catalog-product" href="/mall">
          ${translations[locale].furniture.mall.food_court_tables}
        </a>
        <a class="modal-catalog-product" href="/mall">
          ${translations[locale].furniture.mall.food_court_chairs}
        </a>
      `;

            break;
        }
        case "rc": {
            productsList.innerHTML = `
        <a class="modal-catalog-product" href="/restaurant">
          ${translations[locale].furniture.hotel.meeting_room}
        </a>
        <a class="modal-catalog-product" href="/restaurant">
          ${translations[locale].furniture.hotel.adjustable_table_chair}
        </a>
        <a class="modal-catalog-product" href="/restaurant">
          ${translations[locale].furniture.hotel.angular_solutions}
        </a>
      `;

            break;
        }
        case "gc": {
            productsList.innerHTML = `
        <a class="modal-catalog-product" href="/gaming-club">
          ${translations[locale].furniture.hotel.meeting_room}
        </a>
        <a class="modal-catalog-product" href="/gaming-club">
          ${translations[locale].furniture.hotel.adjustable_table_chair}
        </a>
        <a class="modal-catalog-product" href="/gaming-club">
          ${translations[locale].furniture.hotel.angular_solutions}
        </a>
      `;

            break;
        }
        case "gb": {
            productsList.innerHTML = `
        <a class="modal-catalog-product" href="/hotel">
          ${translations[locale].furniture.hotel.meeting_room}
        </a>
        <a class="modal-catalog-product" href="/hotel">
          ${translations[locale].furniture.hotel.adjustable_table_chair}
        </a>
        <a class="modal-catalog-product" href="/hotel">
          ${translations[locale].furniture.hotel.angular_solutions}
        </a>
      `;

            break;
        }
        case "cw": {
            productsList.innerHTML = `
        <a class="modal-catalog-product" href="/coworking">
            ${translations[locale].furniture.cw.chairs}
        </a>
        <a class="modal-catalog-product" href="/coworking">
            ${translations[locale].furniture.cw.tables}
        </a>
        <a class="modal-catalog-product" href="/coworking">
            ${translations[locale].furniture.cw.capsules}
        </a>
        <a class="modal-catalog-product" href="/coworking">
           ${translations[locale].furniture.cw.training_room}
        </a>
      `;

            break;
        }
        case "bc": {
            productsList.innerHTML = `
        <a class="modal-catalog-product" href="/business-center">
            ${translations[locale].furniture.offices.staff}
        </a>
        <a class="modal-catalog-product" href="/business-center">
            ${translations[locale].furniture.offices.boss}
        </a>
        <a class="modal-catalog-product" href="/business-center">
            ${translations[locale].furniture.offices.lounge}
        </a>
        <a class="modal-catalog-product" href="/business-center">
            ${translations[locale].furniture.offices.conference_hall}
        </a>
        <a class="modal-catalog-product" href="/business-center">
            ${translations[locale].furniture.offices.waiting_room}
        </a>
      `;

            break;
        }
    }
}

function openModal(type, isMainPage) {
    const modalActive = document.querySelector(".modalActive");
    const modalWindow = document.querySelector(".modalWindow");
    const modalBackground = document.querySelector(".modalBackground");
    const windowInnerWidth = document.documentElement.clientWidth;

    const sidebar = document.querySelector(".sidebar");
    const hiddenOverley = document.querySelector(".hidden-overley");

    if (
        sidebar.classList.contains("show") ||
        hiddenOverley.classList.contains("show")
    ) {
        sidebar.classList.toggle("show");
        hiddenOverley.classList.toggle("show");
        document.body.classList.toggle("sidebar-opened");
    }

    const imagesPath = isMainPage ? "./img" : "../img";

    modalWindow.innerHTML = "";

    bodyMargin();

    modalBackground.style.display = "block";

    if (windowInnerWidth >= 1366) {
        bodyMargin();
    }

    switch (type) {
        case "chat": {
            if (windowInnerWidth <= 400) {
                modalActive.style.width = "320px";
                modalActive.style.height = "302px";
            } else {
                modalActive.style.width = "406px";
                modalActive.style.height = "302px";
            }

            modalWindow.innerHTML = `
          <h3 class="modal-chat-title">${translations[locale].text_us}</h3>

          <div class="modal-chats">
            <a class="modal-chat-block" href="https://wa.me/77019997980?text=">
              <img src="${imagesPath}/icons/wsModalIcon.svg" alt="whatsapp icon" />
              <span class="modal-chat-text">${translations[locale].write_wa}</span>
            </a>
            <a class="modal-chat-block" href="https://t.me/ilyasmenace">
              <img src="${imagesPath}/icons/tgModalIcon.svg" alt="telegram icon" />
              <span class="modal-chat-text">${translations[locale].write_tg}</span>
            </a>
            <a class="modal-chat-block" href="/bid">
              <img src="${imagesPath}/icons/chatModalIcon.svg" alt="chat icon" />
              <span class="modal-chat-text last">${translations[locale].create_order}</span>
            </a>
          </div>`;

            break;
        }
        case "catalog": {
            if (windowInnerWidth <= 440) {
                onShowSideBar();
                openSidebarCatalog(isMainPage);
                modalBackground.style.display = "none";
                break;
            }

            modalActive.style.width = "768px";
            modalActive.style.height = "472px";

            modalWindow.innerHTML = `
      <div class="modal-catalog-block">
      <h3 class="modal-catalog-title">${translations[locale].catalog.title}</h3>

      <div class="modal-catalog-content">
        <div class="catalog-types">
          <a class="catalog-type" href="/mall" onmouseover="fillCatalogProducts('trc', ${isMainPage})">
            <img
              class="catalog-type-img"
              src="${imagesPath}/catalogModal1.png"
              alt=""
            />
            <span>${translations[locale].catalog.mall}</span>
          </a>
          <a class="catalog-type" href="/business-center" onmouseover="fillCatalogProducts('bc', ${isMainPage})">
            <img
              class="catalog-type-img"
              src="${imagesPath}/catalogModal2.png"
              alt=""
            />
            <span>${translations[locale].catalog.bc}</span>
          </a>
          <a class="catalog-type" href="/hotel" onmouseover="fillCatalogProducts('gb', ${isMainPage})">
            <img
              class="catalog-type-img"
              src="${imagesPath}/catalogModal3.png"
              alt=""
            />
            <span>${translations[locale].catalog.hotel}</span>
          </a>
          <a class="catalog-type" href="/restaurant" onmouseover="fillCatalogProducts('rc', ${isMainPage})">
            <img
              class="catalog-type-img"
              src="${imagesPath}/catalogModal4.png"
              alt=""
            />
            <span>${translations[locale].catalog.restaurant}</span>
          </a>
          <a class="catalog-type" href="/coworking" onmouseover="fillCatalogProducts('cw', ${isMainPage})">
            <img
              class="catalog-type-img"
              src="${imagesPath}/catalogModal5.png"
              alt=""
            />
            <span>${translations[locale].catalog.cw}</span>
          </a>
          <a class="catalog-type" href="/gaming-club" onmouseover="fillCatalogProducts('gc', ${isMainPage})">
            <img
              class="catalog-type-img"
              src="${imagesPath}/catalogModal6.png"
              alt=""
            />
            <span>${translations[locale].catalog.gc}</span>
          </a>
        </div>

        <div class="catalog-products">
        </div>
      </div>
    </div>
      `;

            break;
        }

        case "application": {
            modalActive.style.width = "406px";
            modalActive.style.height = "264px";

            modalWindow.innerHTML = `
        <div class="app-modal-success-block">
          <img
            class="app-modal-img"
            src="../img/icons/applicationSuccessIcon.svg"
            alt=""
          />

          <p class="app-modal-title">${translations[locale].bid.success}</p>
          <p class="app-modal-text">${translations[locale].bid.success_text}</p>

          <button
            class="app-modal-button black-button"
            onclick="onModalClose()"
          >
            Готово
          </button>
        </div>
      `;

            break;
        }

        default:
            console.log("no");
    }
}

function onContactsClick() {
    const contactsPopup = document.querySelectorAll(".contacts-popup");

    for (let i = 0; i < contactsPopup.length; i++) {
        contactsPopup[i].classList.toggle("show-contacts-popup");
    }
}

function onShowSideBar() {
    const sidebar = document.querySelector(".sidebar");
    sidebar.classList.toggle("show");
    document.querySelector(".pushmenu").classList.toggle("open");
    document.querySelector(".hidden-overley").classList.toggle("show");
    document.body.classList.toggle("sidebar-opened");
}

function fillSidebarMenuContent(isMainPage) {
    const sidebar = document.querySelector(".sidebar");

    const imagesPath = isMainPage ? "./img" : "../img";

    sidebar.innerHTML = `
      <div class="d-flex p-2">
        <div class="phone-block phone" onclick="onContactsClick()">
          <img src="${imagesPath}/icons/phoneGreyIcon.svg" alt="phone icon" />
          <span>+7 777 888 99 00</span>
          <img src="${imagesPath}/icons/downArrowGreyIcon.svg" alt="" />

          <div class="contacts-popup contacts-popup-sidebar">
            <a class="contacts-popup-variant" href="tel:+77019997980">
              <img
                class="contact-popup-variant-img"
                src="${imagesPath}/icons/phoneBlackIcon.svg"
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
                src="${imagesPath}/icons/emailIcon.svg"
                alt="email icon"
              />
              <p class="contact-popup-info">i.mustapayev@mercurydesigns.kz</p>
            </a>

            <a class="contacts-popup-variant" href="https://wa.me/77019997980?text=">
              <img
                class="contact-popup-variant-img"
                src="${imagesPath}/icons/wsBlackIcon.svg"
                alt="whatsapp image"
              />
              <p class="contact-popup-info">+7 701 999 7980</p>
            </a>

            <a class="contacts-popup-variant" href="https://t.me/ilyasmenace">
              <img
                class="contact-popup-variant-img"
                src="${imagesPath}/icons/tgBlackIcon.svg"
                alt="telegram icon"
              />
              <p class="contact-popup-info">+7 701 999 7980</p>
            </a>
          </div>
        </div>

        <div class="language-block">
          <select class="language" id="locale">
              <option value="kz">KZ</option>
              <option value="ru">RU</option>
            </select>
        </div>

        <div id="nav-icon3" class="pushmenu opened" onclick="onShowSideBar()"></div>
      </div>
      <div class="menu-main-menu-container">
        <ul id="menu-main-menu">
          <li>
            <a onclick="openSidebarCatalog(${isMainPage})">${translations[locale].catalog.title}</a>
          </li>
          <li><a href="https://innovesta.kz/#why-us" onclick="onShowSideBar()">${translations[locale].links.about_us}</a></li>
          <li><a href="https://innovesta.kz/#showroom" onclick="onShowSideBar()">${translations[locale].links.show_room}</a></li>
        </ul>

        <a class="order bottom-order" onclick="openModal('chat', ${isMainPage})">
          ${translations[locale].bid.create}
          <img src="${imagesPath}/icons/orderIcon.svg" alt="" />
        </a>
      </div>
    `;

    const contactsSidebar = document.querySelector(".d-flex .contacts-popup");
    const phoneBlock = document.querySelector(".d-flex .phone-block.phone");

    function isPhoneBlock(element) {
        if (element.classList.contains("phone-block")) {
            return true;
        } else if (element.parentElement) {
            return isPhoneBlock(element.parentElement);
        }
        return false;
    }

    sidebar.addEventListener("click", (e) => {
        const isContactsShown = contactsSidebar.classList.contains(
            "show-contacts-popup"
        );

        if (isPhoneBlock(e.target)) return;

        if (e.target !== phoneBlock && isContactsShown) {
            contactsSidebar.classList.toggle("show-contacts-popup");
        }
    });

    const selectElement = document.getElementById('locale');
    selectElement.value = locale;

    document.getElementById('locale').addEventListener('change', function(event) {
        const selectedLocale = event.target.value;

        const data = JSON.stringify({
            locale: selectedLocale
        });

        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch("/locale/change-locale", {
            method: "POST",
            body: data,
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-CSRF-TOKEN": csrfToken,
            },
        })
            .then(response => {
                if (response.status === 200) {
                    console.log("Locale changed successfully");
                    window.location.reload();
                } else {
                    throw new Error('Failed to change locale');
                }
            })
            .catch(err => console.error(err));
    });
}

function openSidebarSearch(isMainPage = false) {
    const sidebar = document.querySelector(".sidebar");
    pushmenuFunction(isMainPage);

    const imagesPath = isMainPage ? "./img" : "../img";

    sidebar.innerHTML = `
      <div class="d-flex p-2">
        <p></p>
        <div id="nav-icon3" class="pushmenu opened" onclick="onShowSideBar()"></div>
      </div>

      <div class="search">
        <input
          class="search-input"
          id="search-input"
          placeholder="Поиск по категории"
        />
        <img src="${imagesPath}/icons/searchIcon.svg" alt="" />

        <div id="search-variants" class="search-variants">
        </div>
      </div>
      `;

    const searchInput = sidebar.querySelector('#search-input');
    searchInput.onfocus = onSearchFocusMobile;
    searchInput.onfocusout = onSearchFocusOutMobile;
    searchInput.oninput = filterVariantsMobile;
}

function openSidebarCatalog(isMainPage = false) {
    const sidebar = document.querySelector(".sidebar");

    const imagesPath = isMainPage ? "./img" : "../img";
    const pagesPath = isMainPage ? "./pages" : "../partial/products";

    sidebar.innerHTML = `
      <div class="d-flex p-2">
        <a class="side-catalog-back" onclick="fillSidebarMenuContent(${isMainPage})">
            <img src="${imagesPath}/icons/goBackIcon.svg" alt="back icon"/>
        </a>
        <div id="nav-icon3" class="pushmenu opened" onclick="onShowSideBar()"></div>
      </div>

      <div class="side-catalog">
        <div class="menu-main-menu-container">
          <p class="side-catalog-title">Каталог</p>

          <ul id="menu-main-menu">
            <li class="menu-parent-item">
              <a><img class="catalog-modal-img" src="${imagesPath}/catalogModal1.png" alt="">${translations[locale].furniture.mall.title}<i></i></a>

              <ul class="sub-menu">
                <li><a href="/mall#tab1">${translations[locale].furniture.mall.sofas_poufs}</a></li>
                <li><a href="/mall#tab2">${translations[locale].furniture.mall.armchairs_chairs}</a></li>
                <li><a href="/mall#tab3">${translations[locale].furniture.mall.food_court_tables}</a></li>
                <li><a href="/mall#tab4">${translations[locale].furniture.mall.food_court_chairs}</a></li>
              </ul>
            </li>

            <li class="menu-parent-item">
              <a><img class="catalog-modal-img" src="${imagesPath}/catalogModal2.png" alt="">
                ${translations[locale].furniture.offices.title}<i></i>
            </a>

              <ul class="sub-menu">
                <li><a href="/business-center#tab1">${translations[locale].furniture.offices.staff}</a></li>
                <li><a href="/business-center#tab2">${translations[locale].furniture.offices.boss}</a></li>
                <li><a href="/business-center#tab3">${translations[locale].furniture.offices.lounge}</a></li>
                <li><a href="/business-center#tab4">${translations[locale].furniture.offices.conference_hall}</a></li>
                <li><a href="/business-center#tab5">${translations[locale].furniture.offices.waiting_room}</a></li>
              </ul>
            </li>

            <li>
              <a href="/hotel">
              <img class="catalog-modal-img" src="${imagesPath}/catalogModal3.png" alt="">
                ${translations[locale].furniture.hotel.title}
              </a>
            </li>

            <li>
              <a href="/restaurant">
              <img class="catalog-modal-img" src="${imagesPath}/catalogModal4.png" alt="">
                ${translations[locale].furniture.restaurant.title}
              </a>
            </li>

            <li class="menu-parent-item">
              <a>
                <img class="catalog-modal-img" src="${imagesPath}/catalogModal5.png" alt="">
                ${translations[locale].furniture.cw.title}<i></i>
              </a>

              <ul class="sub-menu">
                <li><a href="/coworking#tab1">${translations[locale].furniture.cw.chairs}</a></li>
                <li><a href="/coworking#tab2">${translations[locale].furniture.cw.tables}</a></li>
                <li><a href="/coworking#tab3">${translations[locale].furniture.cw.capsules}</a></li>
                <li><a href="/coworking#tab4">${translations[locale].furniture.cw.training_room}</a></li>
              </ul>
            </li>

            <li>
              <a href="/gaming-club"><img class="catalog-modal-img" src="${imagesPath}/catalogModal6.png" alt="">
                ${translations[locale].furniture.gc.title}
              </a>
            </li>
          </li>
          </ul>
        </div>
      </div>
        `;

    // Получим все родительские элементы в меню
    const sidebarAccordeon = document.querySelectorAll(
        ".sidebar .menu-parent-item a:first-child",
    );

    const accordeonFunction = function () {
        this.parentNode.querySelector("ul").classList.toggle("show");
        this.querySelector("i").classList.toggle("rotate");
    };

    // Отслеживаем клики родительских пунктов меню
    for (i = 0; i < sidebarAccordeon.length; i++) {
        sidebarAccordeon[i].addEventListener("click", accordeonFunction, false);
    }
}

function onSearchFocusMobile() {
    document.querySelector("#search-variants").style.display = "block";
}

function onSearchFocusOutMobile() {
    setTimeout(() => {
        document.querySelector("#search-variants").style.display = "none";
    }, 100);
}

function onSearchFocusDesktop() {
    document.querySelector(".search-variants").style.display = "block";
}

function onSearchFocusOutDesktop() {
    setTimeout(() => {
        document.querySelector(".search-variants").style.display = "none";
    }, 100);
}

function filterVariantsMobile() {
    const input = document.getElementById('search-input').value.toLowerCase();
    const variantsContainer = document.getElementById('search-variants');

    if (input.trim() === "") {
        variantsContainer.innerHTML = '';
        return;
    }

    variantsContainer.innerHTML = '';

    const filtered = variants.filter(v =>
        v.name.toLowerCase().includes(input) || v.tip.toLowerCase().includes(input)
    );

    filtered.forEach(v => {
        const variantDiv = document.createElement('div');
        variantDiv.className = 'variant';
        variantDiv.innerHTML = `
            <p class="variant-name">
                <a href="${v.url}"><b>${v.name}</b></a>
            </p>
            <p class="tip">${v.tip}</p>
        `;
        variantDiv.onclick = function(event) {
            event.stopPropagation();
            window.location.href = v.url;
        };
        console.log(variantDiv)
        variantsContainer.appendChild(variantDiv);
    });
}

function filterVariantsDesktop() {
    const input = document.querySelector('.search-input').value.toLowerCase();
    const variantsContainer = document.querySelector('.search-variants');

    if (input.trim() === "") {
        variantsContainer.innerHTML = '';
        return;
    }

    variantsContainer.innerHTML = '';

    const filtered = variants.filter(v =>
        v.name.toLowerCase().includes(input) || v.tip.toLowerCase().includes(input)
    );
    filtered.forEach(v => {
        const variantDiv = document.createElement('div');
        variantDiv.className = 'variant';
        variantDiv.innerHTML = `
            <p class="variant-name">
                <a href="${v.url}"><b>${v.name}</b></a>
            </p>
            <p class="tip">${v.tip}</p>
        `;
        variantDiv.onclick = function(event) {
            event.stopPropagation();
            window.location.href = v.url;
        };
        variantsContainer.appendChild(variantDiv);
    });
}

const pushmenuFunction = function (isMainPage = false) {
    onShowSideBar();

    fillSidebarMenuContent(isMainPage);
};

document.addEventListener("DOMContentLoaded", () => {
    // получаем все элементы с классом pushmenu
    const pushmenu = document.getElementsByClassName("pushmenu");

    // получаем элемент с классом hidden-overley
    const hiddenOverley = document.querySelector(".hidden-overley");

    // отслеживаем клик клика по оверлею
    hiddenOverley.addEventListener("click", (e) => {
        e.currentTarget.classList.toggle("show");
        document.querySelector(".sidebar").classList.toggle("show");
        document.querySelector("body").classList.toggle("sidebar-opened");
        for (i = 0; i < pushmenu.length; i++) {
            pushmenu[i].classList.toggle("open");
        }
    });

    if (document.documentElement.clientWidth < 440) {
        const showroomsText = document.querySelectorAll(".text.showroom-text br");
        for (let i = 0; i < showroomsText.length; i++) {
            showroomsText[i].style.display = "none";
        }
    }
});

document.querySelector("#phone").onkeydown = function (e) {
    inputphone(e, document.querySelector("#phone"));
};

function inputphone(e, phone) {
    function stop(evt) {
        evt.preventDefault();
    }

    const key = e.key;
    const v = phone.value;
    const not = key.replace(/([0-9])/, 1);

    if (not == 1 || "Backspace" === not) {
        if ("Backspace" !== not) {
            if (v.length < 3 || v === "") {
                phone.value = "+7(";
            }
            if (v.length === 6) {
                phone.value = v + ")";
            }
            if (v.length === 10) {
                phone.value = v + "-";
            }
            if (v.length === 13) {
                phone.value = v + "-";
            }
            if (v.length > 15) e.preventDefault();
        }
    } else {
        stop(e);
    }
}

const form = document.querySelector(".form");

form.addEventListener("submit", (event) => onFormSubmit(event));

function onFormSubmit(e) {
    e.preventDefault();

    const formData = new FormData(form);
    const files = document.getElementById('room-scheme').files;

    for (let i = 0; i < files.length; i++) {
        formData.append('files[]', files[i]);
    }


    fetch("/bid", {
        method: "post",
        body: formData,
        headers: {
            Accept: "application/json",
            "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        },
    })
        .then((response) => {
            if (response.status === 201) {
                openModal("application");
            }
        })
        .catch((err) => console.log(err));
}
