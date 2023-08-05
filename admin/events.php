<?php

//news.php

include '../database_connection.php';

include './admin-functions.php';
include '../functions.php';
include 'admin-header.php';

if(!is_admin_login())
{
	header('location:../admin_login.php');
}

?>

<div class="container-fluid py-4" style="min-height: 700px;">
	<h1>Events</h1>

	<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
		<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
		<li class="breadcrumb-item active">Events</li>
	</ol>

	<div class="card mb-4">
		<div class="card-header">
			<div class="row">
				<div class="col col-md-6">
					<i class="fas fa-table me-1"></i> Events
				</div>
				<div class="col col-md-6" align="right">
					<a href="events_add.php" class="btn btn-success btn-sm">Add</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<table id="datatablesSimple">
				<thead>
					<tr>
						<th>Name</th>
						<th>Date</th>
						<th>Time</th>
						<th>Location</th>
						<th>Organizer</th>
						<th>Status</th>
					</tr>
				</thead>

				<tbody>

					<?php 

		$query = "SELECT * FROM pwc_db_events";

		$statement = $connect->prepare($query);

		$statement->execute();

		if($statement->rowCount() > 0)
		{
			foreach($statement->fetchAll() as $row)
			{ 
				?>
					<tr>
						<td><?php echo($row["title"]) ?></td>
						<td><?php echo($row["date"]) ?></td>
						<td><?php echo($row["time"]) ?></td>
						<td><?php echo($row["location"]) ?></td>
						<td><?php echo($row["organizer_name"]) ?></td>

						<td>
							<a href="../events/event.php" class="btn btn-success btn-sm">View</a>
							<a  href="events_edit.php"
								class="btn btn-sm btn-primary">Edit</a>
							<a onclick="deleteById(<?php echo($row['id']) ?>)" class="btn btn-danger btn-sm">Delete</a>
						</td>
					</tr>



					<?php 
					}
		}	
		else
		{
			$message = '<li>Wrong Email Address</li>';
		}

?>


				</tbody>
			</table>
		</div>
	</div>

</div>

<?php
include 'admin-footer.php';
?>