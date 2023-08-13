<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include '../database_connection.php';
    include 'header.php';
    include '../functions.php';
    ?>
</head>

<body>

    <body>
        <!-- Header Start -->
        <div class="container-fluid bg-primary py-5 mb-5 news-page-header">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1 class="display-3 text-white animated slideInDown">NEWS</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->






        <div class="colorlib-blog colorlib-light-grey">
        <div class="container">
        <div class="row">
            <?php 

$query = "SELECT * FROM pwc_db_news ORDER BY id DESC";

$statement = $connect->prepare($query);

$statement->execute();

if($statement->rowCount() > 0)
{
    foreach($statement->fetchAll() as $row)
    { 
        ?>

           

                
                    <div class="col-md-4 animate-box">
                        <article class="article-entry">
                            <a href="news.php?id=<?php echo $row["id"]; ?>" class="blog-img">
                                <img src="content/img/img-news/<?php echo $row["photo"]; ?>" alt="<?php echo $row["photo"]; ?>"><br><br>
                                <p class="meta"><span class="day"><?php echo $row["date"]; ?></span> │ <span></span> <span><?php echo $row["category"]; ?></span></p>
                            </a>
                            <div class="desc">
                                <h3><a href="news.php?id=<?php echo $row["id"]; ?>"><?php echo $row["title"]; ?></a></h3>
                                <p><?php echo $row["excerpt"]; ?></p>
                            </div>
                        </article>
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