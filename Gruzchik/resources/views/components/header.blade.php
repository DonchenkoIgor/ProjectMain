<meta name="csrf-token" content="{{ csrf_token() }}">

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
        background-color: #ffffff; /* Белый фон для полей ввода */
        color: #000000; /* Черный текст в полях ввода */
        border: 1px solid #ffffff; /* Белая рамка */
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1), 0 1px 2px rgba(0, 0, 0, 0.1);
    }

    #orderModal .form-control:focus {
        background-color: #ffffff; /* Белый фон при фокусе */
        color: #000000; /* Черный текст при фокусе */
        border-color: #ffffff; /* Белая рамка при фокусе */
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1), 0 1px 2px rgba(0, 0, 0, 0.1);
    }
    #orderModal .form-control:hover {
        background-color: #ffffff; /* Белый фон при наведении */
        color: #000000; /* Черный текст при наведении */
        border-color: #ffffff; /* Белая рамка при наведении */
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1), 0 1px 2px rgba(0, 0, 0, 0.1);
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
                <form id="orderForm" method="POST">
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
                    <button type="button" class="btn btn-primary" id="submitOrder">Відправити</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('submitOrder').addEventListener('click', function () {
        var form = document.getElementById('orderForm');
        var formData = new FormData(form);

        fetch("/form-submit", {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    var modal = bootstrap.Modal.getInstance(document.getElementById('orderModal'));
                    modal.hide();

                    form.reset();  // Очищаем форму после успешной отправки

                    // Удаляем все элементы и классы, которые могут блокировать сайт
                    setTimeout(function () {
                        document.querySelectorAll('.modal-backdrop').forEach(function (backdrop) {
                            backdrop.remove();
                        });
                        document.body.classList.remove('modal-open');
                        document.body.style = ''; // Очищаем все inline-стили на body

                        // Если модальное окно не закрыто, закрываем его
                        if (modal._isShown) {
                            modal.hide();
                        }

                        // Убеждаемся, что фокус возвращен на body
                        document.activeElement.blur();
                    }, 500);

                    alert('Форма успішно заповнена');
                } else {
                    alert('Помилка: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Помилка:', error);
                alert('Виникла помилка.');
            });
    });
</script>
</body>
