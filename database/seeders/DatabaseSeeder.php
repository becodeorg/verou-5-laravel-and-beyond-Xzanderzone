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
            'votes'=>'20',
            'image'=> 'https://m.media-amazon.com/images/I/81zmQCSvy5L._AC_UF894,1000_QL80_.jpg',
        ]);
        \App\Models\Mouse::factory()->create([
            'name' => 'LFD Ultimate Wireless',
            'price' => '199',
            'votes'=>'100',
            'image'=> 'https://m.media-amazon.com/images/I/81zmQCSvy5L._AC_UF894,1000_QL80_.jpg',
        ]);
        \App\Models\Mouse::factory()->create([
            'name' => 'LFD Basic',
            'price' => '29',
            'votes'=>'5',
            'image'=> 'https://m.media-amazon.com/images/I/81zmQCSvy5L._AC_UF894,1000_QL80_.jpg',
        ]);
        \App\Models\Mouse::factory()->create([
            'name' => 'LFD Basic wireless',
            'price' => '59',
            'votes'=>'10',
            'image'=> 'https://m.media-amazon.com/images/I/81zmQCSvy5L._AC_UF894,1000_QL80_.jpg',
        ]);
        \App\Models\Mouse::factory()->create([
            'name' => 'LFD Office',
            'price' => '49',
            'votes'=>'1',
            'image'=> 'https://m.media-amazon.com/images/I/81zmQCSvy5L._AC_UF894,1000_QL80_.jpg',
        ]);
        
        //keyboard wip
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
        
        //headset wip 
        \App\Models\Headset::factory()->create([
            'name' => 'LFD Elite ',
            'price' => '149',
            'image'=> 'https://be.farnell.com/productimages/standard/en_GB/CS31602-40.jpg',
        ]);
        \App\Models\Headset::factory()->create([
            'name' => 'LFD Elite Wireless',
            'price' => '199',
            'image'=> 'https://be.farnell.com/productimages/standard/en_GB/CS31602-40.jpg',
        ]);
        \App\Models\Headset::factory()->create([
            'name' => 'LFD Basic wireless',
            'price' => '59',
            'image'=> 'https://orangeamps.com/wp-content/uploads/2020/04/Merch-Crest-Edition-Wireless-Headphones-2000px-2.png',
        ]);
        \App\Models\Headset::factory()->create([
            'name' => 'LFD Basic ',
            'price' => '29',
            'image'=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmC_HuWTsi1rIUjvX4n0cfnxC2Q0tdgqn5SqTlowmAzw&s',
        ]);
    }
}
