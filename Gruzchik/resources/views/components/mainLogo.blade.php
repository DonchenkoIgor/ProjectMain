<style>

    body, html {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
    }

    /* Навигационная панель */
    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    /* Кнопка */
    .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
    }

    /* Плейсхолдеры */
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    /* Разделитель и вертикальная линия */
    .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    /* Иконки */
    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    /* Отключение темы */
    .bd-mode-toggle {
        z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
    }

    /* Фоновое изображение */
    .position-relative {
        width: 100%;
        height: 60vh;
        margin: 0;
        padding: 0;
    }

    .full-background {
        background-image: url('images/logo4.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        margin: 0;
        padding: 15px;
    }

    .full-background {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;

    }
    .full-background h1 {
        color: #f3510c;
        font-size: 2.5rem;
        margin-bottom: 1rem;
    }

    .full-background h3 {
        color: #ffffff;
        font-size: 1.5rem;
    }

    @media (min-width: 768px) {
        .full-background h1 {
            font-size: 3rem;
            margin-bottom: 1.5rem;
        }

        .full-background h3 {
            font-size: 2rem;
        }
    }

    @media (min-width: 1024px) {
        .full-background h1 {
            font-size: 4rem;
            margin-bottom: 2rem;
        }

        .full-background h3 {
            font-size: 2.5rem;
        }
    }

    /* Колонки */
    .col-md-6 {
        max-width: 100%;
    }

    /* Стили для тарифных карточек */
    .tariff-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .tariff-card img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .tariff-card-content {
        margin-top: 20px;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 50%;
    }

    .tariff-card h3 {
        color: #f3510c;
        margin: 20px 0;
    }

    .tariff-card ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .tariff-card ul li {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .tariff-card ul li::before {
        content: "\2714"; /* Unicode символ галочки */
        color: #f3510c;
        margin-right: 10px;
    }

    .tariff-card .additional-services {
        margin-top: 20px;
    }

    .tariff-card .additional-services .service {
        background-color: #fff;
        border: 1px solid #dee2e6;
        padding: 10px;
        border-radius: 5px;
        text-align: center;
        margin-bottom: 10px;
    }

    .tariff-card .additional-services .service svg {
        width: 24px;
        height: 24px;
        fill: #f3510c;
        margin-bottom: 5px;
    }

    @media (min-width: 768px) {
        .tariff-card {
            flex-direction: row;
            text-align: left;
        }

        .tariff-card img {
            max-width: 50%;
            margin-right: 20px;
        }

        .tariff-card-content {
            margin-top: 0;
        }
    }

    /* Выпадающее меню */
    .dropdown-menu {
        min-width: 200px;
    }

    .navbar-nav .dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown-item {
        padding: 10px 20px;
    }

    /* Ссылки */
    .full-background a {
        color: #0059ff;
    }
</style>

<nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand d-md-none" href="#">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav flex-grow-1 justify-content-between">
                    <li class="nav-item"><a class="nav-link" href="/">Головна</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="servicesDropdown" role="button">Послуги</a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="#">Офісний переїзд</a></li>
                            <li><a class="dropdown-item" href="#">Вантажники</a></li>
                            <li><a class="dropdown-item" href="#">Перевезення сейфів та банкоматів</a></li>
                            <li><a class="dropdown-item" href="#">Перевезення меблів</a></li>
                            <li><a class="dropdown-item" href="#">Завантаження та вивантаження</a></li>
                            <li><a class="dropdown-item" href="#">Вивыз мотлоху з квартири</a></li>
                            <li><a class="dropdown-item" href="#">Вивіз будівельного сміття</a></li>
                            <li><a class="dropdown-item" href="#">Малотоннажні вантажоперевезення</a></li>
                            <li><a class="dropdown-item" href="#">Вивіз старих меблів</a></li>
                            <li><a class="dropdown-item" href="#">Транспортні послуги</a></li>
                            <li><a class="dropdown-item" href="#">Квартирний переїзд</a></li>
                            <li><a class="dropdown-item" href="#">Підйом будматеріалів</a></li>
                            <li><a class="dropdown-item" href="#">Перевезення піаніно</a></li>
                            <li><a class="dropdown-item" href="#">Вантажне таксі</a></li>
                            <li><a class="dropdown-item" href="#">Складські роботи</a></li>
                            <li><a class="dropdown-item" href="#">Перевезення холодильника</a></li>
                            <li><a class="dropdown-item" href="#">Замовлення газелі</a></li>
                            <li><a class="dropdown-item" href="#">Вантажоперевезення з гідратором</a></li>
                            <li><a class="dropdown-item" href="#">Дачний переїзд</a></li>


                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('transport')}}">Транспорт</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('price')}}">Ціни</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('package')}}">Упаковка</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Вакансії</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="position-relative overflow-hidden p-0 m-0 text-center bg-body-tertiary">
    <div class="position-relative overflow-hidden p-0 m-0 text-center bg-body-tertiary full-background">
        <div class="col-md-4 p-lg-5 mx-auto my-5">
            <h1 class="display-3 fw-bold">Послуги вантажників у Києві</h1>
            <h3 class="fw-normal mb-3">@yield('description', 'Переїзд у нову квартиру')</h3>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
</div>
<div class="product-device shadow-sm d-none d-md-block"></div>
<div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
