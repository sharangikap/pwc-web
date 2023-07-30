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
	<h1>News</h1>

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
						<th>Event Date</th>
						<th>Organizer</th>
        				<th>Status</th>
        				<th>Action</th>
        			</tr>
        		</thead>
        		
        		<tbody>
        		
            
			<tr>
				<td>faf</td>
				<td>adada</td>
				<td>ffqfaf</td>
				<td>ffqfaf</td>

				
				<td>
								<a href="../events/event.php" class="btn btn-success btn-sm">View</a>
        						<a onclick="return confirm('Are you Sure To Edit This')" href="events_edit.php" class="btn btn-sm btn-primary">Edit</a>
        						<a onclick="return confirm('Are Your Sure To Delete This')" class="btn btn-danger btn-sm" href=""  >Delete</a>
        					</td>
        				</tr>
  

        		</tbody>
        	</table>
        </div>
    </div>

</div>

<?php
include 'admin-footer.php';
?>