<?php 
  namespace PHP_framework\Config;
  class Session
  {
         // Set session
        public function setSession($sessionName, $sessionValue)
        {
            if(!empty($sessionName) && !empty($sessionValue))
            {
                $_SESSION[$sessionName] = $sessionValue;
            }
        }
        // Get session
        public function getSession($sessionName)
        {
            if(!empty($sessionName)){
                return $_SESSION[$sessionName];
            }
        }
        // Unset session
        public function unsetSession($sessionName)
        {
            if(!empty($sessionName)){  
                unset($_SESSION[$sessionName]);
            }
        }
        // Destroy whole sessions
        public function destroy(){
             session_destroy();
        }
        // Set flash message
        public function setFlash($sessionName, $msg){
            if(!empty($sessionName) && !empty($msg)){
                $_SESSION[$sessionName] = $msg;
            }
        }
        //Show flash message
        public function flash($sessionName, $className){

            if(!empty($sessionName) && !empty($className) && isset($_SESSION[$sessionName])){ 
                $msg = $_SESSION[$sessionName];   
                echo "<div class='". $className ."'>".$msg."</div>";
                unset($_SESSION[$sessionName]);

            }

        }

        
  }



?>