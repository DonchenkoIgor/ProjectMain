@extends('layouts.main')

@section('content')
    <style>
        .elementor-container {
            display: flex;
            justify-content: center; /* Центрирование по горизонтали */
            padding: 1px; /* Отступы вокруг контейнера */
            background-color: #ffffff; /* Белый фон для контейнера */
            width: 100%; /* Занимать всю ширину родительского элемента */
            flex-wrap: wrap;
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
            box-sizing: border-box;
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
        .order-button {
            background-color: #f3510c;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }
        @media (max-width: 768px) {
            .order-button {
                font-size: 14px; /* Уменьшите размер шрифта */
                padding: 8px 16px; /* Уменьшите внутренние отступы */
                margin-top: 20px; /* Увеличьте отступ сверху для мобильных устройств */
            }
            .elementor-column {
                flex: 1 1 45%;
                max-width: 45%;
            }
        }
        @media (max-width: 576px) {
            .elementor-column {
                flex: 1 1 100%;
                max-width: 100%;
                padding: 15px;
            }

            .order-button {
                font-size: 14px;
                padding: 8px 16px;
                margin-top: 20px;
            }

            .container {
                padding-left: 10px;
                padding-right: 10px;
            }
        }
        @media (max-width: 768px) {
            .tariff-card {
                padding: 15px;
            }

            .tariff-card-content {
                padding: 8px;
            }
        }
        @media (max-width: 576px) {
            .tariff-card {
                padding: 10px;
            }

            .tariff-card-content {
                padding: 5px;
            }

            .container {
                padding-left: 10px;
                padding-right: 10px;
            }
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
                                    <img width="64" height="64" src="https://mypereezd.dp.ua/wp-content/uploads/elementor/thumbs/truck-pldn98cc1jowxqfmwp9fhjt5gvct99olk6kcmpjo8w.png" class="attachment-large size-large" alt="Главная">
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

        <div class="d-flex justify-content-center my-5">
            <a class="order-button" data-bs-toggle="modal" data-bs-target="#orderModal">РОЗРАХУВАТИ ВАРТІСТЬ</a>
        </div>

        <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="orderModalLabel">ЗАМОВИТИ ПЕРЕЇЗД</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Имя</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Телефон</label>
                                <input type="tel" class="form-control" id="phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Сообщение</label>
                                <textarea class="form-control" id="message" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
