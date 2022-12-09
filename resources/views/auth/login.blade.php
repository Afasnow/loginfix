<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/new_icon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PT Indonesia Comnets Plus</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('js/particles.js-master/demo/css/style.css') }} ">
    <script src="{{ asset('js/vendor.js') }}"></script>
</head>

<body class="text-center" >
    <div id="particles-js">
        <div id="login">    
            <div class="card" >
                <form class="form-signin" method="POST" action="{{ route('login') }}">
                    @csrf
                   
                    <div class="ch">
                        <img class="mb-2" src="{{ asset('img/new_icon1.png') }}" alt="" width="150" height="100">
                    </div>
                    <div class="card-body">
                        {{-- <img src="{{ asset('img/new_icon1.png') }}" alt="" width="150" height="100"> --}}
                        {{-- <img class="mb-2" src="{{ asset('img/new_icon1.png') }}" alt="" width="150" height="100"> --}}
                        <label for="username" class="sr-only">{{ __('Username') }}</label>
                        <input type="text" id="username" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                        <label for="password" class="sr-only">{{ __('Password') }}</label>
                        <input type="password" id="password" class="form-control mt-3" placeholder="Password" name="password" required autocomplete="current-password">
                        <button class="btn btn-lg btn-info btn-block mt-4" type="submit">{{ __('Login') }}</button>
                        <p class="mt-4 mb-3">Copyright &copy; PT Indonesia Comnets Plus
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <body>
        <div class="box">
            <div class="form">
                <h2>Sign in</h2>
                <div class="inputBox">
                    <input type="text" required="required">
                    <span>Username</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" required="required">
                    <span>Password</span>
                    <i></i>
                </div>
                <input type="submit" value="Login">
            </div>
        </div>
    </body> --}}


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/particles.js-master/particles.js') }}"></script>
    <script src="{{ asset('js/particles.js-master/demo/js/app.js') }}"></script>
</body>

</html>
