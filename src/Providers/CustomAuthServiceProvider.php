<?php

namespace Jaber\CustomAuth\Providers;

use Illuminate\Support\ServiceProvider;

class CustomAuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/custom-auth.php');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'custom-auth');
    }
}
