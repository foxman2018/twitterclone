@extends('layouts.app')

@section('content')

<body class="bg-gray-200">

    @include('partials.nav')

    <div class="flex justify-center mt-6 mb-6">
        <div class="w-8/12 bg-white p-6 rounded-lg mt-20 mb-4">

            {{-- <ul class="flex">
                <li class="flex-1 mr-2">
                  <a class="text-center block border border-blue-500 rounded-t py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white" href="#">Posts</a>
                </li>
                <li class="flex-1 mr-2">
                    <a class="text-center block border border-white rounded-t hover:border-gray-200 text-blue-500 hover:bg-gray-200 py-2 px-4" href="#">Messages</a>
                </li>
                <li class="flex-1 mr-2">
                    <a class="text-center block border border-white rounded-t hover:border-gray-200 text-blue-500 hover:bg-gray-200 py-2 px-4" href="#">Likes</a>
                </li>
                <li class="flex-1 mr-2">
                    <a class="text-center block border border-white rounded-t hover:border-gray-200 text-blue-500 hover:bg-gray-200 py-2 px-4" href="#">Media</a>
                </li>
            </ul>
            <hr/> --}}

            <div class="mt-4">
                <div class="w-full rounded overflow-hidden shadow-lg mb-3">
                    <a href="{{ route('post') }}">  
                        <div class="flex items-center pt-4 mr-3 mb-3 px-6">
                            <img class="w-10 rounded-full mr-3" src="https://picsum.photos/120/120" alt="Sunset in the mountains">
                            <p class="text-gray-700 text-base">
                                User 1
                            </p>
                        </div>
                        <img class="w-full" src="https://picsum.photos/680/300" alt="Sunset in the mountains">
                        <div class="py-4 px-6">
                            <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                        <div class="flex items-center text-sm px-6">
                            <svg class="w-6 mr-2 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                            <span class="mr-5 text-gray-500">6 Likes</span>
                            <svg class="w-6 mr-2 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            <span class="mr-5 text-gray-500">3 Comments</span>
                        </div>
                        <div class="pt-4 pb-2 px-6">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                        </div>
                        <div class="flex items-center mb-4 text-sm float-right px-6">
                            <span class="mr-3 text-red-500">Remove Post</span>
                            <svg class="w-6 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </div>
                    </a>
                </div>

                <div class="w-full rounded overflow-hidden shadow-lg mb-3">
                    <div class="flex items-center px-6 pt-4 mr-3 mb-3">
                        <img class="w-10 rounded-full mr-3" src="https://picsum.photos/120/120" alt="Sunset in the mountains">
                        <p class="text-gray-700 text-base">
                            User 2
                        </p>
                    </div>
                    <div class="px-6 py-4">
                      <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                      </p>
                    </div>
                    <div class="flex items-center px-6 text-sm">
                        <svg class="w-6 mr-2 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        <span class="mr-5 text-gray-500">2 Likes</span>
                        <svg class="w-6 mr-2 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                        <span class="mr-5 text-gray-500">13 Comments</span>
                    </div>
                    <div class="px-6 pt-4 pb-2"><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#night</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('partials.footer')

</body>

@endsection