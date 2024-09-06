<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SideBarMobile;

class SideBarMobileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SideBarMobile::create([
            'background_color' => '#f8f9fa',
            'sidebar_background_color' => '#343a40',
            'sidebar_background_opacity' => 0.9,
            'sidebar_section_title_color' => '#ffffff',
            'sidebar_icon_color' => '#ffffff',
            'sidebar_text_color' => '#e9ecef',
            'sidebar_section_title_opacity' => 0.8,
            'sidebar_icon_opacity' => 0.8,
            'sidebar_text_opacity' => 0.9,
        ]);
    }
}
