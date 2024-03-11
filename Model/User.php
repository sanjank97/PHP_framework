<?php
namespace PHP_framework\Model;
use PHP_framework\Config\Connection;
use PHP_framework\Model\model\Model;
class User extends Model
{
    public static function connect()
    {     
        return Model::connection();
    }
    public static function insertData($data)
    {
        return Model::create($data,"user");
    }
    public function validUser($data)
    {
        return Model::checkUser($data,"user");
    }




}
