@extends('layouts.main')
@section('title', 'Pricelist')
@section('container')
    <div class="grid grid-cols-2">
        <div class="font-quicksand pt-20">
            <div class="flex items-center justify-center pt-32">
                <img src="assets/img/logo-update.png" alt="Studio Temani" class="w-2/5" data-aos="fade-down"
                    data-aos-duration="1000">
            </div>
            <div class="flex items-center justify-center">
                <h1 class="font-bold text-2xl leading-normal mt-8 text-black" data-aos="fade-down" data-aos-duration="1000">
                    {{ $pricelisthomes->title }}</h1>
            </div>
            <div class="flex items-center justify-center text-center mt-14 ml-28 mr-28">
                <div class="font-base text-lg leading-normal text-black text-justify" data-aos="fade-down"
                    data-aos-duration="1000">
                    {!! $pricelisthomes->desc !!}
                </div>
            </div>
        </div>
        <div class="bg-studio-temani">
            <div class="flex items-center justify-center mt-20 mb-28 ml-11" data-aos="flip-left" data-aos-duration="1000">
                <img src="assets/img/pricelist.png" alt="Studio Temani">
            </div>
        </div>
    </div>
    <section class="h-full" style="background-image: url('assets/img/inquiry_hero2.png'); background-repeat: no-repeat;">
        <div class="flex flex-col items-center text-white font-quicksand">
            <h1 class="text-3xl font-bold pt-14 leading-normal" data-aos="fade-right" data-aos-duration="1500">
                {{ $inquirys->title }}</h1>
            <div class="text-center justify-center m-20 text-2xl font-bold leading-normal" data-aos="fade-right"
                data-aos-duration="1500">
                {!! $inquirys->desc !!}
            </div>
            <button
                class="bg-white hover:bg-gray-100 text-black font-quicksand font-bold py-2 px-4 mb-12 rounded-lg" data-aos="flip-up" data-aos-duration="1000">Contact
                Us</button>
        </div>
    </section>
    {{-- Family Photo Session --}}
    <section class="grid grid-cols-2">
        <div class="text-black pl-10">
            <div class="flex flex-col items-center pt-22" data-aos="fade-right" data-aos-duration="500">
                <h1 class="font-quicksand text-4xl font-bold leading-normal">{{ $familys->title }}</h1>
                <div class="border-b py-1 w-1/6 "></div>
            </div>
            <div class="text-justify py-10 ml-20 mr-28">
                <div class="font-quicksand py-8" data-aos="fade-up" data-aos-duration="600">
                    <h3 class="text-2xl font-bold leading-normal">{{ $familys->tagone }}</h3>
                    <div class="text-lg leading-normal">
                        {!! $familys->descone !!}
                    </div>
                </div>
                <div class="font-quicksand pb-20" data-aos="fade-up" data-aos-duration="700">
                    <h3 class="text-2xl font-bold leading-normal">{{ $familys->tagtwo }}</h3>
                    <div class="text-lg leading-normal">
                        {!! $familys->desctwo !!}
                    </div>
                </div>
                <div class="font-quicksand" data-aos="fade-up" data-aos-duration="800">
                    <div class="flex flex-row">
                        <h3 class="text-2xl font-bold leading-normal">{{ $familys->unit }}</h3>
                        <h3 class="text-2xl font-bold leading-normal pl-25">{{ $familys->price }}</h3>
                    </div>
                    <div class="text-lg leading-normal">
                        {!! $familys->descprice !!}
                    </div>
                </div>
                <div class="border-b py-3 w-3/5"></div>
                <div class="font-quicksand py-9" data-aos="fade-up" data-aos-duration="900">
                    <div class="flex flex-row">
                        <h3 class="text-2xl font-bold leading-normal">{{ $familys->unitprice }}</h3>
                        <h3 class="text-2xl font-bold leading-normal pl-22">{{ $familys->pricetwo }}</h3>
                    </div>
                    <div class="text-lg leading-normal">
                        {!! $familys->descpricetwo !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-studio-temani">
            <div class="flex items-center justify-center mt-24 mb-20">
                <img src="assets/img/family.png" alt="Studio Temani About">
            </div>
        </div>
    </section>
    {{-- Self-Photo Session --}}
    <section class="grid grid-cols-2">
        <div class="bg-studio-temani">
            <div class="flex items-center justify-center mt-24 mb-20">
                <img src="assets/img/self-photo.png" alt="Studio Temani Studio">
            </div>
        </div>
        <div class="studio text-black pr-10">
            <div class="flex flex-col items-center pt-22">
                <h1 class="font-quicksand text-4xl font-bold leading-normal" data-aos="fade-down" data-aos-duration="600">{{ $selfphotos->title }}</h1>
                <div class="border-b py-1 w-1/6 "></div>
            </div>
            <div class="py-10 ml-20 mr-28 text-end">
                <div class="font-quicksand py-8" data-aos="fade-down" data-aos-duration="700">
                    <h3 class="text-2xl font-bold leading-normal">{{ $selfphotos->tagone }}</h3>
                    <div class="text-lg leading-normal">
                        {!! $selfphotos->descone !!}
                    </div>
                </div>
                <div class="font-quicksand pb-20" data-aos="fade-down" data-aos-duration="800">
                    <h3 class="text-2xl font-bold leading-normal">{{ $selfphotos->tagtwo }}</h3>
                    <div class="text-lg leading-normal">
                        {!! $selfphotos->desctwo !!}
                    </div>
                </div>
                <div class="flex justify-end font-quicksand">
                    <div class="flex flex-col items-end justify-end">
                        <div class="flex" data-aos="fade-down" data-aos-duration="900">
                            <h3 class="text-2xl font-bold leading-normal pr-20">{{ $selfphotos->unit }}</h3>
                            <h3 class="text-2xl font-bold leading-normal">{{ $selfphotos->price }}</h3>
                        </div>
                        <div class="text-lg leading-normal" data-aos="fade-down" data-aos-duration="1000">
                            {!! $selfphotos->descprice !!}
                        </div>
                        <div class="border-b py-3 w-3/4"></div>
                        <div class="flex py-3" data-aos="fade-down" data-aos-duration="1100">
                            <h3 class="text-2xl font-bold leading-normal pr-20">{{ $selfphotos->unitprice }}</h3>
                            <h3 class="text-2xl font-bold leading-normal">{{ $selfphotos->pricetwo }}</h3>
                        </div>
                        <div class="text-lg leading-normal pl-15" data-aos="fade-down" data-aos-duration="1200">
                            {!! $selfphotos->descpricetwo !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Creative Studio Space --}}
    <section class="grid grid-cols-2">
        <div class="text-black pl-10">
            <div class="flex flex-col items-center pt-22">
                <h1 class="font-quicksand text-4xl font-bold leading-normal" data-aos="fade-left" data-aos-duration="600">{{ $creativespaces->title }}</h1>
                <div class="border-b py-1 w-1/6 "></div>
            </div>
            <div class="text-justify py-10 ml-20 mr-28">
                <div class="font-quicksand py-8" data-aos="fade-down" data-aos-duration="700">
                    <h3 class="text-2xl font-bold leading-normal">{{ $creativespaces->tagone }}</h3>
                    <div class="text-lg leading-normal">
                        {!! $creativespaces->descone !!}
                    </div>
                </div>
                <div class="font-quicksand pb-15" data-aos="fade-down" data-aos-duration="800">
                    <h3 class="text-2xl font-bold leading-normal">{{ $creativespaces->tagtwo }}</h3>
                    <div class="text-lg leading-normal">
                        {!! $creativespaces->desctwo !!}
                    </div>
                </div>
                <div class="font-quicksand pb-15" data-aos="fade-down" data-aos-duration="900">
                    <h3 class="text-2xl font-bold leading-normal">{{ $creativespaces->tagthree }}</h3>
                    <div class="text-lg leading-normal">
                        {!! $creativespaces->descthree !!}
                    </div>
                </div>
                <div class="font-quicksand pb-15" data-aos="fade-down" data-aos-duration="1000">
                    <h3 class="text-2xl font-bold leading-normal">{{ $creativespaces->tagfour }}</h3>
                </div>
                <div class="font-quicksand pb-15" data-aos="fade-down" data-aos-duration="1100">
                    <h3 class="text-2xl font-bold leading-normal">{{ $creativespaces->tagfive }}</h3>
                </div>
                <div class="font-quicksand">
                    <div class="flex flex-row" data-aos="fade-down" data-aos-duration="1200">
                        <h3 class="text-2xl font-bold leading-normal">{{ $creativespaces->unit }}</h3>
                        <h3 class="text-2xl font-bold leading-normal pl-22">{{ $creativespaces->price }}</h3>
                    </div>
                </div>
                <div class="border-b py-3 w-3/5"></div>
                <div class="font-quicksand py-5">
                    <div class="flex flex-row" data-aos="fade-down" data-aos-duration="1300">
                        <h3 class="text-2xl font-bold leading-normal">{{ $creativespaces->unitprice }}</h3>
                        <h3 class="text-2xl font-bold leading-normal pl-22">{{ $creativespaces->pricetwo }}</h3>
                    </div>
                    <div class="text-lg leading-normal mt-5" data-aos="fade-down" data-aos-duration="1400">
                        {!! $creativespaces->descpricetwo !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-studio-temani">
            <div class="flex items-center justify-center mt-24 mb-20">
                <img src="assets/img/creative-studio.png" alt="Studio Temani About">
            </div>
        </div>
    </section>
@endsection
