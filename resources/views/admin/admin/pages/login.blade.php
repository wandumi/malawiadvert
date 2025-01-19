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
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-gray-100 to-gray-200">
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="w-full max-w-md">
            <!-- Logo on Top -->
            <div class="text-center mb-8">
                <a href="/" class="inline-block">
                    <img src="{{ asset('logos/malawivendorlogo.png') }}" alt="Malawi Adverts Logo" class="h-20 w-auto">
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-8">
                <div class="text-center mb-6">
                    <h1 class="text-2xl font-semibold text-gray-900">Login</h1>
                </div>

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf
                    <div>
                        <input type="email" name="email"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('email') border-red-500 @enderror"
                            placeholder="Enter Email Address" value="{{ old('email') }}">
                        @error('email')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <input type="password" name="password"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('password') border-red-500 @enderror"
                            placeholder="Password">
                        @error('password')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="remember"
                            class="rounded border-gray-300 text-gray-600 focus:ring-gray-800">
                        <label for="remember" class="ml-2 text-sm text-gray-600">Remember Me</label>
                    </div>

                    <button type="submit"
                        class="w-full py-2 px-4 bg-gray-800 hover:bg-green-600 text-white rounded-md transition duration-200">
                        Login
                    </button>
                </form>

                <div class="mt-6 border-t border-gray-200 pt-6">
                    <div class="text-center space-y-2">
                        <a href="{{ route('register') }}"
                            class="block text-sm font-semibold text-gray-600 hover:text-green-600">
                            Create an Account!
                        </a>
                        <a href="{{ url('/') }}"
                            class="block text-sm font-semibold text-gray-600 hover:text-green-600">
                            Back to Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
