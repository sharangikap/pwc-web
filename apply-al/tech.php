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


        <title>Technology Stream</title>

        <!-- Bootstrap core CSS -->
        <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/carousel.css" rel="stylesheet">

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script> -->
        <?php 
    include '../database_connection.php';
    include 'header.php';
    ?>
    
<script type="text/javascript">
    $(function () {
        $("input[name='school']").click(function () {
            if ($("#chkNo").is(":checked")) {
                $("#schoolname").removeAttr("disabled");  
                $("#schooldistrict").removeAttr("disabled") ;
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
    <body> <div class="container">
            
           <!-- <img class="img-responsive" src="D:\Lumbini web\lmv web\images/Lumbini Coolage 85.png" >
            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="D:\Lumbini web\lmv web\index.html"> Home</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class=""><a href="D:\Lumbini web\lmv web\Pages\Our_LMV/Our_LMV_About.html">About</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acadamic <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="D:\Lumbini web\lmv web\Pages\Academic/Academic_Grade_05.html">Grade 5 Results</a></li>
                                    <li><a href="D:\Lumbini web\lmv web\Pages\Academic/Academic_GCE_OL.html">G.C.E.(O/L) Results </a></li>
                                    <li><a href="D:\Lumbini web\lmv web\Pages\Academic/Academic_GCE_AL.html" >G.C.E.(A/L) Results </a> </li>
                                    
                                </ul>
                                <!--<li><a href="#">Acadamic</a></li>-->

                                <!--<li><a href="#">Administration</a></li>-->

                <!--            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administration <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="D:\Lumbini web\lmv web\Pages\Administration\.html">Management Hierarchical Order </a></li>
                                    <li><a href="D:\Lumbini web\lmv web\Pages\Administration\Administration_Principle_Msg.html">Principal's Message</a></li>
                                    <li><a href="D:\Lumbini web\lmv web\Pages\Administration\Administration_Dep_Principle_Msg.html" >Deputy Principals  </a> </li>
                                    <li><a href="D:\Lumbini web\lmv web\Pages\Administration\Administration_Assistant_Principle_Msg.html" >Assistant Principals  </a> </li>
                                    <li><a href="D:\Lumbini web\lmv web\Pages\Administration\Administration_Tutorial_Staff_Managment.html" >Management Committee  </a> </li>
                                    <li><a href="D:\Lumbini web\lmv web\Pages\Administration\Administration_Tutorial_Staff_Lecture.html" >Tutorial Staff Lecturing  </a> </li>
                                    <li><a href="D:\Lumbini web\lmv web\Pages\Administration\Administration_Non_Acadamic.html" >Non-Academic Staff  </a> </li>
 
                                </ul>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Co-Curriculam <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="D:\Lumbini web\lmv web\Pages\Co_Curriculum/Co_Curriculam_Cultural_Commitee.html">Culture Committee </a></li>
                                    <li><a href="D:\Lumbini web\lmv web\Pages\Co_Curriculum/Co_Curriculam_Sport_Commitee.html">Sports Committee </a></li>
                                    <li><a href="D:\Lumbini web\lmv web\Pages\Co_Curriculum/Co_Curriculam_Special_Achievments.html" >Special Achievements </a> </li>
                                    <!--<li><a href="#">Something else here</a></li>-->
                                    <!--                                    <li class="divider"></li>
                                                                        <li class="dropdown-header">Nav header</li>
                                                                        <li><a href="#">Separated link</a></li>
                                                                        <li><a href="#">One more separated link</a></li>-->
                       <!--         </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">News & events <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="Home.html">School Calendar  </a></li>
                                    
                                    <li><a href="Home.html" > School Projects </a> </li>
                                </ul>
                            


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="Home.html"  >Cultural Events</a></li>      
                                    <li><a href="Home.html" >Sport Events</a></li>
                                    <li><a href="Home.html"  >School Special Occasions</a></li>
                                    

                                </ul>
                            </li>


                            <li><a href="D:\Lumbini web\lmv web\Pages/Contact_Us/contact.html">Contact Lumbini</a></li>
                        </ul>
                        <!--                        <ul class="nav navbar-nav navbar-right">
                                                    <li class="active"><a href="./">Default</a></li>
                                                    <li><a href="../navbar-static-top/">Static top</a></li>
                                                    <li><a href="../navbar-fixed-top/">Fixed top</a></li>
                                                </ul>-->
             <!--       </div><!--/.nav-collapse -->
              <!--  </div><!--/.container-fluid -->
        <!--    </div>-->
 
     

<form class= "form-horizontal" method="POST" action="tech_insert.php">
     <h5 class="text-center">Lumbini College Colombo 05</h5> 
     <h4 class="text-center"> Application for 2023 Advanced Level Admission Registration </h4> 
     <h4 class="text-center"> Technology Stream </h4> 
        <div class="form-group"></div>
         <div class="form-group"></div>
          <div class="form-group"></div>
          
     <div class="form-group">
         <div class="alert alert-info">
         
         <p> Two streams are there. Select one of the followiing stream.</p>
         <p style="color:blue;">1. Engineering Technology Stream -  <b>Engineering Technology (ET) </b> Subject is Cumpulsory. </p>
         <p style="color:blue;"> 2. Bio Systems Technology Stream -  <b>Bio Systems Technology (BST)  </b> Subject is Cumpulsory.</p>
         <p style="color:blue;"> <b>Science for Technology (SFT)</b> Subject is cumpulsory for both stream.</p>
         <p style="color:blue;"> All Subjects are in Sinhala Medium.</p>
    </div> </div>
    
    <hr>
    <!--Subject Selection-->
  <div class="form-group">
      <label for="subject_selection" class="col-sm-2 col-form-label"> Subjects wish to apply </label>
     <div class="col-sm-4">
          <select id = "subject" name="stechnology" style="min-height:30px;">
          <option value="None" > For Engineering Technology Stream</option>
          <option value="ICT(ET)" >Engineering Technology / Science for Technology / ICT </option>
          <option value="Maths(ET)" > Engineering Technology / Science for Technology / General Mathematics </option>
          <option value="Art(ET)" > Engineering Technology / Science for Technology / Art </option>
          <option value="Geo(ET)" > Engineering Technology / Science for Technology / Geography </option>
          <option value="Media(ET)" > Engineering Technology / Science for Technology / Media </option>
      </select>
      </div>
      <div class="col-sm-2" >&nbsp; </div>
      <div class="col-sm-4">
        <select id = "subject" name="sstechnology" style="min-height:30px;">
          <option value="None" > For Bio Systems Technology Stream </option>
          <option value="ICT(BT)" >Bio Systems Technology / Science for Technology / ICT </option>
          <option value="Agri(BT)" >Bio Systems Technology / Science for Technology / Agriculture </option>
          <option value="Geo(BT)" >Bio Systems Technology / Science for Technology / Geography </option>
        </select>
     </div>
      </div>
      <hr>
<div class="form-group"></div>
       <!-- <div class ="form-group">
     
          <div class="table-responsive-sm">
     <table class="table table-borderless">
          <tbody>
    <tr>
     
      <td><b>Are you a student of Lumbini College</b></td>
      <td>
     <label class="radio-inline control-label">
            <input checked="checked" id= "chkYes" name="school" type="radio" value="Yes"> Yes
        </label></td>
        <td>
        <label class="radio-inline control-label">
            <input name="school" id = "chkNo" type="radio" value="No"> No
        </label>
          
 </td> 
 <td>
     <b> School or Private Candiate at GCE OL</b>
 </td>
 <td> 
  <select id = "sp" name="school_private" style="min-height:30px;" required>
          <option value="school" > School Candidate </option>
          
 </select>
 </td>
 </tr>
  </tbody>
  </table>-->
   <div class="form-group">
       <label for="yesno" class="col-sm-3 col-form-label">Are you a student of Lumbini College</label>
        <div class="col-sm-1">
       <label class="radio-inline control-label">
            <input checked="checked" id= "chkYes" name="school" type="radio" value="Yes"> Yes
        </label>
          </div>
       <div class="col-sm-1">
             <label class="radio-inline control-label">
            <input name="school" id = "chkNo" type="radio" value="No"> No
        </label>
        </div>
        <label for="school" class="col-sm-3 col-form-label">School or Private Candiate at GCE OL</label>
        <div class="col-sm-2">
            <select id = "sp" name="school_private" style="min-height:30px;" >
          <option value="school" > School Candidate </option>
          <option value="private" > Private Candidate </option>
          
 </select>
   </div>
   </div>
     
   <!-- <table class="table table-borderless">
          <tbody>
 <tr>
  <td><b>If you are not a student of Lumbini College</b></td>
      <td>
      <input type="text"  class="form-control" id="schoolname" placeholder="Name of the School studied GCE OL" name="schoolname" disabled='disabled'></td>
  <td><input type="text"  class="form-control" id="schooldistrict" placeholder="District of the Mentioned School" name="schooldistrict"  disabled='disabled'></td>
  </tr>
  
    
  </tbody>
  </table>
  </div>
  </div>-->
  <div class="form-group"></div>
  <div class="form-group">
       <label for="lumbini" class="col-sm-3 col-form-label">If you are not a student of Lumbini College</label>
        <div class="col-sm-4">
      <input type="text"  class="form-control" id="schoolname" placeholder="Name of the School studied GCE OL" name="schoolname" disabled='disabled'>
      </div>
      <div class="col-sm-1">&nbsp; </div>
      <div class="col-sm-4">
       <input type="text"  class="form-control" id="schooldistrict" placeholder="District of the Mentioned School" name="schooldistrict"  disabled='disabled'>   
  </div>
  </div>
  <hr>
    <!--Fullname-->
  <div class="form-group">
      <label for="firstname" class="col-sm-2 col-form-label">Full Name</label>
    <div class="col-sm-9">
        
      <input type="text" class="form-control" placeholder="Disanayake Mudiyanselage Dushan Akalanka Disanayake" name="fname" style='text-transform:uppercase' required> 
    </div>
 </div> 
  <!--Name with Initials-->
   <div class="form-group">
        <label for="iname" class="col-sm-2 col-form-label">Name with Initials</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" placeholder="D.M.D.A. Disanayake" name="iname" style='text-transform:uppercase' required>
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
     <label for="birthday"class="col-sm-2">Birthday</label>
      <div class="col-sm-9">
          <input type="date" id="birthday" name="birthday">
          </div>
</div>
 <!--NIC-->
  <div class="form-group">
     <label for="nic"class="col-sm-2 col-form-label ">National Idenetity Card No.</label>
      <div class="col-sm-2">
          <input type="tel"  class="form-control" id="nic"  name="nic" maxlength="12">
          </div>
</div>
 <!--Address-->
 <div class="form-group">
    <label for="address"class="col-sm-2 col-form-label ">Personal Address</label>
     <div class="col-sm-8">
      <input type="text" class="form-control" name="address1" placeholder="Address Line 1"  required>
    </div>
</div>
 <div class="form-group">
    <label for="address"class="col-sm-2 col-form-label "></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="address2" placeholder="Address Line 2">
      </div>
 </div>  
  <div class="form-group">
    <label for="address"class="col-sm-2 col-form-label "></label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="city" placeholder="City"  required>
    </div>
</div>

 <!--Guardien's Name-->
 <div class="form-group">
        <label for="gname" class="col-sm-2 col-form-label">Father/Mother/Guardien's Name</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="gname"  required>
    </div>
  </div>
<!--Contact Number-->
<div class="form-group">
     <label for="contact"class="col-sm-2 col-form-label ">Contact No.</label>
      <div class="col-sm-2">
          <input type="text"  class="form-control" id="residential" placeholder="Residential No." name="residential" pattern="[0-9]+">
          </div>
<div class = "col-sm-1">&nbsp;</div>
      <div class="col-sm-2">
          <input type="text"  class="form-control" id="mobile1" placeholder="Mobile 1" name="mobile1" pattern="[0-9]+">
          </div>

<div class = "col-sm-1">&nbsp;</div>
      <div class="col-sm-2">
          <input type="textr" class="form-control" id="mobile" placeholder="Mobile 2" name="mobile2"pattern="[0-9]+">
          </div>
</div>

<!-- Email-->

<div class="form-group">
     <label for="email" class="col-sm-2 col-form-label ">Email address (if any)</label>
      <div class="col-sm-4">
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" >
    </div>
    
</div>
<br>
<!--Distance-->
<div class="form-group">
   <div class="col-sm-3">
     <label for="nic">Distance to the Lumbini College from your place (in Km)</label>
     </div>
      <div class="col-sm-3">
          <input type="text"  class="form-control" id="distance"  name="distance" pattern="[0-9]+" placeholder="Enter numeric values only" required>
          </div>
          
          <div class="col-sm-3">
            <label for="in_ex">  Mode of Transport </label>
            </div>
      <div class="col-sm-3">
          <select id = "transport" name="transport" style="min-height:30px;">
          <option value="Train" > Train</option>
          <option value="Bus" > Bus </option>
          <option value="Personal Vehicle" > Personal Vehicle </option>
           <option value="Walk" > Walk </option>
           <option value="Else" > Else </option>
      </select> </div>
</div> 
<hr>
<div class="form-group col-12">
            
   
   <h4 class="text-center"> GCE Ordinary Level 2020(2021)</h4>  </div>
   <!--Index Number-->
    <div class="form-group">
       
        <div class="col-xs-6 col-sm-3">
     <label for="nic">Examination Index Number</label>
     </div>
      <div class="col-xs-6 col-sm-3">
          <input type="text"  class="form-control" id="indexno"  name="indexno" pattern="[0-9]+" placeholder="Examination Index No" required>
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
      <select id = "result1" name="religion">
          <option value="+" > + </option>
          <option value="A" > A </option>
          <option value="B" > B </option>
          <option value="C" > C </option>
          <option value="S" > S </option>
          <option value="W" > W </option>
          
      </select>
 </td>
     
    </tr>
    
     <tr>
      <th scope="row">2</th>
      <td>Language & Literature</td>
      <td>
      <select name="sinhala" id = "result2" >
          <option value="+" > + </option>
          <option value="A" > A </option>
          <option value="B" > B </option>
          <option value="C" > C </option>
          <option value="S" > S </option>
          <option value="W" > W </option>
          
      </select>
 </td>
     </tr>
      <tr>
      <th scope="row">3</th>
      <td>English Language</td>
      <td>
      <select id = "result3" name="english">
           <option value="+" > + </option>
          <option value="A" > A </option>
          <option value="B" > B </option>
          <option value="C" > C </option>
          <option value="S" > S </option>
          <option value="W" > W </option>
         
      </select>
 </td>
     
    </tr>
   
   
    <tr>
      <th scope="row">4</th>
      <td>Science</td>
      <td>
      <select id = "result" name="science">
          <option value="+" > + </option>
          <option value="A" > A </option>
          <option value="B" > B </option>
          <option value="C" > C </option>
          <option value="S" > S </option>
          <option value="W" > W </option>
          
      </select>
 </td>
     
    </tr>
    
     <tr>
      <th scope="row">5</th>
      <td>Mathematics</td>
      <td>
      <select id = "result5" name="maths">
           <option value="+" > + </option>
          <option value="A" > A </option>
          <option value="B" > B </option>
          <option value="C" > C </option>
          <option value="S" > S </option>
          <option value="W" > W </option>
         
      </select>
 </td>
     
    </tr>
    
     <tr>
      <th scope="row">6</th>
      <td>History</td>
      <td>
      <select id = "result6" name="history">
          <option value="+" > + </option>
          <option value="A" > A </option>
          <option value="B" > B </option>
          <option value="C" > C </option>
          <option value="S" > S </option>
          <option value="W" > W </option>
          
      </select>
 </td>
     
    </tr>
     <tr>
      <th scope="row">7</th>
      <td> <select id = "op1" name="op1">
          <option value="Business & Accounting Studies" > Business & Accounting Studies </option>
          <option value="Geography" > Geography</option>
          <option value="Civic" > Civic Education </option>
           <option value="Second Language (Sinhala)" > Seond Language (Sinhala) </option>
          <option value="Second Language (Tamil)" > Second Language (Tamil) </option>
          <option value="Japanese" > Japanese </option>
          <option value="French" > French </option>
          <option value="German" > German </option>
          <option value="Chinese" > Chinese </option>
          <option value="Russian" > Russian </option>
           <option value="Hindi" > Hindi </option>
           <option value="Pali" > Pali </option>
           <option value="Sanskrit" > Sanskrit</option>
           <option value="Arabic" > Arabic </option>
          
      </select>
      </td>
      <td>
      <select id = "result7" name="optional1">
           <option value="+" > + </option>
          <option value="A" > A </option>
          <option value="B" > B </option>
          <option value="C" > C </option>
          <option value="S" > S </option>
          <option value="W" > W </option>
         
      </select>
 </td>
     
    </tr>
    
    
    <tr>
      <th scope="row">8</th>
      <td> <select id = "op2" name="op2">
          <option value="Music (Oriental)" > Music (Oriental) </option>
          <option value="Music (Western)" > Muisc (Westren)</option>
           <option value="Music (Carnatic)" > Music (Carnatic) </option>
          <option value="Art" > Art </option>
          <option value="Dancing" > Dancing </option>
          <option value="English Literature" > English Literature </option>
          <option value="English Literature" > Sinhala Literature </option>
          <option value="Tamil Literature" > Tamil Literature </option>
          <option value="Arabic Literature" > Arabic Literature </option>
          <option value="Drama & Theater" > Drama & Theatre</option>
         
      </select>
      </td>
      <td>
      <select id = "result8" name="optional2">
          <option value="+" > + </option>
          <option value="A" > A </option>
          <option value="B" > B </option>
          <option value="C" > C </option>
          <option value="S" > S </option>
          <option value="W" > W </option>
          <option value="P" > Pending </option>
          
      </select>
 </td>
     
    </tr>
     <tr>
      <th scope="row">9 </th>
      <td> <select id = "op3" name="op3">
          <option value="ICT" > Information & Communication Technology </option>
          <option value="Agriculture" > Agriculture & Food Technology</option>
          <option value="Home Economics" > Home Economics </option>
          <option value="Health" > Health & Physical Education </option>
          <option value="Media" > Communication & Media Studies </option>
         <option value="Design & Construction" > Design & Construction Technology </option>
          <option value="Design & Mechanical" > Design & Mechanical Technology </option>
           <option value=" Design, Electrical & Electronic Technology" > Design, Electrical & Electronic Technology  </option>
          <option value="Electronic Writing & Shorthand" > Electronic Writing & Shorthand </option>
          
           <option value="Arts & Crafts" > Arts & Crafts </option>
      </select>
      </td>
      <td>
      <select id = "result9" name="optional3">
            <option value="+" > + </option>
          <option value="A" > A </option>
          <option value="B" > B </option>
          <option value="C" > C </option>
          <option value="S" > S </option>
          <option value="W" > W </option>
        
      </select>
 </td>
     
    </tr>
     </tbody>
   </table>   </div>
     
  
 
  <div class="form-group">
     
    <div class="form-check col-sm-12">
      <input class="form-check-input" type="checkbox" id="gridCheck" checked>
      
      <label class="form-check-label " for="gridCheck">
  
     I hereby certified that the above mentioned information is true and accurate</label>
    </div>
    </div> 
    <div class = "col-sm-12">
    <div class="form-group ">
        
        <div class = "alert alert-danger">
    <p style= "color:red;">Please CHECK the information you provided are correct BEFORE click on SUBMIT button.<br> <b> A reference number will be provided after successful submission.</b></p>
    </div>
    <p><b> * Before click on Submit button, you can click on the Cancel button and fill application from the beginning.</b></p>
     <p><b>* Otherwise Reset the same application and fill again before click on the submit button</b> </p>
    </div> 
    <div class="form-group"></div>
     <div class="form-group"></div>
     <div class="form-group">
     <div class = "col-sm-12">
    <button type="reset" name = "reset" value="Clear" class="btn btn-primary btn-sm" > Reset </button>
    <button type="submit" name = "submit" class="btn btn-success btn-sm">Submit</button>
    <button type="cancel" name="cancel" onclick="window.location.replace('../OL.html')" value="Cancel" class="btn btn-primary btn-sm"/> Cancel </button>
  </div>
  </div>
   
   </form>
  

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow5.js"></script>
<noscript>Not seeing a <a href="http://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>

    </body>
</html>