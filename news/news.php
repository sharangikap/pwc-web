<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../database_connection.php'; ?>

<?php
$id = $_GET['id'];
$query = "SELECT * FROM pwc_db_news WHERE id='$id'";
$statement = $connect->prepare($query);
$statement->execute();
$rows = $statement->fetchAll();

if (count($rows) === 0) {
    header("Location: https://princeofwales.edu.lk/404.php");
}

foreach ($rows as $row) {
}
?>

  <title><?php echo $row["title"]; ?> │ Prince of Wales' College, Moratuwa</title>

  <?php include 'header.php'; ?>


  <meta property="og:title" content="<?php echo $row["title"]; ?> │ Prince of Wales' College, Moratuwa"/>
  <meta property="og:image" content="../content/img/img-news/<?php echo htmlspecialchars($row["photo"], ENT_QUOTES, 'UTF-8'); ?>"/>
	<meta property="og:url" content="https://princeofwales.edu.lk/news/news.php?id=<?php echo $row["id"]; ?>"/>
	<meta property="og:site_name" content="Prince of Wales' College, Moratuwa"/>
	<meta property="og:description" content="<?php echo $row["excerpt"]; ?>"/>
	<meta name="twitter:title" content="<?php echo $row["title"]; ?> │ Prince of Wales' College, Moratuwa" />
  <meta property="twitter:description" content="<?php echo $row["excerpt"]; ?>" />
  <meta name="twitter:image" content="../content/img/img-news/<?php echo htmlspecialchars($row["photo"], ENT_QUOTES, 'UTF-8'); ?>" />
	<meta name="twitter:url" content="https://princeofwales.edu.lk/news/news.php?id=<?php echo $row["id"]; ?>" />


</head>

<body>

  <header>
    <br><br><br>


    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
          <h6 class="section-title bg-white text-start text-primary pe-3"><?php echo $row["category"]; ?></h6>
          <h2 class="mb-4"><?php echo $row["title"]; ?></h2>
          <h6 class="bg-white text-start text-primary "><?php echo $row["date"]; ?></h6>
          <p class="mb-4"><?php echo $row["content"]; ?></p>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="position-relative ">
            <img class="img-fluid w-100 h-100" src="../content/img/img-news/<?php echo $row["photo"]; ?>" alt="<?php echo $row["photo"]; ?>"
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