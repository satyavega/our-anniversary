<div class="flex flex-col gap-5">
    <div class="flex items-center gap-5">
        <h1 class="font-sans text-3xl font-extrabold md:text-6xl">Our Anniversary</h1>
        <div class="md:w-40 h-[2px] mt-3 w-20 bg-cyan-500"></div>
    </div>
    <div class="flex flex-col gap-5 mt-10 md:gap-10 md:flex-row">
        @if ($posts->count())
            <a class="flex flex-col gap-5 md:flex-row group" href="moments/{{ $posts[0]->slug }}">
                <div>
                    @if ($posts[0]->image)
                        <div class="md:w-[30rem]">
                            <img class="object-cover w-full mb-4 overflow-hidden aspect-video rounded-2xl bg-black/30"
                                src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}">
                        </div>
                    @else
                        <img class="object-cover shadow-xl rounded-lg w-[350px] min-h-[300px] max-sm:w-11/12"
                            src="https://picsum.photos/1200/400" alt="">
                    @endif
                </div>
                <div class="flex flex-col justify-between">
                    <div class="flex flex-col gap-3 mb-3">
                        <div class="flex flex-col">
                            <h1
                                class="text-lg font-bold leading-tight transition-all duration-500 ease-in-out md:leading-snug md:tracking-tight md:text-3xl group-hover:text-blue-500">
                                {{ $posts[0]->title }}</h1>
                            <h4 class="text-sm font-semibold text-gray-400">{{ $posts[0]->category->name }}</h4>
                        </div>
                        <p class="text-xs text-justify md:text-sm line-clamp-3">{{ strip_tags($posts[0]->body) }}</p>
                    </div>
                    <button
                        class="mb-5 text-gray-100 capitalize transition-all duration-500 ease-in-out bg-blue-500 btn btn-xs hover:bg-blue-800">Baca
                        selengkapnya..</button>
                </div>
        @endif
        </a>
    </div>
    <div class="grid grid-cols-2 gap-5 md:grid-cols-3">
        @foreach ($posts->skip(1) as $post)
            <a class="flex flex-col group" href="moments/{{ $post->slug }}">
                <div>
                    @if ($post->image)
                        <div class="">
                            <img class="object-cover w-full mb-4 overflow-hidden aspect-video rounded-2xl bg-black/30"
                                src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                        </div>
                    @else
                        <img class="object-cover w-full mb-4 overflow-hidden aspect-video rounded-2xl bg-black/30"
                            src="https://picsum.photos/1200/400" alt="{{ $post->category->name }}">
                    @endif
                </div>
                <div class="">
                    <h5
                        class="text-lg font-bold leading-5 tracking-tight transition-all duration-500 ease-in-out md:text-xl group-hover:text-blue-500">
                        {{ $post->title }}</h5>
                    <h4 class="text-xs font-medium text-gray-400">{{ $post->category->name }}
                    </h4>
                </div>
            </a>
        @endforeach
    </div>
</div>
