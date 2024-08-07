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
        color: #f3510c;
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
                    <p><i class="fas fa-clock"></i> с 8:00 до 20:00, ежедневно</p>
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
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Имя</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Телефон</label>
                        <input type="tel" class="form-control" id="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Сообщение</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
