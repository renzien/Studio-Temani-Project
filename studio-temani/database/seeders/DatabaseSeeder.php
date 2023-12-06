<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Home;
use App\Models\About;

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
    }
}
