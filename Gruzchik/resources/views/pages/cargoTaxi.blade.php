@extends('app')
@section('description', 'Швидка та безпечна доставка вашого вантажу')
@section('title', 'Вантажне таксі')

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
            max-height: 600px; /* Максимальная высота изображения */
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
            background-color: #fff8f0; /* Светло-оранжевый фон */
            border-left: 3px solid #f3510c; /* Тонкая левая граница */
            padding: 15px; /* Отступы внутри блока */
            margin-bottom: 20px; /* Отступ снизу */
            font-size: 1rem; /* Размер шрифта */
            color: #333; /* Цвет текста */
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1); /* Упрощенная тень */
            border-radius: 5px; /* Немного скругленные углы */
            font-weight: normal; /* Обычный вес шрифта */
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
        @media (max-width: 1200px) {
            .transportation-move {
                max-width: 800px;
                padding: 15px;
            }
            .header-text {
                max-width: 800px;
            }
        }

        @media (max-width: 992px) {
            .transportation-move {
                max-width: 700px;
                padding: 15px;
            }
            .header-text h2 {
                font-size: 1.3rem;
            }
            .header-text {
                max-width: 700px;
            }
        }

        @media (max-width: 768px) {
            .transportation-move {
                max-width: 600px;
                padding: 10px;
            }
            .header-text h2 {
                font-size: 1.2rem;
            }
            .header-text {
                max-width: 600px;
            }
        }

        @media (max-width: 576px) {
            .transportation-move {
                max-width: 100%;
                padding: 10px;
                border-radius: 0;
                box-shadow: none;
            }
            .transportation-move h2 {
                font-size: 1.1rem;
                margin-bottom: 0.5rem;
            }
            .transportation-move p {
                font-size: 0.9rem;
                margin-bottom: 1rem;
            }
            .highlighted-text {
                padding: 10px;
                margin-bottom: 10px;
            }
            .header-text h2 {
                font-size: 1rem;
                margin-bottom: 10px;
            }
            .note-box {
                padding: 10px;
                font-size: 0.9rem;
                margin: 10px 0;
            }
            .additional-spacing {
                height: 20px;
            }
        }
    </style>

    <div class="additional-spacing"></div>

    <div class="transportation-move">
        <h2>Необхідна доставка вантажу в режимі таксі ?</h2>
        <p>Служби таксі бувають не тільки пасажирськими, а й вантажними, як наша спеціалізована компанія Gruzchik. Ми завжди готові допомогти, якщо вам потрібно замовити вантажоперевезення та доставку габаритних вантажів (меблів, техніки, будматеріалів та ін.), які не вміщуються у легкові автомобілі.</p>
        <div class="additional-spacing"></div>
        <h2>Вантажне таксі</h2>
        <p>Замовити у нас вантажне таксі Дніпро з вантажниками дешево онлайн або за вказаними телефонами дуже просто.</p>
        <p class="highlighted-text">Зателефонуйте нашим диспетчерам на номер малогабаритного вантажного таксі або заповніть форму заявки, де обов'язково надайте такі відомості:</p>
        <ul>
            <li>Адреса відправлення;</li>
            <li>Пункт призначення;</li>
            <li>Габарити, вага (хоча б приблизна) та вид вантажу;</li>
            <li>Дата та час;</li>
            <li>Ваші ім'я та прізвище;</li>
            <li>Контактні дані;</li>
        </ul>
    </div>
    <div class="image-container">
        <img src="{{ asset('images/cargo.jpg') }}" alt="Вантажне таксі">
    </div>

    <div class="additional-spacing"></div>

    <div class="header-text text-center">
        <div class="note-box">
            <strong>Побажання щодо підбору транспортного засобу для офісного переїзду. У таблиці на нашому сайті вказані ціни на вантажне таксі на погодинну оплату по місту, ціна за кілометр.</strong>
        </div>
    </div>

    <div class="additional-spacing"></div>

    <div class="transportation-move">
        <p>Наші фахівці не тільки дуже швидко опрацюють вашу заявку, зможуть знайти (як на один, так і на кілька автомобілів), але й максимально оперативно зв'яжуться з вами, розрахують скільки коштує виклик, оренда вантажного таксі газель для перевезення та забезпечать швидку подачу вантажного таксі з вантажниками так і без у вказане місце та час.</p>
        <p>Для того, щоб найняти вантажне таксі, не потрібно укладати юридичний договір, хіба що на тривалу співпрацю або замовлення на регулярну подачу великої кількості вантажних машин для перевезення, доставки на постійній основі. Тому ви можете не сумніватися у 100% безпеці та оперативності доставки вашого майна до бажаного пункту призначення, незалежно від дальності відстані та місця розташування районів Києва, з урахуванням усіх ваших побажань.</p>
        <p>Якість та високий рівень сервісу, що надається всіма співробітниками нашої компанії, підтверджені численними відгуками наших клієнтів, які порекомендували нас своїм родичам та знайомим. Переконайтеся в цьому і ви, скориставшись послугами.</p>
    </div>

    <div class="additional-spacing"></div>
@endsection
