<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
            
            button{
                padding: 20px 40px;
                border: 5px solid rgba(60, 60, 223, 0.698);
                background: rgb(90, 100, 243);
                color:white;
                font-size: larger;
                border-radius: 10px;
            }
            button:hover{
                border: 5px solid rgba(60, 60, 223, 0.698);
                background: rgb(75, 84, 224);
                transition-duration: 1s;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            a{
                color: #fff;
                text-decoration: none
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height " >
            @if (Route::has('login'))
                <div class="top-right links " >
                    @auth
                        {{-- @include('layouts.navbar') --}}
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
                    Create Exam
                </div>
               <button class="btn btn-primary"><a href='http://localhost:8000/home'>start</a></button>
            </div>
        </div>
    </body>
</html>
