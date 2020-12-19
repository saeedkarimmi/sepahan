<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Harimayco\Menu\Models\Menus;
use Harimayco\Menu\Models\MenuItems;
use Harimayco\Menu\Facades\Menu;
use \App\Setting;

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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        $settings = [];
//        foreach( Setting::all() as $settingItem ){
//            $settings[ $settingItem->name ] = $settingItem->value;
//        }
//        View::share('settings', $settings );
//
        $main_menu = Menus::where('name','main')->with('items')->first();
        View::share('main_menu', $main_menu->items->toArray() );


    }
}
