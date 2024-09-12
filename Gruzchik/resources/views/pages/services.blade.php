@extends('app')
@section('description', 'Якісні послуги за доступними цінами')
@section('title', 'Послуги')

@section('content')

  <!--  <link rel="stylesheet" href="{{ secure_asset('styles/services.css') }}"> -->

  <style>
      .service-card {
          background-color: #ffffff; /* Белый фон карточки */
          border-radius: 8px; /* Закругленные углы */
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Тень вокруг карточки */
          overflow: hidden; /* Скрываем содержимое, выходящее за границы */
          transition: transform 0.3s ease, box-shadow 0.3s ease; /* Плавный переход для трансформации и тени */
      }

      .service-card img {
          width: 100%; /* Ширина изображения равна ширине карточки */
          height: auto; /* Автоматическая высота для сохранения пропорций */
      }

      .service-card-content {
          padding: 15px; /* Внутренние отступы контента */
          text-align: center; /* Центрирование текста */
          display: flex; /* Используем Flexbox для размещения содержимого */
          flex-direction: column; /* Выравниваем элементы по вертикали */
          height: 100%; /* Высота flex-контейнера, равная 100% */
      }

      .service-card h5 {
          font-size: 1.25rem; /* Размер шрифта заголовка */
          margin-bottom: 0.75rem; /* Отступ снизу заголовка */
      }

      .service-card p {
          font-size: 0.875rem; /* Размер шрифта абзаца */
          color: #6c757d; /* Серая палитра текста */
      }

      .order-button {
          background-color: #f3510c; /* Оранжевый фон кнопки */
          color: #fff; /* Белый цвет текста кнопки */
          border: none; /* Убираем границу кнопки */
          padding: 10px 20px; /* Внутренние отступы кнопки */
          border-radius: 20px; /* Закругленные углы кнопки */
          transition: background-color 0.3s ease; /* Плавный переход для изменения фона кнопки */
          text-decoration: none; /* Убираем подчеркивание у ссылки */
      }

      .order-button:hover {
          background-color: #e0480b;  /* Темно-оранжевый цвет при наведении */
      }

      .service-card:hover {
          transform: translateY(-10px); /* Поднимаем карточку при наведении */
          box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); /* Более выраженная тень при наведении */
      }

      .order-button-container {
          margin-top: auto; /* Отталкиваем кнопку вниз */
          padding-top: 20px; /* Отступ сверху внутри контейнера кнопки */
      }

      @media (max-width: 768px) {
          .service-card {
              margin-bottom: 20px; /* Отступ снизу для карточек на мобильных устройствах */
          }
      }

      .additional-spacing {
          height: 40px; /* Высота отступа */
      }

      .orange-text {
          font-family: 'Poppins', sans-serif; /* Шрифт Poppins */
          color: #f3510c; /* Оранжевый цвет текста */
          text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1); /* Тень текста */
          font-weight: 700; /* Жирное начертание текста */
      }
      .custom-link {
          color: inherit; /* Устанавливаем цвет текста таким же, как у родительского элемента */
          text-decoration: none; /* Убираем подчеркивание */
          font-size: 1.25rem; /* Увеличиваем размер шрифта */
          font-weight: bold; /* Делаем шрифт жирным */
      }

  </style>

    <div class="container my-5">
        <h2 class="text-center orange-text">Якісні послуги за доступними цінами. Працюємо по всій Україні</h2>
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="{{ asset('images/pereizd.png') }}" alt="Переїзд">
                    <div class="service-card-content">
                        <a class="custom-link" href="{{route('moving')}}">Переїзд</a>
                        <p>Ми допоможемо Вам легко впоратися з мувінгом будь-якої складності і різних масштабів. Офісний/квартирний та дачний переїзд.</p>
                        <div class="order-button-container">
                            <a class="order-button" data-bs-toggle="modal" data-bs-target="#orderModal">ЗАМОВИТИ</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="{{ asset('images/perevezennya.png') }}" alt="Перевезення майна">
                    <div class="service-card-content">
                        <a class="custom-link" href="{{route('transportation')}}">Перевезення майна</a>
                        <p>У нас оперативно та професійно здійснюється перевезення холодильника, піаніно, меблів, сейфів та банкоматів.</p>
                        <div class="order-button-container">
                            <a class="order-button" data-bs-toggle="modal" data-bs-target="#orderModal">ЗАМОВИТИ</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="{{ asset('images/ne-potribni-rechi.png') }}" alt="Вивіз не потрібних речей">
                    <div class="service-card-content">
                        <a class="custom-link" href="{{route('removal')}}">Вивіз не потрібних речей</a>
                        <p>Замовити послуги вивезення та навантаження будівельного сміття дешево та вигідно в нашій компанії. Вивіз старих меблів на утилізацію.</p>
                        <div class="order-button-container">
                            <a class="order-button" data-bs-toggle="modal" data-bs-target="#orderModal">ЗАМОВИТИ</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="additional-spacing"></div>

            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="{{ asset('images/zavantazhennya.png') }}" alt="Завантаження та вивантаження">
                    <div class="service-card-content">
                        <a class="custom-link" href="{{route('loadingUnloading')}}">Завантаження та вивантаження</a>
                        <p>Навантаження, розвантаження фур – одна з послуг, які пропонує команда фірми «Perevozchik». Ми проводимо всі види вантажних робіт незалежно від типу продукції.</p>
                        <div class="order-button-container">
                            <a class="order-button" data-bs-toggle="modal" data-bs-target="#orderModal">ЗАМОВИТИ</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="{{ asset('images/cargoTaxi.png') }}" alt="Вантажне таксі">
                    <div class="service-card-content">
                        <a class="custom-link" href="{{route('cargoTaxi')}}">Вантажне таксі</a>
                        <p>Наші фахівці не тільки дуже швидко опрацюють вашу заявку, зможуть знайти (як на один, так і на кілька автомобілів), але й оперативно зв'яжуться з вами.</p>
                        <div class="order-button-container">
                            <a class="order-button" data-bs-toggle="modal" data-bs-target="#orderModal">ЗАМОВИТИ</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="{{ asset('images/sklad2.png') }}" alt="Складські роботи">
                    <div class="service-card-content">
                        <a class="custom-link" href="{{route('warehouseWork')}}">Вантажники</a>
                        <p>Наша компанія пропонує послуги вантажників, організована мобільна бригада професійних працівників. Виконаємо навіть найскладнішу операцію.</p>
                        <div class="order-button-container">
                            <a class="order-button" data-bs-toggle="modal" data-bs-target="#orderModal">ЗАМОВИТИ</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="{{ asset('images/international_small.png') }}" alt="Міжміські перевезення">
                    <div class="service-card-content">
                        <a class="custom-link" href="{{route('international')}}">Міжміські перевезення</a>
                        <p>Ми пропонуємо два основні варіанти перевезень: перший - збірна доставка, другий - окремий автомобіль, виділений лише під доставку вантажу.</p>
                        <div class="order-button-container">
                            <a class="order-button" data-bs-toggle="modal" data-bs-target="#orderModal">ЗАМОВИТИ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
