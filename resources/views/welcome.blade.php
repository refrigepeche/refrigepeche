<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Refrigepeche</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url({{ asset('image/mer.jpeg') }});
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment:fixed;
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
                font-size: 30px;
                font-weight: bolder;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .card{
                background: #00000000;
                border: none;
                text-shadow: -1px 0 white, 0 1px white, 1px 0 white, 0 -1px white;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">

                <div class="card">
                    <div class="card-header">
                        <div class="title m-b-md" style="max-width: 100%">
                            <img src="{{ asset('image/logo.png') }}" alt="LOGO">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="links">
                            
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </body>
</html>
