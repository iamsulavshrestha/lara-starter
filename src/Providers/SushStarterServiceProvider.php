<?php

namespace Sush\Starter\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;
use Config;

class SushStarterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    $this->registerRoutes();
    $this->registerMigrations();
    $this->registerViews();
    }


  public function registerRoutes(){ 
    $this->loadRoutesFrom(__DIR__.'/../../routes.php');
  }

  public function registerMigrations(){
    $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations/');
  }

  public function registerViews(){
    $this->loadViewsFrom(__DIR__ . '/../../resources/views/', 'sush_setting');
  }
}
