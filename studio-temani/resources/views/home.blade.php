@extends('layouts.main')
@section('container')
    <header class="h-screen" style="background-image: url('assets/img/bg-hero.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div class="flex flex-col pl-44 justify-center h-4/5 text-white">
            <div class="mt-48">
                <h1 class="text-2xl font-quicksand">Studio Temani</h1>
                <h1 class="font-bold text-4xl font-quicksand">Welcome to your favorite Photo Studio!</h1>
            </div>
        </div>
        <div class="flex flex-col relative items-center justify-center text-white font-quicksand mt-3">
            <a href="#about-us">Scroll Down</a>
            <i class="ri-arrow-down-s-line mt-5"></i>
        </div>
    </header>
    <section class="grid grid-cols-2">
        <div id="about-us">
            <h1 class="font-quicksand mt-24 ml-20 text-4xl font-bold leading-normal">About Us</h1>
            <p class="font-quicksand mt-8 ml-20 mr-28">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Quis, eius! Totam impedit dicta natus earum maxime non pariatur vero tempore velit 
                repellat rem aliquam et eum eius sed, asperiores commodi?. Lorem ipsum dolor sit amet, 
                consectetur adipisicing elit. Dolor unde nisi adipisci eligendi aliquam aspernatur cumque 
                odio delectus ab magnam, sed facilis similique suscipit temporibus alias voluptas, error 
                commodi aliquid!</p>

            <p class="font-quicksand mt-8 ml-20 mr-28 pb-32">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Quis, eius! Totam impedit dicta natus earum maxime non pariatur vero tempore velit 
                repellat rem aliquam et eum eius sed, asperiores commodi?. Lorem ipsum dolor sit amet, 
                consectetur adipisicing elit. Dolor unde nisi adipisci eligendi aliquam aspernatur cumque 
                odio delectus ab magnam, sed facilis similique suscipit temporibus alias voluptas, error 
                commodi aliquid!</p>
        </div>
        <div class="bg-studio-temani">
            <div class="flex items-center justify-center mt-24 mb-20">
                <img src="assets/img/rectangle-3.png" alt="Studio Temani About">
            </div>
        </div>
    </section>
    <section class="grid grid-cols-2">
        <div class="bg-studio-temani">
            <div class="flex items-center justify-center mt-24 mb-20">
                <img src="assets/img/rectangle-4.png" alt="Studio Temani Studio">
            </div>
        </div>
        <div class="studio">
            <h1 class="font-quicksand mt-24 ml-20 text-4xl font-bold leading-normal">Studio</h1>
            <p class="font-quicksand mt-8 ml-20 mr-28">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Aliquam commodo varius erat vitae hendrerit. Morbi 
                rhoncus augue a nisi fermentum, vel aliquam felis blandit. 
                Nulla facilisi. Nullam semper justo id gravida tincidunt. Duis 
                facilisis convallis dolor a mattis. Integer magna felis, commodo 
                non mi ut, auctor varius nibh. Phasellus iaculis facilisis dolor ac 
                ornare.</p>
            <p class="font-quicksand mt-8 ml-20 mr-28">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Aliquam commodo varius erat vitae hendrerit. Morbi 
                rhoncus augue a nisi fermentum, vel aliquam felis blandit. 
                Nulla facilisi. Nullam semper justo id gravida tincidunt. Duis 
                facilisis convallis dolor a mattis. Integer magna felis, commodo 
                non mi ut, auctor varius nibh. Phasellus iaculis facilisis dolor ac 
                ornare.</p>
            <div class="py-28 px-20">
                <button class="bg-black hover:bg-gray-900 text-white font-quicksand font-bold py-2 px-4 mr-5 rounded-lg">Read More</button>
            </div>
        </div>
    </section>
    <section class="h-screen" style="background-image: url('assets/img/rectangle-6.png'); background-repeat: no-repeat;">
        <div class="flex flex-col items-center h-4/5 text-white font-quicksand">
            <h1 class="text-4xl font-bold mt-24 leading-normal">Pricelist</h1>
            <div class="text-center justify-center m-28 ">
                <p class="text-xl leading-normal">Capture your special moments with Studio Temani and cherish them forever. Our Pricelist Rates are designed
                    to provide you with a tailored photography experience, ensuring that every occasion is remembered with joy.
                    Here are our pricelist rates for various studio facilities.</h1>
            </div>
            <button class="bg-white hover:bg-gray-100 text-black font-quicksand font-bold py-2 px-4 rounded-lg">Check This Out</button>
        </div>
    </section>
    <section class="contact font-quicksand">
        <div class="flex flex-col pl-28 justify-center h-4/5 text-black">
            <h1 class="font-bold text-4xl mt-4 leading normal">Contact Us!</h1>
            <h1 class="text-2xl leading normal">For more information</h1>
        </div>
    </section>
@endsection