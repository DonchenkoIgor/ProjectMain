@extends('layouts.main')

@section('content')
    <style>
        .elementor-container {
            display: flex;
            justify-content: center; /* Центрирование по горизонтали */
            padding: 1px; /* Отступы вокруг контейнера */
            background-color: #ffffff; /* Белый фон для контейнера */
            width: 100%; /* Занимать всю ширину родительского элемента */
        }

        .elementor-row {
            display: flex;
            justify-content: space-between; /* Распределить элементы внутри ряда */
            align-items: center; /* Центрировать элементы по вертикали */
            gap: 20px; /* Расстояние между элементами */
            flex-wrap: wrap; /* Разрешить перенос элементов на следующую строку при необходимости */
            width: 100%; /* Занимать всю ширину контейнера */
        }

        .elementor-column {
            display: flex;
            flex-direction: column;
            align-items: center; /* Центрирование содержимого колонки по горизонтали */
            padding: 20px; /* Внутренние отступы */
            background-color: #ffffff; /* Цвет фона колонки */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Тень */
            border-radius: 8px; /* Закругленные углы */
            flex: 1 1 30%; /* Занимать 30% ширины родительского элемента и позволять изменения размера */
            max-width: 30%; /* Максимальная ширина 30% */
            transition: transform 0.3s ease, background-color 0.3s ease; /* Плавный переход */
            text-align: center; /* Центрирование текста по горизонтали */
        }

        .elementor-column:hover {
            transform: translateY(-10px); /* Подъем при наведении */
            background-color: #e0e0e0; /* Затемнение фона при наведении */
        }

        .elementor-image img {
            max-width: 100%; /* Масштабирование изображения */
            height: auto; /* Сохранение пропорций изображения */
            margin-bottom: 10px; /* Отступ снизу */
        }

        .elementor-heading-title {
            font-size: 1.2em; /* Размер шрифта заголовка */
            color: #333; /* Цвет текста заголовка */
            margin: 0; /* Удаление отступов */
        }

        .orange-text {
            color: #f3510c; /* Оранжевый цвет */
        }
    </style>

    <div class="container my-5">
        <h2 class="text-center">Вантажоперевезення Київ - перевезення вантажів недорого:</h2>
        <div class="tariff-card mt-4">
            <img src="{{ asset('images/logo5.jpg') }}" alt="Вантажник" />
            <div class="tariff-card-content">
                <p class="orange-text"><strong>Вартість 1 години роботи вантажника:</strong></p>
                <p><strong>Від 200 грн</strong></p>
                <p>Мінімальне замовлення: <strong>2 години</strong></p>
                <ul>
                    <li>Малогабаритні грузоперевезення</li>
                    <li>Квартирні та офісні переїзди</li>
                    <li>Завантаження-розвантаження, підйом,збирання-розбирання меблів</li>
                    <li>Газелі для перевезення вантажу</li>
                    <li>Складські роботи (сортування, пакування, маркування)</li>
                    <li>Такелажні роботи (транспортування габаритних музичних інструментів (піаніно та ін.), сейфів, банкоматів), дрібних вантажів</li>
                    <li>Вивіз будівельного сміття</li>
                    <li>Доставка будівельних матеріалів з будь-якої частини міста</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h2 class="text-center">Якісна робота, комерційні вантажоперевезення у Києві:</h2>
        <div class="tariff-card mt-4">
            <img src="{{ asset('images/logo6.jpg') }}" alt="Вантажник" />
            <div class="tariff-card-content">
                <p class="orange-text"><strong>Транспортна компанія «Вантажник» вантажоперевезення Київ на 1 годину багато років працює на українському ринку, надаючи повний сервіс послуг вантажоперевезень:</strong></p>
                <ul>
                    <li>Оперативний відгук диспетчера</li>
                    <li>Організація та здійснення замовлення машини</li>
                    <li>Персональна робота з кожним замовником</li>
                    <li>Перевезення вантажів день у день у центрі</li>
                    <li>Особливості співробітництва з вантажоперевезень</li>
                    <li>Сумлінне, акуратне, дбайливе виконання взятих він умов і зобов'язань</li>
                    <li>Погодинне експрес перевезення вантажів на годину на власному автомобілі</li>
                    <li>Оперативне усунення всіх основних проблем</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h2 class="text-center">Мінімальне замовлення:</h2></div>


    <div class="container my-5">
        <div class="elementor-container">
        <div class="elementor-row">
            <div class="elementor-column">
                <div class="elementor-column-wrap">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-widget-image">
                            <div class="elementor-widget-container">
                                <div class="elementor-image">
                                    <img width="64" height="64" src="https://mypereezd.dp.ua/wp-content/uploads/elementor/thumbs/truck-pldn98cc1jowxqfmwp9fhjt5gvct99olk6kcmpjo8w.png" title="truck" alt="truck">
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-widget-heading">
                            <div class="elementor-widget-container">
                                <h5 class="elementor-heading-title">500 грн</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column">
                <div class="elementor-column-wrap">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-widget-image">
                            <div class="elementor-widget-container">
                                <div class="elementor-image">
                                    <img width="148" height="64" src="https://mypereezd.dp.ua/wp-content/uploads/2020/11/7345623766.png" class="attachment-large size-large" alt="Главная">
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-widget-heading">
                            <div class="elementor-widget-container">
                                <h5 class="elementor-heading-title">700 грн</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column">
                <div class="elementor-column-wrap">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-widget-image">
                            <div class="elementor-widget-container">
                                <div class="elementor-image">
                                    <img width="194" height="64" src="https://mypereezd.dp.ua/wp-content/uploads/2020/11/867437.png" class="attachment-large size-large" alt="Главная">
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-widget-heading">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title">900 грн</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
