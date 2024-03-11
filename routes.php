<?php

use PHP_framework\Config\router;
use PHP_framework\Controller\RegisterController;
use PHP_framework\Controller\LoginController;
use PHP_framework\Controller\DashboardController;
use PHP_framework\Controller\CategoryController;

router::get('/', function () {
    return "Welcome to MVC";
});

router::get('indexFunction', function () {
    return "hello world";
});

router::get('register', function () {
   return RegisterController::index();
});
router::post('register', function () {
    return RegisterController::register();
 });
router::get('login', function () {
    return LoginController::index();
 });
 router::post("login",function(){
    return LoginController::login();
 });

 router::get("dbconnect",function(){
    return LoginController::checkconnection();
 });

 router::get("dashboard",function(){
    return DashboardController::index();
 });

 router::get("category",function(){
   return CategoryController::index();
});

router::post("add-category",function(){
   return CategoryController::addCategory();
});
router::get("category-list",function(){
   return CategoryController::categoryList();
   // return "hello";
});
router::get("parent-category-id",function(){
   return CategoryController::fetch_parent_category_id();
   // return "hello";
});

router::get("categorybyId",function(){
   return CategoryController::categorybyId();
});

router::post("edit-category",function(){
   return CategoryController::editCategory();
});
router::post("delete-category",function(){
   return CategoryController::deleteCategory();
});





?>