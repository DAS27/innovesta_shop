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
          Диваны и пуфы для холла
        </a>
        <a class="modal-catalog-product" href="/mall">
          Кресла и стулья для холла
        </a>
        <a class="modal-catalog-product" href="/mall">
          Столы для фудкорта
        </a>
        <a class="modal-catalog-product" href="/mall">
          Стулья для фудкорта
        </a>
      `;

      break;
    }
    case "rc": {
      productsList.innerHTML = `
        <a class="modal-catalog-product" href="/restaurant">
          Комплект для переговорных
        </a>
        <a class="modal-catalog-product" href="/restaurant">
          Регулируемые столы и стулья
        </a>
        <a class="modal-catalog-product" href="/restaurant">
          Угловые решения
        </a>
      `;

      break;
    }
    case "gc": {
      productsList.innerHTML = `
        <a class="modal-catalog-product" href="/gaming-club">
          Комплект для переговорных
        </a>
        <a class="modal-catalog-product" href="/gaming-club">
          Регулируемые столы и стулья
        </a>
        <a class="modal-catalog-product" href="/gaming-club">
          Угловые решения
        </a>
      `;

      break;
    }
    case "gb": {
      productsList.innerHTML = `
        <a class="modal-catalog-product" href="/hotel">
          Комплект для переговорных
        </a>
        <a class="modal-catalog-product" href="/hotel">
          Регулируемые столы и стулья
        </a>
        <a class="modal-catalog-product" href="/hotel">
          Угловые решения
        </a>
      `;

      break;
    }
    case "cw": {
      productsList.innerHTML = `
        <a class="modal-catalog-product" href="/coworking">
          Кресла
        </a>
        <a class="modal-catalog-product" href="/coworking">
          Столы
        </a>
        <a class="modal-catalog-product" href="/coworking">
          Офисные станции (капсулы)
        </a>
        <a class="modal-catalog-product" href="/coworking">
          Мебель для тренинг румов
        </a>
      `;

      break;
    }
    case "bc": {
      productsList.innerHTML = `
        <a class="modal-catalog-product" href="/business-center">
          Мебель для персонала
        </a>
        <a class="modal-catalog-product" href="/business-center">
          Кабинет руководителя
        </a>
        <a class="modal-catalog-product" href="/business-center">
          Мебель для приемной и лаунж-зон
        </a>
        <a class="modal-catalog-product" href="/business-center">
          Мебель для конференц-залов
        </a>
        <a class="modal-catalog-product" href="/business-center">
          Скамьи для ожидания
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
          <h3 class="modal-chat-title">Написать нам</h3>

          <div class="modal-chats">
            <a class="modal-chat-block" href="https://wa.me/77019997980?text=">
              <img src="${imagesPath}/icons/wsModalIcon.svg" alt="whatsapp icon" />
              <span class="modal-chat-text">Написать WhatsApp</span>
            </a>
            <a class="modal-chat-block" href="https://t.me/ilyasmenace">
              <img src="${imagesPath}/icons/tgModalIcon.svg" alt="telegram icon" />
              <span class="modal-chat-text">Написать Telegram</span>
            </a>
            <a class="modal-chat-block" href="/bid">
              <img src="${imagesPath}/icons/chatModalIcon.svg" alt="chat icon" />
              <span class="modal-chat-text last">Оформить заказ на сайте</span>
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
      <h3 class="modal-catalog-title">Каталог</h3>

      <div class="modal-catalog-content">
        <div class="catalog-types">
          <a class="catalog-type" href="/mall" onmouseover="fillCatalogProducts('trc', ${isMainPage})">
            <img
              class="catalog-type-img"
              src="${imagesPath}/catalogModal1.png"
              alt=""
            />
            <span>Для ТРЦ</span>
          </a>
          <a class="catalog-type" href="/business-center" onmouseover="fillCatalogProducts('bc', ${isMainPage})">
            <img
              class="catalog-type-img"
              src="${imagesPath}/catalogModal2.png"
              alt=""
            />
            <span>Бизнес центры</span>
          </a>
          <a class="catalog-type" href="/hotel" onmouseover="fillCatalogProducts('gb', ${isMainPage})">
            <img
              class="catalog-type-img"
              src="${imagesPath}/catalogModal3.png"
              alt=""
            />
            <span>Гостиничный бизнес</span>
          </a>
          <a class="catalog-type" href="/restaurant" onmouseover="fillCatalogProducts('rc', ${isMainPage})">
            <img
              class="catalog-type-img"
              src="${imagesPath}/catalogModal4.png"
              alt=""
            />
            <span>Рестораны и кафе</span>
          </a>
          <a class="catalog-type" href="/coworking" onmouseover="fillCatalogProducts('cw', ${isMainPage})">
            <img
              class="catalog-type-img"
              src="${imagesPath}/catalogModal5.png"
              alt=""
            />
            <span>Coworking пространства</span>
          </a>
          <a class="catalog-type" href="/gaming-club" onmouseover="fillCatalogProducts('gc', ${isMainPage})">
            <img
              class="catalog-type-img"
              src="${imagesPath}/catalogModal6.png"
              alt=""
            />
            <span>Gaming клубы</span>
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

          <p class="app-modal-title">Заявка успешно отправлена!</p>
          <p class="app-modal-text">Вам ответят в течение дня</p>

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

