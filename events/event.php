<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../database_connection.php'; ?>

  <?php
  $id=$_GET['id'];
  $query = "SELECT * FROM pwc_db_events WHERE id='$id'";
  

$statement = $connect->prepare($query);

$statement->execute();
foreach($statement->fetchAll() as $row)
?>

  <title><?php echo $row["title"]; ?> │ Prince of Wales' College, Moratuwa</title>

<?php include 'header.php'; ?>

<meta property="og:title" content="<?php echo $row["title"]; ?> │ Prince of Wales' College, Moratuwa"/>
	<meta property="og:image" content="events/img-events/<?php echo $row["img"]; ?>"/>
	<meta property="og:url" content="https://princeofwales.edu.lk/events/event.php?id=<?php echo $row["id"]; ?>"/>
	<meta property="og:site_name" content="Prince of Wales' College, Moratuwa"/>
	<meta property="og:description" content="<?php echo $row["about"]; ?>"/>
	<meta name="twitter:title" content="<?php echo $row["title"]; ?> │ Prince of Wales' College, Moratuwa" />
	<meta name="twitter:image" content="events/img-events/<?php echo $row["img"]; ?>" />
	<meta name="twitter:url" content="https://princeofwales.edu.lk/events/events.php?id=<?php echo $row["id"]; ?>" />

</head>

  <style>
    @media (min-width: 768px) {
      img {
        max-width: 50%;
      }
    }

    @media (min-width: 992px) {
      img {
        max-width: 30%;
      }
    }
  </style>

</head>

<body>


  <!-- Event Detail Content -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8">
        <h1><?php echo $row["title"]; ?></h1>
        <br>
        <p><i class="fa fa-calendar text-primary me-2"></i>Date: <b><?php echo $row["date"]; ?></b></p>
        <p><i class="fa fa-clock text-primary me-2"></i>Time: <b><?php echo $row["time"]; ?></b></p>
        <p><i class="fa fa-map-marker text-primary me-2"></i>Location: <b><?php echo $row["location"]; ?></b></p>

        <div class="row mt-4">
          <div class="col-md-12">
          <p><i class="fa fa-user text-primary me-2"></i>Event Organizer: <b><?php echo $row["organizer_name"]; ?></b></p>
            <p><i class="fa fa-phone text-primary me-2"></i>Contact: <?php echo $row["organizer_phone"]; ?></p>
<br>
            <h3>About this Event</h3>
            <p><?php echo $row["about"]; ?></p>

            <h3>Agenda and other Details</h3>
            <p><?php echo $row["other_details"]; ?></p>

          </div>

        </div>
      </div>
      <div class="col-md-4">
        <br><br>
        <img src="img-events/<?php echo $row["img"]; ?>" alt="<?php echo $row["img"]; ?>" class="img-fluid"
          style="object-fit: cover; border-radius: 8px; max-width: 100%; height: auto;">

      </div>
    </div>



  </div>


  <?php include 'footer.php'; ?>
</body>

</html>