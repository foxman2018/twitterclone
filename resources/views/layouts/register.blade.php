@extends('layouts.app')

@section('content')

<body class="background">
    <div class="flex items-center justify-center h-screen">
        <div class="w-4/12 bg-white p-6 rounded-lg justify-center">
            <div class="w-full mb-6 m-auto">
                <svg class="h-10 w-10 text-blue-500 m-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                </svg>
            </div>
            <form class="mt-4" action="{{ route('register') }}" method="post">
                @csrf
                <label for="name" class="sr-only">Name</label>
            <input type="text" class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-3" name="name" id="name" placeholder="Name" values="{{ old('name') }}">
                @error('name')
                    <div class="text-red-500 mb-3 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                <label for="username" class="sr-only">Username</label>
                <input type="text" class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-3" name="username" id="username" placeholder="Username" values="{{ old('username') }}">
                @error('username')
                    <div class="text-red-500 mb-3 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                <label for="email" class="sr-only">Email</label>
                <input type="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-3" name="email" id="email" placeholder="Email Address" values="{{ old('email') }}">
                @error('email')
                    <div class="text-red-500 mb-3 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                <label for="password" class="sr-only">Password</label>
                <input type="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-3" name="password" id="password" placeholder="Password" values="">
                @error('password')
                    <div class="text-red-500 mb-3 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                <label for="password_confirmation" class="sr-only">Confirm Password</label>
                <input type="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-5" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" values="">
                @error('password')
                    <div class="text-red-500 mb-3 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                <button type="submit" class="bg-blue-500 text-white w-full p-4 rounded-lg mb-3 font-medium">Register</button>
            </form>
            <div class="bottom-nav">
                <a href="{{ route('login') }}" class="flex items-center">
                    <svg class="h-6 w-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                    </svg>
                    <span class="text-sm p-3 text-blue-500">Back to Login</span>
                </a>
            </div>
        </div>
    </div>
</body>

@endsection