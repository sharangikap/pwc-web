<?php

if(isset($_POST['submit'])){
 
 $db = mysqli_connect('localhost','','','')
 or die('Error connecting to MySQL server.');

$stechnology = $_POST['stechnology'];
$sstechnology = $_POST['sstechnology'];
$school = $_POST['school'];
$school_private = $_POST['school_private'];
$schoolname = $_POST['schoolname'];
$schooldistrict = $_POST['$schooldistrict'];
$fname =strtoupper($_POST['fname']); 
$iname = strtoupper($_POST['iname']);
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$nic = $_POST['nic'];
$address1 = strtoupper($_POST['address1']);
$address2 = strtoupper($_POST['address2']);
$city = strtoupper($_POST['city']);
$gname = strtoupper($_POST['gname']);
$residential=$_POST['residential'];
$mobile1 = $_POST['mobile1'];
$mobile2 = $_POST['mobile2'];
$email = $_POST['email'];
$distance = $_POST['distance'];
$transport = $_POST['transport'];
$indexno = $_POST ['indexno'];
$medium = $_POST['medium'];
$religion = $_POST['religion'];
$sinhala = $_POST['sinhala'];
$english = $_POST['english'];
$science = $_POST['science'];
$maths = $_POST['maths'];
$history = $_POST['history'];
$op1 = $_POST['op1'];
$optional1 = $_POST['optional1'];
$op2 = $_POST['op2'];
$optional2 = $_POST['optional2'];
$op3 = $_POST['op3'];
$optional3 = $_POST['optional3'];
$referenceno= rand();

$sql = "INSERT INTO S_Detail(Reference_no,Stream,Subject,Subject2,Lumbini_Other,School_Private_Candidate,School,S_District,Name,Name_with_Initials,Gender,Birthday,NIC,Address1,Address2,City,Guardian_Name,ResidentialNo,Mobile1,Mobile2,E_mail,Distance,Transport,IndexNo,Medium,Religion,Sinhala,English,Science,Mathematics,History,Optional1,Result1,Optional2,Result2,Optional3,Result3) 
VALUES ('$referenceno','Technology','$stechnology','$sstechnology','$school','$school_private','$schoolname','$schooldistrict','$fname','$iname','$gender','$birthday','$nic','$address1','$address2','$city','$gname','$residential','$mobile1','$mobile2','$email','$distance','$transport','$indexno','$medium','$religion','$sinhala','$english','$science','$maths','$history','$op1','$optional1','$op2','$optional2','$op3','$optional3')";


if(mysqli_query($db, $sql)){
    echo "<br> <br> <br>";
    echo "<p align=center>Thank You! Your Records added successfully.</p>";
   
    echo "<p align=center>Your <b> reference number </b> for the submission is &nbsp; . <font color='red'>. $referenceno.</font></p>"."<br>"."<br>"; 
    echo " <p align=center>Keep this reference number for future use.</p>"."<br>"."<br>"."<br>";
}
 else{
    echo "ERROR: Could not able to submit. Please try again.   " . mysqli_error($db);
}
     mysqli_close($db);


} ?>
<html>
    <head>
          <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/carousel.css" rel="stylesheet">
        <title> Success Submission</title>
        
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
<div class="form-group"></div>
     <div class="center">
    <button type="submit" name = "finish" value="finish" class="btn btn-primary btn-sm" onclick="window.location.replace('index.php')"> OK </button>
    </div>
</body>
</html>
