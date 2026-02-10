@extends('layouts.main')
@section('container')
    <div class="flex mt-10 mb-5">
        <div class="flex flex-col bg-white rounded-lg">
            <h5 class="mb-2 text-2xl font-bold text-gray-900">
                {{ $post->title }}
            </h5>
            <small>
                <p class="inline-flex gap-1 mb-2 text-sm font-normal text-gray-500">By: <a
                        class="text-blue-500 hover:underline"
                        href="{{ route('users.posts', ['user' => $post->author->slug]) }}">{{ $post->author->username }}</a>
                    in <a class="text-blue-500 hover:underline"
                        href="{{ route('categories.posts', ['category' => $post->category->slug]) }}">{{ $post->category->name }}</a>
                    {{ $post->created_at->diffForHumans() }}
                </p>
            </small>
@php
    // DETECT IMAGE ORIENTATION
    $imagePath = storage_path('app/public/' . $post->image);
    [$width, $height] = getimagesize($imagePath);
    $isPortrait = $height > $width;
@endphp

@if ($post->image)
<section class="py-20 bg-gradient-to-br from-gray-50 via-white to-gray-100">

    <div class="max-w-6xl px-6 mx-auto">

        <div class="{{ $isPortrait ? 'md:flex md:items-center md:gap-12' : '' }}">

            {{-- IMAGE --}}
            <div class="{{ $isPortrait ? 'md:w-1/2' : 'w-full' }}">
                <img
                    class="w-full h-auto shadow-2xl rounded-2xl shadow-black/10 ring-1 ring-black/5"
                    src="{{ asset('storage/' . $post->image) }}"
                    alt="{{ $post->category->name }}"
                >
            </div>

            {{-- DIVIDER (ONLY PORTRAIT) --}}
            @if ($isPortrait)
                <div class="items-center hidden md:flex">
                    <div class="w-px h-32 bg-gradient-to-b from-transparent via-gray-300 to-transparent"></div>
                </div>
            @endif

            {{-- BODY --}}
            <div class="{{ $isPortrait ? 'md:w-1/2 mt-8 md:mt-0 flex items-center' : 'mt-12' }}">
                <div class="relative p-8 bg-white shadow-lg rounded-2xl shadow-black/5">

                    {{-- QUOTE DECORATION --}}
                    @if ($isPortrait)
                        {{-- BIG QUOTE (PORTRAIT) --}}
                        <span class="absolute text-gray-200 select-none -top-6 -left-6 text-7xl">
                            “
                        </span>
                    @else
                        {{-- SMALL QUOTE (LANDSCAPE) --}}
                        <span class="absolute text-4xl text-gray-300 select-none top-4 left-4">
                            “
                        </span>
                    @endif

                    {{-- BODY CONTENT --}}
                    <div class="leading-relaxed prose prose-lg max-w-none first-letter:text-6xl first-letter:font-bold first-letter:text-gray-700">
                        {!! $post->body !!}
                    </div>

                </div>
            </div>

        </div>

        {{-- FOOTER DECORATION --}}
        <div class="flex justify-center mt-20">
            <span class="text-sm italic text-gray-400">
                — a moment worth remembering —
            </span>
        </div>

    </div>

</section>
@endif

            <a class="px-4 py-2 text-white capitalize bg-blue-500 rounded btn hover:bg-blue-600 max-w-max aos-init aos-animate"
                href="/moments">Kembali ke momen kami</a>
        </div>
    </div>
@endsection
