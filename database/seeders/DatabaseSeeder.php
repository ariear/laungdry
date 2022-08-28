<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\System;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        System::factory()->create([
            'image' => 'ppe.svg',
            'system_name' => 'Laungdry',
            'no_telp' => '+62 8810 0262 33067',
            'email' => 'laungdry@gmail.com',
            'address' => 'Jl Slamet Riyadi , Desa Wringintelu , Kecamatan Puger , Kabupaten Jember , Jawa Timur ',
            'fb' => 'facebook.com',
            'ig' => 'instagram.com',
            'tweet' => 'tweet.com',
            'wa' => 'whatsapp.com',
        ]);
    }
}
