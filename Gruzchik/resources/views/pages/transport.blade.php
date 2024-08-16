@extends('app')

@section('title', 'Транспорт')
@section('description', 'Обери свій транспорт')
@section('content')
    <style>
        .header-text {
            margin: 20px auto;
            max-width: 900px;
        }

        .orange-text {
            font-family: 'Poppins', sans-serif;
            color: #f3510c;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            font-weight: 700;
        }

        .service-card {
            display: flex; /* Используем Flexbox для управления расположением внутренних элементов */
            flex-direction: column; /* Располагаем элементы вертикально */
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Увеличиваем тень для большего объема */
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 450px; /* Установите желаемую фиксированную высоту */
            margin: 10px; /* Добавляем отступы между карточками */
        }

        .service-card:hover {
            transform: translateY(-10px); /* Увеличиваем эффект наведения */
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2); /* Увеличиваем тень при наведении */
            border-color: #0056b3; /* Более насыщенный цвет при наведении */
        }

        .service-card img {
            max-width: 100%;
            max-height: 200px;
            width: auto;
            height: auto;
            object-fit: cover;
            border-bottom: 1px solid #ddd;
            display: block;
            margin: 0 auto;
            border-radius: 8px; /* Закругляем углы изображений */
            transition: transform 0.3s ease; /* Добавляем плавную анимацию */
        }
        .service-card img:hover {
            transform: scale(1.05); /* Легкое увеличение изображения при наведении */
        }

        .service-card-content {
            flex-grow: 1; /* Заставляем контент занимать оставшееся пространство */
            padding: 10px;
            display: flex; /* Flexbox для выравнивания содержимого */
            flex-direction: column;
            justify-content: space-between; /* Распределяем пространство внутри контента */
            text-align: center;
        }

        .service-card h3 {
            font-size: 1rem;
            margin-bottom: 10px;
            color: #333;
        }

        .service-card ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            color: #555;
            font-size: 0.9rem;
            flex-grow: 1;
            position: relative; /* Необходимо для правильного позиционирования маркера */
        }

        .service-card ul li {
            margin-bottom: 5px;
            font-size: 0.8rem;
            display: flex;
            align-items: center;
            line-height: 1.3; /* Увеличиваем межстрочный интервал */
            text-align: left; /* Выровнять текст по левому краю */
            padding-left: 1.5em; /* Добавляем отступ, чтобы текст начинался ровно */
        }

        .service-card ul li::before {
            content: "\2022"; /* Используем маркер для списка */
            color: #007bff;
            font-weight: bold;
            position: absolute; /* Абсолютное позиционирование маркера */
            left: 0; /* Сдвигаем маркер к левому краю */
            font-size: 1rem; /* Размер маркера */
        }

        .order-button-container {
            width: 100%;
            display: flex; /* Flexbox для контейнера кнопки */
            align-items: flex-end; /* Выровнять кнопку по нижнему краю */
        }

        .order-button-container .btn {
            background-color: #007bff;
            color: #fff;
            padding: 8px 16px;
            border-radius: 8px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            width: 100%;
            text-align: center;
        }

        .order-button-container .btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px); /* Добавляем эффект при наведении */
        }

        @media (max-width: 767px) {
            .service-card {
                margin-bottom: 15px;
            }

            .service-card h3 {
                font-size: 1rem;
            }

            .service-card ul li {
                font-size: 0.8rem;
            }

            .order-button-container .btn {
                padding: 6px 12px;
                font-size: 0.8rem;
            }
        }
    </style>

    <div class="header-text text-center orange-text">
        <h2>Наш транспорт</h2>
    </div>

    <div class="container my-5">
        <div class="row mt-4">
            <!-- Карточка 1 -->
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="{{ asset('images/merc_new.png') }}" alt="Мікроавтобус Mercedes">
                    <div class="service-card-content">
                        <h3>Мікроавтобус Mercedes</h3>
                        <ul>
                            <li>від 400 до 600 грн/година</li>
                            <li>до 1,5 т.</li>
                            <li>База 3м. (3,0*1,8*1,8)</li>
                            <li>2 години</li>
                            <li>область від 20 грн/км оплата в обидві сторони</li>
                            <li>Україна – від 18 грн/км, Договірна</li>
                        </ul>
                        <div class="order-button-container">
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderModal">Замовити</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Карточка 2 -->
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="{{ asset('images/merc_new.png') }}" alt="Мікроавтобус Mercedes">
                    <div class="service-card-content">
                        <h3>Мікроавтобус Mercedes</h3>
                        <ul>
                            <li>від 400 до 600 грн/година</li>
                            <li>до 1,5 т.</li>
                            <li>База 4м. (4,0*1,8*1,9)</li>
                            <li>2 години</li>
                            <li>область від 20 грн/км оплата в обидві сторони</li>
                            <li>Україна – від 18 грн/км, Договірна</li>
                        </ul>
                        <div class="order-button-container">
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderModal">Замовити</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Карточка 3 -->
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="{{ asset('images/wolc_new.png') }}" alt="Фольксваген ЛТ-55">
                    <div class="service-card-content">
                        <h3>Фольксваген ЛТ-55</h3>
                        <ul>
                            <li>від 600 до 750 грн/година</li>
                            <li>до 3 т.</li>
                            <li>Будка 3,8м. + гідроборт (3,8*2,0*2,0)</li>
                            <li>3 години</li>
                            <li>область від 25 грн/км оплата в обидві сторони</li>
                            <li>Україна – від 23 грн/км, Договірна</li>
                        </ul>
                        <div class="order-button-container">
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderModal">Замовити</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="{{ asset('images/krafter_new.png') }}" alt="Фольксваген Крафтер">
                    <div class="service-card-content">
                        <h3>Фольксваген Крафтер</h3>
                        <ul>
                            <li>от 600 до 750 грн/година</li>
                            <li>до 3 т.</li>
                            <li>Будка 4,2м. + гідроборт (4,2*2,1*2,3)</li>
                            <li>3 години</li>
                            <li>область від 25 грн/км оплата в дві сторони</li>
                            <li>Україна – від 23 грн/км, Договірна</li>
                        </ul>
                        <div class="order-button-container">
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderModal">Замовити</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="{{ asset('images/krafter_new.png') }}" alt="Фольксваген Крафтер">
                    <div class="service-card-content">
                        <h3>Фольксваген Крафтер</h3>
                        <ul>
                            <li>від 600 до 750 грн/година</li>
                            <li>до 2 т.</li>
                            <li>Будка 4,6м. Куб. (4,6*2,3*2,3) верхнє, бокове завантаження</li>
                            <li>2 години</li>
                            <li>область від 25 грн/км оплата в дві сторони</li>
                            <li>Україна – від 23 грн/км, Договірна</li>
                        </ul>
                        <div class="order-button-container">
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderModal">Замовити</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="{{ asset('images/gazel_new.png') }}" alt="Газель Тент">
                    <div class="service-card-content">
                        <h3>Газель Тент</h3>
                        <ul>
                            <li>від 400 до 600 грн/година</li>
                            <li>до 2 т.</li>
                            <li>База 3м. (3,0*2,0*2,0)</li>
                            <li>2 години</li>
                            <li>область від 20 грн/км оплата в дві сторони</li>
                            <li>Україна – від 18 грн/км, Договірна</li>
                        </ul>
                        <div class="order-button-container">
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderModal">Замовити</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="{{ asset('images/gazel_new.png') }}" alt="Газель Тент">
                    <div class="service-card-content">
                        <h3>Газель Тент</h3>
                        <ul>
                            <li>від 400 до 600 грн/година</li>
                            <li>до 1,8 т.</li>
                            <li>База 4м. (4,0*2,0*2,2) верхнє завантаження</li>
                            <li>2 години</li>
                            <li>область від 20 грн/км оплата в дві сторони</li>
                            <li>Україна – від 18 грн/км, Договірна</li>
                        </ul>
                        <div class="order-button-container">
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderModal">Замовити</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="{{ asset('images/merc_new1.png') }}" alt="Mercedes">
                    <div class="service-card-content">
                        <h3>Mercedes</h3>
                        <ul>
                            <li>від 1000 до 1400 грн/година</li>
                            <li>до 10 т.</li>
                            <li>Будка 8,6 м. + гідроборт (8,6,0*2,45*2,7), гідроборт, верхнє, бокове завантаження</li>
                            <li>3 години</li>
                            <li>область від 45 грн/км оплата в дві сторони</li>
                            <li>Україна – від 35 грн/км, Договірна</li>
                        </ul>
                        <div class="order-button-container">
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderModal">Замовити</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="{{ asset('images/merc_new1.png') }}" alt="Mercedes">
                    <div class="service-card-content">
                        <h3>Mercedes</h3>
                        <ul>
                            <li>від 800 до 1000 грн/година</li>
                            <li>до 7,5 т.</li>
                            <li>Будка 7,6 м. гідроборт (7,6,0*2,45*2,7), гідроборт, верхнє, бокове завантаження</li>
                            <li>3 години</li>
                            <li>область від 35 грн/км оплата в дві сторони</li>
                            <li>Україна – від 30 грн/км, Договірна</li>
                        </ul>
                        <div class="order-button-container">
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderModal">Замовити</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="{{ asset('images/man_new.png') }}" alt="Man">
                    <div class="service-card-content">
                        <h3>МАН</h3>
                        <ul>
                            <li>від 750 до 900грн/година</li>
                            <li>до 5,0 т.</li>
                            <li>Будка 6,2 м. + гідроборт (6,2,0*2,5*2,5), гідроборт, верхнє, бокове завантаження</li>
                            <li>3 години</li>
                            <li>область від 30 грн/км оплата в дві сторони</li>
                            <li>Україна – від 25 грн/км, Договірна</li>
                        </ul>
                        <div class="order-button-container">
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderModal">Замовити</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="{{ asset('images/reno.png') }}" alt="Reno">
                    <div class="service-card-content">
                        <h3>Рено Мастер</h3>
                        <ul>
                            <li>від 600 до 800 грн/година</li>
                            <li>до 3,5 т.</li>
                            <li>Будка 4,6м. Куб.. (4,6*2,46*2,4) верхнє, бокове завантаження, 4 пасажирські місця</li>
                            <li>3 години</li>
                            <li>область від 28 грн/км оплата в дві сторони</li>
                            <li>Україна – від 25 грн/км, Договірна</li>
                        </ul>
                        <div class="order-button-container">
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderModal">Замовити</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="{{ asset('images/wolc_new_lt.png') }}" alt="Фольксваген ЛТ-46">
                    <div class="service-card-content">
                        <h3>Фольксваген ЛТ-46</h3>
                        <ul>
                            <li>від 600 до 750 грн/година</li>
                            <li>до 3 т.</li>
                            <li>Будка 4,2м. + гідроборт (4,2*2,2*2,5)</li>
                            <li>3 години</li>
                            <li>область від 25 грн/км оплата в дві сторони</li>
                            <li>Україна – від 23 грн/км, Договірна</li>
                        </ul>
                        <div class="order-button-container">
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderModal">Замовити</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="{{ asset('images/merc_new_tent.png') }}" alt="Mercedes (Тент)">
                    <div class="service-card-content">
                        <h3>Mercedes (Тент)</h3>
                        <ul>
                            <li>від 700 до 900грн/година</li>
                            <li>до 5,0 т.</li>
                            <li>6 м. (6,0*2,4*2,4) гідроборт, верхнє, бокове завантаження</li>
                            <li>3 години</li>
                            <li>область від 30 грн/км оплата в дві сторони</li>
                            <li>Україна – від 25 грн/км, Договірна</li>
                        </ul>
                        <div class="order-button-container">
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderModal">Замовити</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
