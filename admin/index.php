<?php

//index.php

include '../database_connection.php';

include '../functions.php';

if(!is_admin_login())
{
	header('location:../admin_login.php');
}


include 'admin-header.php';

?>

<div class="container-fluid py-4">
	<h1 class="mb-5"> Dashboard</h1>

	<div class="row">
		<div class="col-xl-3 col-md-6">
			<div class="card bg-primary text-white mb-4">
				<div class="card-body">
					<h1 class="text-center"><?php echo Count_total_news($connect); ?></h1>
					<h5 class="text-center">Posts</h5>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-warning text-white mb-4">
				<div class="card-body">
					<h1 class="text-center"><?php echo Count_total_published_news($connect); ?></h1>
					<h5 class="text-center">Published</h5>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-danger text-white mb-4">
				<div class="card-body">
					<h1 class="text-center"><?php echo Count_total_draft_news($connect); ?></h1>
					<h5 class="text-center">Drafts</h5>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-success text-white mb-4">
				<div class="card-body">
					<h1 class="text-center"><?php echo Count_total_events($connect); ?></h1>
					<h5 class="text-center">Events</h5>
				</div>
			</div>
		</div>
		
	</div>
</div>

<?php

include 'admin-footer.php';

?>