<?php
session_start();
if(!isset($_SESSION["loggedin"])&& $_SESSION["loggedin"]==false){
    header("location:login.php");
}

require_once('../model/database.php');
require_once('../model/add_comment.php');


//read student id from post data
$student_id = filter_input(INPUT_POST, "student_id");
//read comment data from post(if comment this is a page reload)
$comment = filter_input(INPUT_POST, "comments") ;

$db = Database::getDB();
//grab information from database
$query='SELECT student_id, fname, mname, lname,'
        . 'student_address, student_city, student_zip, home_phone, cell_phone, main_email, school_email, '
        . 'birth_location, mothers_name, pfirst, pmiddle, plast, pphone, student_status, high_school, graduation_year, gpa, counselor, '
        . 'college, essay, college_street, college_zip, study_area, class, transcripts, letter1, letter2, activities, comments FROM application WHERE student_id = '. $student_id;
$statement = $db->prepare($query);
$statement->execute();
$applications = $statement->fetchAll();

//if there was nis a comment run 'add_comment' function to add comment to db
if(!empty($comment)){
    foreach($applications as $application){
        //grab comments from db
        $old_comment = $application['comments'];
    }
    //add new comments to whats on the database with a special char '|'
        //this is to explode upon later
    $comment = $old_comment . " " . $comment . "|";
    //run 'add_comment' function
    add_comment($comment, $student_id);
}



$statement = $db->prepare($query);
$statement->execute();
$applications = $statement->fetchAll();


?>




