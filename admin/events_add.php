<?php

//news.php

include '../database_connection.php';

include '../functions.php';

include 'admin-header.php';

if(!is_admin_login())
{
	header('location:../admin_login.php');
}

?>


<div class="container-fluid py-4" style="min-height: 700px;">
	<h1>Create New Event</h1>


	<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
		<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="Product.php">Event Management</a></li>
        <li class="breadcrumb-item active">Create New Event</li>
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
        					<label class="form-label">Name</label>
        					<input type="text" name="title" id="Product_name" class="form-control" />
        				</div>
        			</div>
					<div class="col-md-6">
        				<div class="mb-3">
        					<label class="form-label">Date</label>
        					<input type="date" name="date" id="date" class="form-control" />
        				</div>
        			</div>
					<div class="col-md-6">
        				<div class="mb-3">
        					<label class="form-label">Time</label>
        					<input type="time" name="time" id="time" class="form-control" />
        				</div>
        			</div>
        			<div class="col-md-6">
						<div class="mb-3">
        					<label class="form-label">Location</label>
        					<input type="text" name="Location" id="Location" class="form-control" />
        				</div>
        			</div>

					<div class="col-md-6">
						<div class="mb-3">
        					<label class="form-label">Organizer's Name</label>
        					<input type="text" name="organizer-name" id="organizer-name" class="form-control" />
        				</div>
        			</div>

					<div class="col-md-6">
						<div class="mb-3">
        					<label class="form-label">Organizer's Contact No.</label>
        					<input type="number" name="organizer-number" id="organizer-number" class="form-control" />
        				</div>
        			</div>

					<div class="col-md-6">
						<div class="mb-3">
        					<label class="form-label">Organizer's Email</label>
        					<input type="text" name="organizer-email" id="organizer-email" class="form-control" />
        				</div>
        			</div>

					<div class="col-md-6">
						<div class="mb-3">
        					<label class="form-label">About</label>
        					<input type="text" name="about" id="about" class="form-control" />
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
        			<input type="submit" name="add_news" class="btn btn-success" value="Create" />
        		</div>
        	</form>
        </div>
    </div>


	<?php
include 'admin-footer.php';
?>