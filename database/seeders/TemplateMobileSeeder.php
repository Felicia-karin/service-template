<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TemplateMobile;

class TemplateMobileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TemplateMobile::create([
            'primary' => '#020d45',
            'secondary' => '#f9ff6a',
        ]);
    }
}
