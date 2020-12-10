<?php

namespace Sushre\Starter\Providers;

use Illuminate\Support\ServiceProvider;
use Sushre\Post\Repositories\PostRepository;
use Sushre\Post\Contracts\PostContract;

class RepositoryServiceProvider extends ServiceProvider
{

  protected $repositories = [
    PostContract::class => PostRepository::class,
  ];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      foreach($this->repositories as $interface => $implementation){
        $this->app->bind($interface, $implementation);
      }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
