<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;
use App\Repositories\ConfigParams;

class AppServiceProvider extends ServiceProvider {

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot() {
    //
  }

  /**
   * Register any application services.
   *
   * @return void
   */
  public function register() {

    $this->app->singleton('GuzzleHttp\Client', function() {
      $config = new ConfigParams;
      return new Client([
          'base_uri' => $config->url,
          'timeout' => 2.0,
      ]);
    });
  }

}
