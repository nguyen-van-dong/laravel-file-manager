<?php

namespace DnSoft\Media;

use Illuminate\Support\ServiceProvider;

class ImageServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
    $this->mergeConfigFrom(
      __DIR__ . '/../config/imageservice.php',
      'imageservice'
    );
  }

  /**
   * Bootstrap any package services.
   */
  public function boot(): void
  {
    $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');

    $this->loadMigrationsFrom(__DIR__ . '/../databases/migrations');

    $this->loadViewsFrom(__DIR__ . '/../resources/views', 'imageservice');

    $this->loadTranslationsFrom(__DIR__ . '/../lang', 'imageservice');

    if ($this->app->runningInConsole()) {
      $this->commands([
        // ADD NEW COMMANDS
      ]);
    }
  }
}
