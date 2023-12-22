@extends('layouts.main2')
@section('title', 'Payment')
@section('container2')
    <nav class="flex flex-row items-center pl-21 5 pt-7">
        @include('partials.breadcrumb')
    </nav>
    <section class="font-quicksand pt-10.5">
        <div class="pl-21 5">
            <h1 class="text-2xl font-bold">Your Order Has Been Received!</h1>
            <p class="font-normal text-xl">Dont forget to paying out!</p>
        </div>
    </section>
    <section class="grid grid-cols-2 gap-15 pl-21.5 pt-15.5">
        @include('partials.invoice')
        <div class="font-quicksand text-center">
            <h1 class="font-bold text-2xl">Scan QR Here</h1>
        </div>
    </section>
@endsection