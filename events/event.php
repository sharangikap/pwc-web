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
        <p>Date: <?php echo $row["date"]; ?></p>
        <p>Time: <?php echo $row["time"]; ?></p>
        <p>Location: <?php echo $row["location"]; ?></p>

        <div class="row mt-4">
          <div class="col-md-12">
            <h3>Event Organizer</h3>
            <p><?php echo $row["organizer_name"]; ?></p>
            <p>Phone: <?php echo $row["organizer_phone"]; ?></p>

            <h3>About this Event</h3>
            <p><?php echo $row["about"]; ?></p>

            <h3>Agenda and other Details</h3>
            <p><?php echo $row["other_details"]; ?></p>

          </div>

        </div>
      </div>
      <div class="col-md-4">
        <br><br>
        <img src="../<?php echo $row["img"]; ?>" alt="Event Image" class="img-fluid"
          style="object-fit: cover; border-radius: 8px; max-width: 100%; height: auto;">

      </div>
    </div>



  </div>


  <?php include 'footer.php'; ?>
</body>

</html>