function onSearchFocus() {
  const searchVariants = document.querySelectorAll(".search-variants");

  for (let i = 0; i < searchVariants.length; i++) {
    searchVariants[i].style.display = "block";
  }
}

function onSearchFocusOut() {
  const searchVariants = document.querySelectorAll(".search-variants");

  for (let i = 0; i < searchVariants.length; i++) {
    searchVariants[i].style.display = "none";
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
          <select class="language">
            <option value="ru">ru</option>
            <option value="kz">kz</option>
          </select>
        </div>

        <div id="nav-icon3" class="pushmenu opened" onclick="onShowSideBar()"></div>
      </div>
      <div class="menu-main-menu-container">
        <ul id="menu-main-menu">
          <li>
            <a onclick="openSidebarCatalog(${isMainPage})">Каталог</a>
          </li>
          <li><a href="https://innovesta.kz/#why-us" onclick="onShowSideBar()">О нас</a></li>
          <li><a href="https://innovesta.kz/#showroom" onclick="onShowSideBar()">Шоурумы</a></li>
        </ul>

        <a class="order bottom-order" onclick="openModal('chat', ${isMainPage})">
          Оформить заказ
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
          placeholder="По названию или артикулу"
          onfocus="onSearchFocus()"
          onfocusout="onSearchFocusOut()"
        />
        <img src="${imagesPath}/icons/searchIcon.svg" alt="" />

        <div class="search-variants">
          <div class="variant">
            <p class="variant-name">
              Veneer High-end Executive
              <b>Table</b>
            </p>
            <p class="tip">Сoworking пространсва</p>
          </div>
          <div class="variant">
            <p class="variant-name">Veneer Meeting <b>Table</b></p>
            <p class="tip">Сoworking пространсва</p>
          </div>
          <div class="variant">
            <p class="variant-name">Big <b>Table</b></p>
            <p class="tip">ТРЦ</p>
          </div>
          <div class="variant">
            <p class="variant-name">
              Veneer High-end Executive
              <b>Table</b>
            </p>
            <p class="tip">Сoworking пространсва</p>
          </div>
          <div class="variant">
            <p class="variant-name">Big <b>Table</b></p>
            <p class="tip">ТРЦ</p>
          </div>
        </div>
      </div>
      `;
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
              <a><img class="catalog-modal-img" src="${imagesPath}/catalogModal1.png" alt="">Для ТРЦ<i></i></a>

              <ul class="sub-menu">
                <li><a href="/mall#tab1">Диваны и пуфы для холла</a></li>
                <li><a href="/mall#tab2">Кресла и стулья для холла</a></li>
                <li><a href="/mall#tab3">Столы для фудкорта</a></li>
                <li><a href="/mall#tab4">Стулья для фудкорта</a></li>
              </ul>
            </li>

            <li class="menu-parent-item">
              <a><img class="catalog-modal-img" src="${imagesPath}/catalogModal2.png" alt="">Бизнес центры<i></i></a>

              <ul class="sub-menu">
                <li><a href="/business-center#tab1">Мебель для персонала</a></li>
                <li><a href="/business-center#tab2">Кабинет руководителя</a></li>
                <li><a href="/business-center#tab3">Мебель для приемной и лаунж-зон</a></li>
                <li><a href="/business-center#tab4">Мебель для конференц-залов</a></li>
                <li><a href="/business-center#tab5">Скамьи для ожидания</a></li>
              </ul>
            </li>

            <li>
              <a href="/hotel">
              <img class="catalog-modal-img" src="${imagesPath}/catalogModal3.png" alt="">
                Гостиничный бизнес
              </a>
            </li>

            <li>
              <a href="/restaurant">
              <img class="catalog-modal-img" src="${imagesPath}/catalogModal4.png" alt="">
                Рестораны и кафе
              </a>
            </li>

            <li class="menu-parent-item">
              <a><img class="catalog-modal-img" src="${imagesPath}/catalogModal5.png" alt="">Coworking пространства<i></i></a>

              <ul class="sub-menu">
                <li><a href="/coworking#tab1">Кресла</a></li>
                <li><a href="/coworking#tab2">Столы</a></li>
                <li><a href="/coworking#tab3">Офисные-станции (капсулы)</a></li>
                <li><a href="/coworking#tab4">Мебель для тренинг румов</a></li>
              </ul>
            </li>

            <li>
              <a href="/gaming-club"><img class="catalog-modal-img" src="${imagesPath}/catalogModal6.png" alt="">Gaming клубы</a>
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
    if ("Backspace" != not) {
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
