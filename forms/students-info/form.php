<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Primary Meta Tags -->
    <meta name="title" content="Student Information Form - Prince of Wales' College, Moratuwa" />
    <meta name="description"
        content="Student Information Form: Collect and manage student data effectively with this comprehensive form." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://princeofwales.edu.lk/forms/students-info" />
    <meta property="og:title" content="Student Information Form - Prince of Wales' College, Moratuwa" />
    <meta property="og:description"
        content="Student Information Form: Collect and manage student data effectively with this comprehensive form." />
    <meta property="og:image" content="https://princeofwales.edu.lk/content/img/img-home/about-pwc.jpg" />

    <!-- Twitter / WA / TG -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://princeofwales.edu.lk/forms/students-info" />
    <meta property="twitter:title" content="Student Information Form - Prince of Wales' College, Moratuwa" />
    <meta property="twitter:description"
        content="Student Information Form: Collect and manage student data effectively with this comprehensive form." />
    <meta property="twitter:image" content="https://princeofwales.edu.lk/content/img/img-home/about-pwc.jpg" />





    <title>Student Information Form</title>

    <!-- Bootstrap core CSS -->

    <link href="../resources/css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="../resources/js/jquery.min.js"></script>
    <script type="text/javascript" src="../resources/js/bootstrap.js"></script>
    <?php 
    include '../../database_connection.php';
    include 'header.php';
    ?>


</head>

