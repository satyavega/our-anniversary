@extends('layouts.main')
@section('container')
    <section class="min-h-[60vh] md:min-h-screen flex flex-col">
        <div class="flex flex-col gap-3 pt-20 mb-20">
            <div class="flex items-center gap-4">
                <h1 class="text-5xl font-bold text-black max-sm:text-3xl max-md:text-4xl">Kementrian BEM Akusaraabhinaya
                </h1>
                <div class="w-20 h-[2px] mt-3 bg-cyan-500 lg:w-36 md:w-28 max-lg:hidden"></div>
            </div>
            <p class="text-base font-normal text-cyan-500"><a class="text-slate-700" href="/">Beranda</a> > <span
                    class="text-black">{{ Str::title($title) }}</span></p>
        </div>
        <div class="grid grid-cols-1 gap-8 mb-20 md:grid-cols-3 gap-y-6">
            <a class="flex flex-row items-center w-full overflow-hidden transition-all duration-500 ease-in-out rounded-lg group bg-gray-50 hover:bg-gray-300 h-14"
                href="kementrian/sekretaris">
                <div
                    class="items-center justify-center p-4 transition-all duration-500 ease-in-out rounded-md bg-cyan-500 group-hover:bg-cyan-600">
                    <i
                        class="text-white transition-all duration-500 ease-in-out fa-solid fa-file-pen fa-2xl group-hover:text-gray-200"></i>
                </div>
                <p
                    class="flex-auto px-4 text-base leading-4 transition-all duration-500 ease-in-out group-hover:translate-x-1">
                    Sekretaris</p>
                <i
                    class="px-3 transition-all duration-500 ease-in-out fa-solid fa-arrow-right group-hover:translate-x-1"></i>
            </a>
            <a class="flex flex-row items-center w-full overflow-hidden transition-all duration-500 ease-in-out rounded-lg group bg-gray-50 hover:bg-gray-300 h-14"
                href="">
                <div
                    class="items-center justify-center p-4 transition-all duration-500 ease-in-out rounded-md bg-cyan-500 group-hover:bg-cyan-600">
                    <i
                        class="text-white transition-all duration-500 ease-in-out fa-solid fa-money-bill-transfer fa-2xl group-hover:text-gray-200"></i>
                </div>
                <p
                    class="flex-auto px-4 text-base leading-4 transition-all duration-500 ease-in-out group-hover:translate-x-1">
                    Bendahara</p>
                <i
                    class="px-3 transition-all duration-500 ease-in-out fa-solid fa-arrow-right group-hover:translate-x-1"></i>
            </a>
        </div>
        {{-- Dalam Negeri --}}
        <div class="mb-20">
            <div class="mb-8 text-2xl font-bold text-zinc-800">Kementrian <span class="text-cyan-500">Dalam Negeri</span>
            </div>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 gap-y-6">
                <a class="flex flex-row items-center w-full overflow-hidden transition-all duration-500 ease-in-out rounded-lg group bg-gray-50 hover:bg-gray-300 h-14"
                    href="kementrian/divisi-advokasi-dan-kajian">
                    <div
                        class="items-center justify-center p-4 transition-all duration-500 ease-in-out rounded-md bg-cyan-500 group-hover:bg-cyan-600">
                        <i
                            class="text-white transition-all duration-500 ease-in-out fa-solid fa-scale-balanced fa-2xl group-hover:text-gray-200"></i>
                    </div>
                    <p
                        class="flex-auto px-4 text-base leading-4 transition-all duration-500 ease-in-out group-hover:translate-x-1">
                        Divisi Advokasi dan Kajian</p>
                    <i
                        class="px-3 transition-all duration-500 ease-in-out fa-solid fa-arrow-right group-hover:translate-x-1"></i>
                </a>
                <a class="flex flex-row items-center w-full overflow-hidden transition-all duration-500 ease-in-out rounded-lg group bg-gray-50 hover:bg-gray-300 h-14"
                    href="kementrian/divisi-pendidikan-dan-keagamaan">
                    <div
                        class="items-center justify-center p-4 transition-all duration-500 ease-in-out rounded-md bg-cyan-500 group-hover:bg-cyan-600">
                        <i
                            class="text-white transition-all duration-500 ease-in-out fa-solid fa-book-bookmark fa-2xl group-hover:text-gray-200"></i>
                    </div>
                    <p
                        class="flex-auto px-4 text-base leading-4 transition-all duration-500 ease-in-out group-hover:translate-x-1">
                        Divisi Pendidikan Dan Keagamaan</p>
                    <i
                        class="px-3 transition-all duration-500 ease-in-out fa-solid fa-arrow-right group-hover:translate-x-1"></i>
                </a>
            </div>
        </div>
        {{-- Luar Negeri --}}
        <div class="mb-20">
            <div class="mb-8 text-2xl font-bold text-zinc-800">Kementrian <span class="text-cyan-500">Luar Negeri</span>
            </div>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 gap-y-6">
                <a class="flex flex-row items-center w-full overflow-hidden transition-all duration-500 ease-in-out rounded-lg group bg-gray-50 hover:bg-gray-300 h-14"
                    href="kementrian/divisi-advokasi-dan-kajian">
                    <div
                        class="items-center justify-center p-4 transition-all duration-500 ease-in-out rounded-md bg-cyan-500 group-hover:bg-cyan-600">
                        <i
                            class="text-white transition-all duration-500 ease-in-out fa-solid fa-handshake fa-2xl group-hover:text-gray-200"></i>
                    </div>
                    <p
                        class="flex-auto px-4 text-base leading-4 transition-all duration-500 ease-in-out group-hover:translate-x-1">
                        Divisi Hubungan External</p>
                    <i
                        class="px-3 transition-all duration-500 ease-in-out fa-solid fa-arrow-right group-hover:translate-x-1"></i>
                </a>
                <a class="flex flex-row items-center w-full overflow-hidden transition-all duration-500 ease-in-out rounded-lg group bg-gray-50 hover:bg-gray-300 h-14"
                    href="kementrian/divisi-pendidikan-dan-keagamaan">
                    <div
                        class="items-center justify-center p-4 transition-all duration-500 ease-in-out rounded-md bg-cyan-500 group-hover:bg-cyan-600">
                        <i
                            class="text-white transition-all duration-500 ease-in-out fa-solid fa-book fa-2xl group-hover:text-gray-200"></i>
                    </div>
                    <p
                        class="flex-auto px-4 text-base leading-4 transition-all duration-500 ease-in-out group-hover:translate-x-1">
                        Divisi Kajian Dan Aksi</p>
                    <i
                        class="px-3 transition-all duration-500 ease-in-out fa-solid fa-arrow-right group-hover:translate-x-1"></i>
                </a>
            </div>
        </div>
        {{-- Kementrian Pengembangan Sumber Daya Mahasiswa (PDSM) --}}
        <div class="mb-20">
            <div class="mb-8 text-2xl font-bold text-zinc-800">Kementrian <span class="text-cyan-500">Pengembangan Sumber
                    Daya
                    Mahasiswa (PSDM)</span>
            </div>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 gap-y-6">
                <a class="flex flex-row items-center w-full overflow-hidden transition-all duration-500 ease-in-out rounded-lg group bg-gray-50 hover:bg-gray-300 h-14"
                    href="kementrian/divisi-advokasi-dan-kajian">
                    <div
                        class="items-center justify-center p-4 transition-all duration-500 ease-in-out rounded-md bg-cyan-500 group-hover:bg-cyan-600">
                        <i
                            class="text-white transition-all duration-500 ease-in-out fa-solid fa-building-columns fa-2xl group-hover:text-gray-200"></i>
                    </div>
                    <p
                        class="flex-auto px-4 text-base leading-4 transition-all duration-500 ease-in-out group-hover:translate-x-1">
                        Divisi Hubungan Ormawa</p>
                    <i
                        class="px-3 transition-all duration-500 ease-in-out fa-solid fa-arrow-right group-hover:translate-x-1"></i>
                </a>
                <a class="flex flex-row items-center w-full overflow-hidden transition-all duration-500 ease-in-out rounded-lg group bg-gray-50 hover:bg-gray-300 h-14"
                    href="kementrian/divisi-pendidikan-dan-keagamaan">
                    <div
                        class="items-center justify-center p-4 transition-all duration-500 ease-in-out rounded-md bg-cyan-500 group-hover:bg-cyan-600">
                        <i
                            class="text-white transition-all duration-500 ease-in-out fa-solid fa-puzzle-piece fa-2xl group-hover:text-gray-200"></i>
                    </div>
                    <p
                        class="flex-auto px-4 text-base leading-4 transition-all duration-500 ease-in-out group-hover:translate-x-1">
                        Divisi Minat dan Bakat</p>
                    <i
                        class="px-3 transition-all duration-500 ease-in-out fa-solid fa-arrow-right group-hover:translate-x-1"></i>
                </a>
            </div>
        </div>
        {{-- Kementrian Media Informasi & Teknologi --}}
        <div class="mb-20">
            <div class="mb-8 text-2xl font-bold text-zinc-800">Kementrian <span class="text-cyan-500">Media Informasi &
                    Teknologi</span>
            </div>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 gap-y-6">
                <a class="flex flex-row items-center w-full overflow-hidden transition-all duration-500 ease-in-out rounded-lg group bg-gray-50 hover:bg-gray-300 h-14"
                    href="kementrian/divisi-advokasi-dan-kajian">
                    <div
                        class="items-center justify-center p-4 transition-all duration-500 ease-in-out rounded-md bg-cyan-500 group-hover:bg-cyan-600">
                        <i
                            class="text-white transition-all duration-500 ease-in-out fa-solid fa-photo-film fa-2xl group-hover:text-gray-200"></i>
                    </div>
                    <p
                        class="flex-auto px-4 text-base leading-4 transition-all duration-500 ease-in-out group-hover:translate-x-1">
                        Divisi Media dan Design</p>
                    <i
                        class="px-3 transition-all duration-500 ease-in-out fa-solid fa-arrow-right group-hover:translate-x-1"></i>
                </a>
                <a class="flex flex-row items-center w-full overflow-hidden transition-all duration-500 ease-in-out rounded-lg group bg-gray-50 hover:bg-gray-300 h-14"
                    href="kementrian/divisi-pendidikan-dan-keagamaan">
                    <div
                        class="items-center justify-center p-4 transition-all duration-500 ease-in-out rounded-md bg-cyan-500 group-hover:bg-cyan-600">
                        <i
                            class="text-white transition-all duration-500 ease-in-out fa-solid fa-circle-info fa-2xl group-hover:text-gray-200"></i>
                    </div>
                    <p
                        class="flex-auto px-4 text-base leading-4 transition-all duration-500 ease-in-out group-hover:translate-x-1">
                        Divisi Publikasi dan Informasi</p>
                    <i
                        class="px-3 transition-all duration-500 ease-in-out fa-solid fa-arrow-right group-hover:translate-x-1"></i>
                </a>
            </div>
        </div>

    </section>
@endsection
