@extends('app')

@section('title', 'Транспорт')
@section('description', 'Обери свій транспорт')
@section('content')

  <!--  <link rel="stylesheet" href="{{ secure_asset('styles/transport.css') }}"> -->

  <style>
      .header-text {
          margin: 20px auto; /* Центрируем текст и добавляем отступы сверху и снизу */
          max-width: 900px; /* Устанавливаем максимальную ширину текста */
      }

      .orange-text {
          font-family: 'Poppins', sans-serif; /* Шрифт Poppins */
          color: #f3510c; /* Оранжевый цвет текста */
          text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1); /* Легкая тень текста для объема */
          font-weight: 700; /* Жирный шрифт */
      }

      .service-card {
          display: flex; /* Flexbox для управления расположением внутренних элементов */
          flex-direction: column; /* Располагаем элементы вертикально */
          background-color: #ffffff; /* Белый фон карточки */
          border-radius: 8px; /* Закругленные углы карточки */
          box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Увеличенная тень для большего объема */
          overflow: hidden; /* Скрываем элементы, выходящие за пределы карточки */
          transition: transform 0.3s ease, box-shadow 0.3s ease; /* Плавные переходы для трансформации и тени */
          height: 450px; /* Фиксированная высота карточки */
          margin: 10px; /* Отступы между карточками */
      }

      .service-card:hover {
          transform: translateY(-10px); /* Увеличиваем эффект наведения */
          box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2); /* Увеличиваем тень при наведении */
          border-color: #0056b3; /* Более насыщенный цвет при наведении */
      }

      .service-card img {
          max-width: 100%; /* Изображение занимает всю ширину карточки */
          max-height: 200px; /* Максимальная высота изображения */
          width: auto; /* Автоматическая ширина для сохранения пропорций */
          height: auto; /* Автоматическая высота для сохранения пропорций */
          object-fit: cover; /* Изображение сохраняет свои пропорции и заполняет контейнер */
          border-bottom: 1px solid #ddd; /* Нижняя граница изображения */
          display: block; /* Блочный элемент */
          margin: 0 auto; /* Центрируем изображение */
          border-radius: 8px; /* Закругленные углы изображения */
          transition: transform 0.3s ease; /* Плавная анимация при наведении */
      }
      .service-card img:hover {
          transform: scale(1.05); /* Легкое увеличение изображения при наведении */
      }

      .service-card-content {
          flex-grow: 1; /* Контент занимает оставшееся пространство карточки */
          padding: 10px; /* Внутренние отступы */
          display: flex; /* Flexbox для управления содержимым */
          flex-direction: column; /* Вертикальное расположение содержимого */
          justify-content: space-between; /* Равномерное распределение содержимого по вертикали */
          text-align: center; /* Центрирование текста */
      }

      .service-card h3 {
          font-size: 1rem; /* Размер шрифта заголовка */
          margin-bottom: 10px; /* Отступ снизу */
          color: #333; /* Цвет текста заголовка */
      }

      .service-card ul {
          list-style-type: none; /* Убираем стандартные маркеры списка */
          padding: 0; /* Убираем отступы внутри списка */
          margin: 0; /* Убираем внешние отступы списка */
          color: #555; /* Цвет текста списка */
          font-size: 0.9rem; /* Размер шрифта списка */
          flex-grow: 1; /* Список занимает оставшееся пространство */
          position: relative; /* Позиционирование для правильного отображения маркеров */
      }

      .service-card ul li {
          margin-bottom: 5px; /* Отступ снизу для каждого элемента списка */
          font-size: 0.8rem; /* Размер шрифта для элементов списка */
          display: flex; /* Flexbox для выравнивания содержимого */
          align-items: center; /* Вертикальное выравнивание содержимого */
          line-height: 1.3; /* Межстрочный интервал */
          text-align: left; /* Текст выровнен по левому краю */
          padding-left: 1.5em; /* Отступ слева для текста, чтобы выровнять его с маркером */
      }

      .service-card ul li::before {
          content: "\2022"; /* Символ маркера списка */
          color: #007bff; /* Синий цвет маркера */
          font-weight: bold; /* Жирный маркер */
          position: absolute; /* Абсолютное позиционирование маркера */
          left: 0; /* Сдвигаем маркер к левому краю */
          font-size: 1rem; /* Размер маркера */
      }

      .order-button-container {
          width: 100%; /* Ширина контейнера кнопки */
          display: flex; /* Flexbox для контейнера кнопки */
          align-items: flex-end; /* Выровнять кнопку по нижнему краю */
      }

      .order-button-container .btn {
          background-color: #007bff; /* Синий фон кнопки */
          color: #fff; /* Белый цвет текста кнопки */
          padding: 8px 16px; /* Внутренние отступы кнопки */
          border-radius: 8px; /* Закругленные углы кнопки */
          transition: background-color 0.3s ease, transform 0.3s ease; /* Плавные переходы для фона и трансформации */
          width: 100%; /* Кнопка занимает всю ширину контейнера */
          text-align: center; /* Текст в кнопке центрирован */
      }

      .order-button-container .btn:hover {
          background-color: #0056b3; /* Более темный синий при наведении */
          transform: translateY(-3px); /* Легкое поднятие кнопки при наведении */
      }

      @media (max-width: 767px) {
          .service-card {
              margin-bottom: 15px; /* Отступ снизу для карточек на мобильных устройствах */
          }

          .service-card h3 {
              font-size: 1rem;  /* Размер шрифта заголовка на мобильных устройствах */
          }

          .service-card ul li {
              font-size: 0.8rem; /* Размер шрифта элементов списка на мобильных устройствах */
          }

          .order-button-container .btn {
              padding: 6px 12px; /* Уменьшенные отступы для кнопки на мобильных устройствах */
              font-size: 0.8rem; /* Уменьшенный размер шрифта кнопки на мобильных устройствах */
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
