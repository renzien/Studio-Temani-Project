@extends('layouts.main')
@section('container')
    <header>
        <div class="h-screen">
            <img src="assets/img/bg-hero.png" alt="Studio Temani" class="absolute">
            <div class="flex flex-col font-quicksand ml-36 justify-center h-screen relative text-white">
                <div class="mt-52">
                    <p class="font-normal text-2xl leading-normal">Studio Temani</p>
                    <p class="font-bold text-4xl leading-normal">Welcome to your favorite Photo Studio!</p>
                </div>
            </div>
            <div class="flex flex-col font-quicksand relative justify-center items-center text-white">
                <p class="font-normal text-lg">Scroll Down</p>
                <i class="ri-arrow-drop-down-line mt-8"></i>
            </div>
        </div>
    </header>
@endsection