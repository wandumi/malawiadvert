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
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-gray-100 to-gray-200">
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="max-w-md w-full">
            <!-- Logo on Top -->
            <div class="text-center mb-8">
                <a href="/" class="inline-block">
                    <img src="{{ asset('logos/malawivendorlogo.png') }}" alt="Malawi Adverts Logo" class="h-20 w-auto">
                </a>
            </div>


            <div class="bg-white rounded-lg shadow-lg">
                <div class="p-8">
                    <div class="text-center">
                        <h1 class="text-2xl font-bold text-gray-900 mb-6">Register</h1>
                    </div>
                    <form method="POST" action="{{ route('register') }}" class="space-y-4">
                        @csrf
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2">First Name</label>
                            <input type="text" name="name"
                                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror"
                                placeholder="Enter First Name">
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2">Last Name</label>
                            <input type="text" name="lname"
                                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter Last Name">
                        </div>

                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                            <input type="email" name="email"
                                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror"
                                placeholder="Enter Email Address" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                            <input type="password" name="password"
                                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror"
                                placeholder="Password">
                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2">Repeat Password</label>
                            <input type="password" name="password_confirmation"
                                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Repeat Password">
                        </div>

                        <button type="submit"
                            class="w-full bg-black text-white py-2 px-4 rounded-lg hover:bg-green-600 transition duration-200">
                            Register
                        </button>
                    </form>

                    <div class="mt-6 text-center">
                        <a class="text-sm font-semibold text-black hover:text-green-600" href="{{ route('login') }}">
                            Already have an account?
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('dist/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('dist/js/ruang-admin.min.js') }}"></script>
</body>

</html>
