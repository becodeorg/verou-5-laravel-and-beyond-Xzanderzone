<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\Mouse::factory()->create([
            'name' => 'LFD Ultimate',
            'price' => '149',
            'image'=> 'https://m.media-amazon.com/images/I/81zmQCSvy5L._AC_UF894,1000_QL80_.jpg',
        ]);
        \App\Models\Mouse::factory()->create([
            'name' => 'LFD Ultimate Wireless',
            'price' => '199',
            'image'=> 'https://m.media-amazon.com/images/I/81zmQCSvy5L._AC_UF894,1000_QL80_.jpg',
        ]);
        \App\Models\Mouse::factory()->create([
            'name' => 'LFD Basic',
            'price' => '29',
            'image'=> 'https://m.media-amazon.com/images/I/81zmQCSvy5L._AC_UF894,1000_QL80_.jpg',
        ]);
        \App\Models\Mouse::factory()->create([
            'name' => 'LFD Basic wireless',
            'price' => '59',
            'image'=> 'https://m.media-amazon.com/images/I/81zmQCSvy5L._AC_UF894,1000_QL80_.jpg',
        ]);
        \App\Models\Mouse::factory()->create([
            'name' => 'LFD Office',
            'price' => '49',
            'image'=> 'https://m.media-amazon.com/images/I/81zmQCSvy5L._AC_UF894,1000_QL80_.jpg',
        ]);

        
        \App\Models\Keyboard::factory()->create([
            'name' => 'LFD Basic wireless',
            'price' => '59',
            'image'=> 'https://www.daskeyboard.com/images/das-keyboard-6-professional/6-pro-top-view.jpeg',
        ]);
        \App\Models\Keyboard::factory()->create([
            'name' => 'LFD Elite ',
            'price' => '149',
            'image'=> 'https://voltapc.sg/wp-content/uploads/2023/04/ADATA-Golden-Summoner-Keyboard-with-box.webp',
        ]);
    }
}
