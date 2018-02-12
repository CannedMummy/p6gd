<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
      Blade::directive('highlight', function ($expression) {
         return '<a class="md-primary text bold">' . $expression . '</a>';
      });
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
