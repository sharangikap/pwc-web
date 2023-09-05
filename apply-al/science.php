<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->

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
<meta name="title" content="Science Stream - Application for Advanced Level Admission Registration │ Prince of Wales' College, Moratuwa" />
<meta name="description" content="Science Stream - Application for Advanced Level Admission Registration │ Prince of Wales' College, Moratuwa" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="https://princeofwales.edu.lk/apply-al/science.php" />
<meta property="og:title" content="Science Stream - Application for Advanced Level Admission Registration │ Prince of Wales' College, Moratuwa" />
<meta property="og:description" content="Science Stream - Application for Advanced Level Admission Registration │ Prince of Wales' College, Moratuwa" />
<meta property="og:image" content="https://princeofwales.edu.lk/content/img/" />

<!-- Twitter / WA / TG -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://princeofwales.edu.lk/apply-al/science.php" />
<meta property="twitter:title" content="Science Stream - Application for Advanced Level Admission Registration │ Prince of Wales' College, Moratuwa" />
<meta property="twitter:description" content="Science Stream - Application for Advanced Level Admission Registration │ Prince of Wales' College, Moratuwa" />
<meta property="twitter:image" content="https://princeofwales.edu.lk/content/img/" />



    <title>Science Stream - Application for Advanced Level Admission Registration</title>

    <!-- Bootstrap core CSS -->
    
        <link href="css/bootstrap.css" rel="stylesheet">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script> 

    <?php 
    include '../database_connection.php';
    include 'header.php';
    ?>

    <script type="text/javascript">
        $(function () {
            $("input[name='school']").click(function () {
                if ($("#chkNo").is(":checked")) {
                    $("#schoolname").removeAttr("disabled");
                    $("#schooldistrict").removeAttr("disabled");
                    $("#schoolname").focus();
                    $("#schooldistrict").focus();
                } else {
                    $("#schoolname").attr("disabled", "disabled");
                    $("#schooldistrict").attr("disabled", "disabled");
                }
            });
        });
    </script>


</head>

