<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .stretch-card>.card {
            width: 100%;
            min-width: 100%
        }

        body {
            background-color: #f9f9fa
        }

        .flex {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto
        }

        @media (max-width:991.98px) {
            .padding {
                padding: 1.5rem
            }
        }

        @media (max-width:767.98px) {
            .padding {
                padding: 1rem
            }
        }

        .padding {
            padding: 5rem
        }

        .grid-margin,
        .purchace-popup>div {
            margin-bottom: 25px
        }

        .card {
            border: 0;
            border-radius: 2px
        }

        .card-weather {
            background: #e1ecff;
            background-image: linear-gradient(to left bottom, #d6eef6, #dff0fa, #e7f3fc, #eff6fe, #f6f9ff)
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0.25rem
        }

        .card-weather .card-body:first-child {
            background: url(https://res.cloudinary.com/dxfq3iotg/image/upload/v1557323760/weather.svg) no-repeat center;
            background-size: cover
        }

        .card .card-body {
            padding: 1.88rem 1.81rem
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1.25rem
        }

        .card-weather .weather-date-location {
            padding: 0 0 38px
        }

        .h3,
        h3 {
            font-size: 1.56rem
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Poppins", sans-serif;
            font-weight: 500
        }

        .text-gray,
        .card-subtitle,
        .new-accounts ul.chats li.chat-persons a p.joined-date {
            color: #969696
        }

        p {
            font-size: 13px
        }

        .text-gray,
        .card-subtitle,
        .new-accounts ul.chats li.chat-persons a p.joined-date {
            color: #969696
        }

        .card-weather .weather-data {
            padding: 0 0 4.75rem
        }

        .mr-auto,
        .mx-auto {
            margin-right: auto !important
        }

        .display-3 {
            font-size: 2.5rem
        }

        .card-weather .card-body {
            background: #ffffff
        }

        .card-weather .weakly-weather {
            background: #ffffff;
            overflow-x: auto
        }

        .card-weather .weakly-weather .weakly-weather-item {
            flex: 0 0 14.28%;
            border-right: 1px solid #f2f2f2;
            padding: 1rem;
            text-align: center
        }

        .mb-0,
        .my-0 {
            margin-bottom: 0 !important
        }

        .card-weather .weakly-weather .weakly-weather-item i {
            font-size: 1.2rem
        }
    </style>
</head>
<body>
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-lg-8 grid-margin stretch-card">
                <!--weather card-->
                <div class="card card-weather">
                    <div class="card-body">
                        <div class="weather-date-location">
                            <h3>Friday</h3>
                            <p class="text-gray"> <span class="weather-date">25 March, 2019</span> <span class="weather-location">{{ $data->name }}, {{ $data->sys->country }}</span> </p>
                        </div>
                        <div class="weather-data d-flex">
                            <div class="mr-auto">
                                <h4 class="display-3">{{ $currentTemprature }} <span class="symbol">°</span>C</h4>
                                <p> {{ $data->weather[0]->main }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="d-flex weakly-weather">
                            <div class="weakly-weather-item">
                                <p class="mb-0"> Sun </p> <i class="mdi mdi-weather-cloudy"></i>
                                <p class="mb-0"> 30° </p>
                            </div>
                            <div class="weakly-weather-item">
                                <p class="mb-1"> Mon </p> <i class="mdi mdi-weather-hail"></i>
                                <p class="mb-0"> 31° </p>
                            </div>
                            <div class="weakly-weather-item">
                                <p class="mb-1"> Tue </p> <i class="mdi mdi-weather-partlycloudy"></i>
                                <p class="mb-0"> 28° </p>
                            </div>
                            <div class="weakly-weather-item">
                                <p class="mb-1"> Wed </p> <i class="mdi mdi-weather-pouring"></i>
                                <p class="mb-0"> 30° </p>
                            </div>
                            <div class="weakly-weather-item">
                                <p class="mb-1"> Thu </p> <i class="mdi mdi-weather-pouring"></i>
                                <p class="mb-0"> 29° </p>
                            </div>
                            <div class="weakly-weather-item">
                                <p class="mb-1"> Fri </p> <i class="mdi mdi-weather-snowy-rainy"></i>
                                <p class="mb-0"> 31° </p>
                            </div>
                            <div class="weakly-weather-item">
                                <p class="mb-1"> Sat </p> <i class="mdi mdi-weather-snowy"></i>
                                <p class="mb-0"> 32° </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--weather card ends-->
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
