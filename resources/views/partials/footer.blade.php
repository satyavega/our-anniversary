<footer class="flex flex-col p-5 mt-10 text-white footer bg-slate-900">
    <div class="flex flex-row w-full gap-20 pb-5 border-b border-gray-600 max-lg:flex-col max-lg:gap-10">
        @foreach ($logos as $logo)
            <a class="flex items-center gap-5" href="/"><img class="w-20 rounded"
                    src="{{ asset('storage/' . $logo->image) }}" alt="logo BEM BSI" title="logo BEM BSI">
                <span class="flex flex-col items-center text-2xl"></span>
            </a>
        @endforeach
        <div class="flex flex-col gap-5">
            <div class="flex flex-col gap-3">
                <h1 class="text-2xl font-semibold">Fovever with You</h1>
                <div class="w-80 h-[2px] bg-cyan-900 max-sm:w-1/2"></div>
            </div>
            <div class="flex flex-row gap-5 max-md:flex-col">
                <div class="flex flex-col gap-2">
                    <h3 class="font-mono text-xl font-semibold">Praja & Naura</h3>

                </div>
            </div>
        </div>
    </div>
    {{-- <div class="w-full px-5">
        <div class="flex flex-col gap-3">
            <h1 class="text-3xl font-semibold">Follow us!</h1>
            <ul class="flex gap-3 text-base font-normal">
                <li><a target="_blank" class="transition-all duration-500 ease-in-out hover:text-cyan-400"
                        href="https://www.instagram.com/bemubsisukabumi/"><i class="fa-brands fa-instagram fa-xl"></i>
                    </a>
                </li>
                <li><a target="_blank" class="transition-all duration-500 ease-in-out hover:text-cyan-400"
                        href="https://m.facebook.com/profile.php/?id=100067185642359"><i
                            class="fa-brands fa-facebook fa-xl"></i></a>
                </li>
                <li><a target="_blank" class="transition-all duration-500 ease-in-out hover:text-cyan-400"
                        href="https://twitter.com/ubsi_sukabumi"><i class="fa-brands fa-x-twitter fa-xl"></i></a>
                </li>
            </ul>
        </div>
    </div> --}}
</footer>
<div class="w-full p-5 font-thin text-white footer bg-slate-950">
    <p> Forever with You</p>
</div>
