@extends('app')

@section('title', 'Транспорт')
@section('description', 'Обери свій транспорт')
@section('content')
    <style>
        .vehicle-info {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 20px;
            flex: 1;
        }
        .vehicle-info img {
            max-width: 100%;
            margin-bottom: 10px;
        }
        .vehicle-info .thumbnails img {
            max-width: 50px;
            margin-top: 10px;
            cursor: pointer;
        }
        .vehicle-info table {
            width: 100%;
        }
        .vehicle-info th, .vehicle-info td {
            padding: 8px;
            text-align: left;
        }
        .vehicle-info th {
            background-color: #f8f9fa;
        }
        @media (min-width: 768px) {
            .vehicle-info {
                flex-direction: row;
            }
            .vehicle-info img {
                max-width: 150px;
                margin-right: 20px;
            }

        }
    </style>
    <body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="vehicle-info">
                    <div>
                        <img src="images/gazel.jpg" alt="gazel">
                    </div>
                    <div>
                        <h5>Газель</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">Розмір кузова, дл./шир./вис.</th>
                                <td>4.2 м. / 2.05 м. / 2.05 м.</td>
                            </tr>
                            <tr>
                                <th scope="row">Об'єм кузова</th>
                                <td>18 м3</td>
                            </tr>
                            <tr>
                                <th scope="row">Вантажопідйомність</th>
                                <td>1.5 т</td>
                            </tr>
                            <tr>
                                <th scope="row">Мінімальне замовлення</th>
                                <td>2 години</td>
                            </tr>
                            <tr>
                                <th scope="row">1 година по місту</th>
                                <td>500 грн до 10 км</td>
                            </tr>
                            <tr>
                                <th scope="row">Вартість 1 км</th>
                                <td>20 грн/ оплата в 2 сторони</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vehicle-info">
                    <div>
                        <img src="images/mercedes.jpg" alt="Mersedes-Benz 2t">
                    </div>
                    <div>
                        <h5>Mersedes-Benz 2t</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">Розмір кузова, дл./шир./вис.</th>
                                <td>4.2 м. / 2.2 м. / 2.3 м.</td>
                            </tr>
                            <tr>
                                <th scope="row">Об'єм кузова</th>
                                <td>21 м3</td>
                            </tr>
                            <tr>
                                <th scope="row">Вантажопідйомність</th>
                                <td>2 т</td>
                            </tr>
                            <tr>
                                <th scope="row">Мінімальне замовлення</th>
                                <td>2 години</td>
                            </tr>
                            <tr>
                                <th scope="row">1 година по місту</th>
                                <td>600 грн</td>
                            </tr>
                            <tr>
                                <th scope="row">Вартість 1 км</th>
                                <td>20 грн/ оплата в 2 сторони</td>
                            </tr>
                            <tr>
                                <th scope="row">Гідроборт</th>
                                <td>Так</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vehicle-info">
                    <div>
                        <img src="images/ford.jpg" alt="Ford">
                    </div>
                    <div>
                        <h5>Ford</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">Розмір кузова, дл./шир./вис.</th>
                                <td>4 м. / 2.05 м. / 2.3 м.</td>
                            </tr>
                            <tr>
                                <th scope="row">Об'єм кузова</th>
                                <td>19 м3</td>
                            </tr>
                            <tr>
                                <th scope="row">Вантажопідйомність</th>
                                <td>2 т</td>
                            </tr>
                            <tr>
                                <th scope="row">Мінімальне замовлення</th>
                                <td>2 години</td>
                            </tr>
                            <tr>
                                <th scope="row">1 година по місту</th>
                                <td>500 грн до 10 км</td>
                            </tr>
                            <tr>
                                <th scope="row">Вартість 1 км</th>
                                <td>20 грн оплата в 2 сторони</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vehicle-info">
                    <div>
                        <img src="images/mercedes3t.jpg" alt="Mersedes-Benz 3t">
                    </div>
                    <div>
                        <h5>Mersedes-Benz 3t</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">Розмір кузова, дл./шир./вис.</th>
                                <td>5 м. / 2.2 м. / 2.3 м.</td>
                            </tr>
                            <tr>
                                <th scope="row">Об'єм кузова</th>
                                <td>25 м3</td>
                            </tr>
                            <tr>
                                <th scope="row">Вантажопідйомність</th>
                                <td>2.5 т</td>
                            </tr>
                            <tr>
                                <th scope="row">Мінімальне замовлення</th>
                                <td>2 години</td>
                            </tr>
                            <tr>
                                <th scope="row">1 година по місту</th>
                                <td>600 грн. до 10км.</td>
                            </tr>
                            <tr>
                                <th scope="row">Вартість 1 км</th>
                                <td>20 грн оплата в 2 сторони</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vehicle-info">
                    <div>
                        <img src="images/sprinter.jpg" alt="Sprinter">
                    </div>
                    <div>
                        <h5>Mercedes Sprinter 2t</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">Розмір кузова, дл./шир./вис.</th>
                                <td>4,8 м. / 2,4 м. / 2,05 м.</td>
                            </tr>
                            <tr>
                                <th scope="row">Об'єм кузова</th>
                                <td>23 м3</td>
                            </tr>
                            <tr>
                                <th scope="row">Вантажопідйомність</th>
                                <td>2 т</td>
                            </tr>
                            <tr>
                                <th scope="row">Мінімальне замовлення</th>
                                <td>1 година</td>
                            </tr>
                            <tr>
                                <th scope="row">1 година по місту</th>
                                <td>600 грн до 10 км</td>
                            </tr>
                            <tr>
                                <th scope="row">Вартість 1 км</th>
                                <td>20 грн оплата в 2 сторони</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vehicle-info">
                    <div>
                        <img src="images/duet.jpg" alt="Duet">
                    </div>
                    <div>
                        <h5>Mersedes-Benz 2t</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">Розмір кузова, дл./шир./вис.</th>
                                <td>4.1 м. / 2.1 м. / 2.2 м.</td>
                            </tr>
                            <tr>
                                <th scope="row">Об'єм кузова</th>
                                <td>19 м3</td>
                            </tr>
                            <tr>
                                <th scope="row">Вантажопідйомність</th>
                                <td>2 т</td>
                            </tr>
                            <tr>
                                <th scope="row">Мінімальне замовлення</th>
                                <td>2 години</td>
                            </tr>
                            <tr>
                                <th scope="row">1 година по місту</th>
                                <td>500 грн</td>
                            </tr>
                            <tr>
                                <th scope="row">Вартість 1 км</th>
                                <td>20 грн оплата в 2 сторони</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vehicle-info">
                    <div>
                        <img src="images/gazel3.jpg" alt="Gazel">
                    </div>
                    <div>
                        <h5>Газель</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">Розмір кузова, дл./шир./вис.</th>
                                <td>4.2 м / 2.05 м / 2.05 м</td>
                            </tr>
                            <tr>
                                <th scope="row">Об'єм кузова</th>
                                <td>18 м3</td>
                            </tr>
                            <tr>
                                <th scope="row">Вантажопідйомність</th>
                                <td>1.5 т</td>
                            </tr>
                            <tr>
                                <th scope="row">Мінімальне замовлення</th>
                                <td>1 година</td>
                            </tr>
                            <tr>
                                <th scope="row">1 година по місту</th>
                                <td>500 грн до 10 км</td>
                            </tr>
                            <tr>
                                <th scope="row">Вартість 1 км</th>
                                <td>20 грн оплата в 2 сторони</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vehicle-info">
                    <div>
                        <img src="images/man.jpg" alt="Man 5t">
                    </div>
                    <div>
                        <h5>Man 5t</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">Розмір кузова, дл./шир./вис.</th>
                                <td>7.2 м / 2.45 м / 2.5 м</td>
                            </tr>
                            <tr>
                                <th scope="row">Об'єм кузова</th>
                                <td>44 м3</td>
                            </tr>
                            <tr>
                                <th scope="row">Вантажопідйомність</th>
                                <td>5 т</td>
                            </tr>
                            <tr>
                                <th scope="row">Мінімальне замовлення</th>
                                <td>3 години</td>
                            </tr>
                            <tr>
                                <th scope="row">1 година по місту</th>
                                <td>650 грн</td>
                            </tr>
                            <tr>
                                <th scope="row">Вартість 1 км</th>
                                <td>35 грн оплата в 2 сторони</td>
                            </tr>
                            <tr>
                                <th scope="row">Гідроборт</th>
                                <td>Так</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vehicle-info">
                    <div>
                        <img src="images/foton.jpg" alt="Foton 3t">
                    </div>
                    <div>
                        <h5>Foton 3t</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">Розмір кузова, дл./шир./вис.</th>
                                <td>4.2 м / 1.8 м / 1.8 м</td>
                            </tr>
                            <tr>
                                <th scope="row">Об'єм кузова</th>
                                <td>13.5 м3</td>
                            </tr>
                            <tr>
                                <th scope="row">Вантажопідйомність</th>
                                <td>3 т</td>
                            </tr>
                            <tr>
                                <th scope="row">Мінімальне замовлення</th>
                                <td>3 години</td>
                            </tr>
                            <tr>
                                <th scope="row">1 година по місту</th>
                                <td>600 грн</td>
                            </tr>
                            <tr>
                                <th scope="row">Вартість 1 км</th>
                                <td>20 грн оплата в 2 сторони</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vehicle-info">
                    <div>
                        <img src="images/tata.jpg" alt="Tata">
                    </div>
                    <div>
                        <h5>Tata</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">Розмір кузова, дл./шир./вис.</th>
                                <td>4,6 м / 2,1 м / 2,05 м</td>
                            </tr>
                            <tr>
                                <th scope="row">Об'єм кузова</th>
                                <td>20 м3</td>
                            </tr>
                            <tr>
                                <th scope="row">Вантажопідйомність</th>
                                <td>4 т</td>
                            </tr>
                            <tr>
                                <th scope="row">Мінімальне замовлення</th>
                                <td>3 години</td>
                            </tr>
                            <tr>
                                <th scope="row">1 година по місту</th>
                                <td>650 грн</td>
                            </tr>
                            <tr>
                                <th scope="row">Вартість 1 км</th>
                                <td>35 грн оплата в 2 сторони</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
