<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!--
Author:                 Date:       
-------------------------------------------------------------------------------
Brian A. Hernandez      1/27/2020 

Initial Deploy of PastRecipients.php. Intent is to have Testimonials and Past 
Recipients displayed in a professional, appealing manner using Bootstrap Modals
and Bootstrap Accordion functions.
-------------------------------------------------------------------------------

-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="../js/studentStatus.js" defer></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="../images/HBAwatermark.png" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="../css/style.css"/>
        
         
        <title>Scholarship Application</title>
    </head>
    <?php  include('../view/LowerNav.php')  ?>

    
    <body class = "text-center">
         <h1 class="text-center underline">Scholarship Application</h1>
         <form action="thankyou.php" method="post" enctype="multipart/form-data" id="add_product_form">
        <input type="hidden" name="action" value="apply">
        <br>
        <div class="col-sm-12">
            <label class=" text-center" >First Name</label>
            <input class="col-xs-2" type="text" name="fname" required>
            <br />
            
            <label class="text-center">Middle Initial</label>
            <input class="col-xs-2" type="text" name="mname" >
            <br />
            
            <label class=" text-center">Last Name</label>
            <input  class="col-xs-2" type="text" name="lname" required>
            
            <br />
            <br />
            <h3>Mailing Address</h3>
            <label class="col-xs-2 text-center">Street</label>
            <input  type="text" name="student_street" required>
            <br />
            <label class="col-xs-2 text-center">City</label>
            <input  type="text" name="student_city" required>
            <br />  
            <label class="col-xs-2 text-center">Zip</label>
            <input  type="text" name="student_zip" required>
            <br />
            <label class="col-xs-2 text-center">Home Phone</label>
            <input type="text" name="home_phone" required>
            <br />
            <label class="col-xs-2 text-center">Cell Phone</label>
            <input  type="text" name="cell_phone" required>
            <br />
            <label class="col-xs-2 text-center">Main Email</label>
            <input  type="email" name="main_email" required>
            <br />
            <label class="col-xs-2 text-center">School Email</label>
            <input  type="text" name="school_email" required>
            <br />
            <label class="col-xs-2 text-center">Birth Location</label>
            <input type="text" name="birth_location" required>
            <br />
            <label class="col-xs-2 text-center">Mothers Maiden Name</label>
            <input type="text" name="mothers_name" required>
            
            <br />
            <br />

            <h3>Parent/Guardian Information </h3>
        
        <!--<label class="col-sm-12 text-center">Parent/Guardians's Name</label>-->
        <label class="col-xs-2 text-center">Parent/Guardian's First Name</label>
        <input type="text" name="pfirst" required>
        <br />
        <label class="col-xs-2 text-center">Parent/Guardian's Middle Name</label>
        <input  type="text" name="pmiddle" required>
        <br />
        <label class="col-xs-2 text-center">Parent/Guardian's Last Name</label>
        <input  type="text" name="plast" required>
        <br />
        <label class="col-xs-2 text-center">Parent/Guardian's Phone</label>
        <input  type="text" name="pphone" required>
        <br />
        <!--<label class="col-md-12 text-center">Parent/Guardians's Address</label>-->
        
        <label class="col-xs-2 text-center">Parent/Guardian's Address</label>
        <input  type="text" name="pstreet" required>
        <br />
        <label class="col-xs-2 text-center">Parent/Guardian's City</label>
        <input   type="text" name="pcity" required>
        <br />
        <label class="col-xs-2 text-center">Parent/Guardian's Zip</label>
        <input  type="text" name="pzip" required>
        
        <br />
        
        <label class="col-md-3 text-right">Are you a High School student or a College Student?</label>
        
        <select name = "student_status" id="studentStatus">
            <option default>Select an option</option>
            <option>High School Student</option>
            <option>College Student</option>
        </select>
        

        </div>
                                    <!--High school  blocks-->
                                    
                                        <br />
                                        <br />
                                    
        <label class="col-xs-2 text-center hide " id="lblHighSchool">High School Attending/Attended</label>
        <input  class="col-xs-1 hide" type="text" name="highschool" id="txtHighSchool">
        <br />
        <label class="col-xs-2 text-center hide" id="lblGradYear">Graduation Year</label>
        <input  class="col-xs-1 hide" type="text" name="graduation_year" id="txtGradYear">
        <br />
        <label class="col-xs-2 text-center hide" id="lblGpa">Cumulative GPA</label>
        <input  class="col-xs-1 hide" type="text" name="gpa" id="txtGpa">
        <br />
        <br />
        <label class="col-xs-2 text-center hide" id="lblCounselor">High School Counselor(First and Last)</label>
        <input  class="col-xs-1 hide" type="text" name="counselor" id="txtCounselor">
        <br />
        
        <label class="col-xs-2 text-center hide" id="lblCollege">College you are planning to attend</label>
        <input  class="col-xs-1 hide" type="text" name="college" id="txtCollege">
        
        
                                    <!--College blocks-->
  <label class="col-md-12 text-center hide" id="lblCollegeBlock">College/Vocational School Address</label>
  <br />
        <label class="col-xs-2 text-center hide" id="lblCollegeAttend">College/Vocational School Attending</label>
        <input  class="col-xs-1 hide" type="text" name="college" id="txtCollegeAttend">
        <br />
        <label class="col-xs-2 text-center  hide" id="lblCollegeAddress">Address</label>
        <input  class="col-xs-1 hide" type="text" name="college_address" id="txtCollegeAddress">
        <br />
        <label class="col-xs-2 text-center hide" id="lblCollegeCity">City</label>
        <input  class="col-xs-1 hide " type="text" name="college_city" id="txtCollegeCity">
        <br />
        <label class="col-xs-2 text-center hide" id="lblCollegeZip">Zip</label>
        <input  class="col-xs-1 hide" type="text" name="zip" id="txtCollegeZip">
        <br />
        
        <label class="col-xs-2 text-center hide" id="lblStudyArea">Area of Study(Major/Minor</label>
        <input  class="col-xs-1 hide" type="text" name="studyArea" id="txtStudyArea">
        <br />
        
        <label class="col-xs-2 text-center hide" id="lblStandingClass">Class Standing in fall of 2019</label>
        <select name = "standing_class" id="slcStandingClass" class = "hide">
            <option>Sophomore</option>
            <option>Junior</option>
            <option>Senior</option>
        </select>
        <br />
        <label class="col-xs-2 text-center hide" id="lblGpaC">Cumulative GPA</label>
        <input  class="col-xs-1 hide" type="text" name="gpaC" id="txtGpaC">
        <br />
        <br />

        
        <label class="col-lg-12 text-center " id="lblStudyArea">Complete the information below so we may have a way of contacting you during the summer</label>
        
        <label class="col-xs-2 text-center " id="lblSummerAddress">"Summer" Address</label>
        <input  class="col-xs-1 " type="text" name="summerAddress" id="summerAddress">
        <br />
        <label class="col-xs-2 text-center " id="lblSummerCity">City</label>
        <input  class="col-xs-1 " type="text" name="summerCity" id="summerCity">
        <br />
        <label class="col-xs-2 text-center " id="lblSummerZip">Zip</label>
        <input  class="col-xs-1 " type="text" name="summerZip" id="summerZip">
        <br />
        <label class="col-xs-3 text-center " id="lblSummerPhone">Summer Phone Number</label>
        <input  class="col-xs-1 " type="text" name="summerPhone" id="summerPhone">
        <br />
        <label class="col-xs-2 text-center " id="lblSummerEmail">Summer Email</label>
        <input  class="col-xs-1 " type="text" name="summerEmail" id="summerEmail">
        
        <br />
        <label class="col-md-2 text-center " id="lblEssay">Upload Essay Questions</label>
        <input type ="file" name ="essay" required>
                <br />
                <br />
        <label class="col-md-2 text-center " id="lblLetters">Upload Two Letters of Recommendation</label>
        <br />
        <input type ="file" name ="letter1" required>
        <br />
        <input type ="file" name ="letter2">
                <br />
                <br />
        <label class="col-md-2 text-center " id="lblActivities">Upload List of Extracurricular Activities</label>
        <input type ="file" name ="activities" required>
                <br />
                <br />
        <label class="col-md-2 text-center " id="lblTranscripts">Upload current Transcript</label>
        <input type ="file" name ="transcripts"><br /><br />
        <p class="col-md-2 text-center mx-auto">If transcripts cannot be uploaded you can have them mailed to:</p>
        
            <address class="col-md-2 text-center mx-auto">
                    Hispanic Business Association <br />
                    6191 W. Winstead Pl. <br />
                    Boise, ID 83704 <br />
            </address>
        
                <br />
                <br />
                
        <input id="submit" class="text-center" name="submit" type="submit" value="Submit" >
        
    </form>
         
    </body>
    <br />
    <?php include("../view/footer.php"   )  ?>
</html>

