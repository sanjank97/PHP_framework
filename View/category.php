
    <div class="container" style="width:80%">
    <!-- Alert Message-->
    <div class="alert_message"></div>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    
                    <div class="col-sm-6">
						<h2><b>Categories</b></h2>
					</div>
					<div class="col-sm-6">
					
						<a href="#addCategoryModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Category</span></a>
                        <a href="http://<?php echo $_SERVER['SERVER_NAME']?>/PHP_framework/dashboard" class="btn btn-primary" > <span>Products</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>							
					</div>
                 
                </div>
                <div class="row">
                       <div class="col-sm-12">
                     
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>Category</th>
                        <th>Parent Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="categoryDisplay">  
                             
                </tbody>
            </table>
			<div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
	<!-- Edit Category Modal HTML -->
    <div id="editCategoryModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">			         
			  <form  method="post" id="editcategoryForm" action="http://<?php echo $_SERVER['SERVER_NAME']?>/PHP_framework/edit-category">
					<div class="modal-header">						
						<h4 class="modal-title">Edit Category</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
                        					
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control setname" name="name" required>
							<input type="hidden" class="form-control setid" name="id" required>
						</div>
						<div class="form-group">
							<label>Parent Category</label>				 
							<select class="form-control " name="parent_category_id" id="edit_select"> </select>							
						</div>										
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success cat_update" name="cat_update" value="Update">
					</div>
				</form>
			</div>
		</div>	
	</div>
    
		<!-- Add Category Modal HTML -->
		<div id="addCategoryModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">

                     
				<form  method="post" id="addategoryForm" action="http://<?php echo $_SERVER['SERVER_NAME']?>/PHP_framework/add-category">
					<div class="modal-header">						
						<h4 class="modal-title">Add New Category</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
                        					
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" name="name" required>
						</div>
						<div class="form-group">
							<label>Parent Category</label>				 
							<select class="form-control " name="parent_category_id" id="add_select"> </select>							
						</div>										
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success cat_submit" name="cat_submit" value="Add">
					</div>
				</form>
			</div>
		</div>	
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteCategoryModal" class="modal fade" aria-hidden="true" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form  method="post" id="deletecategoryForm" action="http://<?php echo $_SERVER['SERVER_NAME']?>/PHP_framework/delete-category">
					<div class="modal-header">						
						<h4 class="modal-title">Delete Employee</h4>
						<button type="button" class="close delete-close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="hidden" id="set_delete_id" name="id">
						<input type="submit" class="btn btn-danger" value="Delete" >
					</div>
				</form>
			</div>
		</div>
	</div>
