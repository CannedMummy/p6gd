<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
   public static $sections = [
      'index' => 'index',
      'a-c1' => 'a-c1'
   ];

   public static $api = false;

   public static function index()
   {
      foreach (HomeController::$sections as $view => $path) {
         $html = view($view,
            [
               'api' => HomeController::$api,
               'sections' => HomeController::$sections
            ])->render();

         $path = Config::get('constants.build_path') . '\\' . $path . '.html';

         HomeController::saveFile($path, $html);
      }
   }
}
