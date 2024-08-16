<style>
    .footer {
        background-color: #f8f9fa; /* Светло-серый цвет фона */
        padding: 20px 0; /* Отступы сверху и снизу */
    }

    .footer-top img {
        max-height: 80px;
        margin-bottom: 10px; /* Добавляем отступ снизу */
    }

    .footer-bottom {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        font-size: 14px;
    }

    .footer-bottom p {
        margin: 0;
    }

    .footer-bottom i {
        margin-right: 8px;
    }

    .container.footer-top {
        display: flex;
        justify-content: space-between; /* Размещаем логотип слева, контактную информацию справа */
        align-items: center;
        padding: 20px;
    }
    .contact-info {
        display: flex;
        flex-direction: column;
        text-align: right; /* Выравниваем текст по правому краю */
    }
    .contact-info .work-time,
    .contact-info .contact-details {
        margin-bottom: 5px; /* Добавляем небольшие отступы между элементами */
    }

    .col-6.col-md h5 {
        font-size: 1.5rem; /* Увеличиваем размер шрифта заголовка */
        font-weight: bold; /* Делаем текст заголовка жирным */
        margin-bottom: 20px; /* Увеличиваем отступ снизу */
        color: #333; /* Цвет заголовка */
    }

    /* Стиль для списка */
    .col-6.col-md ul {
        padding-left: 0; /* Убираем отступы слева */
        list-style: none; /* Убираем маркеры списка */
    }

    .col-6.col-md ul li {
        margin-bottom: 10px; /* Увеличиваем отступы между пунктами списка */
        font-size: 1rem; /* Размер текста в списке */
        color: #666; /* Цвет текста */
    }

    /* Стиль для ссылок */
    .col-6.col-md ul li a {
        color: #007bff; /* Цвет ссылок */
        text-decoration: none; /* Убираем подчеркивание */
        display: flex;
        align-items: center; /* Выравниваем текст и иконку по центру */
        transition: color 0.3s ease; /* Плавное изменение цвета при наведении */
    }

    .col-6.col-md ul li a:hover {
        color: #0056b3; /* Цвет ссылок при наведении */
    }

    /* Иконки рядом с текстом */
    .col-6.col-md ul li a::before {
        content: "\f054"; /* Иконка (Font Awesome стрелка вправо) */
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        margin-right: 8px; /* Отступ между иконкой и текстом */
        color: #f3510c;
    }
    @media (max-width: 767px) {
        .container.footer-top {
            flex-direction: column; /* Переносим элементы футера на вертикальное размещение */
            text-align: center; /* Выравниваем текст по центру */
        }

        .footer-top img {
            margin-bottom: 20px; /* Увеличиваем отступ снизу для логотипа на мобильных устройствах */
        }

        .contact-info {
            text-align: center; /* Выравниваем контактную информацию по центру на мобильных устройствах */
        }

        .col-6.col-md {
            width: 100%; /* Ширина колонки на мобильных устройствах */
            padding: 0 15px; /* Добавляем отступы по бокам */
        }
    }
</style>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="container my-5 footer-top">
                <img src="{{ asset('images/logo1.png') }}" alt="Вантажник">
                <div class="contact-info">
                    <div class="work-time">
                        <p><i class="fas fa-clock"></i> с 8:00 до 20:00, без вихідних</p>
                    </div>
                    <div class="contact-details">
                        <p><a href="tel:+380561231234">+380 (56) 123-12-34</a></p>
                        <p><a href="mailto:info@gruzchik.dp.ua">info@gruzchik.dp.ua</a></p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md">
                <h5>Послуги</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary text-decoration-none" href="{{route('moving')}}">Офісний/квартирний переїзд</a></li>
                    <li><a class="link-secondary text-decoration-none" href="{{route('transportation')}}">Перевезення майна</a></li>
                    <li><a class="link-secondary text-decoration-none" href="{{route('removal')}}">Вивіз не потрібних речей</a></li>
                    <li><a class="link-secondary text-decoration-none" href="{{route('loadingUnloading')}}">Завантаження та вивантаження</a></li>
                    <li><a class="link-secondary text-decoration-none" href="{{route('cargoTaxi')}}">Вантажне таксі</a></li>
                    <li><a class="link-secondary text-decoration-none" href="{{route('warehouseWork')}}">Послуги вантажників</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
