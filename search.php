<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'database_connection.php';
    include 'header.php';
    include 'functions.php';
    ?>

    <title>Search │ Prince of Wales' College, Moratuwa</title>
    <?php
    $page = 'search';
    ?>

    <style>
        /* Style for the curved search box */
        .search-box {
            border-radius: 25px;
        }

        .search-icon {
            background-color: maroon;
            border: none;
            border-radius: 0 25px 25px 0;
            color: white;
        }
    </style>

</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Type Here To Search</h6>
                    <form method="post" action=""> <!-- Added the form element -->
                        <div class="input-group mb-3">
                            <input type="text" class="form-control search-box" placeholder="Search" aria-label="Search" aria-describedby="search-icon" name="search">
                            <div class="input-group-append">
                                <button class="input-group-text search-icon" id="search-icon" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="colorlib-blog colorlib-light-grey">
        <div class="container">
            <div class="row">
                <?php
                if (isset($_POST['search'])) {
                    $keyword = $_POST['search'];

                    $sql = "SELECT * FROM pwc_db_news
                            WHERE title LIKE :keyword
                            OR excerpt LIKE :keyword
                            OR category LIKE :keyword";

                    $stmt = $connect->prepare($sql);
                    $stmt->bindValue(':keyword', '%' . $keyword . '%', PDO::PARAM_STR);
                    $stmt->execute();

                    // Get the number of rows returned by the query
                    $row_count = $stmt->rowCount();

                    if ($row_count > 0) {
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            // Generate the HTML output for each record
                            echo '<div class="col-md-4 animate-box">
                                    <article class="article-entry">
                                        <a href="news.php?id=' . $row["id"] . '" class="blog-img">
                                            <img src="../content/img/img-news/' . $row["photo"] . '" alt="' . $row["photo"] . '"><br><br>
                                            <p class="meta"><span class="day">' . $row["date"] . '</span> │ <span></span>
                                                <span>' . $row["category"] . '</span></p>
                                        </a>
                                        <div class="desc">
                                            <h4><a href="news.php?id=' . $row["id"] . '">' . $row["title"] . '</a></h4>
                                            <p>' . $row["excerpt"] . '</p>
                                        </div>
                                    </article>
                                </div>';
                        }
                    } else {
                        echo "No results found.";
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>
