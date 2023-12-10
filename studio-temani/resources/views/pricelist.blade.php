@extends('layouts.main')
@section('title', 'Pricelist')
@section('container')
    <div class="grid grid-cols-2">
        <div class="font-quicksand pt-20">
            <div class="flex items-center justify-center pt-32">
                <img src="assets/img/logo-update.png" alt="Studio Temani" class="w-2/5">
            </div>
            <div class="flex items-center justify-center">
                <h1 class="font-bold text-2xl leading-normal mt-8 text-black">{{ $pricelisthomes->title }}</h1>
            </div>
            <div class="flex items-center justify-center text-center mt-14 ml-28 mr-28">
                <div class="font-base text-lg leading-normal text-black text-justify">
                    {!! $pricelisthomes->desc !!}
                </div>
            </div>
        </div>
        <div class="bg-studio-temani">
            <div class="flex items-center justify-center mt-20 mb-28 ml-11">
                <img src="assets/img/pricelist.png" alt="Studio Temani">
            </div>
        </div>
    </div>
    <section class="h-full" style="background-image: url('assets/img/inquiry_hero2.png'); background-repeat: no-repeat;">
        <div class="flex flex-col items-center text-white font-quicksand">
            <h1 class="text-3xl font-bold pt-14 leading-normal">{{ $inquirys->title }}</h1>
            <div class="text-center justify-center m-20 text-2xl font-bold leading-normal">
                {!! $inquirys->desc !!}
            </div>
            <button
                class="bg-white hover:bg-gray-100 text-black font-quicksand font-bold py-2 px-4 mb-12 rounded-lg">Contact
                Us</button>
        </div>
    </section>
    {{-- Family Photo Session --}}
    <section class="grid grid-cols-2">
        <div class="text-black pl-10">
            <div class="flex flex-col items-center pt-22">
                <h1 class="font-quicksand text-4xl font-bold leading-normal">Family Photo Session</h1>
                <div class="border-b py-1 w-1/6 "></div>
            </div>
            <div class="text-justify py-10 ml-20 mr-28">
                <div class="font-quicksand py-8">
                    <h3 class="text-2xl font-bold leading-normal">//Large Studio</h3>
                    <p class="text-lg leading-normal">Background Option Available</p>
                </div>
                <div class="font-quicksand pb-20">
                    <h3 class="text-2xl font-bold leading-normal">//30 Minutes Session</h3>
                    <p class="text-lg leading-normal">Unlimited Shot</p>
                </div>
                <div class="font-quicksand">
                    <div class="flex flex-row">
                        <h3 class="text-2xl font-bold leading-normal">5 - 7 Pax</h3>
                        <h3 class="text-2xl font-bold leading-normal pl-25">190k</h3>
                    </div>
                    <p class="text-lg leading-normal">Get 3 Printed Photos</p>
                </div>
                <div class="border-b py-3 w-3/5"></div>
                <div class="font-quicksand py-9">
                    <div class="flex flex-row">
                        <h3 class="text-2xl font-bold leading-normal">8 - 10 Pax</h3>
                        <h3 class="text-2xl font-bold leading-normal pl-22">220k</h3>
                    </div>
                    <p class="text-lg leading-normal">Get 4 Printed Photos</p>
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
                <h1 class="font-quicksand text-4xl font-bold leading-normal">Self-Photo Session</h1>
                <div class="border-b py-1 w-1/6 "></div>
            </div>
            <div class="py-10 ml-20 mr-28 text-end">
                <div class="font-quicksand py-8">
                    <h3 class="text-2xl font-bold leading-normal">//Mini Studio</h3>
                    <p class="text-lg leading-normal">White Background Only</p>
                </div>
                <div class="font-quicksand pb-20">
                    <h3 class="text-2xl font-bold leading-normal">//20 Minutes Session</h3>
                    <p class="text-lg leading-normal">Unlimited Shot</p>
                </div>
                <div class="flex justify-end font-quicksand">
                    <div class="flex flex-col items-center justify-center">
                        <div class="flex">
                            <h3 class="text-2xl font-bold leading-normal pr-20">1 - 2 Pax</h3>
                            <h3 class="text-2xl font-bold leading-normal">100k</h3>
                        </div>
                        <p class="text-lg leading-normal pl-15">Get 1 Printed Photos</p>
                        <div class="border-b py-3 w-full"></div>
                        <div class="flex">
                            <h3 class="text-2xl font-bold leading-normal pr-20">3 - 4 Pax</h3>
                            <h3 class="text-2xl font-bold leading-normal">150k</h3>
                        </div>
                        <p class="text-lg leading-normal pl-15">Get 2 Printed Photos</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Creative Studio Space --}}
    <section class="grid grid-cols-2">
        <div class="text-black pl-10">
            <div class="flex flex-col items-center pt-22">
                <h1 class="font-quicksand text-4xl font-bold leading-normal">Creative Studio Space</h1>
                <div class="border-b py-1 w-1/6 "></div>
            </div>
            <div class="text-justify py-10 ml-20 mr-28">
                <div class="font-quicksand py-8">
                    <h3 class="text-2xl font-bold leading-normal">//Free use all studio</h3>
                    <p class="text-lg leading-normal">Inc. All Props</p>
                </div>
                <div class="font-quicksand pb-15">
                    <h3 class="text-2xl font-bold leading-normal">//Free use available props & tools</h3>
                    <p class="text-lg leading-normal">Lighting, Tripod, Stool, dan Backdrop</p>
                </div>
                <div class="font-quicksand pb-15">
                    <h3 class="text-2xl font-bold leading-normal">//Allowed bring your properties</h3>
                    <p class="text-lg leading-normal">Please contact us in advance</p>
                </div>
                <div class="font-quicksand pb-15">
                    <h3 class="text-2xl font-bold leading-normal">//Extra hours charge apply</h3>
                </div>
                <div class="font-quicksand pb-15">
                    <h3 class="text-2xl font-bold leading-normal">//Changing room available</h3>
                </div>
                <div class="font-quicksand">
                    <div class="flex flex-row">
                        <h3 class="text-2xl font-bold leading-normal">2 Hours</h3>
                        <h3 class="text-2xl font-bold leading-normal pl-25">250k</h3>
                    </div>
                </div>
                <div class="border-b py-3 w-3/5"></div>
                <div class="font-quicksand py-5">
                    <div class="flex flex-row">
                        <h3 class="text-2xl font-bold leading-normal">3 Hours</h3>
                        <h3 class="text-2xl font-bold leading-normal pl-22">350k</h3>
                    </div>
                    <p class="text-lg leading-normal mt-5">//For rent price above 3 hours,
                        please contact us</p>
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
