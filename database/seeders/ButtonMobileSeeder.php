<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ButtonMobile;

class ButtonMobileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ButtonMobile::create([
            'button_color' => '#007bff',
            'login_button_background_color' => '#0056b3',
            'login_button_border_color' => '#004085',
            'login_button_background_hover_color' => '#004085',
            'login_button_background_selected_color' => '#003366',
            'login_button_text_color' => '#ffffff',
            'login_button_background_opacity' => 0.9,
            'login_button_border_opacity' => 0.8,
            'login_button_hover_opacity' => 0.85,
            'login_button_selected_opacity' => 0.9,
            'login_button_text_opacity' => 1.0,
        ]);
    }
}
