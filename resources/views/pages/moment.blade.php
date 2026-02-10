@extends('layouts.main')
@section('container')

    {{-- HEADER --}}
    <div class="flex flex-col pt-20">
        <div class="flex items-center gap-4">
            <h1 class="text-5xl font-bold text-black">Our Moments</h1>
            <div class="w-20 h-[2px] mt-3 bg-cyan-500 lg:w-36 md:w-28"></div>
        </div>
        <p class="text-base font-normal text-cyan-500">
            <a class="text-slate-700" href="/">Beranda</a>
            > <span class="text-black">{{ Str::title($title) }}</span>
        </p>
    </div>

    @if ($posts->count())
@php
    $featuredPost = $posts->firstWhere('id', 6);
@endphp
@if ($featuredPost)
<div class="flex flex-col items-center my-10 overflow-hidden bg-white border border-gray-200 rounded-lg shadow">

    <div class="w-full overflow-hidden rounded-md">
        <img class="object-cover max-h-[450px] w-full shadow-xl rounded-md"
             src="{{ asset('storage/' . $featuredPost->image) }}"
             alt="{{ $featuredPost->category->name }}">
    </div>

    <div class="flex flex-col p-6 leading-normal">
        <h5 class="mb-2 text-2xl font-bold text-gray-900">
            <a href="/moments/{{ $featuredPost->slug }}" class="hover:underline">
                {{ $featuredPost->title }}
            </a>
        </h5>

        <p class="mb-2 text-sm text-gray-500">
            By
            <a class="text-blue-500 hover:underline"
               href="{{ route('users.posts', ['user' => $featuredPost->author->slug]) }}">
                {{ $featuredPost->author->username }}
            </a>
            in
            <a class="text-blue-500 hover:underline"
               href="{{ route('categories.posts', ['category' => $featuredPost->category->slug]) }}">
                {{ $featuredPost->category->name }}
            </a>
        </p>

        <p class="mb-4 text-gray-600">{{ $featuredPost->excerpt }}</p>

        <a href="/moments/{{ $featuredPost->slug }}"
           class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg w-max hover:bg-blue-800">
            Read more →
        </a>
    </div>
</div>
@endif


        {{-- ALL ABOUT US (SECTION KAMU, TETAP ADA) --}}
        {{-- <div class="flex items-center gap-2 py-10">
            <h1 class="text-4xl font-semibold text-slate-700">All about US</h1>
            <div class="w-60 h-[2px] mt-3 bg-cyan-500"></div>
        </div> --}}

        {{-- HIGHLIGHT POST --}}
        {{-- <div class="flex mb-20 max-md:flex-col md:gap-5">
            <a href="/moments/{{ $posts[0]->slug }}">
                <img src="{{ asset('storage/' . $posts[0]->image) }}"
                     class="object-cover w-full md:w-[30rem] aspect-video rounded-2xl">
            </a>

            <div class="flex flex-col justify-center">
                <a href="/moments/{{ $posts[0]->slug }}">
                    <h1 class="mb-2 text-3xl font-bold">
                        {{ $posts[0]->title }}
                    </h1>
                </a>

                <p class="mb-2 text-sm text-gray-500">
                    {{ $posts[0]->created_at->diffForHumans() }}
                </p>

                <p class="text-gray-700">{{ $posts[0]->excerpt }}</p>
            </div>
        </div> --}}

        {{-- SMALL LATEST POSTS (TETAP) --}}
        {{-- <div class="grid grid-cols-1 gap-5 mb-20 md:grid-cols-2">
            @foreach ($latestPosts->skip(1) as $post)
                <div class="flex gap-4">
                    <a href="/moments/{{ $post->slug }}">
                        <img src="{{ asset('storage/' . $post->image) }}"
                             class="object-cover w-40 aspect-video rounded-xl">
                    </a>
                    <div>
                        <a href="/moments/{{ $post->slug }}">
                            <h5 class="font-semibold hover:underline">
                                {{ $post->title }}
                            </h5>
                        </a>
                        <p class="text-sm text-gray-500">
                            {{ $post->created_at->diffForHumans() }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div> --}}

        {{-- 🔥 ALL POSTS SECTION (INI YANG KURANG SEBELUMNYA) --}}
        <div class="py-10">
            <div class="flex items-center gap-2 mb-10">
                <h2 class="text-4xl font-bold text-slate-700">All Moments</h2>
                <div class="w-40 h-[2px] mt-3 bg-cyan-500"></div>
            </div>

            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($posts as $post)
                    <a href="/moments/{{ $post->slug }}" class="group">

                        <div class="overflow-hidden rounded-2xl">
                            <img src="{{ asset('storage/' . $post->image) }}"
                                 class="object-cover w-full transition-transform duration-500 h-60 group-hover:scale-105">
                        </div>

                        <div class="mt-3">
                            <h3 class="text-lg font-semibold group-hover:text-cyan-600">
                                {{ $post->title }}
                            </h3>
                        </div>

                    </a>
                @endforeach
            </div>
        </div>

    @else
        <p class="text-xl font-bold text-center">
            404 Post <span class="text-red-600">Not Found!</span>
        </p>
    @endif

@endsection
