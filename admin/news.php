<?php

$page = 'news';



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
	<h1>News</h1>

	<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
		<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
		<li class="breadcrumb-item active">News</li>
	</ol>

	<div class="card mb-4">
		<div class="card-header">
			<div class="row">
				<div class="col col-md-6">
					<i class="fas fa-table me-1"></i> News
				</div>
				<div class="col col-md-6" align="right">
					<a href="news_add.php" class="btn btn-success btn-sm">Add</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<table id="datatablesSimple">
				<thead>
					<tr>
						<th>title</th>
						<th>Date</th>
						<th>Category</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>

					<?php 

		$query = "SELECT * FROM pwc_db_news";

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
						<td><?php echo($row["category"]) ?></td>

						<td>
							<a href="../news/news.php?id=<?php echo $row["id"]; ?>" target="_blank"
								class="btn btn-success btn-sm">View</a>
							<a href="news_edit.php?id=<?php echo $row["id"]; ?>"
								class="btn btn-sm btn-primary">Edit</a>
							
							<input type="submit" class="btn btn-danger btn-sm" name="delete_news" value="Delete">

						</td>
					</tr>



					<?php 
					}
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