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
  
    $sql = "UPDATE pwc_db_events 
        SET title = :title, 
            date = :date, 
            time = :time, 
            location = :location, 
            organizer_name = :organizer_name, 
            organizer_phone = :organizer_phone, 
            about = :about, 
            other_details = :other_details, 
            slug = :slug";

$params = array(
    ':title' => $_POST['title'],
    ':date' => $_POST['date'],
    ':time' => $_POST['time'],
    ':location' => $_POST['location'],
    ':organizer_name' => $_POST['organizer_name'],
    ':organizer_phone' => $_POST['organizer_phone'],
    ':about' => $_POST['about'],
    ':other_details' => $_POST['other_details'],
    ':slug' => $_POST['slug'],
    ':id' => $_GET['id']
);

if (!empty($_POST['img'])) {
    $sql .= ", img = :img";
    $params[':img'] = $_POST['img'];
}

$sql .= " WHERE id = :id";

$stmt = $connect->prepare($sql);
$stmt->execute($params);


    try {
        $stmt->execute($params);
        $message = "<script>alert('Event updated successfully'); window.location.href = document.referrer;</script>";
    } catch (PDOException $e) {
        $message = "<script>alert('Error: " . $e->getMessage() . "');</script>";
    }
}

$sql = "SELECT * FROM pwc_db_events WHERE id = :id";
$stmt = $connect->prepare($sql);
$stmt->execute(array(':id' => $_GET['id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>


<div class="container-fluid py-4" style="min-height: 700px;">
	<h1>Edit Event</h1>


	<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
		<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="events.php">Events</a></li>
		<li class="breadcrumb-item active">Edit Event</li>
	</ol>
	<div class="card mb-4">
		<div class="card-header">
			Edit Event
		</div>
		<div class="card-body">
			<form action="" method="POST" enctype="multipart/form-data">

				<div class="row">
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Name</label>
							<input type="text" name="title" id="title" class="form-control"
								value="<?php echo $row['title']; ?>" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Date</label>
							<input type="date" name="date" id="date" class="form-control"
								value="<?php echo $row['date']; ?>" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Time</label>
							<input type="time" name="time" id="time" class="form-control"
								value="<?php echo $row['time']; ?>" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Location</label>
							<input type="text" name="location" id="location" class="form-control"
								value="<?php echo $row['location']; ?>" />
						</div>
					</div>

					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Organizer's Name</label>
							<input type="text" name="organizer_name" id="organizer-name" class="form-control"
								value="<?php echo $row['organizer_name']; ?>" />
						</div>
					</div>

					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Organizer's Contact No.</label>
							<input type="number" name="organizer_phone" id="organizer_phone" class="form-control"
								value="<?php echo $row['organizer_phone']; ?>" />
						</div>
					</div>

					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">About</label>
							<input type="text" name="about" id="about" class="form-control"
								value="<?php echo $row['about']; ?>" />
						</div>
					</div>

					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Agenda / Other Details</label>
							<input type="text" name="other_details" id="other_details" class="form-control"
								value="<?php echo $row['other_details']; ?>" />
						</div>
					</div>

					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Slug</label>
							<input type="text" name="slug" id="slug" class="form-control"
								value="<?php echo $row['slug']; ?>"
								oninput="this.value = this.value.replace(/\s+/g, '-').toLowerCase()" />
						</div>

					</div>


					<div class="mb-3">
						<label class="form-label">Featured Image</label>
						<input type="file" name="image" id="featured_img" class="form-control"
							accept=".jpg, .jpeg, .png, .webp" />
						<?php if (!empty($row['img'])): ?>
						<p>Current Image: <?php echo $row['img']; ?></p>
						<?php endif; ?>
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