@extends('layouts.main')

@section('content')
    <style>
        .container {
            padding-left: 15px;
            padding-right: 15px;
        }

        /* Заголовки */
        h2 {
            font-size: 1.5em;
            margin-bottom: 20px;
            text-align: center;
        }

        h3 {
            font-size: 1.2em;
            color: #f3510c;
            margin: 20px 0;
            text-align: center;
        }

        /* Карточки тарифа */
        .tariff-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 20px;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        .tariff-card img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 8px;
        }

        .tariff-card-content {
            padding: 20px;
        }

        .tariff-card-content p {
            margin: 0 0 10px;
        }

        .tariff-card-content ul {
            list-style: none;
            padding-left: 0;
            margin: 0;
        }

        .tariff-card-content li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .tariff-card-content li::before {
            content: "\2714"; /* Unicode символ галочки */
            color: #f3510c;
            margin-right: 10px;
        }

        .orange-text {
            color: #f3510c;
        }

        /* Элементы с изображениями и заголовками */
        .elementor-container {
            display: flex;
            justify-content: center;
            padding: 1px;
            background-color: #ffffff;
            width: 100%;
            flex-wrap: wrap;
        }

        .elementor-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            width: 100%;
        }

        .elementor-column {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            flex: 1 1 30%;
            max-width: 30%;
            transition: transform 0.3s ease, background-color 0.3s ease;
            text-align: center;
            box-sizing: border-box;
        }

        .elementor-column:hover {
            transform: translateY(-10px);
            background-color: #f9f9f9;
        }

        .elementor-image img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .elementor-heading-title {
            font-size: 1.2em;
            color: #333;
            margin: 0;
        }

        /* Адаптивные стили */
        @media (max-width: 768px) {
            .order-button {
                font-size: 14px;
                padding: 8px 16px;
                margin-top: 20px;
            }

            .elementor-column {
                flex: 1 1 45%;
                max-width: 45%;
            }

            .tariff-card {
                padding: 15px;
            }

            .tariff-card-content {
                padding: 8px;
            }
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

            .tariff-card {
                padding: 10px;
            }

            .tariff-card-content {
                padding: 5px;
            }

            .tariff-card-content ul {
                padding-left: 20px;
                text-align: left;
            }

            .elementor-image img {
                max-width: 80%;
                height: auto;
            }
        }
    </style>

    <div class="container my-5">
        <h2 class="text-center">Вантажоперевезення по Україні - перевезення вантажів недорого:</h2>
        <div class="tariff-card mt-4">
            <img src="{{ asset('images/logo5.jpg') }}" alt="Вантажник" />
            <div class="tariff-card-content">
                <p class="orange-text"><strong>Вартість 1 години роботи вантажника:</strong></p>
                <p><strong class="orange-text">Від 250 грн</strong></p>
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
                                    <img width="105" height="64" src="{{ asset('images/car1.png') }}" class="attachment-large size-large" alt="Главная">
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-widget-heading">
                            <div class="elementor-widget-container">
                                <h5 class="elementor-heading-title">1000 грн</h5>
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
                                    <img width="105" height="64" src="{{ asset('images/car2.png') }}" class="attachment-large size-large" alt="Главная">
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-widget-heading">
                            <div class="elementor-widget-container">
                                <h5 class="elementor-heading-title">1500 грн</h5>
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
                                    <img width="134" height="64" src="{{ asset('images/car33.png') }}" class="attachment-large size-large" alt="Главная">
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-widget-heading">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title">2000 грн</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="d-flex justify-content-center my-5">
            <a class="order-button" data-bs-toggle="modal" data-bs-target="#orderModal">РОЗРАХУВАТИ ВАРТІСТЬ</a>
            <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="orderModalLabel">РОЗРАХУВАТИ ВАРТІСТЬ</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('order.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Ім'я</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Телефон</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Повідомлення</label>
                                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Відправити</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
