<!--  <link rel="stylesheet" href="{{ secure_asset('/styles/reviewPanel.css') }}"> -->

<style>
    #reviewForm {
        background-color: #ffffff; /* Белый фон для формы */
        border-radius: 12px; /* Закругленные углы */
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); /* Тень вокруг формы */
        padding: 25px; /* Внутренние отступы формы */
        margin-top: 40px; /* Отступ сверху формы */
    }

    /* Заголовок формы */
    #reviewForm h3 {
        margin-bottom: 25px; /* Отступ снизу заголовка */
        font-weight: 600; /* Полужирное начертание */
        color: #333; /* Темно-серый цвет текста */
        font-size: 24px; /* Размер шрифта заголовка */
    }

    /* Стили для полей ввода и текста */
    #reviewForm .form-control {
        border-radius: 8px; /* Более закругленные углы для полей ввода */
        border: 1px solid #ddd; /* Легкая граница */
        padding: 12px;
        margin-bottom: 20px; /* Увеличение отступа снизу */
        font-size: 16px; /* Увеличение размера шрифта */
    }

    /* Стили для полей ввода при фокусе */
    #reviewForm .form-control:focus {
        border-color: #0056b3; /* Цвет границы при фокусе */
        box-shadow: 0 0 0 0.2rem rgba(0, 86, 179, 0.25); /* Легкая тень при фокусе */
    }

    /* Стили для кнопки отправки */
    #reviewForm .btn-primary {
        background-color: #0056b3; /* Темно-синий цвет кнопки */
        border-color: #0056b3; /* Цвет границы кнопки */
        border-radius: 8px; /* Закругленные углы кнопки */
        padding: 14px; /* Внутренние отступы кнопки */
        font-weight: 600; /* Полужирное начертание текста */
        text-transform: uppercase; /* Преобразование текста в верхний регистр */
        font-size: 16px; /* Размер шрифта кнопки */
    }

    /* Цвет кнопки при наведении */
    #reviewForm .btn-primary:hover {
        background-color: #004494; /* Более темный синий цвет при наведении */
        border-color: #003580; /* Более темная граница при наведении */
    }

    /* Стили для карточек отзывов */
    .review-item .card {
        border-radius: 12px; /* Более закругленные углы карточек */
        overflow: hidden; /* Обрезать содержимое карточек */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Более выраженная тень */
        margin-bottom: 25px; /* Увеличение отступа снизу */
        transition: transform 0.3s, box-shadow 0.3s; /* Плавный эффект при наведении */
    }

    /* Эффект при наведении на карточки */
    .review-item .card:hover {
        transform: translateY(-5px); /* Поднимает карточку при наведении */
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Более выраженная тень при наведении */
    }

    /* Стили для тела карточек */
    .review-item .card-body {
        padding: 25px; /* Внутренние отступы для тела карточек */
    }

    /* Стили для даты отзыва */
    .review-item .card-text small {
        display: block; /* Показать дату в отдельной строке */
        color: #6c757d; /* Цвет текста */
        font-size: 14px; /* Размер шрифта для даты */
    }
    .review-item .card-title {
        font-weight: bold; /* Сделать текст жирным */
    }

</style>

<div class="container mt-5">
    <h4 class="text-center">Залишити відгук</h4>
    <form id="reviewForm" action="{{ route('reviews') }}" method="POST" class="p-4 rounded shadow-sm bg-light">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Ваше ім'я</label>
            <input type="text" class="form-control" id="name" name="clientName" placeholder="Введіть ваше ім'я" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Ваше повідомлення</label>
            <textarea class="form-control" id="message" name="clientMessage" rows="3" placeholder="Введіть ваше повідомлення" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Відправити</button>
    </form>
</div>


<div class="container mt-5" id="reviews">
    <h4 class="text-center">Відгуки</h4>
    <div class="row" id="reviewsContainer">
        @php
            $reviews = \App\Models\Review::all();
            $totalReviews = $reviews->count();
        @endphp

        @foreach($reviews as $index => $review)
            <div class="col-md-4 review-item" style="display: {{ $index < 3 ? 'block' : 'none' }};">
                <div class="card mb-3 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $review->clientName }}</h5>
                        <p class="card-text">{{ $review->clientMessage }}</p>
                        <p class="card-text text-muted">
                            <small>Дата відгука: {{ $review->created_at->format('d.m.Y H:i') }}</small>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @if($totalReviews > 3)
        <div class="text-center mt-3">
            <button id="showMore" class="btn btn-primary">Показати всі відгуки</button>
        </div>
    @endif
</div>

<script>
    $(document).ready(function() {
        $('#reviewForm').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: "/reviews",
                method: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    // Очистка формы
                    $('#reviewForm')[0].reset();

                    // Добавляем новый отзыв в начало списка
                    $('#reviewsContainer').prepend(`
                    <div class="col-md-4 review-item" style="display: none;">
                        <div class="card mb-3 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">${response.clientName}</h5>
                                <p class="card-text">${response.clientMessage}</p>
                                <p class="card-text text-muted">
                                    <small>Дата відгука: ${response.created_at}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                `);


                    var totalReviews = $('#reviewsContainer .review-item').length;


                    $('.review-item').hide().slice(0, 3).show();


                    if ($('#showMore').length === 0 && totalReviews > 3) {
                        $('#reviews').append(`
                        <div class="text-center mt-3">
                            <button id="showMore" class="btn btn-primary">Показати всі відгуки</button>
                        </div>
                    `);
                    }
                },
                error: function(xhr, status, error) {

                    console.log('Ошибка при отправке отзыва: ' + error);
                }
            });
        });

        $(document).on('click', '#showMore', function() {
            var button = $(this);
            var isShowingAll = button.text().trim() === 'Сховати відгуки';

            if (isShowingAll) {

                $('.review-item').hide().slice(0, 3).show();
                button.text('Показати всі відгуки');
            } else {

                $('.review-item').show();
                button.text('Сховати відгуки');
            }
        });
    });
</script>
