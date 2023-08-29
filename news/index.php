<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include '../database_connection.php';
    include 'header.php';
    include '../functions.php';
    ?>

    
    <meta property="og:title" content="News │ Prince of Wales' College, Moratuwa" />
    <meta property="og:image" content="../content/img/img-news/news-header-pwc.webp" />
    <meta property="og:url" content="https://princeofwales.edu.lk/clubs.php" />
    <meta property="og:site_name" content="Prince of Wales' College, Moratuwa" />
    <meta property="og:description"
        content="Since the inception of the school in 1876, Prince of Wales’ College has been considered as a major school in Moratuwa area and over the years, established its name as a leading school in Sri Lanka. Over the years, Prince of Wales’ College has provided the society with countless men of great caliber whom we are happy to say have served both, their school and the country alike…." />
    <meta name="twitter:title" content="News │ Prince of Wales' College, Moratuwa" />
    <meta name="twitter:image" content="../content/img/img-news/news-header-pwc.webp" />
    <meta name="twitter:url" content="https://princeofwales.edu.lk/clubs.php" />

    <style>
        .news-page-header {
            background: linear-gradient(rgba(56, 24, 24, 0.7), rgba(56, 24, 24, 0.7)), url(../content/img/img-news/news-header-pwc.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .news-page-header-inner {
            background: rgba(15, 23, 43, .7);
        }
    </style>
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
                                <img src="../content/img/img-news/<?php echo $row["photo"]; ?>"
                                    alt="<?php echo $row["photo"]; ?>"><br><br>
                                <p class="meta"><span class="day"><?php echo $row["date"]; ?></span> │ <span></span>
                                    <span><?php echo $row["category"]; ?></span></p>
                            </a>
                            <div class="desc">
                                <h4><a href="news.php?id=<?php echo $row["id"]; ?>"><?php echo $row["title"]; ?></a>
                                </h4>
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