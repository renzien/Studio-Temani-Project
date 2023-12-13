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
                    <h1 class="font-light text-3xl">Studio Temani</h1>
                </div>
                <div class="flex items-center justify-center">
                    <h1 class="font-bold text-3xl">Feature & Studio Assets</h1>
                </div>
            </div>
            <div class="flex items-center justify-center pb-34.5">
                <a href="/book"><button class="bg-white hover:bg-slate-100 text-black font-quicksand font-bold py-2 px-4 mr-5 rounded-lg">Booking Now</button></a>
            </div>
        </div>
        <div class="studio text-black"
            style="background-image: url('assets/img/hero-studio.jpg'); background-repeat: no-repeat; background-size: cover;">
        </div>
    </header>
    <section class="grid grid-cols-2">
        <div class="p-20 font-quicksand">
            <h1 class="font-bold text-4xl text-black">Studio Equipment List</h1>
            <h2 class="font-light text-2xl text-black">You can check it here :</h2>
            <div class="font-normal text-xl leading-normal text-black py-20 gap-5">
                <ul>
                    <li>Flash Light Godox SKII400</li>
                    <li>Softbox Lantern</li>
                    <li>Continuos Light Imbex</li>
                    <li>Tripod Backdrop</li>
                    <li>Many Available Background</li>
                    <li>Sony Alpha 7II</li>
                </ul>
            </div>
        </div>
    </section>
@endsection
