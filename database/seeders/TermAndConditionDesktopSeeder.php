<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TermAndConditionDesktop;

class TermAndConditionDesktopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TermAndConditionDesktop::create([
            'background_color' => '#ffffff',
            'close_button_color' => '#ff0000',
            'text_color' => '#000000',
        ]);
    }
}
