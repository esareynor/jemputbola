<?php

namespace App\Providers;

use App\Models\Biodata;
use App\Models\Role;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $role = Role::get();
        $biodata = Biodata::get();
        $data = array(
            'role' => $role,
            'biodata' => $biodata,
        );
        View::share('data', $data);
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
