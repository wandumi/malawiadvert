<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>MalawiAdverts - Login</title>
    <link href="{{ asset('dist/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dist/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dist/css/ruang-admin.min.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-login">
    {{-- Login Content --}}
    <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">
        <div class="row justify-content-center w-100">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                <!-- Website Name on Top -->
                <div class="text-center mb-4">
                    <button class="btn btn-link h1 text-dark"
                        style="text-decoration: none; outline: none; font-size:2.5em;"
                        onclick="window.location.href='/'">
                        Malawi Adverts
                    </button>

                </div>

                <div class="card shadow-sm my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-form">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address" value="{{ old('email') }}">
                                            @error('email')
                                                <div class="invalid-feedback"> {{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="exampleInputPassword" placeholder="Password">
                                            @error('password')
                                                <div class="invalid-feedback"> {{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small"
                                                style="line-height: 1.5rem;">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-dark btn-block">Login</button>
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="font-weight-bold small" href="{{ route('register') }}">Create an
                                            Account!</a>
                                    </div>
                                    <div class="text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
