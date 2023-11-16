<nav class="bg-white p-3">
    <div class="flex items-center justify-between">
        <div class="w-36 ml-5">
            <img src="assets/img/logo.png" alt="Studio Temani">
        </div>

        <div class="flex items-center gap-2 gap-8 font-quicksand">
            <a class="text-black font-bold hover:text-gray-600 {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
            <a href="#" class="text-black font-bold hover:text-gray-600">About</a>
            <a href="#" class="text-black font-bold hover:text-gray-600">Studio</a>
            <a class="text-black font-bold hover:text-gray-600 {{ ($title === "Pricelist") ? 'active' : '' }}" href="/pricelist">Pricelist</a>
            <a href="#" class="text-black font-bold hover:text-gray-600">Contact</a>
        </div>

        <a href="/book"><button class="bg-black hover:bg-gray-900 text-white font-quicksand font-bold py-2 px-4 mr-5 rounded-lg">Booking Now</button></a>
    </div>
</nav>