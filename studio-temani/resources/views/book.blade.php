@extends('layouts.main2')
@section('title', 'Booking Order')
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
                    <div class="font-bold text-xl mb-2">{{ $familyphotos->title }}</div>
                    <div class="text-black text-base text-justify">
                        {!! $familyphotos->descpack !!}
                    </div>
                </div>
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg" data-aos="flip-left" data-aos-duration="1300">
                <img src="assets/img/self-photo2.png" alt="Studio Temani" class="w-full">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $selfsessions->title }}</div>
                    <p class="text-black text-base text-justify">{{ $selfsessions->descpack }}</p>
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
    <section class="bg-studio-temani flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px] font-quicksand">
            <div class="mb-10" data-aos="fade-up" data-aos-duration="800">
                <h1 class="text-3xl font-bold text-center text-white">Jangan sampai kelewatan!</h1>
                <p class="text-xl font-base text-center text-white">Untuk memesan silahkan isi form dibawah ini!</p>
            </div>
            <form action="" method="POST" data-aos="fade-right" data-aos-duration="2000">
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5 text-white">
                            <label for="fullname" class="mb-3 block text-xl font-medium">First Name</label>
                            <input type="text" name="fullname" id="fName" placeholder="Tulis First Name" class="w-full rounded-lg border border-[#FFFFFF] bg-studio-temani py-3 px-3 text-base font-medium outline-none focus:border-[#808080] focus:shadow-md">
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5 text-white">
                            <label for="lastname" class="mb-3 block text-xl font-medium">Last Name</label>
                            <input type="text" name="lastname" id="lName" placeholder="Tulis Last Name" class="w-full rounded-lg border border-[#FFFFFF] bg-studio-temani py-3 px-3 text-base font-medium outline-none focus:border-[#808080] focus:shadow-md">
                        </div>
                    </div>
                </div>
                <div class="mb-5 text-white">
                    <label for="email" class="mb-3 block text-xl font-medium">Email</label>
                    <input type="text" name="email" id="email" placeholder="your@example.com" class="w-full appearance-none rounded-lg border border-[#FFFFFF] bg-studio-temani py-3 px-3 text base font-medium outline-none focus:border-[#808080] focus:shadow-md">
                </div>
                <div class="mb-5 text-white">
                    <label for="guest" class="mb-3 block text-xl font-medium">Banyak Orangnya ?</label>
                    <input type="number" name="guest" id="guest" placeholder="5" min="1" class="w-full appearance-none rounded-lg border border-[#FFFFFF] bg-studio-temani py-3 px-3 text base font-medium outline-none focus:border-[#808080] focus:shadow-md">
                </div>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5 text-white">
                            <label for="date" class="mb-3 block text-xl font-medium">Tanggal</label>
                            <input type="date" name="date" id="date" class="w-full appearance-none rounded-lg border border-[#FFFFFF] bg-studio-temani py-3 px-3 text base font-medium outline-none focus:border-[#808080] focus:shadow-md">
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5 text-white">
                            <label for="time" class="mb-3 block text-xl font-medium">Waktu</label>
                            <input type="time" name="time" id="time" class="w-full appearance-none rounded-lg border border-[#FFFFFF] bg-studio-temani py-3 px-3 text base font-medium outline-none focus:border-[#808080] focus:shadow-md">
                        </div>
                    </div>
                </div>
                <div class="mb-5 text-white">
                    <label for="package" class="mb-3 block text-xl font-medium">Pilih Paket</label>
                    <select name="package" id="package" class="w-full appearance-none rounded-lg border border-[#FFFFFF] bg-studio-temani py-3 px-3 text base font-medium outline-none focus:border-[#808080] focus:shadow-md">
                        <option selected hidden>Silahkan Pilih Paket!</option>
                        <option value="Family Photo Session">Family Photo Session</option>
                        <option value="Self-Photo Session">Self-Photo Session</option>
                        <option value="Creative Studio Space Session">Creative Studio Space Session</option>
                    </select>
                </div>
                <div class="mb-5 text-white">
                    <label for="email" class="mb-3 block text-xl font-medium">Nomor Telpon</label>
                    <input type="text" name="phone" id="phone" class="w-full appearance-none rounded-lg border border-[#FFFFFF] bg-studio-temani py-3 px-3 text base font-medium outline-none focus:border-[#808080] focus:shadow-md">
                </div>
            </form>
            <div class="py-5" data-aos="flip-up" data-aos-duration="800">
                <a href="/check"><button type="submit" class="bg-white hover:bg-gray-100 text-black font-quicksand font-bold py-2 px-4 rounded-lg">Pesan Sekarang</button></a>
            </div>
        </div>
    </section>
@endsection
