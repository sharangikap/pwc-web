<!DOCTYPE html>
<html lang="en">

<head>

    <?php 
    include '../database_connection.php';
    include 'header.php';
    ?>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3"></h6>
                <h1 class="mb-5">Admission Registration - Advanced Level 2025</h1>
            </div>


<div class="form-group wow fadeInUp" data-wow-delay="0.1s">
        <p> 1. First Select the relevant stream you wished to apply.</p>
        <p> 2. Select one of the subject in three categories. Refer the details on subject selection for each category.
        </p>
        <p> 3. Make sure to answer for all questions given.</p>
        <p> 4. You cannot alter your submission so be careful and check thoroughly before submission.</p>
        <p> 5. You will get a registration reference number after successful submission. Keep that for your future
          reference</p>
        <hr><br>
        <p style="text-align:center"> <b>Please select one of the stream that you wish to apply.</b></p>
    

        <center>
            <a class="btn btn-primary py-3 px-5 mt-2 " href="science.php" style="border-radius=25px"
            data-wow-delay="0.7s">Science</a>
            <a class="btn btn-primary py-3 px-5 mt-2 " href="commerce.php" style="border-radius=25px"
            data-wow-delay="0.7s">Commerce</a>
            <a class="btn btn-primary py-3 px-5 mt-2 " href="art.php" style="border-radius=25px"
            data-wow-delay="0.7s">Arts</a>
            <a class="btn btn-primary py-3 px-5 mt-2 " href="technology.php" style="border-radius=25px"
            data-wow-delay="0.7s">Technology</a>
        </center>

</div>
</div>
    </div>

    <?php 
    include 'footer.php';
    ?>