<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="./images/HBAwatermark.png" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="../css/style.css"/>
        
         
        <title>Student Applications</title>
    </head>
     <?php  include('../view/LowerNav.php')  ;?>
    <body>
        <h1 class="text-center underline">Application</h1>
        <div class="text-center row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <?php foreach ($applications as $application) : ?>
                <!--display user information-->
                <h4>Student General Information</h4>

                <div class="row">
                    <div class="col text-right">Name:</div><div class="col text-left"><?php echo $application['fname']; ?> <?php echo $application['mname']; ?> <?php echo $application['lname']; ?></div><br />
                </div>

                <div class="row">
                    <div class="col text-right">Mailing Address:</div><div class="col text-left"><?php  echo " " . $application['student_address'] . ", " .  $application['student_city'] . ", " . $application['student_zip'] ;?></div>
                </div>

                <div class="row">
                    <div class="col text-right">Home Phone:</div><div class="col text-left"><a href="tel:<?php echo $application['home_phone'] ?>"><?php echo $application['home_phone']  ;?></a></div> 
                </div>

                <div class="row">
                    <div class="col text-right">Cell Phone:</div><div class="col text-left"><a href="tel:<?php echo $application['cell_phone'] ?>"><?php echo $application['cell_phone'] ; ?></a></div>
                </div>

                <div class="row">
                    <div class="col text-right">Main Email:</div><div class="col text-left"> <a href="mailto:<?php echo $application['main_email'] ?>"><?php echo $application['main_email'] ;?></a></div>
                </div>

                <div class="row">
                    <div class="col text-right">Birth Location:</div><div class="col text-left"><?php echo $application['birth_location'] ;?></div>
                </div>

                <div  class="row">
                    <div class="col text-right">Mothers Maiden Name:</div><div class="col text-left"> <?php echo $application['mothers_name'] ;?></div>
                </div>

                <hr>
                <h4>Parent/Guardian Information</h4>
                <div class="row">
                    <div class="col text-right">Parent/Guardian Name:</div><div class="col text-left"> <?php echo $application['pfirst'] . " " . $application['pmiddle'] . " " . $application['plast'] ; ?></div>
                </div>

                <div class="row">
                    <div class="col text-right">Parent/Guardian Phone:</div><div class="col text-left"> <a href="tel:<?php echo $application['pphone'];?>"><?php echo $application['pphone'];?></a></div>
                </div>

                <hr>
                <h4>Student Education Information</h4>
                <div class="row">
                <!--display the student status--> 
                <div class="col text-right">   High School or College:</div><div class="col text-left"> <?php
                            if($application['student_status'] == 'Select an option'){
                               echo "None Selected";                
                            }
                            else{
                                echo $application['student_status'];
                            }
                        ?></div>
                </div>




                <?php 
                if($application['student_status'] == "High School Student"){
                    echo "High School: " . $application['high_school'];
                    print "<br />";
                    echo "Graduation year: " . $application['graduation_year'];
                    print "<br />";
                    echo "GPA: " . $application['gpa'];
                    print "<br />";
                    echo "Counselor: " . $application['counselor'];

                   }
                   else if($application['student_status'] == "College Student"){
                     echo "<div class='row'><div class='col text-right'>College:</div><div class='col text-left'> " . $application['college'] . "</div></div>"  ;

                     echo "<div class='row'><div class='col text-right'>GPA:</div><div class='col text-left'>" . $application['gpa'] . "</div></div>";
                   }
                   else{
                       echo "No Student Status Selected" ; 
                       print "<br />";
                       echo "College: " . $application['college']  ;
                       print "<br />";
                     echo "GPA: " . $application['gpa'];
                   }
                ?>


                <br />
                 <?php
                 //grab the essay location from db
                $essay = $application['essay'];
                $letter1 = $application['letter1'];
                $letter2 = $application['letter2'];
                $activities = $application['activities'];
                $transcripts = $application['transcripts'];



                //separate the string using / as delimter
                $essay_pieces= explode("/", $essay);
                $letter1_pieces = explode("/", $letter1);
                $letter2_pieces = explode("/", $letter2);
                $activities_pieces = explode("/", $activities);
                $transcripts_pieces= explode("/", $transcripts);
                
                
                
                 //if the last transcripts array is empty do not create a link
                if ($transcripts_pieces[5] == ""){
                echo "<div class='text-danger'>No transcript was uploaded</div>";
                }
                else{
                //if the transcripts last array is not empty create new href string using the pieces of the explode I need
                    $href = "/" . $transcripts_pieces[4] . "/" . $transcripts_pieces[5];
                    //make a new link using the created string
                    echo "<a href='" . $href . "'target='_blank' >Transcript</a>"  ;
                }
                print "<br />";
                
                //if the last essay array is empty do not create a link
                if ($essay_pieces[5] == ""){
                echo "<div class='text-danger'>No essay was uploaded</div>";
                }
                else{
                //if the essay last array is not empty create new href string using the pieces of the explode I need
                    $href = "/" . $essay_pieces[4] . "/" . $essay_pieces[5];
                    //make a new link using the created string
                    echo "<a href='" . $href . "'target='_blank' >Essay</a>"  ;
                    
                }
                print "<br />";
                
                //if the last letter1 array is empty do not create a link
                if ($letter1_pieces[5] == ""){
                echo "<div class='text-danger'>No letter was uploaded</div>";
                }
                else{
                //if the last letter1 array is not empty create new href string using the pieces of the explode I need
                    $href = "/" . $letter1_pieces[4] . "/" . $letter1_pieces[5];
                    //make a new link using the created string
                    echo "<a href='" . $href . "'target='_blank' >First letter of recommendation</a>"  ;
                }
                print "<br />";
                
                //if the last letter2 array is empty do not create a link
                if ($letter2_pieces[5] == ""){
                echo "<div class='text-danger'>No letter was uploaded</div>";
                }
                else{
                //if the last letter2 array is not empty create new href string using the pieces of the explode I need
                    $href = "/" . $letter2_pieces[4] . "/" . $letter2_pieces[5];
                    //make a new link using the created string
                    echo "<a href='" . $href . "'target='_blank' >Second letter of recommendation</a>"  ;
                }
                print "<br />";
                
                 //if the last activities array is empty do not create a link
                if ($activities_pieces[5] == ""){
                echo "<div class='text-danger'>No resume was uploaded</div>";
                }
                else{
                //if the last activities array is not empty create new href string using the pieces of the explode I need
                    $href = "/" . $activities_pieces[4] . "/" . $activities_pieces[5];
                    //make a new link using the created string
                    echo "<a href='" . $href . "'target='_blank' >Resume</a>"  ;
                }
                
                
                ?>
                <?php endforeach; ?> 
                  </div>
            <div class="col-md-4">
                <h4>Comments</h4>
                <!-- Pull information from db as an array-->
                <?php foreach ($applications as $application) : ?> 
                <!--display comments-->
                <?php 
                // explode on special char "|"
                $comment_pieces = explode("|", $application['comments']);
                
                for($x = 0; $x < count($comment_pieces); $x++){
                    //display the comments on their own lines using a for loop
                    echo $comment_pieces[$x] ;
                    print '<br />';
                }     
                ?>
                
                <?php endforeach; ?>
                
                <br />
                <form action="applications.php" method="post">
                    <!--add comments to db and reload the page to display it-->
                    <input type="text" name="comments" id="comments">
                    <input type="hidden" value="<?php echo $student_id?>" name="student_id">
                    <input type="submit" value="Add Comment">
                </form>
                <br />
            </div>
            <div class="col-md-2"></div>
          <br />
          
        </div>
        <div class="text-center">
            <button class="btn-danger align-bottom" onclick="window.location.href = 'welcome.php';">Choose a New Applicant</button>
        </div>
        
        
    </body>
</html>