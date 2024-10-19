<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Sign Up</title>
</head>

<body class="md:bg-blue-300">
    <div class="container border bg-white p-2 md:p-10 md:mx-auto md:mt-10 md:mb-10">
        <div class="flex gap-2 items-center mb-2">
            <p class="ml-auto">Already have an account ?</p>
            <a href="{{ route('loginPage') }}">
                <button class="border p-2 rounded-lg font-semibold shadow-sm">Sign In</button>
            </a>
        </div>
        <div class="md:grid md:grid-cols-2">
            <div class="border">
                <img src="{{ asset('foto1.jpg') }}" alt="foto1" class="">
            </div>
            <div class="border content-center p-10">
                <h1 class="font-bold md:text-4xl text-2xl mb-2">Welcome to Our App !</h1>
                <h3 class="font-extralight md:text-xl text-base">Register your account</h3>
                <form action="{{ route('storeData') }}" class="mt-10" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                            class="border w-full rounded-lg p-2 mt-2" placeholder=" Enter your name">
                        @error('name')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label for="">Email</label>
                        <input type="text" name="email" id="email" value="{{ old('email') }}"
                            class="border w-full rounded-lg p-2 mt-2" placeholder=" Enter your email">
                        @error('email')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label for="">Password</label>
                        <input type="password" name="password" id="password" class="border w-full rounded-lg p-2 mt-2"
                            placeholder=" Enter your password">
                        @error('password')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                        <p class="font-bold text-[10px] mt-2">(* The password consists of a minimum of 8 characters, a maximum of 32 characters and contains uppercase letters, lowercase letters, numbers and special characters)</p>
                    </div>
                    <button type="submit"
                        class="border w-full font-semibold rounded-lg p-3 mt-5 bg-blue-400 hover:bg-blue-300">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
