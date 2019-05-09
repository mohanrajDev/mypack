<?php
 
 namespace Devdojo\Calculator;
 use Illuminate\Support\ServiceProvider;

 Class CalculatorServiceProvider extends ServiceProvider
 {
     public function boot()
     {
         \Log::info('ok package');
     }

     public function register()
     {
         # code...
     }
 }
