<!DOCTYPE html>
<html lang="en">
<head>
    
<?php
include '../database_connection.php';
include 'header.php';

?>

</head>
<body>


        <!-- Header Start -->
        <div class="container-fluid bg-primary py-5 mb-5 event-page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">EVENTS</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->



        <!-- up Events Start -->
        <div class="container-xxl py-5">
        <div class="container">

        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Upcoming & past events</h6>
                <br><br>
        </div>

        
        <div class="row g-4 justify-content-center">

        <?php 

		$query = "SELECT * FROM pwc_db_events ORDER BY id DESC";

		$statement = $connect->prepare($query);

		$statement->execute();

		if($statement->rowCount() > 0)
		{
			foreach($statement->fetchAll() as $row)
			{ 
				?>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img-events/<?php echo($row["img"]) ?>" alt="<?php echo($row["img"]) ?>">
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h4 class="mb-4"><?php echo($row["title"]) ?></h4>
                        </div>
                        <div class="w-100 d-flex justify-content-center bottom-0 start-0 mb-4">
                                <a href="event.php?id=<?php echo $row["id"]; ?>" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 30px 30 30 30px;">Read More</a>
                            </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i><?php echo($row["organizer_name"]) ?></small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i><?php echo($row["date"]) ?></small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-map-marker text-primary me-2"></i><?php echo($row["location"]) ?></small>
                        </div>
                    </div>
            </div>
            <?php 
					}
		}	
        ?>
            

            </div>

        </div>
    </div>





    <?php include 'footer.php'; ?>
</body>
</html>