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
        user-select: none;
    }

    .bd-placeholder-img-lg {
        font-size: 3.5rem;
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
        background-image: url('{{ asset('images/mainLogo.png') }}');
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

    /* Колонки */
    .col-md-6 {
        max-width: 100%;
    }

    /* Медиа-запросы */
    @media (min-width: 768px) {
        .full-background h1 {
            font-size: 3rem;
            margin-bottom: 1.5rem;
        }

        .full-background h3 {
            font-size: 2rem;
        }
    }

    @media (max-width: 768px) {
        .position-relative {
            width: 100%;
            height: 28vh;
            margin: 0;
            padding: 0;
            background-size: cover;
        }
        .full-background h1 {
            font-size: 1.5rem; /* Уменьшает размер шрифта заголовка для мобильных устройств */
        }

        .full-background h3 {
            font-size: 1rem; /* Уменьшает размер шрифта подзаголовка для мобильных устройств */
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

    .navbar.border-bottom {
        border-bottom: 1px solid #0059ff; /* Замените #0059ff на нужный вам цвет */
    }

    .offcanvas {
        background-color: rgba(52, 58, 64, 0.8); /* Полупрозрачный тёмный фон */
        color: #ffffff; /* Белый текст */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3); /* Мягкая тень */
    }

    .navbar-nav .nav-item {
        margin-bottom: 0.5rem; /* Отступы между элементами меню */
    }

    .navbar-nav .nav-link {
        color: #ffffff;
        padding: 0.5rem 1rem; /* Отступы вокруг ссылки */
        border-radius: 0.25rem; /* Округлённые углы ссылки */
    }

    .navbar-nav .nav-link:hover {
        background-color: rgba(73, 80, 87, 0.6); /* Полупрозрачный фон при наведении */
        color: #f3510c; /* Цвет текста при наведении */
    }

    /* Выпадающее меню */
    .dropdown-menu {
        background-color: rgba(73, 80, 87, 0.8); /* Полупрозрачный фон для выпадающего меню */
        border: none; /* Удаление границы */
        min-width: 200px;
    }

    .dropdown-item {
        color: #ffffff;
        padding: 0.5rem 1rem;
    }

    .dropdown-item:hover {
        background-color: rgba(52, 58, 64, 0.6); /* Полупрозрачный фон при наведении на элемент */
        color: #f3510c; /* Цвет текста при наведении на элемент */
    }

    .dropdown-arrow {
        display: none; /* Скрываем стрелочку по умолчанию */
        border: solid #000; /* Цвет стрелочки */
        border-width: 0 2px 2px 0; /* Размер стрелочки */
        padding: 4px;
        margin-left: 8px;
        transform: rotate(45deg);
        cursor: pointer; /* Курсор в виде руки для интерактивности */
    }

    /* Стили для отображения стрелочки на мобильных устройствах */
    @media (max-width: 768px) {
        .dropdown-arrow {
            display: inline-block;
        }

        /* Скрыть меню по умолчанию */
        #servicesMenu {
            display: none;
        }
    }
    @media (max-width: 768px) {
        .offcanvas.offcanvas-top {
            height: 37vh; /* Увеличение высоты для отображения всех пунктов */
        }
    }
</style>

<nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand d-md-none" href="#">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav flex-grow-1 justify-content-between">
                    <li class="nav-item"><a class="nav-link" href="/">Головна</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{route('services')}}" id="servicesDropdown" role="button">Послуги
                            <span class="dropdown-arrow" id="servicesArrow"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown" id="servicesMenu">
                            <li><a class="dropdown-item" href="{{route('moving')}}">Офісний/квартирний переїзд</a></li>
                            <li><a class="dropdown-item" href="{{route('transportation')}}">Перевезення майна</a></li>
                            <li><a class="dropdown-item" href="{{route('removal')}}">Вивіз не потрібних речей</a></li>
                            <li><a class="dropdown-item" href="{{route('loadingUnloading')}}">Завантаження та вивантаження</a></li>
                            <li><a class="dropdown-item" href="{{route('cargoTaxi')}}">Вантажне таксі</a></li>
                            <li><a class="dropdown-item" href="{{route('warehouseWork')}}">Послуги вантажників</a></li>
                            <li><a class="dropdown-item" href="{{route('international')}}">Вантажні перевезення по Україні</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('transport')}}">Транспорт</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('price')}}">Ціни</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('package')}}">Упаковка</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="position-relative overflow-hidden p-0 m-0 text-center bg-body-tertiary">
    <div class="position-relative overflow-hidden p-0 m-0 text-center bg-body-tertiary full-background">
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        <div class="col-md-4 p-lg-5 mx-auto my-5">
            <h1 class="display-3 fw-bold">Працюємо по всій країні</h1>
            <h3 class="fw-normal mb-3">@yield('description', 'Переїзд у нову квартиру')</h3>
        </div>
    </div>
</div>
<div class="product-device shadow-sm d-none d-md-block"></div>
<div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>

<script>
    $(document).ready(function() {
        $('#servicesArrow').click(function(event) {
            event.preventDefault();
            $('#servicesMenu').toggle();
        });
    });
</script>