<body>

    <div class="container">
        <form class="form-horizontal" method="POST" action="science_insert.php">
            <br>
            <h4 class="text-center"> Application for 2025 Advanced Level Admission Registration </h4>
            <h4 class="text-center"> Science Stream </h4>
            <div class="form-group"></div>
            <div class="form-group"></div>
            <div class="form-group"></div>
            <div class="form-group"></div>
            <!--Subject Selection-->
            <div class="form-group">
                <label for="subject_selection" class="col-sm-2 col-form-label"> Subjects wish to apply </label>
                <div class="col-sm-5">
                    <select id="subject" name="sscience" style="min-height:30px;">

                        <option value="Bio/Chem/Phy"> Biology / Chemistry / Physics </option>
                        <option value="Bio/Chem/Agri"> Biology / Chemistry / Agriculture</option>
                        <option value="Maths/Chem/Phy"> Combined Mathematics / Chemistry / Physics </option>
                        <option value="Maths/ICT/Phy"> Combined Mathematics / ICT / Physics </option>
                    </select>
                </div>
                <div class="col-sm-5">
                    <p>( All subjects are in Sinhala Medium.)</p>
                </div>
            </div>
            <hr>
            <div class="form-group"></div>


            <div class="form-group">
                <label for="yesno" class="col-sm-3 col-form-label">Are you a student of Prince of Wales' College</label>
                <div class="col-sm-1">
                    <label class="radio-inline control-label">
                        <input checked="checked" id="chkYes" name="school" type="radio" value="Yes"> Yes
                    </label>
                </div>
                <div class="col-sm-1">
                    <label class="radio-inline control-label">
                        <input name="school" id="chkNo" type="radio" value="No"> No
                    </label>
                </div>
                <label for="school" class="col-sm-3 col-form-label">School or Private Candiate at GCE OL</label>
                <div class="col-sm-2">
                    <select id="sp" name="school_private" style="min-height:30px;">
                        <option value="school"> School Candidate </option>
                        <option value="private"> Private Candidate </option>


                    </select>
                </div>
            </div>

            <div class="form-group"></div>
            <div class="form-group">
                <label for="princeofwales" class="col-sm-3 col-form-label">If you are not a student of Prince of Wales' College</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="schoolname"
                        placeholder="Name of the School studied GCE OL" name="schoolname" disabled='disabled'>
                </div>
                <div class="col-sm-1">&nbsp; </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="schooldistrict"
                        placeholder="District of the Mentioned School" name="schooldistrict" disabled='disabled'>
                </div>
            </div>
            <hr>
            <!--Fullname-->
            <div class="form-group">
                <label for="firstname" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-9">

                    <input type="text" class="form-control"
                        placeholder="Disanayake Mudiyanselage Dushan Akalanka Disanayake" name="fname"
                        style='text-transform:uppercase' required>
                </div>
            </div>
            <!--Name with Initials-->
            <div class="form-group">
                <label for="iname" class="col-sm-2 col-form-label">Name with Initials</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" placeholder="D.M.D.A. Disanayake" name="iname"
                        style='text-transform:uppercase' required>
                </div>
            </div>
            <!--Gender-->
            <div class="form-group">
                <label for="gender" class="col-sm-2">Gender</label>
                <div class="col-sm-9">
                    <label class="radio-inline control-label">
                        <input checked="checked" name="gender" type="radio" value="Male"> Male
                    </label>
                    <label class="radio-inline control-label">
                        <input name="gender" type="radio" value="Female"> Female
                    </label>
                </div>
            </div>
            <!--Date of birth-->
            <div class="form-group">
                <label for="birthday" class="col-sm-2">Birthday</label>
                <div class="col-sm-9">
                    <input type="date" id="birthday" name="birthday">
                </div>
            </div>
            <!--NIC-->
            <div class="form-group">
                <label for="nic" class="col-sm-2 col-form-label ">National Idenetity Card No. (if any)</label>
                <div class="col-sm-2">
                    <input type="tel" class="form-control" id="nic" name="nic" maxlength="12">
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

            <!--Guardien's Name-->
            <div class="form-group">
                <label for="gname" class="col-sm-2 col-form-label">Father/Mother/Guardian's Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="gname" required>
                </div>
            </div>
            <!--Contact Number-->
            <div class="form-group">
                <label for="contact" class=" col-sm-2 col-form-label ">Contact No.</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="residential" placeholder="Residential No."
                        name="residential" pattern="[0-9]+">
                </div>
                <div class="col-sm-1">&nbsp;</div>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="mobile1" placeholder="Mobile 1" name="mobile1"
                        pattern="[0-9]+">
                </div>
                <div class="col-sm-1">&nbsp;</div>
                <div class="col-sm-2">
                    <input type="textr" class="form-control" id="mobile" placeholder="Mobile 2" name="mobile2"
                        pattern="[0-9]+">
                </div>
            </div>

            <!-- Email-->

            <div class="form-group">
                <label for="email" class="col-sm-2 col-form-label ">Email address (if any)</label>
                <div class="col-sm-4">
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                        placeholder="Enter email" name="email">
                </div>

            </div>
            <br>
            <!--Distance-->
            <div class="form-group">
                <div class="col-sm-3">
                    <label for="nic">Distance to the Prince of Wales' College from your place (in Km)</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="distance" name="distance" pattern="[0-9]+"
                        placeholder="Enter numeric values only" required>
                </div>

                <div class="col-sm-3">
                    <label for="in_ex"> Mode of Transport </label>
                </div>
                <div class="col-sm-3">
                    <select id="transport" name="transport" style="min-height:30px;">
                        <option value="Train"> Train</option>
                        <option value="Bus"> Bus </option>
                        <option value="Personal Vehicle"> Personal Vehicle </option>
                        <option value="Walk"> Walk </option>
                        <option value="Else"> Else </option>
                    </select> </div>
            </div>
            <hr>
            <div class="form-group col-12">


                <h4 class="text-center"> GCE Ordinary Level 2020(2021)</h4>
            </div>
            <!--Index Number-->
            <div class="form-group">

                <div class="col-xs-6 col-sm-3">
                    <label for="nic">Examination Index Number</label>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <input type="text" class="form-control" id="indexno" name="indexno" pattern="[0-9]+"
                        placeholder="Examination Index No" required>
                </div>


            </div>

            <!--Medium-->
            <div class="form-group">
                <label for="gender" class="col-sm-2">Medium</label>
                <div class="col-sm-9">
                    <label class="radio-inline control-label">
                        <input checked="checked" name="medium" type="radio" value="Sinhala"> Sinhala
                    </label>
                    <label class="radio-inline control-label">
                        <input name="medium" type="radio" value="English"> English
                    </label>

                </div>
            </div>

            <div class="table-responsive-sm">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Result</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Religion</td>
                            <td>
                                <select id="result1" name="religion">
                                    <option value="+"> + </option>
                                    <option value="A"> A </option>
                                    <option value="B"> B </option>
                                    <option value="C"> C </option>
                                    <option value="S"> S </option>
                                    <option value="W"> W </option>

                                </select>
                            </td>

                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td>Language & Literature</td>
                            <td>
                                <select name="sinhala" id="result2">
                                    <option value="+"> + </option>
                                    <option value="A"> A </option>
                                    <option value="B"> B </option>
                                    <option value="C"> C </option>
                                    <option value="S"> S </option>
                                    <option value="W"> W </option>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>English Language</td>
                            <td>
                                <select id="result3" name="english">
                                    <option value="+"> + </option>
                                    <option value="A"> A </option>
                                    <option value="B"> B </option>
                                    <option value="C"> C </option>
                                    <option value="S"> S </option>
                                    <option value="W"> W </option>

                                </select>
                            </td>

                        </tr>


                        <tr>
                            <th scope="row">4</th>
                            <td>Science</td>
                            <td>
                                <select id="result" name="science">
                                    <option value="+"> + </option>
                                    <option value="A"> A </option>
                                    <option value="B"> B </option>
                                    <option value="C"> C </option>
                                    <option value="S"> S </option>
                                    <option value="W"> W </option>

                                </select>
                            </td>

                        </tr>

                        <tr>
                            <th scope="row">5</th>
                            <td>Mathematics</td>
                            <td>
                                <select id="result5" name="maths">
                                    <option value="+"> + </option>
                                    <option value="A"> A </option>
                                    <option value="B"> B </option>
                                    <option value="C"> C </option>
                                    <option value="S"> S </option>
                                    <option value="W"> W </option>

                                </select>
                            </td>

                        </tr>

                        <tr>
                            <th scope="row">6</th>
                            <td>History</td>
                            <td>
                                <select id="result6" name="history">
                                    <option value="+"> + </option>
                                    <option value="A"> A </option>
                                    <option value="B"> B </option>
                                    <option value="C"> C </option>
                                    <option value="S"> S </option>
                                    <option value="W"> W </option>

                                </select>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td> <select id="op1" name="op1">
                                    <option value="Business & Accounting Studies"> Business & Accounting Studies
                                    </option>
                                    <option value="Geography"> Geography</option>
                                    <option value="Civic"> Civic Education </option>
                                    <option value="Second Language (Sinhala)"> Seond Language (Sinhala) </option>
                                    <option value="Second Language (Tamil)"> Second Language (Tamil) </option>
                                    <option value="Japanese"> Japanese </option>
                                    <option value="French"> French </option>
                                    <option value="German"> German </option>
                                    <option value="Chinese"> Chinese </option>
                                    <option value="Russian"> Russian </option>
                                    <option value="Hindi"> Hindi </option>
                                    <option value="Pali"> Pali </option>
                                    <option value="Sanskrit"> Sanskrit</option>
                                    <option value="Arabic"> Arabic </option>

                                </select>
                            </td>
                            <td>
                                <select id="result7" name="optional1">
                                    <option value="+"> + </option>
                                    <option value="A"> A </option>
                                    <option value="B"> B </option>
                                    <option value="C"> C </option>
                                    <option value="S"> S </option>
                                    <option value="W"> W </option>

                                </select>
                            </td>

                        </tr>


                        <tr>
                            <th scope="row">8</th>
                            <td> <select id="op2" name="op2">
                                    <option value="Music (Oriental)"> Music (Oriental) </option>
                                    <option value="Music (Western)"> Muisc (Westren)</option>
                                    <option value="Music (Carnatic)"> Music (Carnatic) </option>
                                    <option value="Art"> Art </option>
                                    <option value="Dancing"> Dancing </option>
                                    <option value="English Literature"> English Literature </option>
                                    <option value="English Literature"> Sinhala Literature </option>
                                    <option value="Tamil Literature"> Tamil Literature </option>
                                    <option value="Arabic Literature"> Arabic Literature </option>
                                    <option value="Drama & Theater"> Drama & Theatre</option>

                                </select>
                            </td>
                            <td>
                                <select id="result7" name="optional2">
                                    <option value="+"> + </option>
                                    <option value="A"> A </option>
                                    <option value="B"> B </option>
                                    <option value="C"> C </option>
                                    <option value="S"> S </option>
                                    <option value="W"> W </option>
                                </select>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">9 </th>
                            <td> <select id="op3" name="op3">
                                    <option value="ICT"> Information & Communication Technology </option>
                                    <option value="Agriculture"> Agriculture & Food Technology</option>
                                    <option value="Home Economics"> Home Economics </option>
                                    <option value="Health"> Health & Physical Education </option>
                                    <option value="Media"> Communication & Media Studies </option>
                                    <option value="Design & Construction"> Design & Construction Technology </option>
                                    <option value="Design & Mechanical"> Design & Mechanical Technology </option>
                                    <option value=" Design, Electrical & Electronic Technology"> Design, Electrical &
                                        Electronic Technology </option>
                                    <option value="Electronic Writing & Shorthand"> Electronic Writing & Shorthand
                                    </option>

                                    <option value="Arts & Crafts"> Arts & Crafts </option>
                                </select>
                            </td>
                            <td>
                                <select id="result9" name="optional3">
                                    <option value="+"> + </option>
                                    <option value="A"> A </option>
                                    <option value="B"> B </option>
                                    <option value="C"> C </option>
                                    <option value="S"> S </option>
                                    <option value="W"> W </option>

                                </select>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>


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
                            SUBMIT button. <br><b> A reference number will be provided after successful submission.</b>
                        </p>
                    </div>

                    <p><b>Before click on Submit button, you can click on the Cancel button and fill application from
                            the beginning.</b></p>
                    <p><b>* Otherwise Reset the same application and fill again before click on the submit button </b>
                    </p>
                </div>
            </div>
    
            <div class="form-group">
                <div class="col-sm-12">
                    <button type="reset" name="reset" value="Clear" class="btn btn-primary btn-sm py-3 px-4">Reset</button>
                    <button type="submit" name="submit" class="btn btn-success btn-sm py-3 px-4">Submit</button>
                    <button type="cancel" name="cancel" onclick="window.location.replace('../OL.html')" value="Cancel"
                        class="btn btn-primary btn-sm py-3 px-4" /> Cancel </button>
                </div>

            </div>
        </form>
    </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://arrow.scrolltotop.com/arrow5.js"></script>
        <noscript>Not seeing a <a href="http://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for
            more info.</noscript>


        <?php 
    include 'footer.php';
    ?>

</body>

</html>