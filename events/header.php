<head>
    <meta charset="utf-8">
    <title>Events</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <!-- Favicon -->
    <link href="../../content/icons/logo-70x70-pwc.png" rel="icon">
    <link rel="icon" href="../../content/icons/logo-70x70-pwc.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="../../content/icons/logo-apple-touch-icon-pwc.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../../content/icons/logo-android-chrome-icon-pwc.png">
    <meta name="msapplication-TileImage" content="../../content/icons/logo-70x70-pwc.png">
    <meta name="msapplication-TileColor" content="#800000">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../resources/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../resources/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../resources/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../resources/css/style.css" rel="stylesheet">


    <style>
        ::selection {
            background-color: #800000;
            color: white;
        }

        .pulse:hover {
            animation: pulse-animation 1s;
        }

        .dropdown-item:hover {
        color: maroon;
    }
    
        @keyframes pulse-animation {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }


        .img-header {
        width: 35px;
    }

    .h6-header {
        font-size: 17.5px;
    }

    @media (max-width: 375px) {
        .img-header {
            width: 30px; 
        }

        .h6-header {
            font-size: 13px; 
        }
    }

    </style>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-K1KCZVJTWP"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-K1KCZVJTWP');
</script>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only"></span>
        </div>
        <h3>&nbsp; Loading...</h3>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="../../" class="navbar-brand d-flex align-items-center px-1 px-lg-4">
            <img src="../../content/img/logo-pwc.png"  alt="pwc logo" class="img-header">
            <h6 class="m-0 text-primary h6-header" style="font-family: 'Arimo', sans-serif;">&nbsp; &nbsp; PRINCE OF WALES'
                COLLEGE<br>&nbsp; &nbsp; MORATUWA
            </h6>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="../../" class="nav-item nav-link nav-link pulse">Home</a>
                <a href="../../news/" class="nav-item nav-link nav-link pulse">News</a>
                <a href="../../events" class="nav-item nav-link active nav-link pulse">Events</a>
                <a href="../../golden-book" class="nav-item nav-link nav-link pulse">The Golden Book</a>

                <div class="nav-item dropdown">
                    <a href="../../sports"
                        class="nav-link dropdown-toggle <?php if ($page === 'sports') echo 'active'; ?> nav-link pulse">Sports</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a class="dropdown-item" href="../../sports#team-sports"><b>TEAM SPORTS</b></a>
                        <a class="dropdown-item" href="../../sports#individual-sports"><b>INDIVIDUAL SPORTS</b></a>
                        <a class="dropdown-item" href="../../sports#aquatic-sports"><b>AQUATIC SPORTS</b></a>
                        <a class="dropdown-item" href="../../sports#combat-sports"><b>COMBAT SPORTS</b></a>
                        <a class="dropdown-item" href="../../sports#racquet-sports"><b>RACQUET SPORTS</b></a>
                        <a class="dropdown-item" href="../../sports#mind-sports"><b>MIND SPORTS</b></a>
                        <a class="dropdown-item" href="../../sports#target-sports"><b>TARGET SPORTS</b></a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="../../clubs"
                        class="nav-link dropdown-toggle <?php if ($page === 'clubs') echo 'active'; ?> nav-link pulse">Clubs</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a class="dropdown-item" href="../../clubs#media-clubs"><b>MEDIA CLUBS</b></a>
                        <a class="dropdown-item" href="../../clubs#tech-clubs"><b>TECHNOLOGICAL CLUBS</b></a>
                        <a class="dropdown-item" href="../../clubs#resprentative-clubs"><b>REPRESENTATIVE CLUBS</b></a>
                        <a class="dropdown-item" href="../../clubs#service-clubs"><b>COMMUNITY SERVICE CLUBS</b></a>
                        <a class="dropdown-item" href="../../clubs#cadeting"><b>CADETING</b></a>
                        <a class="dropdown-item" href="../../clubs#edu-clubs"><b>EDUCATIONAL CLUBS</b></a>
                        <a class="dropdown-item" href="../../clubs#lang-clubs"><b>LANGUAGE CLUBS</b></a>
                        <a class="dropdown-item" href="../../clubs#aesthetic-clubs"><b>AESTHETIC CLUBS</b></a>
                        <a class="dropdown-item" href="../../clubs#hobby-clubs"><b>HOBBY CLUBS</b></a>
                        <a class="dropdown-item" href="../../clubs#religious-clubs"><b>RELIGIOUS CLUBS</b></a>
                    </div>
                </div>

                <a href="../../history" class="nav-item nav-link nav-link pulse">History</a>
                <a href="../../about" class="nav-item nav-link nav-link pulse">About Us</a>
                <a href="../../contact" class="nav-item nav-link nav-link pulse">Contact</a>
                <a href="../../search"><i class="bi bi-search nav-item nav-link <?php if ($page === 'search') echo 'active'; ?> nav-link pulse" id="search-icon"></i></a>

    </nav>
    <!-- Navbar End -->