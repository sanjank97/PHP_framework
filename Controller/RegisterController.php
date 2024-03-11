<?php 
  namespace PHP_framework\Controller;
  use PHP_framework\Config\View;
  use PHP_framework\Model\User;
  class RegisterController
  {
      public static function index()
      {
        View::view("registrationForm");  
      }
      public static function register()
      {
          if($_POST['name']==""|| $_POST['email']==""||$_POST['password']=="")
          {
            $response=array(
              "message"=>"Something went wrong!",
              "status" =>false
            );
            return json_encode($response);
          }
          else
          {
              $request=array(
                "name"=>$_POST['name'],
                "email"=>$_POST['email'],
                "password"=>$_POST["password"],
              );
              $request=User::insertData($request);
              if($request)
              {
                $response=array(
                  "message"=>"User created successfully.",
                  "status" =>true
                );
                return json_encode($response);
              }
              else
              {
                $response=array(
                  "message"=>"Something went wrong!",
                  "status" =>false
                );
                return json_encode($response);
              }
          }
       
            
      }


    
  }



?>