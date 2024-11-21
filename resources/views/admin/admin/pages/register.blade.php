<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>MalawiAdverts - Register</title>
    <link href="{{ asset('dist/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dist/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dist/css/ruang-admin.min.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-login">
    {{-- Register Content --}}
    <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">
        <div class="row justify-content-center w-100">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">

                {{-- <div class="text-center m-4">
                    <button class="btn btn-link h1 text-dark"
                        style="text-decoration: none; outline: none; font-size:2.5em;"
                        onclick="window.location.href='/'">
                        Malawi Adverts
                    </button>

                </div> --}}
                <div class="card shadow-sm my-5">

                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-form">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Register</h1>
                                    </div>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                id="exampleInputFirstName" placeholder="Enter First Name">
                                            @error('name')
                                                <div class="invalid-feedback"> {{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="lname" class="form-control"
                                                id="exampleInputLastName" placeholder="Enter Last Name">
                                        </div>
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
                                            <label>Password</label>
                                            <input type="password" name="password"
                                                class="form-control @error('email') is-invalid @enderror"
                                                id="exampleInputPassword" placeholder="Password">
                                            @error('password')
                                                <div class="invalid-feedback"> {{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password-confirm">Repeat Password</label>
                                            <input type="password" name="password_confirmation" class="form-control"
                                                id="password-confirm" placeholder="Repeat Password">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                                        </div>
                                        {{-- <hr>
                                        <a href="{{ route('dashboard') }}" class="btn btn-google btn-block">
                                            <i class="fab fa-google fa-fw"></i> Register with Google
                                        </a>
                                        <a href="{{ route('dashboard') }}" class="btn btn-facebook btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                        </a> --}}
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="font-weight-bold small" href="{{ route('login') }}">Already have an
                                            account?</a>
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

    {{-- Register Content --}}
    <script src="{{ asset('dist/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('dist/js/ruang-admin.min.js') }}"></script>
</body>

</html>
