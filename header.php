<head>
<meta charset="utf-8">
    <style>
    ::selection {
      background-color: #800000;
      color: white; 
    }
    </style>


    <title>Prince of Wales' College, Moratuwa</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="logo-pwc.png" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <h3>&nbsp; Loading...</h3>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-1 px-lg-4">
            <img src="logo-pwc.png" width="45px">
            <h6 class="m-0 text-primary">&nbsp; &nbsp; &nbsp;PRINCE OF WALES' COLLEGE<br>&nbsp; &nbsp; &nbsp;MORATUWA</h6>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link <?php if ($page === 'home') echo 'active'; ?>">Home</a>
                <a href="news/" class="nav-item nav-link">News</a>
                <a href="events/" class="nav-item nav-link">events</a>
                <a href="gallery.php" class="nav-item nav-link <?php if ($page === 'gallery') echo 'active'; ?>">Gallery</a>
                <a href="sports.php" class="nav-item nav-link <?php if ($page === 'sports') echo 'active'; ?>">Sports</a>
                <a href="clubs.php" class="nav-item nav-link <?php if ($page === 'clubs') echo 'active'; ?>">CLUBS</a>
                <a href="history.php" class="nav-item nav-link <?php if ($page === 'history') echo 'active'; ?>">History</a>
                <a href="about.php" class="nav-item nav-link <?php if ($page === 'about') echo 'active'; ?>">About</a>
                <a href="contact.php" class="nav-item nav-link <?php if ($page === 'contact') echo 'active'; ?>">Contact</a>

    </nav>
    <!-- Navbar End -->
