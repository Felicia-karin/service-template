<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Template\TemplateRepository;
use App\Repositories\Template\TemplateRepositoryImplement;
use App\Repositories\HomePage\HomePageRepository;
use App\Repositories\HomePage\HomePageRepositoryImplement;
use App\Repositories\Button\ButtonRepository;
use App\Repositories\Button\ButtonRepositoryImplement;
use App\Repositories\SideBar\SideBarRepository;
use App\Repositories\SideBar\SideBarRepositoryImplement;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(TemplateRepository::class, TemplateRepositoryImplement::class);
        $this->app->bind(HomePageRepository::class, HomePageRepositoryImplement::class);
        $this->app->bind(ButtonRepository::class, ButtonRepositoryImplement::class);
        $this->app->bind(SideBarRepository::class, SideBarRepositoryImplement::class);
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
