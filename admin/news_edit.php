<?php
$page = 'news';
include '../database_connection.php';
include '../functions.php';

if (!is_admin_login()) {
    header('location:../admin_login.php');
    exit();
}

include 'admin-header.php';

if (count($_POST) > 0) {
  
    $sql = "UPDATE pwc_db_news SET title = :title, content = :content, category = :category, photo = :photo WHERE id = :id";
    $stmt = $connect->prepare($sql);
    $params = array(
        ':title' => $_POST['title'],
        ':content' => $_POST['content'],
        ':category' => $_POST['category'],
        ':photo' => $_POST['photo'],
        ':id' => $_GET['id']
    );

    try {
        $stmt->execute($params);
        $message = "<script>alert('News updated successfully'); window.location.href = document.referrer;</script>";
    } catch (PDOException $e) {
        $message = "<script>alert('Error: " . $e->getMessage() . "');</script>";
    }
}

$sql = "SELECT * FROM pwc_db_news WHERE id = :id";
$stmt = $connect->prepare($sql);
$stmt->execute(array(':id' => $_GET['id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>



<div class="container-fluid py-4" style="min-height: 700px;">
	<h1>Edit News</h1>

	<?php if(isset($message)) {echo $message; } ?>

	<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
		<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="news.php">News</a></li>
		<li class="breadcrumb-item active">Edit News</li>
	</ol>
	<div class="card mb-4">
		<div class="card-header">
			Edit News
		</div>
		<div class="card-body">
			<form action="" method="POST" enctype="multipart/form-data">

				<div class="row">
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Title</label>
							<input type="text" name="title" id="Product_name" class="form-control" value="<?php echo $row['title']; ?>"/>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Description</label>
							<input type="text" name="content" id="content" class="form-control"  value="<?php echo $row['content']; ?>"/>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Category</label>
							<input type="text" name="category" id="category" class="form-control"  value="<?php echo $row['category']; ?>" />
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label">Featured Image</label>
						<input type="file" name="image" id="featured_img" class="form-control"
							accept=".jpg, .jpeg, .png, .webp" multiple  value="<?php echo $row['photo']; ?>"/>
					</div>
				</div>

		</div>
		<div class="mt-4 mb-3 text-center">
			<input type="submit" name="submit" class="btn btn-success" value="Edit" />
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