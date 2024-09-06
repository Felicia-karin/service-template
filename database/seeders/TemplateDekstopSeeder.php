<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TemplateDekstop;

class TemplateDekstopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TemplateDekstop::create([
            'primary' => '#020d45',
            'secondary' => '#f9ff6a',
        ]);
    }
}
