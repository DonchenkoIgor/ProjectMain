@extends('app')
@section('description', 'Швидке завантаження та вивантаження')
@section('title', 'Завантаження та вивантаження')

@section('content')
    <style>
        .image-container {
            text-align: center; /* Центрирование содержимого по горизонтали */
            width: 100%; /* Ширина контейнера на всю ширину блока */
            padding: 0; /* Убираем внутренние отступы */
            background: transparent; /* Прозрачный фон */
            border: none; /* Убираем границу */
            max-width: 900px; /* Максимальная ширина */
            margin: 0 auto; /* Центрирование */
        }

        .image-container img {
            width: 100%; /* Растягивание изображения на всю ширину контейнера */
            height: auto; /* Автоматическая высота для сохранения пропорций */
            border-radius: 0; /* Убираем скругление углов */
            box-shadow: none; /* Убираем тень */
        }

        .additional-spacing {
            height: 40px; /* Высота отступа */
        }

        .transportation-move {
            padding: 20px;
            background-color: #fff; /* Белый фон */
            border-radius: 10px; /* Сглаженные углы */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Тень */
            border: 1px solid #ddd; /* Граница */
            max-width: 900px; /* Максимальная ширина */
            margin: 0 auto; /* Центрирование */
            color: #333; /* Цвет текста */
        }

        .transportation-move h2 {
            font-size: 1.8rem; /* Размер шрифта заголовка */
            color: #f3510c; /* Цвет заголовка */
            font-weight: bold; /* Жирный шрифт */
            margin-bottom: 1rem; /* Отступ снизу */
        }

        .transportation-move p {
            font-size: 1rem; /* Размер шрифта абзаца */
            margin-bottom: 1.5rem; /* Отступ снизу */
        }

        .transportation-move ul {
            list-style-type: none; /* Убираем маркеры списка */
            padding: 0; /* Убираем отступы */
        }

        .transportation-move ul li {
            margin-bottom: 1rem; /* Отступ снизу */
            position: relative; /* Для позиционирования маркера */
            padding-left: 25px; /* Отступ слева для маркера */
        }

        .transportation-move ul li::before {
            content: "";
            display: inline-block;
            width: 10px;
            height: 10px;
            background-color: #f3510c;
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        .transportation-move a {
            color: #1e90ff; /* Цвет ссылок */
            text-decoration: none; /* Убираем подчеркивание */
        }

        .transportation-move a:hover {
            text-decoration: underline; /* Подчеркивание при наведении */
        }
        .highlighted-text {
            background-color: #f0f8ff; /* Светло-синий фон */
            border-left: 5px solid #f3510c; /* Синяя левая граница */
            padding: 15px; /* Отступы внутри блока */
            margin-bottom: 20px; /* Отступ снизу */
            font-style: italic; /* Курсивный шрифт */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Тень */
            border-radius: 8px; /* Скругление углов */
        }
        .header-text {
            margin: 20px auto; /* Центрируем заголовок с отступом */
            max-width: 900px; /* Максимальная ширина для центрирования */
        }

        .header-text h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #f3510c;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px; /* Отступ снизу */
            line-height: 1.2; /* Плотность строк для лучшего восприятия */
        }
        .note-box {
            padding: 15px;
            background-color: #ffffff;
            border: 1px dashed #1e90ff; /* Синяя пунктирная граница */
            border-radius: 5px; /* Закругленные углы */
            font-size: 1rem; /* Размер шрифта */
            margin: 20px 0; /* Отступы сверху и снизу */
            color: #000000; /* Цвет текста */
            line-height: 1.5; /* Межстрочный интервал */
        }

        .note-box strong {
            font-weight: bold; /* Полужирный текст */
        }
    </style>

    <div class="additional-spacing"></div>

    <div class="image-container">
        <img src="{{ asset('images/fura1.png') }}" alt="Завантаження фури">
    </div>

    <div class="transportation-move">
        <h2>Навантаження фур</h2>
        <p>Найчастіше в Україні для вантажоперевезення використовують саме важкий автотранспорт, такий як фури. Це оперативний та практичний тип доставки, який дозволяє максимально раціонально продумати маршрут та доставити вантаж від складу до складу, фірми, магазину. Навантаження, розвантаження фур – одна з послуг, які пропонує команда фірми «Gruzchik». Ми проводимо всі види вантажних робіт незалежно від типу продукції:</p>
        <ul>
            <li>Продукти харчування;</li>
            <li>Хімікати;</li>
            <li>Побутова хімія;</li>
            <li>Фармацевтика;</li>
            <li>Будівельні матеріали;</li>
            <li>Побутова техніка;</li>
            <li>Тара та інше.</li>
        </ul>
        <div class="additional-spacing"></div>
        <p class="highlighted-text">Найняти бригаду вантажників у нас просто та дешево. Наш сайт пропонує кожному клієнту викликати різну кількість вантажників залежно від цілей та обсягу робіт. Завантаження або розвантаження бригада може як в денну, так і в нічну зміну. Ми гарантуємо, що всі роботи будуть проведені оперативно, акуратно, дбайливо та надійно.</p>

        <div class="my-5 tariffs-container text-center">
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-dark">
                    <tr>
                        <th>Завантаження вивантаження</th>
                        <th>Відстань</th>
                        <th>Тарифи</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Вантаж від 20 т</td>
                        <td>до 5 метрів</td>
                        <td>від 200 грн/т</td>
                    </tr>
                    <tr>
                        <td>Вантаж від 20 т</td>
                        <td>5-15 метрів</td>
                        <td>від 220 грн/т</td>
                    </tr>
                    <tr>
                        <td>Вантаж від 20 т</td>
                        <td>15-25 метрів</td>
                        <td>від 250 грн/т</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="header-text text-center">
        <div class="note-box">
            <strong>Примітка:</strong> Розвантаження-навантаження вантажу загальною вагою менше 5 тонн оплачуватиметься погодинно з розрахунком 1 вантажник від 200грн/година, мінімум на 2 години.
        </div>
    </div>

    <div class="additional-spacing"></div>

    <div class="transportation-move">
        <h2>Розвантаження вагонів</h2>
        <p>Розгалужена мережа залізничних з'єднань – один із найбільш доступних способів транспортування габаритних та важких вантажів. Найчастіше по складу перевозять продукцію металургії, будівельні матеріали, корисні копалини, а також інші товари різного призначення. Головний недолік такого роду транспорту – обмежені можливості маршрутів, тобто перевезти той чи інший товар можна лише від станції до станції. Так, до кінцевого пункту призначення, товари потрібно доставляти автотранспортом.</p>
        <p>Фірма «Gruzchik» пропонує кожному клієнту скористатися послугами дослідної команди вантажників, які в короткі терміни виконуватимуть розвантаження вагоном. Розвантаження вагонів, фур, ціна якої найбільш доступна для регіонального ринку, може проходити як у першу, так і другу зміну незалежно від типу продукції, яку необхідно вивантажити. Тарифікація вказана у прайс-листі на нашому сайті.</p>
    </div>

    <div class="additional-spacing"></div>

@endsection
