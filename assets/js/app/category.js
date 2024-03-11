
$(document).ready(function(){

    displayCategoryData(); //display category list in html format.
    displayCategory(); //display category
    //login form submit
    $("#loginForm").submit(function(e) {
        e.preventDefault();
        var form = $(this);

        var actionUrl = form.attr('action'); 
        console.log(actionUrl);
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(),
            dataType:"json",
            success: function(data)
            {
                var message="";
                message +='<div class="alert alert-danger">';
                message +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
                message += data.message+'</div>';
                if(data.status)
                {
                   window.location.href="http://localhost/PHP_framework/dashboard";
                //   console.log("clicked");
                }
                else
                {
                   $('.alert_message').html(message); 
                }
            }
        });    
    });
    //register form submit
    $("#registerForm").submit(function(e) {
        
        e.preventDefault();  
        var form = $(this);
    
        console.log(form.serialize());
        var actionUrl = form.attr('action'); 
            $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(),
                dataType:"json",
                success: function(data)
                {
                var message="";
                
                if(data.status)
                {
                    message +='<div class="alert alert-success">';
                    message +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
                    message += data.message+'</div>';
                    $('.alert_message').html(message); 
                }
                else
                {
                    message +='<div class="alert alert-danger">';
                    message +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
                    message += data.message+'</div>';
                    $('.alert_message').html(message); 

                }

                }
            });    
    });

    //add category

        $("#addategoryForm").submit(function(e) {
            e.preventDefault();
            var form = $(this);
            var actionUrl = form.attr('action'); 
            $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(),
                dataType:"json",
                success: function(data)
                {
                    console.log(data);
                    var message="";
                    message +='<div class="alert alert-success">';
                    message +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
                    message += data.message+'</div>';
                    if(data.status)
                    {
                       //$('#addCategoryModal').modal('toggle');
                       $('.alert_message').html(message); 
                       displayCategoryData();
                       displayCategory();
                 
                                           
                    }
                  
                }
            });    
        });

  $(document).on("click",'.edit-category',function(){
        var id=   $(this).attr('data');
        //alert(id);
        var response= displayCategoryById(id);
        $('.setname').val(response[0].name);
        $('.setid').val(response[0].id);
        displayCategory(response); ///pasing parent_cat_id
        //alert(response[0].parent_category_id);
  });      
 //Edit Category
        $("#editcategoryForm").submit(function(e) {
            e.preventDefault();
            var form = $(this);
            var actionUrl = form.attr('action'); 
            console.log(form.serialize());
            console.log(actionUrl);

            $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(),
                dataType:"json",
                success: function(data)
                {
                   
                    var message="";
                    message +='<div class="alert alert-success">';
                    message +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
                    message += data.message+'</div>';
                    if(data.status)
                    {
                       //$('#editCategoryModal').modal('toggle');
                        $('.alert_message').html(message); 
                        displayCategoryData();
                        displayCategory();                             
                    }
                
                }
            });    
        });
    // set delete category id in model
    $(document).on("click",'.delete-category',function(){
        var id=   $(this).attr('data');
        $('#set_delete_id').val(id);
     }); 
     
     //Delete Category
     $("#deletecategoryForm").submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var actionUrl = form.attr('action'); 
        console.log(form.serialize());
        console.log(actionUrl);

        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(),
            dataType:"json",
            success: function(data)
            {
               
                console.log(data);
                var message="";
                message +='<div class="alert alert-success">';
                message +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
                message += data.message+'</div>';
                if(data.status)
                {
                   
                    //$('#deleteCategoryModal').modal('hide');
                    $('.alert_message').html(message); 
                    displayCategoryData();
                    displayCategory();                             
                }
            
            }
        });    
    });
     



});

function displayCategoryData()
{
    $.ajax({
        type: "GET",
        url:  "http://localhost/PHP_framework/category-list",
        dataType:"json",
        success: function(data)
        { 
           // console.log(data);
               var html='';
               for(var i=0;i<data.length; i++ )
                  {
                    var parent_category="";
                    if(data[i].parent_category_id=="0")
                    {
                        parent_category="default parent";
                    }
                    else
                    {
                      //console.log(displayCategoryById(data[i].parent_category_id));
                      parent_category= displayCategoryById(data[i].parent_category_id)[0].name; // fetch category name by passing category id as a parent_category_id
                      
                    }

                    html+='<tr>';
                    html+='<td>';
                    html+='<span class="custom-checkbox">';
                    html+='<input type="checkbox" id="checkbox1" name="options[]" value="1">';
                    html+='<label for="checkbox1"></label>';
                    html+='</span>';
                    html+='</td>';
                    html+='<td>'+data[i].name+'</td>';
                    html+='<td>'+parent_category+'</td> ';
                    html+='<td>';
                    html+='<a href="#editCategoryModal" class="edit edit-category" data-toggle="modal" data="'+data[i].id+'">';
                    html+='<i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>';
                    html+='</a>';
                    html+='<a href="#deleteCategoryModal" class="delete delete-category" data-toggle="modal" data="'+data[i].id+'">';
                    html+='<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>';
                    html+='</a>';
                    html+='</tr>';           
                  }

         $('#categoryDisplay').html(html);  
         //console.log(html)
                       
        }  
  }); 
}

function displayCategory(response="")  //display selected or not selected category list
{
    $.ajax({
        type: "GET",
        url:  "http://localhost/PHP_framework/category-list",
        dataType:"json",
        success: function(data)
        { 
            if(response!="")
            {  
                
               
                var html="";               
                html+='<option value="0">None</option>';
                for(var i=0;i<data.length; i++ )
                   {                
                        html+='<option value="'+data[i].id+'">'+data[i].name+'</option>';     
                   } 
                  
              $('#edit_select').html(html);  
            }
            else
            {
                var html="";               
                html+='<option value="0">None</option>';
                for(var i=0;i<data.length; i++ )
                   {                
                        html+='<option value="'+data[i].id+'">'+data[i].name+'</option>';     
                   }
                   $('#add_select').html(html);   
            }
               
        }  
  }); 
}


 function  displayCategoryById(id)
 {
    var jsonResponse; 
    $.ajax({
        url: "http://localhost/PHP_framework/categorybyId",
        type: 'GET',
        data:{'id':id},
        dataType: 'json', // added data type
        success: function (res) {
   
            jsonResponse = res; // ** getting the value here **
           // console.log(jsonResponse);
        },
        async: false // make ajax request synchronous
    });
   
   return  jsonResponse;
 }







