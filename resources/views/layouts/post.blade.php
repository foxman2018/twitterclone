@extends('layouts.app')

@section('content')

<body class="bg-gray-200">

    @include('partials.nav')

    <div class="flex justify-center mt-6 mb-6">
        <div class="w-8/12 bg-white p-6 rounded-lg mt-20 mb-4">

            <div class="mt-4">
                <div class="w-full rounded overflow-hidden shadow-lg mb-3">


                    <a href="{{ route('userposts') }}">  
                        <div class="flex items-center justify-between pt-4 mr-3 mb-3 px-6">
                            <div class="flex items-center">
                                <img class="w-10 rounded-full mr-3" src="https://picsum.photos/120/120" alt="Sunset in the mountains">
                                <p class="text-gray-700 text-base">
                                    {{ $post->user->username }}
                                </p>
                            </div>
                            <div class="float-right">
                                <i><span class="text-gray-500 text-sm">{{ $post->created_at->diffForHumans() }}</span></i>
                            </div>
                        </div>
                    </a>
                    
                    @if ($post->image)

                        <img class="w-full" src="https://picsum.photos/680/300" alt="Sunset in the mountains">

                    @endif

                    <div class="py-4 px-6">
                        <div class="font-bold text-xl mb-2">{{ $post->title }}</div>
                        <p class="text-gray-700 text-base">
                            {{ $post->text }}
                        </p>
                    </div>

                    <div class="flex items-center text-sm px-6">
                        @auth
                            @if (!$post->likedBy(auth()->user()))
                                <form action="{{ route('post.likes', $post->id) }}" method="POST">
                                    @csrf
                                    <button type="submit">
                                        <svg class="w-6 mr-2 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>
                                </form>
                            @else
                                <form action="{{ route('post.likes', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <svg class="w-6 mr-2 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </form>
                            @endif
                        @endauth
                        @guest
                            <svg class="w-6 mr-2 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        @endguest
                        <span class="mr-5 text-gray-500">{{ $post->likes->count() }} {{ Str::plural('Like', $post->likes->count()) }}</span>
                        <svg class="w-6 mr-2 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                        <span class="mr-5 text-gray-500">{{ $post->comment->count() }} {{ Str::plural('Comment', $post->comment->count()) }}</span>
                    </div>
                    <div class="pt-4 pb-2 px-6">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>

                    @if ($post->user_id == auth()->user()->id)
                        
                        <div class="flex items-center mb-4 text-sm float-right px-6">
                            <span class="mr-3 text-red-500">Remove Post</span>
                            <svg class="w-6 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </div>

                    @endif
                    
                </div>
            </div>

            @auth
            <div class="mt-4">
                <form action="{{ route('post.comment', $post->id) }}" method="POST">
                    @csrf
                    <label for="comment" class="sr-only">Comment</label>
                    <textarea type="text" class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-3" name="comment" id="comment" placeholder="Comment" values=""></textarea>
                    @error('reply')
                        <div class="text-red-500 mb-3 text-sm">
                            {{ $message }}
                        </div>
                    @enderror

                    <button type="submit" class="bg-blue-500 text-white w-full p-4 rounded-lg mb-3 font-medium">Post Comment</button>
                </form>
            </div>
            @endauth

            @foreach ($comments->reverse() as $comment)

            <div class="mt-4">
                <div class="w-full rounded overflow-hidden shadow-lg mb-3 px-6">
                    <div class="flex items-center justify-between pt-4 mr-3 mb-3">
                        <div class="flex items-center">
                            <img class="w-10 rounded-full mr-3" src="https://picsum.photos/120/120" alt="Sunset in the mountains">
                            <p class="text-gray-700 text-base">
                                {{ $comment->user->username }}
                            </p>
                        </div>
                        <div class="float-right">
                            <i><span class="text-gray-500 text-sm">{{ $comment->created_at->diffForHumans() }}</span></i>
                        </div>
                    </div>
                    <div class="pb-4">
                      <p class="text-gray-700 text-base">
                        {{ $comment->comment }}
                      </p>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>

    @include('partials.footer')

</body>

@endsection