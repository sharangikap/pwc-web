<html>

<head>
    <title>Success Submission</title>
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

    <!-- Stylesheet -->
    <link href="../../resources/css/style.css" rel="stylesheet">


    <style>
        .center {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>

<?php

if(isset($_POST['submit'])){
    include '../resources/db_con.php';

    $IndexNo = $_POST['IndexNo'];
    $fname = strtoupper($_POST['fname']); 
    $birthday = $_POST['birthday'];
    $address1 = strtoupper($_POST['address1']);
    $address2 = strtoupper($_POST['address2']);
    $city = strtoupper($_POST['city']);
    $mobile = $_POST['mobile'];
    $whatsapp = $_POST['whatsapp'];
    $father_name = $_POST['father-name'];
    $father_occupation = $_POST['father-occupation'];
    $father_employer = $_POST['father-employer'];
    $mother_name = $_POST['mother-name'];
    $mother_occupation = $_POST['mother-occupation'];
    $mother_employer = $_POST['mother-employer'];
    $guardian_name = isset($_POST['guardian-name']) ? $_POST['guardian-name'] : "";
    $guardian_occupation = isset($_POST['guardian-occupation']) ? $_POST['guardian-occupation'] : "";
    $guardian_employer = isset($_POST['guardian-employer']) ? $_POST['guardian-employer'] : "";
    $brother_count = $_POST['brother-count'];

    $sql = "INSERT INTO student_information 
            (IndexNo, fname, birthday, address1, address2, city, mobile, whatsapp, 
            father_name, father_occupation, father_employer, 
            mother_name, mother_occupation, mother_employer, 
            guardian_name, guardian_occupation, guardian_employer, 
            brother_count) 
            VALUES 
            ('$IndexNo', '$fname', '$birthday', '$address1', '$address2', '$city', '$mobile', '$whatsapp', 
            '$father_name', '$father_occupation', '$father_employer', 
            '$mother_name', '$mother_occupation', '$mother_employer', 
            '$guardian_name', '$guardian_occupation', '$guardian_employer', 
            '$brother_count')";

    if(mysqli_query($db, $sql)){
        echo '<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">';
        echo '    <div class="container text-center">';
        echo '        <div class="row justify-content-center">';
        echo '            <div class="col-lg-6">';
        echo '                <i class="bi bi-check-circle display-1 text-primary"></i>';
        echo '                <h1 class="mb-4">Thank You!</h1>';
        echo '                <p class="mb-4">Your Records Added Successfully.</p>';
        echo '<a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" href="../../">Go to Home</a>';
        echo '            </div>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    
    } else {
        echo '<br> <br> <br>';
        echo '<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">';
        echo '    <div class="container text-center">';
        echo '        <div class="row justify-content-center">';
        echo '            <div class="col-lg-6">';
        echo '                <i class="bi bi-exclamation-triangle display-1 text-primary"></i>';
        echo '                <h1 class="mb-4">ERROR :(</h1>';
        echo '                <p class="mb-4">Could not able to submit.</p>';
        echo '                <p class="mb-4">Please try again.' . mysqli_error($db);
        echo '<button type="submit" name="finish" value="finish" class="btn btn-primary btn-sm py-3 px-4" onclick="window.location.replace(\'index.php\')"> OK </button>';
        echo '            </div>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }

    mysqli_close($db);
}

?>

</body>
</html>