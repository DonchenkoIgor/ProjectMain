@extends('app')
@section('description', 'Тільки якісне пакування')
@section('title', 'Упаковка')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .product-container {
            text-align: center;
            margin: 0 auto;
        }
        .product-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
        }
        .product-subtitle {
            font-size: 18px;
            color: #888;
            margin-bottom: 20px;
            text-align: center;
        }
        .product-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .product-grid-item {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            text-align: center;
            width: 200px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .product-grid-item:hover {
            background-color: rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }
        .product-grid-item img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        .product-grid-item .price {
            color: #f00;
            font-weight: bold;
        }
        .product-page-header {
            margin-top: 60px;
        }

        .text-block-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .text-block {
            max-width: 800px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .text-block h2 {
            color: #f3510c;
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .text-block p {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 1rem;
            color: #333;
        }

        @media (min-width: 768px) {
            .text-block h2 {
                font-size: 2.5rem;
            }

            .text-block p {
                font-size: 1.125rem;
            }
        }
        .additional-spacing {
            height: 20px; /* Высота отступа */
        }

    </style>

<div class="container product-page-header">
    <div class="product-title">Пакувальний матеріал</div>
    <div class="product-subtitle">//</div>
    <div class="product-grid">
        <div class="product-grid-item">
            <img src="images/korobki.jpg" alt="Картонный короб">
            <div>Картонний короб<br>400x400x300</div>
            <div class="price">65 грн</div>
        </div>
        <div class="product-grid-item">
            <img src="images/Karton1.jpg" alt="Листовий картон">
            <div>Листовий картон<br>розмір 1*2 м.</div>
            <div class="price">40 грн/лист</div>
        </div>
        <div class="product-grid-item">
            <img src="images/gofrokarton.jpg" alt="Гофрокартон">
            <div>Гофрокартон<br>50 метров</div>
            <div class="price">600 грн/рулон</div>
        </div>
        <div class="product-grid-item">
            <img src="images/plenka.jpg" alt="Пузырчатая пленка">
            <div>Пузырчатая пленка<br></div>
            <div class="price">40 грн/погонний метр</div>
        </div>
        <div class="product-grid-item">
            <img src="images/strch.jpg" alt="Стрейч-плівка">
            <div>Стрейч-плівка<br></div>
            <div class="price">300 грн/рулон</div>
            <div>(300 метрів)</div>
        </div>
        <div class="product-grid-item">
            <img src="images/skotch.jpg" alt="Скотч">
            <div>Скотч<br>100 метров</div>
            <div class="price">80 грн/шт</div>
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