<body>

    <div class="container">
        <form class="form-horizontal" method="POST" action="form_insert.php">
            <h5 class="text-center"></h5>
            <h2 class="text-center"> Student Information Form </h2>
            <h4 class="text-center"> Prince of Wales' College, Moratuwa </h4>
            <div class="form-group"></div>


            <hr>
            <div class="form-group"></div>

            <div class="form-group">

                <div class="col-sm-2 col-form-label">
                    <label for="IndexNo">School Index Number</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="IndexNo" name="IndexNo" placeholder="School Index No"
                        required>
                </div>

            </div>

            <!--Fullname-->
            <div class="form-group">
                <label for="firstname" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-9">

                    <input type="text" class="form-control"
                        placeholder="Disanayake Mudiyanselage Dushan Akalanka Disanayake" name="fname"
                        style='text-transform:uppercase' required>
                </div>
            </div>

            <!-- Date of birth -->
            <div class="form-group">
                <!-- Day Selector -->
                <label for="dob-date" class="col-sm-2 col-form-label">Date of Birth</label>
                <div class="col-sm-2">
                    <select id="day" name="day" class="form-control" required>
                        <option value="">Day</option>
                        <?php for ($i = 1; $i <= 31; $i++) { ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                        <?php } ?>
                    </select>
                </div>

                <!-- Month Selector -->
                <div class="col-sm-2">
                    <select id="dob-month" name="month" class="form-control" required>
                        <option value="">Month</option>
                        <?php 
                $monthNames = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                foreach ($monthNames as $index => $monthName) { 
            ?>
                        <option value="<?= $index + 1 ?>"><?= $monthName ?></option>
                        <?php } ?>
                    </select>
                </div>

                <!-- Year Selector -->
                <div class="col-sm-2">
                    <select id="dob-year" name="year" class="form-control" required>
                        <option value="">Year</option>
                        <?php for ($i = 2000; $i <= 2023; $i++) { ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>




            <!--class-->
            <div class="form-group">
                <label for="grade" class="col-sm-2 col-form-label">Grade</label>
                <div class="col-sm-2">
                    <select id="grade" name="grade" style="min-height:30px;">
                        <option value="+">+</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                    </select>

                    <select id="class" name="class" style="min-height:30px;">
                        <option value="+">+</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        <option value="G">G</option>
                        <option value="H">H</option>
                    </select>
                </div>


            </div>

            <!--Address-->
            <div class="form-group">
                <label for="address" class="col-sm-2 col-form-label ">Personal Address</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="address1" placeholder="Address Line 1" required>
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-sm-2 col-form-label "></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="address2" placeholder="Address Line 2">
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-sm-2 col-form-label "></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="city" placeholder="City" required>
                </div>
            </div>




            <div class="form-group">
                <label for="religion" class="col-sm-2 col-form-label ">Religion</label>
                <div class="col-sm-4">
                    <select id="religion" name="religion" style="min-height:30px;">
                        <option value="+">+</option>
                        <option value="Buddhism">Buddhism</option>
                        <option value="Christianity">Christianity</option>
                        <option value="R. Catholic">R. Catholic</option>
                        <option value="8">Islam</option>
                        <option value="7">Hinduism</option>
                        <option value="11">Other</option>

                    </select>
                </div>

            </div>


                        <!-- Email-->

                        <div class="form-group">
                <label for="email" class="col-sm-2 col-form-label ">Email Address</label>
                <div class="col-sm-4">
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email"
                        name="email">
                </div>

            </div>


            <!--Contact Number-->
            <div class="form-group">
                <label for="contact" class=" col-sm-2 col-form-label ">Contact No.</label>
                <div class="col-sm-2">
                    <input type="tel" class="form-control" id="mobile" placeholder="Mobile No." name="mobile"
                        pattern="[0-9()+-\s]*" required>
                </div>
                <div class="col-sm-1">&nbsp;</div>
                <div class="col-sm-2">
                    <input type="tel" class="form-control" id="whatsapp" placeholder="WhatsApp No." name="whatsapp"
                        pattern="[0-9()+-\s]*" required>

                </div>
            </div>

            <br>

            <!--father's Name-->
            <div class="form-group">
                <label for="father-name" class="col-sm-2 col-form-label">Father's Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="father-name" id="father-name">
                </div>
            </div>
            <div class="form-group">
                <label for="father-occupation" class="col-sm-2 col-form-label">Father's Occupation</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="father-occupation" id="father-occupation">
                </div>
            </div>
            <div class="form-group">
                <label for="father-employer" class="col-sm-2 col-form-label">Father's Employer</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="father-employer" id="father-employer">
                </div>
            </div>
            <br>
            <!--Mother's Name-->
            <div class="form-group">
                <label for="mother-name" class="col-sm-2 col-form-label">Mother's Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="mother-name" id="mother-name">
                </div>
            </div>
            <div class="form-group">
                <label for="mother-occupation" class="col-sm-2 col-form-label">Mother's Occupation</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="mother-occupation" id="mother-occupation">
                </div>
            </div>
            <div class="form-group">
                <label for="mother-employer" class="col-sm-2 col-form-label">Mother's Employer</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="mother-employer" id="mother-employer">
                </div>
            </div>
            <br>
            <!--Guardian's Name-->
            <div class="form-group">
                <label for="guardian-name" class="col-sm-2 col-form-label">Guardian's Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="guardian-name" id="guardian-name">
                </div>
            </div>
            <div class="form-group">
                <label for="guardian-occupation" class="col-sm-2 col-form-label">Guardian's Occupation</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="guardian-occupation" id="guardian-occupation">
                </div>
            </div>
            <div class="form-group">
                <label for="guardian-employer" class="col-sm-2 col-form-label">Guardian's Employer</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="guardian-employer" id="guardian-employer">
                </div>
            </div>

            <script>
                function toggleGuardianFields() {
                    const fatherName = document.getElementById('father-name').value;
                    const motherName = document.getElementById('mother-name').value;
                    const guardianNameField = document.getElementById('guardian-name');
                    const guardianOccupationField = document.getElementById('guardian-occupation');
                    const guardianEmployerField = document.getElementById('guardian-employer');

                    if (fatherName || motherName) {
                        // If either father or mother fields have input, disable guardian fields
                        guardianNameField.disabled = true;
                        guardianOccupationField.disabled = true;
                        guardianEmployerField.disabled = true;
                    } else {
                        // If neither father nor mother fields have input, enable guardian fields
                        guardianNameField.disabled = false;
                        guardianOccupationField.disabled = false;
                        guardianEmployerField.disabled = false;
                    }
                }

                // Attach the function to the input events of father and mother fields
                document.getElementById('father-name').addEventListener('input', toggleGuardianFields);
                document.getElementById('mother-name').addEventListener('input', toggleGuardianFields);

                // Call the function initially to set the initial state
                toggleGuardianFields();
            </script>



            <br>

            <div class="form-group">
                <label for="brother-count" class="col-sm-2 col-form-label">Number of Brother(s) Studying in
                    School</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" name="brother-count" required>
                </div>
            </div>

            <hr>




            <div class="form-group">

                <div class="form-check col-sm-12">

                    <input class="form-check-input" type="checkbox" id="gridCheck" checked>

                    <label class="form-check-label " for="gridCheck">

                        I hereby certified that the above mentioned information is true and accurate</label>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <div class="alert alert-danger">
                        <p style="color:red;">Please CHECK the information you provided are correct BEFORE click on
                            SUBMIT button.
                        </p>
                    </div>

                    <p><b>Before click on Submit button, you can click on the Reset button and fill application from
                            the beginning.</b></p>
                    <p>
                    </p>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <button type="reset" name="reset" value="Clear"
                        class="btn btn-primary btn-sm py-3 px-4">Reset</button>
                    <button type="submit" name="submit" class="btn btn-success btn-sm py-3 px-4">Submit</button>
                </div>

            </div>
        </form>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>



    <?php 
    include 'footer.php';
?>

</body>

</html>