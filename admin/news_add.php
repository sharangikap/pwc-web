<?php

$page = 'news';

include '../database_connection.php';

include '../functions.php';



if(!is_admin_login())
{
	header('location:../admin_login.php');
	exit();
} 

include 'admin-header.php';

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
    		 Write New Article
        </div>
        <div class="card-body">
		<form action="" method="POST" enctype="multipart/form-data">

        		<div class="row">
        			<div class="col-md-6">
        				<div class="mb-3">
        					<label class="form-label">Title</label>
        					<input type="text" name="title" id="title" class="form-control" />
        				</div>
        			</div>
					<div class="col-md-6">
        				<div class="mb-3">
        					<label class="form-label">Description</label>
        					<input type="text" name="content" id="content" class="form-control" />
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
        					<input type="file" class="form-control" name="photo" placeholder="Featured Image" id="photo">
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

if(isset($_POST["add_news"]))
{
	$formdata = array();

		$formdata['title'] = trim($_POST["title"]);

		$formdata['content'] = trim($_POST["content"]);

		$formdata['category'] = trim($_POST["category"]); 


		$data = array(
			':title'		=>	$formdata['title'],
			':content'		=>	$formdata['content'],
			':category'		=>	$formdata['category'],
		);

	$file = $_FILES['photo']['name'];
	$file_loc = $_FILES['photo']['tmp_name'];
	$folder = "../news/img-news/";
	$new_file_name = strtolower($file);
	$final_file = str_replace(' ', '-', $new_file_name);
	$final_file = rand() . "-" . $final_file; 
	if(move_uploaded_file($file_loc, $folder . $final_file)) {
		$image = $final_file;
		$query = "
		INSERT INTO pwc_db_news 
		(title, content, category, photo, date) 
		VALUES (:title, :content, :category, '".$image."', CURDATE())
		";

	}
	



	$statement = $connect->prepare($query);

	$statement->execute($data);
}

?>


	<?php
include 'admin-footer.php';
?>