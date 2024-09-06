<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            TemplateMobileSeeder::class,
            TemplateDekstopSeeder::class,
            HomePageMobileSeeder::class,
            HomePageDesktopSeeder::class,
            ButtonDekstopSeeder::class,
            ButtonMobileSeeder::class,
            SideBarDesktopSeeder::class,
            SideBarMobileSeeder::class,
            AboutUsDesktopSeeder::class,
            AboutUsMobileSeeder::class,
            TermAndConditionDesktopSeeder::class,
            TermAndConditionMobileSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
