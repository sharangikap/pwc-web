<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../database_connection.php'; ?>

  <?php
    $id=$_GET['id'];
    $query = "SELECT * FROM pwc_db_news WHERE id='$id'";
    

$statement = $connect->prepare($query);

$statement->execute();
foreach($statement->fetchAll() as $row)
?>
  <title><?php echo $row["title"]; ?> │ Prince of Wales' College, Moratuwa</title>

  <?php include 'header.php'; ?>


</head>

<body>

  <header>
    <br><br><br>


    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
          <h6 class="section-title bg-white text-start text-primary pe-3"><?php echo $row["category"]; ?></h6>
          <h1 class="mb-4"><?php echo $row["title"]; ?></h1>
          <h6 class="bg-white text-start text-primary "><?php echo $row["date"]; ?></h6>
          <p class="mb-4"><?php echo $row["content"]; ?></p>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="position-relative ">
            <img class="img-fluid w-100 h-100" src="img-news/<?php echo $row["photo"]; ?>" alt=""
              style="object-fit: cover; border-radius: 8px;">
          </div>
        </div>
      </div>
    </div>
  </header>

  <br>


  </div>
  <?php include 'footer.php'; ?>
</body>

</html>