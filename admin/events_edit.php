<?php

$page = 'events';

include '../database_connection.php';

include '../functions.php';

include 'admin-header.php';

if(!is_admin_login())
{
	header('location:../admin_login.php');
}

?>

<div class="container-fluid py-4" style="min-height: 700px;">
	<h1>Edit Event</h1>


	<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
		<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="Product.php">News Management</a></li>
		<li class="breadcrumb-item active">Edit Event</li>
	</ol>
	<div class="card mb-4">
		<div class="card-header">
			<i class="fas fa-user-plus"></i> Edit Event
		</div>
		<div class="card-body">
			<form action="" method="POST" enctype="multipart/form-data">

				<div class="row">
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Name</label>
							<input type="text" name="title" id="title" class="form-control" />
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
							<input type="text" name="location" id="location" class="form-control" />
						</div>
					</div>

					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Organizer's Name</label>
							<input type="text" name="organizer_name" id="organizer-name" class="form-control" />
						</div>
					</div>

					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Organizer's Contact No.</label>
							<input type="number" name="organizer_phone" id="organizer_phone" class="form-control" />
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
							<label class="form-label">Agenda / Other Details</label>
							<input type="text" name="other_details" id="other_details" class="form-control" />
						</div>
					</div>


					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Featured Image</label>
							<input type="file" class="form-control" name="photo" placeholder="Featured Image"
								id="photo">
						</div>
					</div>

				</div>
				<div class="mt-4 mb-3 text-center">
					<input type="submit" name="edit_event" class="btn btn-success" value="Edit" />
				</div>
			</form>

		</div>
	</div>

</div>
</div>
</div>

<?php
include 'admin-footer.php';
?>