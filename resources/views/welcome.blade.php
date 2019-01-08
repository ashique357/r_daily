<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="/index">Index</a>
                    <a href="/index2">Index2</a>
                    <a href="/index3">Index3</a>
                    <a href="/starter">Starter</a>
                    <a href="/calendar">Calendar</a>
                    <a href="/widgets">Widgets</a>
                    <a href="/chartjs">Chart Js</a>
                    <a href="/flot">Flot Chart</a>
                    <a href="/inline">Inline Chart</a>
                    <a href="/404">404 Error Page</a>
                    <a href="/500">500 Error Page</a>
                    <a href="/blank">Blank Page</a>
                    <a href="/invoice">Invoice Page</a>
                    <a href="/invoice_print">Invoice Print Page</a>
                    <a href="/lock-screen">Lock Screen</a>
                    <a href="/login">Login</a>
                    <a href="/profile">Profile</a>
                    <a href="/register">Register</a>
                    <a href="/advanced">Advanced</a>
                    <a href="/editors">Editors</a>
                    <a href="/general">Generals</a>
                    <a href="/compose">Compose</a>
                    <a href="/mailbox">Mail-Box</a>
                    <a href="/read-mail">Read Mail</a>
                    <a href="/buttons">Buttons</a>
                    <a href="/general-buttons">General Buttons</a>
                    <a href="/icons">Icons</a>
                    <a href="/sliders">Sliders</a>
                    <a href="/data">Data</a>
                    <a href="/simple-data">Simple Data</a>
                </div>
            </div>
        </div>
    </body>
</html>
