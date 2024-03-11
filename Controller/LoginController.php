<?php 
  namespace PHP_framework\Controller;
  use PHP_framework\Config\View;
  use PHP_framework\Model\User;
  class LoginController
  {
      public static function index()
      {
        View::view("loginForm");  
      }
      public static function login()
      {
         $request=array(
            'email'=>$_POST['email'],
            'password'=>$_POST['password'],
         );

         $result=User::validUser($request);
         if($result)
         {
          $_SESSION['user']="user";
          $response=array(
            "message"=>"User Logged!",
            "status" =>true
          );
          return json_encode($response);
         }
         else
         {
          $response=array(
            "message"=>"Invalid Credentials",
            "status" =>false
          );
          return json_encode($response);
         }

      }
      public static function dashboard()
      {
        View::view("dashboard");
      }
     
  }



?>