<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomePageDesktop;

class HomePageDesktopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomePageDesktop::create([
            'announcer_text' => 'Welcome to our desktop site!',
            'background_color' => '#ffffff',
            'icon_color' => '#000000',
            'text_color' => '#333333',
            'background_opacity' => 0.9,
            'icon_opacity' => 0.8,
        ]);
    }
}
