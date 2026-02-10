@extends('layouts.main')
@section('container')
    <section class="min-h-[60vh] md:min-h-screen flex flex-col">
        <div class="flex flex-col gap-5 ">
            <div class="flex flex-col gap-3 pt-20">
                <div class="flex items-center gap-4">
                    <h1 class="text-5xl font-bold text-black max-sm:text-3xl max-md:text-4xl">About US
                    </h1>
                    <div class="w-20 h-[2px] mt-3 bg-cyan-500 lg:w-36 md:w-28 max-lg:hidden"></div>
                </div>
                <p class="text-base font-normal text-cyan-500"><a class="text-slate-700" href="/">Home</a> > <span
                        class="text-black">{{ Str::title($title) }}</span></p>
            </div>
            <p class="font-normal leading-snug text-gray-500 sm:text-xl">hai hai haiii jadi kalian kepo ya sama kami? <br>biar aku kasih tau yaa ini cara kami mendeskripsikan pasangan kami </p>
        </div>
        {{-- Visi & Misi --}}
        <div class="flex flex-col items-center justify-center px-4 my-16 pt-44 gap-52 md:my-32">
            <div>
                <div class="block h-0 -z-50">
                    <div class="text-white text-[200px] max-lg:right-[40%] sm:text-[150px] md:text-[240px] xl:text-[250px] 2xl:text-[280px] font-bold relative leading-[128px] md:leading-[220px] 2xl:leading-[250px] right-[15%] -top-[100px] md:-top-[150px] 2xl:-top-44 opacity-40"
                        style="text-shadow:
                    1px 1px 0 #06B6D4,
                    -1px -1px 0 #06B6D4,
                    1px -1px 0 #06B6D4,
                    -1px 1px 0 #06B6D4,
                    1px 1px 0 #06B6D4;">
                        Naura</div>
                </div>
                <div class="flex flex-col gap-5 lg:gap-10 lg:flex-row-reverse">
                    <div class="flex items-center justify-end gap-3">
                        <div class="hidden sm:block w-32 h-[2px] mt-5 bg-cyan-500"></div>
                        <h1 class="text-5xl md:text-8xl font-extrabold font-sans md:leading-[4rem] max-sm:pr-5 text-black">
                            Naura
                        </h1>
                    </div>
                    <p class="z-10 text-sm font-medium leading-relaxed max-sm:pl-5 text-shadow-lg shadow-slate-400">
                        Kamu adalah alasan buat aku bangkit, ketika aku kehilangan arah entah harus kemana, kamu datang dan memberikan aku alasan buat tetep lanjutin hidup dan mengejar apa yang sudah aku abaikan. satu hal yang akan tetap aku suka dari kamu adalah cara kamu menganggap aku sebagai teman, sahabat, pasangan bahkan seseorang yang benar-benar kamu percayai. cara kamu untuk tetap bikin aku percaya bahkan membangun kepercayaanku terhadap seseorang yang baru aku temui dalam hidup. cara kamu peduli, cara kamu melihat dan mengakuiku sebagai pasangan hidup kamu, itu segalanya buatku. <br>- Praja
                    </p>
                </div>
            </div>
            <div>
                <div class="block h-0 -z-50">
                    <div class="text-white text-[200px] max-lg:right-[40%] sm:text-[150px] md:text-[240px] xl:text-[250px] 2xl:text-[280px] font-bold relative leading-[128px] md:leading-[220px] 2xl:leading-[250px] right-[15%] -top-[100px] md:-top-[150px] 2xl:-top-44 opacity-40"
                        style="text-shadow:
                    1px 1px 0 #06B6D4,
                    -1px -1px 0 #06B6D4,
                    1px -1px 0 #06B6D4,
                    -1px 1px 0 #06B6D4,
                    1px 1px 0 #06B6D4;">
                        Praja</div>
                </div>
                <div class="flex flex-col gap-5 lg:gap-10 lg:flex-row-reverse">
                    <div class="flex items-center justify-end gap-3">
                        <div class="hidden sm:block w-32 h-[2px] mt-5 bg-cyan-500"></div>
                        <h1 class="text-5xl md:text-8xl font-extrabold font-sans md:leading-[4rem] max-sm:pr-5 text-black">
                            Praja
                        </h1>
                    </div>
                    <p class="z-10 text-sm font-medium leading-relaxed max-sm:pl-5 text-shadow-lg shadow-slate-400">
                        kamu itu orangnya softheartedddd banget. keliatannya santai, tapi sebenernya hatinya gampang kepikiran, apalagi kalau aku berubah sedikit aja, bahkan chat aku beda dikit kamu bakal langsung "kamu kenapa?" padahal aku cuma laper. kamu bukan tipe yang marah besar atau meledak, kamu lebih milih diem dan mikir sendiri, dan kadang itu bikin aku pengen langsung meluk kamu dan bilang kalau semuanya aman. kamu care banget, kadang overthinking dikit, tapi itu karena kamu sayang dan takut kehilangan. kamu nggak banyak blablabla, tapi cuma butuh diyakinin kalau aku masih di sini. aku senenggg banget sama cara gimana kamu selalu milih buat tetep tinggal, bahkan waktu lagi capek atau kesel <br>- Naura
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-5 ">
            <div class="flex flex-col gap-3 pt-20">
                <div class="flex items-center gap-4">
                    <h1 class="text-5xl font-bold text-black max-sm:text-3xl max-md:text-4xl">MASIH KEPO KAHH
                    </h1>
                </div>
                <p class="font-normal leading-snug text-gray-500 sm:text-xl">Kalo gitu yuk kita masuk ke momen-momen yang tak terlupakan dari kami </p>
                <a class="px-4 py-2 text-white capitalize bg-blue-500 rounded btn hover:bg-blue-600 max-w-max aos-init aos-animate"
                href="moments">Lesgowww</a>
            </div>
        </div>
    </section>
@endsection
