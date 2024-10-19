<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Login</title>
</head>

<body class="bg-blue-300">
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
    <div class="container md:mx-auto md:w-1/3 md:mt-20 mt-10 md:bg-white md:border justify-center rounded-lg md:shadow-lg">
        <div class="p-10 text-center md:w-96 md:mx-auto md:justify-center">
            <h1 class="md:text-3xl text-2xl font-semibold">Welcome Back</h1>
            <p class="mt-4">Enter your credentials to access your account</p>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="flex mx-auto mt-10 form-group">
                    <i class="fa-solid fa-envelope mt-3"></i>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="items-center border w-full ml-3 h-10 form-control" placeholder=" Enter your email">
                </div>
                <div class="flex mx-auto mt-5 form-group">
                    <i class="fa-solid fa-lock mt-3"></i>
                    <input type="password" name="password" class="form-control items-center border w-full ml-3 h-10"
                        placeholder=" Enter your password">
                </div>
                <div class="flex mx-auto form-group">
                    <i class="mt-3" hidden></i>
                    <button
                        class="border items-center ml-6 w-full p-2 mt-5 rounded-lg bg-green-500 text-white hover:bg-green-400">LOGIN</button>
                </div>
            </form>
            <div class="flex justify-center text-sm">
                <p class="mt-3">Don't have an account ?</p>
                <a href="{{ route('signUpPage') }}" class="mt-3 ml-2 hover:underline">Sign Up</a>
            </div>
            @if ($errors->any())
                <div>
                    <strong class="text-red-600">{{ $errors->first() }}</strong>
                </div>
            @endif
        </div>
    </div>
</body>

</html>
