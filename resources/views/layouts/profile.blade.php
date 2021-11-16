@extends('layouts.app')

@section('content')

<body class="background">
    <div class="flex items-center justify-center h-screen mt-4 mb-4">
        <div class="w-4/12 bg-white p-6 rounded-lg justify-center">
            <div class="w-full mb-6 m-auto">
                <svg class="h-10 w-10 text-blue-500 m-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                </svg>
            </div>
            <p class="text-center"><i>You can edit these details</i></p>
            <form class="mt-4" action="{{ route('profile') }}" method="POST">
                @csrf
                {{-- @method('PUT') --}}
                <label for="name" class="sr-only">Name</label>
                <input type="text" class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-3" name="name" id="name" placeholder="Name" value="{{ $user->name }}">
                @error('name')
                    <div class="text-red-500 mb-3 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                <label for="username" class="sr-only">Username</label>
                <input type="text" class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-3" name="username" id="username" placeholder="Username" value="{{ $user->username }}">
                @error('username')
                    <div class="text-red-500 mb-3 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                <input type="file" id="profile_image" name="profile_image" accept="image/png, image/jpeg">

                {{-- <div class="border rounded-lg border-gray-200 border-2 relative mb-3 ">
                    <input type="file" id="avatar" name="avatar" multiple class="cursor-pointer relative block border-gray-200 border-2 opacity-0 w-full h-full p-16 z-50">
                    <div class="text-center p-10 absolute top-0 right-0 left-0 m-auto">
                        <h4>
                            Drop image anywhere to upload
                            <br/>or
                        </h4>
                        <p class="">Select Image</p>
                    </div>
                </div> --}}

                <button type="submit" class="bg-blue-500 text-white w-full p-4 rounded-lg mb-3 font-medium">Save Details</button>

                @if (session('status'))
                    {{ $session('status') }}
                @endif
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