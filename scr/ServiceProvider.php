<?php

namespace sbshara\laraadminlte;

use Illuminate\Support\ServiceProvider as SourceServiceProvider;
class ServiceProvider extends SourceServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadViews();
        $this->publishConfig();
        $this->publishAssets();
    }




    private function packagePath($path)
    {
        return __DIR__ . "/../$path";
    }

    private function loadViews()
    {
        $this->loadViewsFrom($this->packagePath('resources/views'), 'LaraAdminLTE');
    }

    private function publishConfig()
    {
        $configPath = $this->packagePath('config/LaraAdminLTE.php');
        $this->publishes([
            $configPath => config_path('LaraAdminLTE.php'),
        ], 'config');
        $this->mergeConfigFrom($configPath, 'LaraAdminLTE');
    }

    private function publishAssets()
    {
        $this->publishes([
            $this->packagePath('resources/assets') => public_path('vendor/LaraAdminLTE'),
        ], 'assets');
    }

}
