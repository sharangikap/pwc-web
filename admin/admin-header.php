<?php

//header.php

?>

<!doctype html>
<html lang="en">
    
    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="generator" content="">
        <title>Admin</title>
        <link rel="canonical" href="">
        <!-- Bootstrap core CSS -->
        <style><?php include 'css/styles.css'; ?></style>
        <style><?php include 'css/simple-datatables-style.css'; ?></style>
        <style><?php include 'css/select2.min.css'; ?></style>
        <style><?php include 'css/vanillaSelectBox.css'; ?></style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <!-- icons -->
        <link rel="icon" href="../logo-pwc.png">
        <meta name="theme-color" content="#800000">
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }
            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Style for the dropdown content */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-icon {
            margin-left: 5px;
        }

        </style>

    </head>


    <body class="sb-nav-fixed">

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        
        <a class="navbar-brand ps-3" href="index.php">
            <img src="../logo-pwc.png" alt="pwc logo" width="35px">&nbsp;&nbsp;&nbsp;Admin - Prince of Wales' College  
        </a>

        </nav>
        

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <br>
                            <a class="nav-link <?php if ($page === 'index') echo 'active'; ?>" href="index.php"><img src="ion-icon/dashboard.png" width="20px">&nbsp Dashboard</a>
                            <a class="nav-link <?php if ($page === 'news') echo 'active'; ?>" href="news.php"><img src="ion-icon/news.png" width="20px">&nbsp News</a>
                            <a class="nav-link <?php if ($page === 'events') echo 'active'; ?>" href="events.php"><img src="ion-icon/events.png" width="20px">&nbsp Events</a>

                            <br><hr><br>

                            <a class="nav-link" href="logout.php"><img src="ion-icon/logout.png" width="20px">&nbsp Logout</a>
                        
                        </div>

                    </div>
                    
                    <div class="sb-sidenav-footer">
                                            
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
        



  
    			