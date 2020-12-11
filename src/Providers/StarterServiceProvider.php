<?php

namespace Sushre\Starter\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class StarterServiceProvider extends ServiceProvider
{

    private $rootPath = __DIR__ . '/../../';
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      $this->mergeConfigFrom(
        $this->rootPath . 'config/starter.php', 'starter'
      );  
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      $this->publisher();
      if(config('starter.route')){
        $this->registerRoutes();
      }
      $this->registerMigrations();
      $this->registerViews();
    }

  public function publisher(){
      $this->publishes([
        $this->rootPath .'database/migrations/' => database_path('migrations'),
        $this->rootPath .'config/starter.php' => config_path('starter.php'),
        $this->rootPath .'resources/views/' => resource_path('view/vendor/starter/'),
      ], 'sushre_starter');
  }

  public function registerRoutes(){ 
    $this->loadRoutesFrom(__DIR__.'/../../routes.php');
  }

  public function registerMigrations(){
    $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations/');
  }

  public function registerViews(){
    $this->loadViewsFrom(__DIR__ . '/../../resources/views/', 'sush_starter');
  }
}
