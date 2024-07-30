@extends('app')

@section('content')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Транспорт</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
                        <img src="path/to/main-image.jpg" alt="Mersedes-Benz 2t">
                        <div class="thumbnails">
                            <img src="path/to/thumbnail1.jpg" alt="Mersedes-Benz 2t Thumbnail 1">
                            <img src="path/to/thumbnail2.jpg" alt="Mersedes-Benz 2t Thumbnail 2">
                        </div>
                    </div>
                    <div>
                        <h5>Mersedes-Benz 2t</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">Размер кузова, дл./шир./выс.</th>
                                <td>4,2м / 2,2м / 2,3м</td>
                            </tr>
                            <tr>
                                <th scope="row">Объем кузова</th>
                                <td>21 м3</td>
                            </tr>
                            <tr>
                                <th scope="row">Грузоподъемность</th>
                                <td>2т</td>
                            </tr>
                            <tr>
                                <th scope="row">Минимальный заказ</th>
                                <td>2 часа</td>
                            </tr>
                            <tr>
                                <th scope="row">1 час по городу</th>
                                <td>600 грн</td>
                            </tr>
                            <tr>
                                <th scope="row">Стоимость 1 км</th>
                                <td>20 грн оплата в 2 стороны</td>
                            </tr>
                            <tr>
                                <th scope="row">Гидроборт</th>
                                <td>Есть</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vehicle-info">
                    <div>
                        <img src="path/to/main-image.jpg" alt="Mersedes-Benz 2t">
                        <div class="thumbnails">
                            <img src="path/to/thumbnail1.jpg" alt="Mersedes-Benz 2t Thumbnail 1">
                            <img src="path/to/thumbnail2.jpg" alt="Mersedes-Benz 2t Thumbnail 2">
                        </div>
                    </div>
                    <div>
                        <h5>Mersedes-Benz 2t</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">Размер кузова, дл./шир./выс.</th>
                                <td>4,2м / 2,2м / 2,3м</td>
                            </tr>
                            <tr>
                                <th scope="row">Объем кузова</th>
                                <td>21 м3</td>
                            </tr>
                            <tr>
                                <th scope="row">Грузоподъемность</th>
                                <td>2т</td>
                            </tr>
                            <tr>
                                <th scope="row">Минимальный заказ</th>
                                <td>2 часа</td>
                            </tr>
                            <tr>
                                <th scope="row">1 час по городу</th>
                                <td>600 грн</td>
                            </tr>
                            <tr>
                                <th scope="row">Стоимость 1 км</th>
                                <td>20 грн оплата в 2 стороны</td>
                            </tr>
                            <tr>
                                <th scope="row">Гидроборт</th>
                                <td>Есть</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vehicle-info">
                    <div>
                        <img src="path/to/main-image.jpg" alt="Mersedes-Benz 2t">
                        <div class="thumbnails">
                            <img src="path/to/thumbnail1.jpg" alt="Mersedes-Benz 2t Thumbnail 1">
                            <img src="path/to/thumbnail2.jpg" alt="Mersedes-Benz 2t Thumbnail 2">
                        </div>
                    </div>
                    <div>
                        <h5>Mersedes-Benz 2t</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">Размер кузова, дл./шир./выс.</th>
                                <td>4,2м / 2,2м / 2,3м</td>
                            </tr>
                            <tr>
                                <th scope="row">Объем кузова</th>
                                <td>21 м3</td>
                            </tr>
                            <tr>
                                <th scope="row">Грузоподъемность</th>
                                <td>2т</td>
                            </tr>
                            <tr>
                                <th scope="row">Минимальный заказ</th>
                                <td>2 часа</td>
                            </tr>
                            <tr>
                                <th scope="row">1 час по городу</th>
                                <td>600 грн</td>
                            </tr>
                            <tr>
                                <th scope="row">Стоимость 1 км</th>
                                <td>20 грн оплата в 2 стороны</td>
                            </tr>
                            <tr>
                                <th scope="row">Гидроборт</th>
                                <td>Есть</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vehicle-info">
                    <div>
                        <img src="path/to/main-image.jpg" alt="Mersedes-Benz 2t">
                        <div class="thumbnails">
                            <img src="path/to/thumbnail1.jpg" alt="Mersedes-Benz 2t Thumbnail 1">
                            <img src="path/to/thumbnail2.jpg" alt="Mersedes-Benz 2t Thumbnail 2">
                        </div>
                    </div>
                    <div>
                        <h5>Mersedes-Benz 2t</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">Размер кузова, дл./шир./выс.</th>
                                <td>4,2м / 2,2м / 2,3м</td>
                            </tr>
                            <tr>
                                <th scope="row">Объем кузова</th>
                                <td>21 м3</td>
                            </tr>
                            <tr>
                                <th scope="row">Грузоподъемность</th>
                                <td>2т</td>
                            </tr>
                            <tr>
                                <th scope="row">Минимальный заказ</th>
                                <td>2 часа</td>
                            </tr>
                            <tr>
                                <th scope="row">1 час по городу</th>
                                <td>600 грн</td>
                            </tr>
                            <tr>
                                <th scope="row">Стоимость 1 км</th>
                                <td>20 грн оплата в 2 стороны</td>
                            </tr>
                            <tr>
                                <th scope="row">Гидроборт</th>
                                <td>Есть</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vehicle-info">
                    <div>
                        <img src="path/to/main-image.jpg" alt="Mersedes-Benz 2t">
                        <div class="thumbnails">
                            <img src="path/to/thumbnail1.jpg" alt="Mersedes-Benz 2t Thumbnail 1">
                            <img src="path/to/thumbnail2.jpg" alt="Mersedes-Benz 2t Thumbnail 2">
                        </div>
                    </div>
                    <div>
                        <h5>Mersedes-Benz 2t</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">Размер кузова, дл./шир./выс.</th>
                                <td>4,2м / 2,2м / 2,3м</td>
                            </tr>
                            <tr>
                                <th scope="row">Объем кузова</th>
                                <td>21 м3</td>
                            </tr>
                            <tr>
                                <th scope="row">Грузоподъемность</th>
                                <td>2т</td>
                            </tr>
                            <tr>
                                <th scope="row">Минимальный заказ</th>
                                <td>2 часа</td>
                            </tr>
                            <tr>
                                <th scope="row">1 час по городу</th>
                                <td>600 грн</td>
                            </tr>
                            <tr>
                                <th scope="row">Стоимость 1 км</th>
                                <td>20 грн оплата в 2 стороны</td>
                            </tr>
                            <tr>
                                <th scope="row">Гидроборт</th>
                                <td>Есть</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vehicle-info">
                    <div>
                        <img src="path/to/main-image.jpg" alt="Mersedes-Benz 2t">
                        <div class="thumbnails">
                            <img src="path/to/thumbnail1.jpg" alt="Mersedes-Benz 2t Thumbnail 1">
                            <img src="path/to/thumbnail2.jpg" alt="Mersedes-Benz 2t Thumbnail 2">
                        </div>
                    </div>
                    <div>
                        <h5>Mersedes-Benz 2t</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">Размер кузова, дл./шир./выс.</th>
                                <td>4,2м / 2,2м / 2,3м</td>
                            </tr>
                            <tr>
                                <th scope="row">Объем кузова</th>
                                <td>21 м3</td>
                            </tr>
                            <tr>
                                <th scope="row">Грузоподъемность</th>
                                <td>2т</td>
                            </tr>
                            <tr>
                                <th scope="row">Минимальный заказ</th>
                                <td>2 часа</td>
                            </tr>
                            <tr>
                                <th scope="row">1 час по городу</th>
                                <td>600 грн</td>
                            </tr>
                            <tr>
                                <th scope="row">Стоимость 1 км</th>
                                <td>20 грн оплата в 2 стороны</td>
                            </tr>
                            <tr>
                                <th scope="row">Гидроборт</th>
                                <td>Есть</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vehicle-info">
                    <div>
                        <img src="path/to/main-image.jpg" alt="Mersedes-Benz 2t">
                        <div class="thumbnails">
                            <img src="path/to/thumbnail1.jpg" alt="Mersedes-Benz 2t Thumbnail 1">
                            <img src="path/to/thumbnail2.jpg" alt="Mersedes-Benz 2t Thumbnail 2">
                        </div>
                    </div>
                    <div>
                        <h5>Mersedes-Benz 2t</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">Размер кузова, дл./шир./выс.</th>
                                <td>4,2м / 2,2м / 2,3м</td>
                            </tr>
                            <tr>
                                <th scope="row">Объем кузова</th>
                                <td>21 м3</td>
                            </tr>
                            <tr>
                                <th scope="row">Грузоподъемность</th>
                                <td>2т</td>
                            </tr>
                            <tr>
                                <th scope="row">Минимальный заказ</th>
                                <td>2 часа</td>
                            </tr>
                            <tr>
                                <th scope="row">1 час по городу</th>
                                <td>600 грн</td>
                            </tr>
                            <tr>
                                <th scope="row">Стоимость 1 км</th>
                                <td>20 грн оплата в 2 стороны</td>
                            </tr>
                            <tr>
                                <th scope="row">Гидроборт</th>
                                <td>Есть</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vehicle-info">
                    <div>
                        <img src="path/to/main-image.jpg" alt="Mersedes-Benz 2t">
                        <div class="thumbnails">
                            <img src="path/to/thumbnail1.jpg" alt="Mersedes-Benz 2t Thumbnail 1">
                            <img src="path/to/thumbnail2.jpg" alt="Mersedes-Benz 2t Thumbnail 2">
                        </div>
                    </div>
                    <div>
                        <h5>Mersedes-Benz 2t</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">Размер кузова, дл./шир./выс.</th>
                                <td>4,2м / 2,2м / 2,3м</td>
                            </tr>
                            <tr>
                                <th scope="row">Объем кузова</th>
                                <td>21 м3</td>
                            </tr>
                            <tr>
                                <th scope="row">Грузоподъемность</th>
                                <td>2т</td>
                            </tr>
                            <tr>
                                <th scope="row">Минимальный заказ</th>
                                <td>2 часа</td>
                            </tr>
                            <tr>
                                <th scope="row">1 час по городу</th>
                                <td>600 грн</td>
                            </tr>
                            <tr>
                                <th scope="row">Стоимость 1 км</th>
                                <td>20 грн оплата в 2 стороны</td>
                            </tr>
                            <tr>
                                <th scope="row">Гидроборт</th>
                                <td>Есть</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vehicle-info">
                    <div>
                        <img src="path/to/main-image.jpg" alt="Mersedes-Benz 2t">
                        <div class="thumbnails">
                            <img src="path/to/thumbnail1.jpg" alt="Mersedes-Benz 2t Thumbnail 1">
                            <img src="path/to/thumbnail2.jpg" alt="Mersedes-Benz 2t Thumbnail 2">
                        </div>
                    </div>
                    <div>
                        <h5>Mersedes-Benz 2t</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">Размер кузова, дл./шир./выс.</th>
                                <td>4,2м / 2,2м / 2,3м</td>
                            </tr>
                            <tr>
                                <th scope="row">Объем кузова</th>
                                <td>21 м3</td>
                            </tr>
                            <tr>
                                <th scope="row">Грузоподъемность</th>
                                <td>2т</td>
                            </tr>
                            <tr>
                                <th scope="row">Минимальный заказ</th>
                                <td>2 часа</td>
                            </tr>
                            <tr>
                                <th scope="row">1 час по городу</th>
                                <td>600 грн</td>
                            </tr>
                            <tr>
                                <th scope="row">Стоимость 1 км</th>
                                <td>20 грн оплата в 2 стороны</td>
                            </tr>
                            <tr>
                                <th scope="row">Гидроборт</th>
                                <td>Есть</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vehicle-info">
                    <div>
                        <img src="path/to/main-image.jpg" alt="Mersedes-Benz 2t">
                        <div class="thumbnails">
                            <img src="path/to/thumbnail1.jpg" alt="Mersedes-Benz 2t Thumbnail 1">
                            <img src="path/to/thumbnail2.jpg" alt="Mersedes-Benz 2t Thumbnail 2">
                        </div>
                    </div>
                    <div>
                        <h5>Mersedes-Benz 2t</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">Размер кузова, дл./шир./выс.</th>
                                <td>4,2м / 2,2м / 2,3м</td>
                            </tr>
                            <tr>
                                <th scope="row">Объем кузова</th>
                                <td>21 м3</td>
                            </tr>
                            <tr>
                                <th scope="row">Грузоподъемность</th>
                                <td>2т</td>
                            </tr>
                            <tr>
                                <th scope="row">Минимальный заказ</th>
                                <td>2 часа</td>
                            </tr>
                            <tr>
                                <th scope="row">1 час по городу</th>
                                <td>600 грн</td>
                            </tr>
                            <tr>
                                <th scope="row">Стоимость 1 км</th>
                                <td>20 грн оплата в 2 стороны</td>
                            </tr>
                            <tr>
                                <th scope="row">Гидроборт</th>
                                <td>Есть</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
