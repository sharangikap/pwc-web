<?php

//news.php

include '../database_connection.php';

include '../function.php';

include 'admin-header.php';

if(!is_admin_login())
{
	header('location:../admin_login.php');
}

?>


<div class="container-fluid py-4" style="min-height: 700px;">
	<h1>Write New Article</h1>


	<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
		<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="Product.php">News Management</a></li>
        <li class="breadcrumb-item active">Write New Article</li>
    </ol>



    <div class="card mb-4">
    	<div class="card-header">
    		<i class="fas fa-user-plus"></i> Write New Article
        </div>
        <div class="card-body">
		<form action="" method="POST" enctype="multipart/form-data">

        		<div class="row">
        			<div class="col-md-6">
        				<div class="mb-3">
        					<label class="form-label">Title</label>
        					<input type="text" name="title" id="Product_name" class="form-control" />
        				</div>
        			</div>
					<div class="col-md-6">
        				<div class="mb-3">
        					<label class="form-label">Description</label>
        					<input type="text" name="Description" id="description" class="form-control" />
        				</div>
        			</div>
        			<div class="col-md-6">
						<div class="mb-3">
        					<label class="form-label">Category</label>
        					<input type="text" name="category" id="category" class="form-control" />
        				</div>
        			</div>
        		</div>
        		
					<div class="col-md-6">
        				<div class="mb-3">
        					<label class="form-label">Featured Image</label>
        					<input type="file" name="image" id="featured_img" class="form-control" accept=".jpg, .jpeg, .png, .webp" multiple />
        				</div>
        			</div>

        		</div>
        		<div class="mt-4 mb-3 text-center">
        			<input type="submit" name="add_news" class="btn btn-success" value="Publish" />
        		</div>
        	</form>
        </div>
    </div>


	<?php
include 'admin-footer.php';
?>