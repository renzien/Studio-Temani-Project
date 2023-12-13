<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Home;
use App\Models\About;
use App\Models\Studio;
use App\Models\Pricelist;
use App\Models\Contact;
use App\Models\PricelistHome;
use App\Models\Inquiry;
use App\Models\Family;
use App\Models\SelfPhoto;
use App\Models\CreativeSpace;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Joko',
            'email' => 'joko123@gmail.com',
            'password' => '12345'
        ]);
        
        Home::create([
            'title' => 'Studio Temani Cabang Mirai Foundation',
            'tagline' => 'Yang punya kyouka kirigiri',
            'photo' => 'bg-hero-2.jpg'
        ]);

        About::create([
            'title' => 'Tentang Studio Temani',
            'desc' => 'Studio Temani adalah studio yang berada di bawah naungan Mirai Foundation. 
                        Studio ini berdiri pada tanggal 1 Januari 2021.',
            'photo' => 'bg-hero-2.jpg'
        ]);

        Studio::create([
            'title' => 'Studio Yang Kita Punya',
            'desc' => 'Studio yang kita punya merupakan studio pribadi, dengan perlengkapan yang diberikan
                        oleh para investor yang ada di Mirai Foundation. Studio ini berada di bawah naungan
                        Mirai Foundation. Studio ini berdiri pada tanggal 1 Januari 2021.',
            'photo' => 'bg-hero-2.jpg'
        ]);

        Pricelist::create([
            'title' => 'Pricelist Studio Temani',
            'desc' => 'Abadikan momen spesial Anda dengan Studio Temani dan kenang selamanya. Harga Daftar Harga kami dirancang untuk memberikan Anda pengalaman fotografi yang disesuaikan, memastikan bahwa setiap kesempatan dikenang dengan sukacita. Berikut adalah daftar harga kami untuk berbagai fasilitas studio.',
            'photo' => 'bg-hero-2.jpg'
        ]);

        Contact::create([
            'desc' => 'Hi! Kalo kalian mau tanya-tanya atau mau booking studio, bisa langsung hubungi kontak di bawah ini ya! Jangan lupa follow juga akun sosial media kita!',
        ]);

        PricelistHome::create([
            'title' => 'Lihat Harga Pricelist Kita!',
            'desc' => 'Abadikan momen spesial Anda dengan Studio Temani dan kenang selamanya. Harga Daftar Harga kami dirancang untuk memberikan Anda pengalaman fotografi yang disesuaikan, memastikan bahwa setiap kesempatan dikenang dengan sukacita. Berikut adalah daftar harga kami untuk berbagai fasilitas studio.',
            'photo' => 'bg-hero-2.jpg'
        ]);

        Inquiry::create([
            'title' => 'Inquiry',
            'desc' => 'Hi! Kalo kalian mau tanya-tanya atau mau booking studio, bisa langsung hubungi kontak di bawah ini ya! Jangan lupa follow juga akun sosial media kita!',
            'photo' => 'bg-hero-2.jpg'
        ]);

        Family::create([
            'title' => 'Sesi Foto Keluarga',
            'tagone' => '//Studio Besar',
            'descone' => '(Hanya Tersedia Background Putih)',
            'tagtwo' => '//30 Minut per Sesi',
            'desctwo' => '(Bebas Potret)',
            'unit' => '5 - 7 Pax',
            'price' => '200K',
            'descprice' => 'Dapat 3 Print Foto 4R',
            'unitprice' => '8 - 10 Pax',
            'pricetwo' => '300K',
            'descpricetwo' => 'Dapat 5 Print Foto 4R',
            'photo' => 'bg-hero-2.jpg'
        ]);

        SelfPhoto::create([
            'title' => 'Sesi Foto Sendiri',
            'tagone' => '//Studio Kecil',
            'descone' => '(Hanya Tersedia Background Putih)',
            'tagtwo' => '//20 Menit Per Sesi',
            'desctwo' => '(Potret Dibatasi)',
            'unit' => '1 - 2 Pax',
            'price' => '400K',
            'descprice' => 'Dapat 1 Samsung Galaxy Flip',
            'unitprice' => '3 - 4 Pax',
            'pricetwo' => '650K',
            'descpricetwo' => 'Dapat 2 Mobil Purrarri',
            'photo' => 'bg-hero-2.jpg'
        ]);

        CreativeSpace::create([
            'title' => 'Sesi Foto Creative Space',
            'tagone' => '//Gratis Semua Studio',
            'descone' => 'Termasuk semua props',
            'tagtwo' => '//Gratis pakai semua peralatan dan aksesoris',
            'desctwo' => 'Lighting, Kamera, dll',
            'tagthree' => '//Diizinkan membawa peralatan sendiri',
            'descthree' => 'Jangan lupa kontak ngab',
            'tagfour' => '//Gratis 1 Fotografer',
            'tagfive' => '//Gratis 1 Asisten',
            'unit' => '1 - 2 Jam',
            'price' => '500K',
            'unitprice' => '3 - 4 Jam',
            'pricetwo' => '800K',
            'descpricetwo' => 'Dapat 2 Mobil Purrarri',
            'photo' => 'bg-hero-2.jpg'
        ]);
    }
}
