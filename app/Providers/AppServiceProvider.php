<?php

namespace App\Providers;

use App\Models\Settings\Menu;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $menus = Menu::with('options')->orderBy('order','asc')->get();
        View::share('menus', $menus);
    }
}
