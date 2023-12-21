@extends('layouts.main2')
@section('title', 'Checking Order')
@section('container2')
    <nav class="flex flex-row items-center pl-21.5 pt-7.5">
        @include('partials.breadcrumb')
    </nav>
    <section class="font-quicksand pt-10.5">
        <div class="pl-21.5">
            <h1 class="text-2xl font-bold">Dont forget to check it back your order!</h1>
            <p class="font-normal text-xl">Before you continue to finalization</p>
        </div>
    </section>
    <section class="grid grid-cols-2 gap-15 pl-21.5 pt-15.5">
        @include('partials.invoice')
        <div class="font-quicksand">
            <h1 class="font-bold text-3xl">Choose Your Payment</h1>
            <p class="font-normal text-2xl">Here is the list :</p>
            <div class="grid grid-rows-4">
                <div class="flex flex-row py-15">
                    <input type="radio" name="qris" id="">
                    <img class="w-1/2 ml-10" src="assets/img/QRIS.png" alt="logo pembayaran">
                </div>
                <div class="flex flex-row py-10">
                    <input type="radio" name="bri" id="">
                    <img class="w-1/2 ml-10 h-20" src="assets/img/BRI.png" alt="logo pembayaran">
                </div>
                <div class="flex flex-row py-10">
                    <input type="radio" name="dana" id="">
                    <img class="w-1/2 ml-10 h-20" src="assets/img/DANA.png" alt="logo pembayaran">
                </div>
                <div class="flex flex-row py-10">
                    <input type="radio" name="bca" id="">
                    <img class="w-1/2 px-5" src="assets/img/BCA.png" alt="logo pembayaran">
                </div>
            </div>
        </div>
    </section>
    <section class="flex items-end justify-end pr-72.5 pt-10 pb-5">
        <a href="/book"><button class="bg-slate-900 hover:bg-black text-white font-quicksand font-bold py-2 px-4 mr-5 rounded-lg">Selanjutnya</button></a>
    </section>
@endsection