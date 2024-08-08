<style>
    body {
        font-family: Arial, sans-serif;
    }
    .header-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 0;
        flex-wrap: wrap;
    }
    .logo img {
        max-height: 80px;
    }
    .contact-info {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        margin-left: auto;
    }
    .contact-info p {
        margin: 0;
        line-height: 1.5;
    }
    .contact-info a {
        text-decoration: none;
        color: #333;
    }
    .fa-clock {
        color: #0059ff;
    }
    .work-time {
        align-self: flex-start;
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
        .header-top {
            flex-direction: column;
            align-items: center;
        }
        .contact-info {
            align-items: center;
            text-align: center;
            margin-left: 0;
        }
        .order-button {
            font-size: 14px; /* Уменьшите размер шрифта */
            padding: 8px 16px; /* Уменьшите внутренние отступы */
            margin-top: 20px; /* Увеличьте отступ сверху для мобильных устройств */
        }
    }
    @media (min-width: 769px) {
        .contact-info {
            margin-right: 20px;
        }
    }
    #orderModal .modal-content {
        border-radius: 10px;
        color: white;
        padding: 20px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        background: linear-gradient(135deg, rgba(243, 128, 12, 0.8), rgba(255, 165, 0, 0.8));
        animation: slideIn 0.5s ease-out;
    }

    @keyframes slideIn {
        from {
            transform: translateY(-50px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    #orderModal .modal-header {
        border-bottom: none; /* Убрать нижнюю границу */
    }

    #orderModal .modal-title {
        font-size: 24px; /* Увеличить размер заголовка */
        color: white; /* Белый заголовок */
    }

    #orderModal .btn-close {
        filter: invert(100%); /* Сделать кнопку закрытия белой */
        transition: transform 0.3s;
    }

    #orderModal .btn-close:hover {
        transform: rotate(90deg);
    }

    #orderModal .form-label {
        color: white; /* Белый текст для меток */
    }

    #orderModal .form-control {
        background-color: #ffab40; /* Светло-оранжевый фон для полей ввода */
        color: white; /* Белый текст в полях ввода */
        border: 1px solid white; /* Белая рамка */
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1), 0 1px 2px rgba(0, 0, 0, 0.1);
    }

    #orderModal .form-control:focus {
        background-color: #ffab40; /* Сохранение цвета при фокусе */
        color: white;
        border-color: #ffe0b2; /* Светло-оранжевая рамка при фокусе */
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.15);
    }

    #orderModal .btn-primary {
        background-color: white; /* Белая кнопка */
        color: #f57c00; /* Оранжевый текст */
        border: none;
        font-weight: bold;
        padding: 10px 20px;
        transition: background-color 0.3s, transform 0.2s;
    }

    #orderModal .btn-primary:hover {
        background-color: #ffe0b2; /* Светло-оранжевая кнопка при наведении */
        color: #f57c00;
        transform: translateY(-2px);
    }

    #orderModal .btn-primary:active {
        transform: translateY(1px);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.2);
    }
</style>

<body>
<header>
    <div class="container">
        <div class="header-top">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo1.png') }}" alt="Вантажник">
                </a>
            </div>
            <div class="contact-info">
                <div class="work-time">
                    <p><i class="fas fa-clock"></i> с 8:00 до 20:00, без вихідних</p>
                </div>
                <div class="contact-details">
                    <p><a href="tel:+380561231234">+380 (56) 123-12-34</a></p>
                    <p><a href="mailto:info@gruzchik.dp.ua">info@gruzchik.dp.ua</a></p>
                </div>
            </div>
            <div>
                <a class="order-button" data-bs-toggle="modal" data-bs-target="#orderModal">ЗАМОВИТИ ПЕРЕЇЗД</a>
            </div>
        </div>
    </div>
</header>

<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orderModalLabel">Залишити заявку</h5>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
