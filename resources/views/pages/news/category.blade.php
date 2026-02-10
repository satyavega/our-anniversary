@extends('layouts.main')
@section('container')

    <div class="flex flex-col gap-3 py-20">
        <div class="flex items-center gap-4">
            <h1 class="text-3xl font-bold text-black md:text-5xl">{{ $category->name }}</h1>
            <div class="w-20 h-[2px] mt-3 bg-cyan-500 lg:w-36 md:w-28"></div>
        </div>
        <p class="text-xs font-normal text-cyan-500 md:text-base"><a class="text-slate-700" href="/">Beranda</a> > <span
                class="text-black">Category : <span class="font-bold">{{ $category->name }}</span></span></p>
    </div>
    @if ($posts->count())
        @foreach ($posts as $post)
            <div class="grid grid-cols-1">
                <div class="flex flex-col gap-5 mb-10 md:flex-row">
                    <a href="/moments/{{ $post->slug }}">
                        <div class="md:w-[26rem]">
                            <img src="{{ asset('storage/' . $post->image) }}"
                                class="object-cover w-full mb-4 aspect-video rounded-2xl overflow-hiddenbg-black/30"
                                alt="">
                        </div>
                    </a>
                    <div class="flex flex-col">
                        <a href="/moments/{{ $post->slug }}">
                            <h5
                                class="text-base font-bold leading-tight tracking-tight transition-all duration-500 ease-in-out line-clamp-3 md:line-clamp-2 md:text-lg group-hover:underline group-hover:text-blue-500">
                                {{ $post->title }}</h5>
                        </a>
                        <small>
                            <p class="mb-2 text-sm font-normal text-gray-500">By: <a class="text-blue-500 hover:underline"
                                    href="{{ route('users.posts', ['user' => $post->author->slug]) }}">
                                    {{ $post->author->username }}
                                </a>
                                in <a class="text-blue-500 hover:underline"
                                    href="{{ route('categories.posts', ['category' => $post->category->slug]) }}">
                                    {{ $post->category->name }}
                                </a>
                                {{ $post->created_at->diffForHumans() }}
                            </p>
                            <p class="line-clamp-3">
                                {{ strip_tags($post->body) }}
                            </p>
                        </small>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p class="text-xl font-bold text-center">404 Post <span class="text-red-600">Not Found!</span></p>
    @endif
@endsection
