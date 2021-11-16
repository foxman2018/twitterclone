@extends('layouts.app')

@section('content')

<body class="background">
    <div class="flex items-center justify-center h-screen">
        <div class="w-4/12 bg-white p-6 rounded-lg justify-center">
            <div class="w-full mb-2 m-auto">
                <svg class="h-20 w-20 text-blue-500 m-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                </svg>
            </div>
            <div class="w-full mb-10 text-center">
                <h1 class="text-blue-500 m-auto font-medium text-lg">{{ config('app.name') }}</h1>
            </div>

            @if (session('status'))
                <div class="text-red-500 mb-3 text-sm">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="post">
                @csrf

                <label for="email" class="sr-only">Email</label>
                <input type="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-3" name="email" id="email" placeholder="Email Address" values="">
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

                <div class="flex mb-4">
                    <label class="flex items-center">
                      <input type="checkbox" class="form-checkbox" name="remember" id="remember">
                      <span for="remember" class="ml-2 text-gray-700">Remember me</span>
                    </label>
                </div>

                <button type="submit" class="bg-blue-500 text-white w-full p-4 rounded-lg mb-3 font-medium">Login</button>
            </form>
            <div class="flex justify-between">
                <div class="flex items-center">
                    <a href="{{ route('posts') }}" class="flex items-center">
                        <svg class="h-6 w-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>
                        <span class="text-sm p-3 text-blue-500">Back to Posts</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <a href="{{ route('register') }}" class="flex items-center">
                        <span class="text-sm p-3 text-blue-500">Register</span>
                        <svg class="h-6 w-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection