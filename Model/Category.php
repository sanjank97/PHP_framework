<?php
namespace PHP_framework\Model;
use PHP_framework\Config\Connection;
use PHP_framework\Model\model\Model;
class Category 
{
    public static function connect()
    {     
        return Model::connection();
    }
    public static function insertData($data)
    {
        return Model::create($data,"category");
    }
    public function updateData($data)//pass array
    {
        return Model::update("category",$data);
        //return true;
    }
    public static function fetchCategory($data="") // pass array
    {
       return Model::getData("category","*",$data);
  
    }

    public static function fetchDistinctCategory() // pass array
    {
       return Model::getData("category","name","",'distinct');
       // return "hello11";
    }
    public static function deleteData($data) //pass array
    {
        
        return Model::delete("category",$data);
    }

 




}