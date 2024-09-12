@extends('app')
@section('description', 'Тільки якісне пакування')
@section('title', 'Упаковка')

@section('content')

  <!--  <link rel="stylesheet" href="{{ secure_asset('styles/package.css') }}"> -->

  <style>
      body {
          font-family: Arial, sans-serif; /* Шрифт Arial и запасной шрифт sans-serif для всего текста на странице */
      }

      .product-container {
          text-align: center; /* Выравнивание текста и содержимого по центру внутри контейнера */
          margin: 0 auto; /* Центрирование контейнера по горизонтали */
      }

      .product-title {
          font-size: 24px; /* Размер шрифта заголовка продукта */
          font-weight: bold; /* Жирный шрифт для заголовка */
          margin-bottom: 10px; /* Отступ снизу заголовка */
          text-align: center; /* Выравнивание заголовка по центру */
      }

      .product-subtitle {
          font-size: 18px; /* Размер шрифта подзаголовка продукта */
          color: #888; /* Цвет подзаголовка (серый) */
          margin-bottom: 20px; /* Отступ снизу подзаголовка */
          text-align: center; /* Выравнивание подзаголовка по центру */
      }

      .product-grid {
          display: flex; /* Использование Flexbox для сетки продуктов */
          flex-wrap: wrap; /* Позволяет элементам переходить на следующую строку при необходимости */
          justify-content: center; /* Выравнивание элементов по центру по горизонтали */
          gap: 20px; /* Отступ между элементами сетки */
      }

      .product-grid-item {
          border: 1px solid #ddd; /* Светло-серая граница элемента сетки */
          border-radius: 5px; /* Закругленные углы элемента */
          padding: 15px; /* Внутренние отступы вокруг содержимого */
          text-align: center; /* Выравнивание текста и содержимого по центру */
          width: 200px; /* Ширина элемента сетки */
          transition: background-color 0.3s, transform 0.3s; /* Плавный переход для фона и трансформации при наведении */
      }
      .product-grid-item:hover {
          background-color: rgba(0, 0, 0, 0.1); /* Полупрозрачный черный фон при наведении */
          transform: translateY(-5px); /* Поднимание элемента вверх на 5px при наведении */
      }

      .product-grid-item img {
          max-width: 100%; /* Изображение не выходит за пределы контейнера */
          height: auto; /* Автоматическая высота для сохранения пропорций изображения */
          margin-bottom: 10px; /* Отступ снизу изображения */
      }
      .product-grid-item .price {
          color: #f00; /* Цвет цены (красный) */
          font-weight: bold; /* Жирный шрифт для цены */
      }
      .product-page-header {
          margin-top: 60px; /* Отступ сверху для заголовка страницы продукта */
      }

      .text-block-container {
          display: flex; /* Использование Flexbox для выравнивания содержимого */
          justify-content: center; /* Выравнивание содержимого по центру по горизонтали */
          align-items: center; /* Выравнивание содержимого по центру по вертикали */
          padding: 20px; /* Внутренние отступы вокруг содержимого */
      }

      .text-block {
          max-width: 800px; /* Максимальная ширина текстового блока */
          padding: 20px; /* Внутренние отступы вокруг содержимого */
          background-color: #f8f9fa; /* Светло-серый фон текстового блока */
          border-radius: 10px; /* Закругленные углы текстового блока */
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Тень под текстовым блоком */
          text-align: center; /* Выравнивание текста внутри блока по центру */
      }

      .text-block h2 {
          color: #f3510c; /* Цвет заголовка текстового блока (оранжевый) */
          font-size: 2rem; /* Размер шрифта заголовка текстового блока */
          margin-bottom: 1rem; /* Отступ снизу заголовка */
      }

      .text-block p {
          font-size: 1rem; /* Размер шрифта абзаца */
          line-height: 1.6; /* Межстрочный интервал для лучшего восприятия текста */
          margin-bottom: 1rem; /* Отступ снизу абзаца */
          color: #333; /* Цвет текста абзаца (темно-серый) */
      }

      @media (min-width: 768px) {
          /* Стили для экранов шириной 768px и более (обычно для планшетов и ПК) */
          .text-block h2 {
              font-size: 2.5rem; /* Увеличение размера шрифта заголовка на больших экранах */
          }

          .text-block p {
              font-size: 1.125rem; /* Увеличение размера шрифта абзаца на больших экранах */
          }
      }
      .additional-spacing {
          height: 20px; /* Высота отступа */
      }

  </style>

<div class="container product-page-header">
    <div class="product-title">Пакувальний матеріал</div>
    <div class="product-subtitle"></div>
    <div class="product-grid">
        <div class="product-grid-item">
            <img src="images/korobki.jpg" alt="Картонный короб">
            <div>Картонний короб<br>400x400x300</div>
            <div class="price">від 65 грн</div>
        </div>
        <div class="product-grid-item">
            <img src="images/Karton1.jpg" alt="Листовий картон">
            <div>Листовий картон<br>розмір 1*2 м.</div>
            <div class="price">від 40 грн/лист</div>
        </div>
        <div class="product-grid-item">
            <img src="images/gofrokarton.jpg" alt="Гофрокартон">
            <div>Гофрокартон<br>50 метров</div>
            <div class="price">від 600 грн/рулон</div>
        </div>
        <div class="product-grid-item">
            <img src="images/plenka.jpg" alt="Пузырчатая пленка">
            <div>Пузырчатая пленка<br></div>
            <div class="price">від 40 грн/погонний метр</div>
        </div>
        <div class="product-grid-item">
            <img src="images/strch.jpg" alt="Стрейч-плівка">
            <div>Стрейч-плівка<br></div>
            <div class="price">від 300 грн/рулон</div>
            <div>(300 метрів)</div>
        </div>
        <div class="product-grid-item">
            <img src="images/skotch.jpg" alt="Скотч">
            <div>Скотч<br>100 метров</div>
            <div class="price">від 80 грн/шт</div>
        </div>
        <div class="product-grid-item">
            <img src="images/ugolki.jpeg" alt="Захисний картонний куточок">
            <div>Захисні картонні куточки<br></div>
            <div class="price">Ціна договірна</div>
        </div>
    </div>
</div>

<div class="additional-spacing"></div>

<div class="text-block-container">
    <div class="text-block">
        <h2>Упаковка вантажу</h2>
        <p>Упаковка майна перед переїздом – трудомісткий та важливий процес, це одне з найважливіших завдань. Неправильна та неякісна упаковка може спричинити пошкодження меблів, техніки та особистих речей. Упаковка при переїзді має бути акуратною та надійною. Ми гарантуємо вам це, а також забезпечуємо розпакування речей та прибирання пакувальних матеріалів після їх використання. Правильне пакування вантажу – це наше пряме завдання, ми робимо це швидко та професійно. Захист вантажу при переїзді забезпечений.</p>
    </div>
</div>



@endsection

