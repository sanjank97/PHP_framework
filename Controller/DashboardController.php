<?php
   namespace PHP_framework\Controller;
   use PHP_framework\Config\View;
   class DashboardController{
      public static function index()
      {
        View::view('dashboard');
      }
   }


?>