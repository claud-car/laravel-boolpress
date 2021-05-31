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
                        <a href="{{ route('admin.index') }}">Home</a>
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
                    Boolpress
                </div>

                <div class="row justify-content-center">
            <div class="col-md-8">

                <form action="{{route('contact')}}" action="" method="POST">
                    @csrf
                    @method('POST')
        
                    <div class="form-group">
                        <label for="name">Nome e Cognome</label>
                        <input class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                        @error ('name')
                            <small class=" text-danger"> {{ $message }} </small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                        @error ('email')
                            <small class=" text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
        
                    <div class="form-group">
                        <label for="name">Oggetto</label>
                        <input class="form-control @error('oggetto') is-invalid @enderror" id="oggetto" name="oggetto">
                        @error ('oggetto')
                           <small class=" text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
        
                    <div class="form-group">
                        <label for="name">Content</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content"></textarea>
                        @error ('content')
                            <small class=" text-danger"> {{ $message }} </small>
                        @enderror
                    </div>

                    <button class="btn btn-primary" type="submit">Invia</button>
        
                </form>
            </div>
        </div>



                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
