<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutUsDesktop;

class AboutUsDesktopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutUsDesktop::create([
            'wrapped_background_color' => '#ffffff',
            'wrapped_border_color' => '#cccccc',
            'title_text_color' => '#333333',
            'content_text_color' => '#666666',
            'wrapper_background_opacity' => 0.9,
            'wrapper_border_opacity' => 0.8,
            'title_text_opacity' => 0.9,
            'content_text_opacity' => 0.8,
        ]);
    }
}
