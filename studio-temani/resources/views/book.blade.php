@extends('layouts.main2')
@section('container2')
    <header class="h-screen"
        style="background-image: url('assets/img/bg-update.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div class="flex items-center justify-center pt-20" data-aos="fade-up" data-aos-duration="1000">
            <img src="assets/img/logo-2.png" alt="Studio Temani Logo" class="w-1/5">
        </div>
        <div class="flex items-center justify-center pt-28 text-center" data-aos="fade-right" data-aos-duration="1100">
            <h1 class="font-bold font-quicksand text-2xl text-white pr-35 pl-35">“Secure your moments now! Book with Studio
                Temani and
                ensure a reservation for your special photography session.”</h1>
        </div>
        <div class="flex flex-col relative items-center justify-center text-white font-quicksand pt-52">
            <a href="#about-us">Scroll Down</a>
            <i class="ri-arrow-down-s-line mt-5"></i>
        </div>
    </header>
    <section class="font-quicksand pb-30">
        <div class="flex items-center justify-center" data-aos="fade-down" data-aos-duration="1000">
            <h1 class="font-bold text-3xl leading-normal pt-22">Our Packages</h1>
        </div>
        <div class="flex items-center justify-center mt-5" data-aos="fade-down" data-aos-duration="1100">
            <p class="font-normal text-xl leading-normal text-center pl-15 pr-15">Temukan paket-paket eksklusif kami yang
                dirancang khusus untuk memenuhi berbagai kebutuhan fotografi Anda.
                Dari paket pernikahan yang romantis hingga sesi potret keluarga yang hangat, setiap paket memberikan
                pengalaman fotografi yang tak terlupakan.</p>
        </div>
        <div class="grid grid-cols-3 pt-15 pl-15">
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg" data-aos="flip-left" data-aos-duration="1000">
                <img src="assets/img/family-photo2.png" alt="Studio Temani" class="w-full">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Family Photo Session</div>
                    <p class="text-black text-base text-justify">Family Photo Session merupakan foto sesi yang bersangkutan
                        dengan keluarganya ya gais.
                        Kalo gaada keluarganya namanya self-photo. Kalo gaada dirinya namanya landscape photo. Kalo gaada
                        landscape namanya foto kosong.
                    </p>
                </div>
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg" data-aos="flip-left" data-aos-duration="1300">
                <img src="assets/img/self-photo2.png" alt="Studio Temani" class="w-full">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Self-Photo Session</div>
                    <p class="text-black text-base text-justify">Self-Photo Session merupakan foto sesi yang bersangkutan
                        dengan dirinya sendiri ya gais.
                        Kalo gaada dirinya namanya landscape photo. Kalo gaada landscape namanya foto kosong.
                    </p>
                </div>
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg" data-aos="flip-left" data-aos-duration="1600">
                <img src="assets/img/creative-space.png" alt="Studio Temani" class="w-full">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Creative Studio Space Session</div>
                    <p class="text-black text-base text-justify">Creative Studio Space Session merupakan foto sesi yang
                        bersangkutan dengan kreatifitasnya sendiri ya gais.
                        Kalo gaada kreatifitasnya namanya landscape photo. Kalo gaada landscape namanya foto kosong.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
