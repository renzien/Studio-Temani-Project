@extends('layouts.main2')
@section('title', 'Studio')
@section('container2')
    <header class="grid grid-cols-2">
        <div class="bg-studio-temani">
            <div class="flex items-center pb-15" data-aos="flip-left" data-aos-duration="1000">
                <div class="flex items-center justify-center pt-15">
                    <img src="assets/img/studio_logo.png" alt="Studio Temani" class="w-1/2" data-aos="fade-down"
                        data-aos-duration="1000">
                </div>
            </div>
            <div class="font-quicksand text-white pb-27.5 pt-15">
                <div class="flex items-center justify-center">
                    <h1 class="font-light text-3xl" data-aos="fade-down" data-aos-duration="1100">{{ $homestudios->title }}</h1>
                </div>
                <div class="flex items-center justify-center font-bold text-3xl text-center pr-20 pl-20" data-aos="fade-down" data-aos-duration="1200">
                    {!! $homestudios->tagline !!}
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
            <h1 class="font-bold text-4xl text-black" data-aos="fade-right" data-aos-duration="800">{{ $studioequips->title }}</h1>
            <div class="font-light text-2xl text-black" data-aos="fade-right" data-aos-duration="900">
                {!! $studioequips->tagline  !!}
            </div>
            <div class="font-normal text-xl leading-normal text-black pt-20">
                <ul class="list-disc list-outside ml-5 flex flex-col gap-3">
                    <li data-aos="fade-down" data-aos-duration="1000">{{ $studioequips->list1 }}</li>
                    <li data-aos="fade-down" data-aos-duration="1100">{{ $studioequips->list2 }}</li>
                    <li data-aos="fade-down" data-aos-duration="1200">{{ $studioequips->list3 }}</li>
                    <li data-aos="fade-down" data-aos-duration="1300">{{ $studioequips->list4 }}</li>
                    <li data-aos="fade-down" data-aos-duration="1400">{{ $studioequips->list5 }}</li>
                    <li data-aos="fade-down" data-aos-duration="1500">{{ $studioequips->list6 }}</li>
                </ul>
            </div>
            <div class="font-normal text-xl leading-normal text-black pt-10 text-justify" data-aos="fade-down" data-aos-duration="800">
                {!! $studioequips->desc !!}
            </div>
        </div>
        <div class="flex items-center justify center pt-25 mb-28 pl-20" data-aos="flip-right" data-aos-duration="1000">
            <img src="assets/img/studio-rectangle.png" alt="Studio Temani">
        </div>
    </section>
    <section class="w-full" style="background-image: url('assets/img/studio_quotes.png'); background-repeat: no-repeat;">
        <div class="flex flex-col items-center text-white font-quicksand" data-aos="fade-right" data-aos-duration="1100">
            <div class="text-3xl font-bold pt-30 pl-35 pr-35 mb-10 text-center">
                {!! $quotes->quote  !!}
            </div>
        </div>
        <div class="flex flex-col items-center">
            <div class="border-b border-white w-2/6 mb-5"></div>
        </div>
        <div class="flex flex-col items-center text-white font-quicksand pb-30" data-aos="fade-left" data-aos-duration="1200">
            <h2 class="text-2xl font-light pt-5">{{ $quotes->author }}</h2>
        </div>
    </section>
    <section class="font-quicksand pb-30">
        <div class="flex items-center justify-center" data-aos="fade-down" data-aos-duration="1000">
            <h1 class="font-bold text-3xl leading-normal pt-22">{{ $packages->title }}</h1>
        </div>
        <div class="flex items-center justify-center mt-5" data-aos="fade-down" data-aos-duration="1100">
            <div class="font-normal text-xl leading-normal text-center pl-15 pr-15">
                {!! $packages->descpack  !!}
            </div>
        </div>
        <div class="grid grid-cols-3 pt-15 pl-15">
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg" data-aos="flip-left" data-aos-duration="1000">
                <img src="assets/img/family-photo2.png" alt="Studio Temani" class="w-full">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $familyphotos->title }}</div>
                    <div class="text-black text-base text-justify">
                        {!! $familyphotos->descpack  !!}
                    </div>
                    </p>
                </div>
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg" data-aos="flip-left" data-aos-duration="1300">
                <img src="assets/img/self-photo2.png" alt="Studio Temani" class="w-full">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $selfsessions->title }}</div>
                    <div class="text-black text-base text-justify">
                        {!! $selfsessions->descpack !!}
                    </div>
                </div>
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg" data-aos="flip-left" data-aos-duration="1600">
                <img src="assets/img/creative-space.png" alt="Studio Temani" class="w-full">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $creaspaces->title }}</div>
                    <div class="text-black text-base text-justify">
                        {!! $creaspaces->descpack !!}
                    </div>
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
        <div class="flex items-center justify-center mt-10 gap-8 pr-15 pl-15">
            <div class="owl-carousel">
                <div class="mx-10" data-aos="fade-left" data-aos-duration="1200">
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
                <div class="mx-10" data-aos="fade-left" data-aos-duration="1600">
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
                <div class="mx-10" data-aos="fade-left" data-aos-duration="2000">
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
                <div class="mx-10" data-aos="fade-left" data-aos-duration="2000">
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
                <div class="mx-10" data-aos="fade-left" data-aos-duration="2000">
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
                <div class="mx-10" data-aos="fade-left" data-aos-duration="2000">
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
        </div>
    </section>
@endsection
