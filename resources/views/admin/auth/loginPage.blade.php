<!doctype html>
<html lang="en">

<head>
    <title>Election - Login Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://use.fontawesome.com/393b5419bd.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/normalise.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="main-bg row justify-content-center align-items-center">

        <form class="login-form" method="POST" action="{{ route('admin.check') }}">
            @csrf

            <div class="text-center">
                <div class="login-img-cont">
                    <img class="login-img" src="{{ asset('images/lebanonflag.png') }}">
                </div>
                <h1>الإنتخابات النيابية 2022</h1>
                <div class="login-content">
                    @error('email')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    @error('password')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <input type="email" name="email" placeholder="الرّجاء ادخل الايميل" autofocus>
                    <input type="password" name="password" placeholder="الباسورد">
                    <div class="row remember-me-cont">
                        {{-- <div>
                            <a class="forget-password" href="{{ route('admin.forget') }}">
                                نسيت كلمة المرور ؟
                            </a>
                        </div> --}}
                        <div class=" row align-items-center">
                            <input class="m-0" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <p class="remember-me">تذكّرني</p>
                        </div>
                    </div>
                    <button type="submit">تسجيل الدّخول</button>
                </div>
            </div>

            <div>
                <p>Developed By Gms &copy; 2022</p>
            </div>
        </form>



    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>