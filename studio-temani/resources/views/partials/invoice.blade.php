<div class="max-w-sm rounded-3xl overflow-hidden bg-studio-temani px-12 pt-10">
    <div class="grid grid-cols-2">
        <div class="font-quicksand text-white">
            <h1 class="font-bold text-xl">First Name</h1>
            <p class="font-normal text-xl">{{ $book->fullname }}</p>
        </div>
        <div class="font-quicksand text-white pl-7">
            <h1 class="font-bold text-xl">Last Name</h1>
            <p class="font-normal text-xl">{{ $book->lastname }}</p>
        </div>
    </div>
    <div class="py-8 font-quicksand text-white">
        <h1 class="font-bold text-xl">Email</h1>
        <p class="font-normal text-xl">{{ $book->email }}</p>
    </div>
    <div class="font-quicksand text-white">
        <h1 class="font-bold text-xl">Banyak Orangnya ?</h1>
        <p class="font-normal text-xl">{{ $book->guest }}</p>
    </div>
    <div class="grid grid-cols-2 py-8">
        <div class="font-quicksand text-white">
            <h1 class="font-bold text-xl">Tanggal</h1>
            <p class="font-normal text-xl">{{ $book->date }}</p>
        </div>
        <div class="font-quicksand text-white pl-7">
            <h1 class="font-bold text-xl">Waktu</h1>
            <p class="font-normal text-xl">{{ $book->time }}</p>
        </div>
    </div>
    <div class="font-quicksand text-white">
        <h1 class="font-bold text-xl">Paket Yang Dipilih ?</h1>
        <p class="font-normal text-xl">{{ $book->package }}</p>
    </div>
    <div class="font-quicksand text-white py-8">
        <h1 class="font-bold text-xl">Nomor Telfon</h1>
        <p class="font-normal text-xl">{{ $book->phone }}</p>
    </div>
</div>