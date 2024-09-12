@extends('app')

@section('description', 'Переїзд за вигідною ціною')
@section('title', 'Ціни')

@section('content')

  <!--  <link rel="stylesheet" href="{{ secure_asset('styles/price.css') }}"> -->

  <style>
      .tariffs-container {
          padding: 0; /* Удаляет внутренние отступы для контейнера, если они не нужны */
          background-color: transparent; /* Устанавливает прозрачный фон для контейнера */
          border: none; /* Убирает границу контейнера */
          box-shadow: none; /* Удаляет тень вокруг контейнера, если она есть */
          max-width: 900px; /* Ограничивает максимальную ширину контейнера до 900 пикселей */
          margin: 0 auto; /* Центрирует контейнер на странице */
      }

      /* Заголовок внутри контейнера */
      .tariffs-container h2 {
          font-size: 2rem; /* Размер шрифта заголовка 2 рем */
          margin-bottom: 1rem; /* Отступ снизу заголовка 1 рем */
      }

      /* Параграфы внутри контейнера */
      .tariffs-container p {
          font-size: 1.125rem; /* Размер шрифта параграфов 1.125 рем */
          margin-bottom: 1.5rem; /* Отступ снизу параграфов 1.5 рем */
          color: #f3510c; /* Устанавливает оранжевый цвет текста параграфов */
      }

      /* Стили для таблицы */
      .table-responsive {
          overflow-x: auto; /* Добавляет горизонтальную прокрутку для таблицы на маленьких экранах */
      }

      .table {
          border-collapse: collapse; /* Убирает промежутки между ячейками таблицы */
      }

      .table th, .table td {
          border: 1px solid #ddd; /* Устанавливает границу для ячеек таблицы */
          padding: 12px; /* Внутренние отступы внутри ячеек таблицы */
          vertical-align: middle; /* Выравнивает содержимое ячеек по вертикали по центру */
      }

      /* Мобильные стили */
      @media (min-width: 768px) {
          .tariffs-container h2 {
              font-size: 2.5rem; /* Увеличивает размер шрифта заголовка на больших экранах */
          }

          .tariffs-container p {
              font-size: 1.25rem; /* Увеличивает размер шрифта параграфов на больших экранах */
          }
      }

      /* Дополнительный отступ */
      .additional-spacing {
          height: 30px; /* Высота отступа */
      }

      /* Заголовок вне блока */
      .header-text {
          margin: 20px auto; /* Добавляет отступ сверху и снизу, центрируя заголовок */
          max-width: 900px; /* Устанавливает максимальную ширину для центрирования */
      }

      .header-text h2 {
          font-size: 1.5rem; /* Размер шрифта заголовка 1.5 рем */
          font-weight: 700; /* Жирный шрифт для заголовка */
          color: #f3510c; /* Устанавливает оранжевый цвет текста заголовка */
          text-transform: uppercase; /* Преобразует текст заголовка в верхний регистр */
          letter-spacing: 1px; /* Добавляет межбуквенный интервал 1 пиксель */
          margin-bottom: 20px; /* Отступ снизу заголовка 20 пикселей */
          line-height: 1.2; /* Устанавливает плотность строк заголовка */
      }
      .header-text p {
          font-size: 16px; /* Уменьшаем размер текста */
          margin-bottom: 15px; /* Добавляем отступ снизу у каждого абзаца */
          line-height: 1.5; /* Увеличиваем межстрочное расстояние для улучшения читаемости */
      }

      .note-box {
          padding: 15px; /* Внутренние отступы внутри блока */
          background-color: #ffffff; /* Устанавливает белый фоновый цвет */
          border: 1px dashed #1e90ff; /* Устанавливает синюю пунктирную границу */
          border-radius: 5px; /* Скругляет углы блока */
          font-size: 1rem; /* Размер шрифта текста внутри блока 1 рем */
          margin: 20px 0; /* Отступы сверху и снизу блока */
          color: #000000; /* Устанавливает черный цвет текста */
          line-height: 1.5; /* Устанавливает межстрочный интервал */
      }

      .note-box strong {
          font-weight: bold; /* Полужирный текст */
      }
      .orange {
          color: #f3510c; /* Оранжевый цвет текста */
      }
      .note-contacts {
          background-color: #fff3cd; /* Светло-желтый фоновый цвет */
          border-left: 4px solid #f3510c; /* Оранжевая левая граница */
          padding: 15px 20px; /* Внутренние отступы */
          border-radius: 5px; /* Скругленные углы */
          box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Легкая тень для глубины */
          font-size: 1.125rem; /* Размер шрифта */
          margin: 20px auto; /* Отступы сверху и снизу, центрирование по горизонтали */
          max-width: 600px; /* Максимальная ширина блока */
      }

      .note-contacts strong {
          color: #856404; /* Темный цвет для текста */
          font-weight: bold; /* Жирный шрифт */
      }

      .note-contacts p {
          margin: 0; /* Убираем отступы у параграфов */
          font-size: 1rem; /* Размер шрифта параграфов */
          color: #856404; /* Темный цвет для текста */
      }


      @media (max-width: 576px) {
          .header-text {
              padding: 15px 8px;
          }

          .header-text h2 {
              font-size: 22px;
              margin-bottom: 10px;
          }

          .header-text p {
              font-size: 14px;
              margin-bottom: 8px;
          }
      }

  </style>

    <div class="additional-spacing"></div>

    <div class="header-text text-center">
        <h2>Тарифи на послуги вантажників:</h2>
        <p class="text-center">Правильний пошук транспорту – важлива складова вдалого переїзду, тому маємо великий вибір вантажного транспорту для кожного окремого випадку.</p>
    </div>

    <div class="additional-spacing"></div>

    <div class="my-5 tariffs-container text-center">
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-dark">
                <tr>
                    <th>Вид послуги</th>
                    <th>Тарифи</th>
                    <th>Мінімальне замовлення</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Вантажник</td>
                    <td>від 200 грн/година</td>
                    <td>2 години</td>
                </tr>
                <tr>
                    <td>Газель</td>
                    <td>від 500 грн/година</td>
                    <td>2 години</td>
                </tr>
                <tr>
                    <td>Mercedes-Benz 2т</td>
                    <td>від 600 грн/година</td>
                    <td>2 години</td>
                </tr>
                <tr>
                    <td>Ford</td>
                    <td>від 500 грн/година</td>
                    <td>2 години</td>
                </tr>
                <tr>
                    <td>Мерседес Sprinter 3т</td>
                    <td>від 600 грн/година</td>
                    <td>2 години</td>
                </tr>
                <tr>
                    <td>Mercedes Sprinter 2т</td>
                    <td>від 500 грн/година</td>
                    <td>2 години</td>
                </tr>
                <tr>
                    <td>Ford дует</td>
                    <td>від 500 грн/година</td>
                    <td>2 години</td>
                </tr>
                <tr>
                    <td>Газель</td>
                    <td>від 500 грн/година</td>
                    <td>2 години</td>
                </tr>
                <tr>
                    <td>MAN 5т 6м</td>
                    <td>від 650 грн/години</td>
                    <td>3 години</td>
                </tr>
                <tr>
                    <td>Foton 3т</td>
                    <td>від 650 грн/година</td>
                    <td>3 години</td>
                </tr>
                <tr>
                    <td>TATA</td>
                    <td>від 600 грн/година</td>
                    <td>3 години</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="header-text text-center">
        <h2>Прейскурант на послуги вантажників та автомобільні перевезення:</h2>
    </div>
    <div class="my-5 tariffs-container text-center">
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-dark">
                <tr>
                    <th>Послуги вантажників</th>
                    <th>Тарифи</th>
                    <th>Мінімальне замовлення</th>
                    <th>Час роботи</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Вантажник</td>
                    <td>від 200 грн/година</td>
                    <td>2 години</td>
                    <td>з 8:00 до 19:00</td>
                </tr>
                <tr>
                    <td>Вантажник</td>
                    <td>від 200 грн/година</td>
                    <td>2 години + таксі</td>
                    <td>з 19:00 до 8:00</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="header-text text-center">
        <div class="note-box">
            <strong>Примітка:</strong> У разі коли загальна сума замовлення не перевищує 800 грн, тоді робота тарифікується погодинно з розрахунку 200 грн/ос/год мінімум 2 години.
        </div>
    </div>

    <div class="header-text text-center">
        <h2>Ціни на розвантаження та підйом будматеріалів:</h2>
    </div>

    <div class="my-5 tariffs-container text-center">
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-dark">
                <tr>
                    <th>Вид послуги</th>
                    <th>Вага</th>
                    <th>Ціна</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Підйом будматеріалів у відрах або ін.</td>
                    <td>10-20кг</td>
                    <td>від 6 грн/поверх/одиниця</td>
                </tr>
                <tr>
                    <td>Підйом мішка</td>
                    <td>20-30кг</td>
                    <td>від 7 грн/поверх/мішок</td>
                </tr>
                <tr>
                    <td>Підйом мішка</td>
                    <td>30-40кг</td>
                    <td>від 8 грн/поверх/мішок</td>
                </tr>
                <tr>
                    <td>Підйом мішка</td>
                    <td>40-50кг</td>
                    <td>від 9 грн/поверх/мішок</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="header-text text-center">
        <div class="note-box">
            <strong>Примітка:</strong> Розвантаження-навантаження вантажу загальною вагою менше 5 тонн оплачується погодинно з розрахунком 1 вантажник 200гр годину мінімум 2 години.
        </div>
    </div>

    <div class="my-5 tariffs-container text-center">
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-dark">
                <tr>
                    <th>Вид послуги</th>
                    <th>Габарити</th>
                    <th>Тарифи</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Підйом гіпсокартону</td>
                    <td>9,5 х 1200 х 2000 мм</td>
                    <td>від 9 грн/поверх/од.</td>
                </tr>
                <tr>
                    <td>Підйом гіпсокартону</td>
                    <td>9,5 х 12,5 х 1200 х 2500 мм</td>
                    <td>від 9 грн/поверх/од.</td>
                </tr>
                <tr>
                    <td>Підйом гіпсокартону</td>
                    <td>12,5 х 1200 х 2000 мм</td>
                    <td>від 9 грн/поверх/од.</td>
                </tr>
                <tr>
                    <td>Підйом гіпсокартону</td>
                    <td>6,5 х 1200 х 3000 мм</td>
                    <td>від 13 грн/поверх/од.</td>
                </tr>
                <tr>
                    <td>Підйом гіпсокартону</td>
                    <td>12,5 х 1200 х 3000 мм</td>
                    <td>від 13 грн/поверх/од.</td>
                </tr>
                <tr>
                    <td>Підйом профілю</td>
                    <td>СД,CВ,УВ</td>
                    <td>від 2,5 грн/поверх/од.</td>
                </tr>
                <tr>
                    <td>Підйом профілю</td>
                    <td>УД</td>
                    <td>від 2,5 грн/поверх/од.</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="my-5 tariffs-container text-center">
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-dark">
                <tr>
                    <th>Вид послуги</th>
                    <th>Вага (упаковка)</th>
                    <th>Тарифи</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Підйом кахлю</td>
                    <td>25 кг</td>
                    <td>від 7 грн/поверх/од.</td>
                </tr>
                <tr>
                    <td>Підйом кахлю</td>
                    <td>35 кг</td>
                    <td>від 8 грн/поверх/од.</td>
                </tr>
                <tr>
                    <td>Підйом кахлю</td>
                    <td>45 кг</td>
                    <td>від 8 грн/поверх/од.</td>
                </tr>
                <tr>
                    <td>Підйом кахлю</td>
                    <td>50 кг</td>
                    <td>від 10 грн/поверх/од.</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="my-5 tariffs-container text-center">
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-dark">
                <tr>
                    <th>Вид цегли</th>
                    <th>Тарифи</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Керамічний</td>
                    <td>від 2,5 грн/поверх/од.</td>
                </tr>
                <tr>
                    <td>Силікатний</td>
                    <td>від 2,5 грн/поверх/од.</td>
                </tr>
                <tr>
                    <td>Шлакоблок</td>
                    <td>від 4 грн/поверх/од.</td>
                </tr>
                <tr>
                    <td>Ракушняка</td>
                    <td>від 4 грн/поверх/од.</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="header-text text-center">
        <div class="note-box">
            <strong>Примітка:</strong> У випадках, коли загальна сума замовлення не перевищує 800 грн або загальна вага вантажу менше 5 тонн — робота оплачується погодинно з розрахунку 1 чол/год по 200 грн мінімум на 2 години.
            10 метрів відстані прирівнюються до одного поверху. За можливості використання вантажного ліфта будь-який поверх тарифікується як другий без розвантаження.
        </div>
    </div>

    <div class="header-text text-center">
        <h2>Ціни на навантаження та розвантаження фур, вагонів, платформ:</h2>
    </div>

    <div class="my-5 tariffs-container text-center">
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-dark">
                <tr>
                    <th>Навантаження-розвантаження</th>
                    <th>Відстань</th>
                    <th>Тарифи</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Вантаж від 20 т.</td>
                    <td>До 5 метрів</td>
                    <td>від 200грн/т.</td>
                </tr>
                <tr>
                    <td>Вантаж від 20 т.</td>
                    <td>5-15 метрів</td>
                    <td>від 220грн/т.</td>
                </tr>
                <tr>
                    <td>Вантаж від 20 т.</td>
                    <td>15-25 метрів</td>
                    <td>від 250грн/т.</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="header-text text-center">
        <div class="note-box">
            <strong>Примітка:</strong> Розвантаження-навантаження вантажу загальною вагою менше 5 тонн оплачуватиметься погодинно з розрахунком 1 вантажник 200грн/година, мінімум на 2 години.
            <p class="text-center text orange"><strong>Постійним замовникам знижка!</strong></p>
        </div>
    </div>

    <div class="header-text text-center">
        <h2>Складські роботи (постійна/довгострокова робота):</h2>
    </div>

    <div class="my-5 tariffs-container text-center">
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-dark">
                <tr>
                    <th>Вид послуги</th>
                    <th>Тарифи</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Вантажник на зміну, 8 годин з обідньою перервою</td>
                    <td>від від 700 грн/ос./день</td>
                </tr>
                <tr>
                    <td>Нічні</td>
                    <td>від від 800-1000 грн</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="header-text text-center">
        <h2>Винос будівельного сміття:</h2>
    </div>

    <div class="my-5 tariffs-container text-center">
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-dark">
                <tr>
                    <th>Вид послуги</th>
                    <th>Тарифи</th>
                    <th>Машини</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Завантаження сміття в мішок</td>
                    <td>від 12 грн/мішок</td>
                    <td>від 12 грн/мішок</td>
                </tr>
                <tr>
                    <td>Винос/навантаження в машину завантаженого мішка, вага мішка не більше 30 кг.</td>
                    <td>від 6 грн/поверх/мішок</td>
                    <td>від 6 грн/поверх/мішок</td>
                </tr>
                <tr>
                    <td>Вивіз сміття до 50 мішків (без вантажників)</td>
                    <td>від 1000 грн</td>
                    <td>Газель</td>
                </tr>
                <tr>
                    <td>Вивіз сміття до 100 мішків (без вантажників)</td>
                    <td>від 1000-1500 грн</td>
                    <td>Зіл</td>
                </tr>
                <tr>
                    <td>Вивіз сміття до 200 мішків (без вантажників)</td>
                    <td>від 1500-2000 грн</td>
                    <td>Камаз</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="header-text text-center">
        <div class="note-box">
            <strong>Примітка:</strong> Будь-яке габаритне будівельне сміття, яке в змозі винести один вантажник прирівнюється до одного мішка. 10 метрів відстані прирівнюються до одного поверху. За можливості використання вантажного ліфта будь-який поверх тарифікується як другий.
        </div>
    </div>

    <div class="header-text text-center">
        <div class="note-contacts">
            <strong>Примітка:</strong> Для уточнення вартості замовлення Вам найкраще зв'язатися з нами за телефонами:
            <p><a href="tel:+380666431636">+380 (66) 643-16-36</a></p>
            <p><a href="tel:+380986422759">+380 (98) 642-27-59</a></p>
        </div>
    </div>

    <div class="header-text text-center">
        <h2>Ми пропонуємо високопрофесійні послуги на перевезення вантажів різного типу</h2>
        <p class="text-center">Компанія "Perevozchik" пропонує своїм клієнтам комфортний сервіс та умови співпраці. З нами працює величезна команда виняткових професіоналів, які акуратно та кваліфіковано виконують свою роботу. Завдяки чому ми здійснюємо різного плану вантажоперевезення, ціна за годину яких може між собою відрізнятись.</p>
        <p class="text-center">У нас, можливо, здійснити будь-який план перевезення недорого, тарифи на автомобільні перевезення вантажів дозволяють неодноразово та із задоволенням користуватися нашими послугами та привілеями для постійних клієнтів. Окрім цього ми завжди працюємо на клієнта, проводимо глибокий аналіз транспортувального ринку з метою визначення найоптимальніших маршрутів міста Дніпро щоб зробити оптимальний розрахунок тарифів. Це необхідно, щоб ми змогли вам запропонувати вигідніші тарифи та розцінки на перевезення вантажів та послуги справді професійні.</p>
        <p class="text-center">Якщо вам необхідно терміново та оперативно щось перевезти – ми завжди готові допомогти, підтримати та професійно здійснити поставлені перед нами завдання. Телефонуйте будь-коли, ваша заявка неодмінно оперативно буде оброблена і прийнята в роботу.</p>
    </div>


@endsection

