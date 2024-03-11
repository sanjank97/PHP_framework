<?php
   namespace PHP_framework\Controller;
   use PHP_framework\Config\View;
   use PHP_framework\Model\Category;
   class CategoryController{

        public static function index()
        {
          
            View::view('category');
        }
        public static function addCategory()
        {
           
            $name=$_POST['name'];
            $parent_category_id=$_POST['parent_category_id'];
            if($name!=""&&  $parent_category_id!="") 
            {

            //    $result=Category::fetchCategory(array("name"=>$name,'parent_category_id'=>$parent_category_id));

               $result=Category::fetchCategory(array("name"=>$name));
               if($result!=0)
               {
                 if($result[0]['parent_category_id']=="0")
                 {
                    $response= array(
                    "message"=>  $name." Category Already Exist. Try Another!",
                    "status"=>true,);
                 }
                 else
                 {
                     $request=array(
                        "name"=>$name,
                        "parent_category_id"=>$parent_category_id, 
                      );
                    $result=Category::insertData($request);
                    if($result)
                    {  
                        $response= array(
                            "message"=>"Category Saved!",
                            "status"=>true,
                            );
                    }
                 }
               }
               else
               {
                    $request=array(
                        "name"=>$name,
                        "parent_category_id"=>$parent_category_id, 
                    );
                    $result=Category::insertData($request);
                    if($result)
                    {  
                        $response= array(
                            "message"=>"Category Saved!",
                            "status"=>true,
                            );
                    }
               }
               return json_encode($response);

                
                   
            }   
           
        }

        public static function editCategory()
        {
           
            $name=$_POST['name'];
            $parent_category_id=$_POST['parent_category_id'];
            $id=$_POST['id'];

   
            if($name!=""&&  $parent_category_id!="") 
            {

              
                    $result=Category::fetchCategory(array("name"=>$name));

                    if($result!=0)
                    {
                        if($result[0]['parent_category_id']=="0")
                        {
                            $response= array(
                            "message"=>  $name." Category Already Exist. Try Another!",
                            "status"=>true,);
                        }
                        else
                        {
                            $request=array(
                                "name"=>$name,
                                "parent_category_id"=>$parent_category_id, 
                                'id'=>$id,
                            );
                            $result=Category::updateData($request);
                            if($result)
                            {  
                                $response= array(
                                    "message"=>"Category updated!",
                                    "status"=>true,
                                    );
                            }
                        }
                    }
                    else
                    {
                        $request=array(
                            "name"=>$name,
                            "parent_category_id"=>$parent_category_id, 
                            'id'=>$id,
                          );
                        $result=Category::updateData($request);
                        if($result)
                        {  
                            $response= array(
                                "message"=>"Category updated!",
                                "status"=>true,
                                );
                        }
                    }

                    return json_encode($response);


            
                   
            }   
           
        }
        public function deleteCategory()
        {
            $id=$_POST['id'];          
            $result=Category::deleteData(array("id"=>$id));
            if($result)
            {
                $response= array(
                    "message"=>"Category Deleted!",
                    "status"=>true,
                    );  
            }
            else
            {
                $response= array(
                    "message"=>"Something went wrong!",
                    "status"=>true,
                    );   
            }
            return json_encode( $response);
            
        }

        public static function categoryList()
        { 
            $result=Category::fetchCategory();  
            return json_encode($result);
        }
        public static function fetch_parent_category_id()
        {
            $result=Category::fetchDistinctCategory();  
            return json_encode($result);
        }

        public static function categorybyId()
        {
            $id=$_GET['id'];
            $result=Category::fetchCategory(array("id"=>$id));
            return json_encode( $result);
        }
      
   }


?>