<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Вантажники у Дніпрі, Києві та по всій Україні. Надійні вантажоперевезення та послуги вантажників.">
    <meta name="keywords" content="вантажники в Дніпрі, вантажники в Києві, вантажоперевезення по Україні, послуги вантажників, вантажоперевезення, перевезення вантажів">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Послуги вантажників')</title>



    <!-- Подключение стилей Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Подключение FontAwesome (если нужен) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Подключение jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Подключение Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="icon" href="{{ asset('images/logo_new.png') }}" type="image/png">




    <style>
        #phoneModal .modal-content {
            background-color: rgba(255, 165, 0, 0.83); /* Полупрозрачный оранжевый фон */
            border-radius: 10px; /* Закругленные углы */
        }

        /* Стили для заголовка модального окна */
        #phoneModal .modal-title {
            color: white; /* Белый цвет текста */
        }

        /* Стили для кнопки закрытия */
        #phoneModal .btn-close {
            background-color: white; /* Белая кнопка закрытия */
        }

        /* Стили для ссылок в модальном окне */
        #phoneModal .modal-body a {
            color: white; /* Белый цвет текста ссылок */
            text-decoration: none; /* Убираем подчеркивание */
        }

        /* Дополнительно: изменение цвета кнопки при наведении (опционально) */
        #phoneModal .modal-body a:hover {
            color: #f0f0f0; /* Цвет текста ссылок при наведении */
            text-decoration: underline; /* Подчеркивание при наведении */
        }

        .feedback-button {
            display: block !important; /* Обеспечиваем видимость кнопки */
            position: fixed;
            z-index: 9999; /* Убедитесь, что кнопка находится выше других элементов */
        }

        @media (max-width: 576px) {
            .feedback-button {
                width: 60px;
                height: 60px;
                bottom: 15px; /* Увеличиваем отступ, если это необходимо для видимости */
                right: 15px;
            }
        }

        .contact-toggle-button {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 50px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .contact-toggle-button:hover {
            background-color: #0056b3;
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }

        .contact-toggle-button:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(38, 143, 255, 0.5);
        }
        #contactToggle {
            opacity: 0.7; /* Делает кнопку полупрозрачной */
            transition: opacity 0.3s ease; /* Добавляет плавный переход для прозрачности */
        }

        #contactToggle:hover {
            opacity: 1; /* При наведении кнопка становится полностью непрозрачной */
        }

        .contact-button {
            position: fixed;
            bottom: 0;
            end: 0;
            margin-bottom: 5rem;
            margin-end: 1rem;
            z-index: 1000;
        }

        .contact-options a {
            display: block;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            padding: 0;
            background-color: transparent;
            border: none;
            transition: background-color 0.3s ease;
        }

        .contact-options a:hover,
        .contact-options a:focus {
            background-color: transparent;
            border: none;
            box-shadow: none;
        }

        .contact-options img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .contact-options a:hover img,
        .contact-options a:focus img {
            transform: scale(1.1);
        }

        #contactToggle {
            display: block;
        }

        #closeContactOptions {
            display: none;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">

</head>
<body>
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
    </symbol>
</svg>



<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
        <circle cx="12" cy="12" r="10"/>
        <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/>
    </symbol>
    <symbol id="cart" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
    <symbol id="chevron-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
    </symbol>
</svg>

    @include('components.header')


<main>
    @include('components.mainLogo')
    @yield('content')
    <div class="feedback-button position-fixed" style="bottom: 20px; right: 16px">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#phoneModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L.708 3.207a1.745 1.745 0 0 0-.36 1.934 17.568 17.568 0 0 0 5.168 6.745 17.568 17.568 0 0 0 6.745 5.168 1.745 1.745 0 0 0 1.934-.36l1.942-1.942a.678.678 0 0 0-.063-1.015l-2.494-1.497a.678.678 0 0 0-.82.062l-2.256 1.812a11.384 11.384 0 0 1-5.468-5.468l1.812-2.256a.678.678 0 0 0 .062-.82L3.654 1.328z"/>
            </svg>
        </button>
    </div>

    <div class="modal fade" id="phoneModal" tabindex="-1" aria-labelledby="phoneModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="phoneModalLabel">Наші контакти</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-unstyled">
                        <p><a href="tel:+380666431636">+380 (66) 643-16-36</a></p>
                        <p><a href="tel:+380986422759">+380 (98) 642-27-59</a></p>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-button position-fixed" style="bottom: 20px; right: 16px">
        <button type="button" class="btn btn-primary contact-toggle-button" id="contactToggle">
            Напишіть нам..
        </button>
        <div class="contact-options mt-2" id="contactOptions" style="display: none;">
            <button type="button" class="btn btn-outline-danger" id="closeContactOptions" style="position: absolute; top: -40px; right: 6px;">
                ✖
            </button>
            <a href="https://t.me/Perevozcikua" target="_blank" class="btn btn-outline-primary mb-2">
                <img src="{{asset('/images/tg_new.png')}}" alt="Telegram" width="24" height="24">
            </a>
            <a href="viber://chat?number=+380666431636" target="_blank" class="btn btn-outline-primary">
                <img src="{{asset('/images/viber.png')}}" alt="Viber" width="24" height="24">
            </a>
        </div>
    </div>
</main>
@include('components.reviewPanel')
@include('components.footer')

<script>
    document.getElementById('contactToggle').addEventListener('click', function() {
        var options = document.getElementById('contactOptions');
        var toggleButton = document.getElementById('contactToggle');
        var closeButton = document.getElementById('closeContactOptions');

        toggleButton.style.display = 'none';
        options.style.display = 'block';
        closeButton.style.display = 'block';
    });

    document.getElementById('closeContactOptions').addEventListener('click', function() {
        var options = document.getElementById('contactOptions');
        var toggleButton = document.getElementById('contactToggle');
        var closeButton = document.getElementById('closeContactOptions');

        toggleButton.style.display = 'block';
        options.style.display = 'none';
        closeButton.style.display = 'none';
    });
</script>

</body>
</html>
