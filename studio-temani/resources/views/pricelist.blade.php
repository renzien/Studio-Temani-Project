@extends('layouts.main')
@section('container')
    <div class="grid grid-cols-2">
        <div class="font-quicksand pt-20">
            <div class="flex items-center justify-center pt-32">
                <img src="assets/img/logo-update.png" alt="Studio Temani" class="w-2/5">
            </div>
            <div class="flex items-center justify-center">
                <h1 class="font-bold text-2xl leading-normal mt-8 text-black">Check Out Our Pricelist</h1>
            </div>
            <div class="flex items-center justify-center text-center mt-14 ml-28 mr-28">
                <p class="font-base text-lg leading-normal text-black">Discover the perfect package to capture your special
                    moments with Studio Temani.Our price list is designed
                    to cater to various photography needs, ensuring that you
                    receive exceptional services at competitive rates.</p>
            </div>
        </div>
        <div class="bg-studio-temani">
            <div class="flex items-center justify-center mt-20 mb-28 ml-11">
                <img src="assets/img/pricelist.png" alt="Studio Temani">
            </div>
        </div>
    </div>
    <section class="h-screen" style="background-image: url('assets/img/inquiry.png'); background-repeat: no-repeat;">
        <div class="flex flex-col items-center text-white font-quicksand">
            <h1 class="text-4xl font-bold mt-24 leading-normal">Send an Inquiry</h1>
            <div class="text-center justify-center m-28">
                <p class="text-2xl font-bold text-center leading-normal">“Have specific requirements in mind? Send us an inquiry 
                    detailing your preferences, and we'll promptly provide you”</h1>
            </div>
            <button class="bg-white hover:bg-gray-100 text-black font-quicksand font-bold py-2 px-4 rounded-lg">Contact Us</button>
        </div>
    </section>
    {{-- <section class="grid grid-cols-2">
        <div class="font-quicksand flex items-center justify-center">
            <h1 class="font-3xl font-bold ">Family Photo Session</h1>
        </div>
    </section> --}}
@endsection