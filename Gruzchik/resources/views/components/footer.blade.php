<!--  <link rel="stylesheet" href="{{ secure_asset('styles/footer.css') }}"> -->

<style>
    .footer {
        background-color: rgba(8, 9, 9, 0); /* Прозрачный фон для футера */
        padding: 20px 0; /* Отступы сверху и снизу для футера */
    }

    .footer-top img {
        max-height: 140px; /* Ограничиваем максимальную высоту логотипа в футере */
        margin-bottom: 10px; /* Добавляем отступ снизу под логотипом */
    }

    .footer-bottom {
        display: flex; /* Используем Flexbox для выравнивания содержимого футера */
        justify-content: center; /* Выравниваем элементы по центру по горизонтали */
        align-items: center; /* Выравниваем элементы по центру по вертикали */
        padding: 10px; /* Отступы внутри блока футера снизу */
        font-size: 14px; /* Размер шрифта текста в футере */
    }

    .footer-bottom p {
        margin: 0; /* Убираем внешние отступы у абзацев */
    }

    .footer-bottom i {
        margin-right: 8px; /* Добавляем отступ справа от иконок для создания пространства между иконкой и текстом */
    }

    .container.footer-top {
        display: flex; /* Используем Flexbox для выравнивания содержимого */
        justify-content: space-between; /* Логотип слева, контактная информация справа */
        align-items: center; /* Выравнивание элементов по центру вертикально */
        padding: 20px; /* Отступы внутри контейнера футера */
    }

    .contact-info {
        display: flex; /* Используем Flexbox для выравнивания текстов */
        flex-direction: column; /* Выравниваем элементы по вертикали */
        text-align: right; /* Выравнивание текста по правому краю */
    }

    .contact-info .work-time,
    .contact-info .contact-details {
        margin-bottom: 5px; /* Добавляем небольшие отступы между элементами контактной информации */
    }

    .col-6.col-md h5 {
        font-size: 1.5rem; /* Увеличиваем размер шрифта заголовка */
        font-weight: bold; /* Делаем текст заголовка жирным */
        margin-bottom: 20px; /* Отступ снизу под заголовком */
        color: #333; /* Цвет заголовка */
    }

    /* Стиль для списка */
    .col-6.col-md ul {
        padding-left: 0; /* Убираем отступы слева */
        list-style: none; /* Убираем маркеры списка */
    }

    .col-6.col-md ul li {
        margin-bottom: 10px; /* Отступы между пунктами списка */
        font-size: 1rem; /* Размер текста в списке */
        color: #666; /* Цвет текста */
    }

    /* Стиль для ссылок */
    .col-6.col-md ul li a {
        color: #007bff; /* Цвет ссылок */
        text-decoration: none; /* Убираем подчеркивание */
        display: flex; /* Используем Flexbox для выравнивания текста и иконки */
        align-items: center; /* Центрируем текст и иконку по вертикали */
        transition: color 0.3s ease; /* Плавное изменение цвета при наведении на ссылку */
    }

    .col-6.col-md ul li a:hover {
        color: #0056b3; /* Цвет ссылки при наведении курсора */
    }

    /* Иконки рядом с текстом */
    .col-6.col-md ul li a::before {
        content: "\f054"; /* Иконка (Font Awesome стрелка вправо) перед текстом */
        font-family: 'Font Awesome 5 Free'; /* Шрифт для иконки */
        font-weight: 900; /* Толщина шрифта для иконки */
        margin-right: 8px; /* Отступ между иконкой и текстом */
        color: #f3510c; /* Цвет иконки */
    }

    @media (max-width: 767px) {
        .container.footer-top {
            flex-direction: column; /* Элементы футера размещаются вертикально на мобильных устройствах */
            text-align: center; /* Выравниваем текст по центру */
        }

        .footer-top img {
            margin-bottom: 20px; /* Увеличиваем отступ снизу для логотипа на мобильных устройствах */
        }

        .contact-info {
            text-align: center; /* Выравниваем контактную информацию по центру на мобильных устройствах */
        }

        .col-6.col-md {
            width: 100%; /* Ширина колонки 100% на мобильных устройствах */
            padding: 0 15px; /* Добавляем отступы по бокам на мобильных устройствах */
        }
    }

</style>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="container my-5 footer-top">
                <img src="{{ asset('images/perevozchik.png') }}" alt="Вантажник">
                <div class="contact-info">
                    <div class="work-time">
                        <p><i class="fas fa-clock"></i> с 8:00 до 20:00, без вихідних</p>
                    </div>
                    <div class="contact-details">
                        <p><a href="tel:+380666431636">+380 (66) 643-16-36</a></p>
                        <p><a href="tel:+380986422759">+380 (98) 642-27-59</a></p>
                        <p><a href="mailto:perev0zchik.ua1@gmail.com">perev0zchik.ua1@gmail.com</a></p>
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
                    <li><a class="link-secondary text-decoration-none" href="{{route('international')}}">Вантажні перевезення по Україні</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
