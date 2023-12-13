@extends('layouts.main2')
@section('title', 'Studio')
@section('container2')
    <header class="grid grid-cols-2">
        <div class="bg-studio-temani">
            <div class="flex items-center pb-15aos="flip-left" data-aos-duration="1000">
                <div class="flex items-center justify-center pt-15">
                    <img src="assets/img/studio_logo.png" alt="Studio Temani" class="w-1/2" data-aos="fade-down"
                        data-aos-duration="1000">
                </div>
            </div>
            <div class="font-quicksand text-white pb-27.5 pt-15">
                <div class="flex items-center justify-center">
                    <h1 class="font-light text-3xl" data-aos="fade-down" data-aos-duration="1100">Studio Temani</h1>
                </div>
                <div class="flex items-center justify-center">
                    <h1 class="font-bold text-3xl" data-aos="fade-down" data-aos-duration="1200">Feature & Studio Assets</h1>
                </div>
            </div>
            <div class="flex items-center justify-center pb-34.5" data-aos="flip-right" data-aos-duration="1300">
                <a href="/book"><button class="bg-white hover:bg-slate-100 text-black font-quicksand font-bold py-2 px-4 mr-5 rounded-lg">Booking Now</button></a>
            </div>
        </div>
        <div class="studio text-black"
            style="background-image: url('assets/img/hero-studio.jpg'); background-repeat: no-repeat; background-size: cover;">
        </div>
    </header>
    <section class="grid grid-cols-2">
        <div class="pt-30 pl-20 font-quicksand">
            <h1 class="font-bold text-4xl text-black" data-aos="fade-right" data-aos-duration="800">Studio Equipment List</h1>
            <h2 class="font-light text-2xl text-black" data-aos="fade-right" data-aos-duration="900">You can check it here :</h2>
            <div class="font-normal text-xl leading-normal text-black pt-20">
                <ul class="list-disc list-outside ml-5 flex flex-col gap-3">
                    <li data-aos="fade-down" data-aos-duration="1000">Flash Light Godox SKII400</li>
                    <li data-aos="fade-down" data-aos-duration="1100">Softbox Lantern</li>
                    <li data-aos="fade-down" data-aos-duration="1200">Continuos Light Imbex</li>
                    <li data-aos="fade-down" data-aos-duration="1300">Tripod Backdrop</li>
                    <li data-aos="fade-down" data-aos-duration="1400">Many Available Background</li>
                    <li data-aos="fade-down" data-aos-duration="1500">Sony Alpha 7II</li>
                </ul>
            </div>
            <p class="font-normal text-xl leading-normal text-black pt-10 text-justify" data-aos="fade-down" data-aos-duration="800">Studio Temani dilengkapi dengan peralatan 
                fotografi terkini untuk memastikan hasil yang luar biasa dalam setiap pemotretan. 
                Dari kamera profesional, pencahayaan studio hingga perlengkapan pendukung lainnya, 
                kami menyediakan fasilitas terbaik demi mendukung kreasi dan kualitas visual yang tak tertandingi. 
                Dengan peralatan yang handal, kami memastikan setiap momen yang diabadikan di Studio Temani menjadi 
                pengalaman yang memukau.</p>
        </div>
        <div class="flex items-center justify center pt-25 mb-28 pl-20" data-aos="flip-right" data-aos-duration="1000">
            <img src="assets/img/studio-rectangle.png" alt="Studio Temani">
        </div>
    </section>
    <section class="w-full" style="background-image: url('assets/img/studio_quotes.png'); background-repeat: no-repeat;">
        <div class="flex flex-col items-center text-white font-quicksand" data-aos="fade-right" data-aos-duration="1100">
            <h1 class="text-3xl font-bold pt-30 pl-35 pr-35 mb-10 text-center">“A thing that you see in my pictures is that I was not afraid to fall in love with these people.”</h1>
        </div>
        <div class="flex flex-col items-center">
            <div class="border-b border-white w-2/6 mb-5"></div>
        </div>
        <div class="flex flex-col items-center text-white font-quicksand pb-30" data-aos="fade-left" data-aos-duration="1200">
            <h2 class="text-2xl font-light pt-5">- Annie Leibovitz -</h2>
        </div>
    </section>
    <section class="font-quicksand pb-30">
        <div class="flex items-center justify-center" data-aos="fade-down" data-aos-duration="1000">
            <h1 class="font-bold text-3xl leading-normal pt-22">Our Packages</h1>
        </div>
        <div class="flex items-center justify-center mt-5" data-aos="fade-down" data-aos-duration="1100">
            <p class="font-normal text-xl leading-normal text-center pl-15 pr-15">Temukan paket-paket eksklusif kami yang dirancang khusus untuk memenuhi berbagai kebutuhan fotografi Anda. 
                Dari paket pernikahan yang romantis hingga sesi potret keluarga yang hangat, setiap paket memberikan pengalaman fotografi yang tak terlupakan.</p>
        </div>
        <div class="grid grid-cols-3 pt-15 pl-15">
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg" data-aos="flip-left" data-aos-duration="1000">
                <img src="assets/img/family-photo2.png" alt="Studio Temani" class="w-full">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Family Photo Session</div>
                    <p class="text-black text-base text-justify">Family Photo Session merupakan foto sesi yang bersangkutan dengan keluarganya ya gais.
                        Kalo gaada keluarganya namanya self-photo. Kalo gaada dirinya namanya landscape photo. Kalo gaada landscape namanya foto kosong.
                    </p>
                </div>
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg" data-aos="flip-left" data-aos-duration="1300">
                <img src="assets/img/self-photo2.png" alt="Studio Temani" class="w-full">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Self-Photo Session</div>
                    <p class="text-black text-base text-justify">Self-Photo Session merupakan foto sesi yang bersangkutan dengan dirinya sendiri ya gais.
                        Kalo gaada dirinya namanya landscape photo. Kalo gaada landscape namanya foto kosong.
                    </p>
                </div>
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg" data-aos="flip-left" data-aos-duration="1600">
                <img src="assets/img/creative-space.png" alt="Studio Temani" class="w-full">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Creative Studio Space Session</div>
                    <p class="text-black text-base text-justify">Creative Studio Space Session merupakan foto sesi yang bersangkutan dengan kreatifitasnya sendiri ya gais.
                        Kalo gaada kreatifitasnya namanya landscape photo. Kalo gaada landscape namanya foto kosong.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full" style="background-image: url('assets/img/customer-feedback.png'); background-repeat: no-repeat;">
        <div class="flex items-center justify-center font-quicksand" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="text-white font-bold text-3xl leading-normal pt-10">Customer Feedback</h1>
        </div>
        <div class="flex flex-col items-center">
            <div class="border-b border-white w-1/6 mt-2 mb-5"></div>
        </div>
        <div class="flex items-center justify-center pb-15 mt-10 gap-8 pr-15 pl-15">
            <div class="max-w-sm w-1/3 lg:max-w-full lg:flex" data-aos="fade-left" data-aos-duration="1200">
                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-gray-400 bg-white rounded-b-none rounded-xl p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8 font-quicksand">
                        <p class="text-sm text-black flex items-center">
                            Testimonial
                        </p>
                        <h2 class="text-black font-bold text-xl mb-2">Studio ini Keren!</h2>
                        <p class="text-black text-base text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad facilis tempore iste, mollitia officiis officia laboriosam ipsam ducimus magnam dolorem perspiciatis velit totam eaque, neque atque. Quod ad error at.</p>
                    </div>
                </div>
            </div>
            <div class="max-w-sm w-1/3 lg:max-w-full lg:flex" data-aos="fade-left" data-aos-duration="1600">
                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-gray-400 bg-white rounded-b-none rounded-xl p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8 font-quicksand">
                        <p class="text-sm text-black flex items-center">
                            Testimonial
                        </p>
                        <h2 class="text-black font-bold text-xl mb-2">Studio ini Keren!</h2>
                        <p class="text-black text-base text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad facilis tempore iste, mollitia officiis officia laboriosam ipsam ducimus magnam dolorem perspiciatis velit totam eaque, neque atque. Quod ad error at.</p>
                    </div>
                </div>
            </div>
            <div class="max-w-sm w-1/3 lg:max-w-full lg:flex" data-aos="fade-left" data-aos-duration="2000">
                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-gray-400 bg-white rounded-b-none rounded-xl p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8 font-quicksand">
                        <p class="text-sm text-black flex items-center">
                            Testimonial
                        </p>
                        <h2 class="text-black font-bold text-xl mb-2">Studio ini Keren!</h2>
                        <p class="text-black text-base text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad facilis tempore iste, mollitia officiis officia laboriosam ipsam ducimus magnam dolorem perspiciatis velit totam eaque, neque atque. Quod ad error at.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
