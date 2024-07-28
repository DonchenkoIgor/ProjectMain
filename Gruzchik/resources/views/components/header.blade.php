<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .header-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 0;
    }
    .logo img {
        max-height: 80px;
    }
    .contact-info {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        margin-left: 600px; /* Добавлено для смещения вправо */
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
        color: #f3510c; /* Замените на нужный цвет */
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
    }
</style>

<body>
<header>
    <div class="container">
        <div class="header-top">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo1.png') }}" alt="Вантажник" />
                </a>
            </div>
            <div class="contact-info">
                <div class="work-time">
                    <p><i class="fas fa-clock"></i> с 8:00 до 20:00, ежедневно</p>
                </div>
                <div class="contact-details">
                    <p><a href="tel:+380561231234">+380 (56) 123-12-34</a></p>
                    <p><a href="mailto:info@gruzchik.dp.ua">info@gruzchik.dp.ua</a></p>
                </div>
            </div>
            <div>
                <a class="order-button" href="order.html">ЗАКАЗАТЬ УСЛУГУ</a>
            </div>
        </div>
    </div>
</header>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
