<?php
namespace PHP_framework\Config;
class init
{
    public function __construct()
    {
        require_once(dirname(__FILE__,2).'/routes.php'); 
        $action=$_SERVER['REQUEST_URI'];
        router::dispatch($action); 
    }
}
?>
