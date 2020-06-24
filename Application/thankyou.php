<?php
//require('../model/database.php');
require_once('../model/apply.php');

$fname =  filter_input(INPUT_POST, 'fname');
$mname = filter_input(INPUT_POST, 'mname');
$lname = filter_input(INPUT_POST, 'lname');
$student_address = filter_input(INPUT_POST, 'student_street');
$student_city = filter_input(INPUT_POST, 'student_city');
$student_zip = filter_input(INPUT_POST, 'student_zip');
$home_phone   = filter_input(INPUT_POST, 'home_phone');  
$cell_phone  = filter_input(INPUT_POST, 'cell_phone'); 
$main_email   = filter_input(INPUT_POST, 'main_email'); 
$school_email  = filter_input(INPUT_POST, 'school_email'); 
$birth_location = filter_input(INPUT_POST, 'birth_location'); 
$mothers_name = filter_input(INPUT_POST, 'mothers_name');    
$pfirst  = filter_input(INPUT_POST, 'pfirst');
$pmiddle  = filter_input(INPUT_POST, 'pmiddle');
$plast = filter_input(INPUT_POST, 'plast');
$pphone = filter_input(INPUT_POST, 'pphone');
$student_status = filter_input(INPUT_POST, 'student_status');   
$high_school = filter_input(INPUT_POST, 'highschool');
$graduation_year = filter_input(INPUT_POST, 'graduation_year'); 

//If High school student grab the high school gpa if not grab College gpa
if($student_status == "High School Student"){
    $gpa = filter_input(INPUT_POST, 'gpa');
}
else if($student_status == "College Student"){
    $gpa = filter_input(INPUT_POST, 'gpaC');
}

$counselor  = filter_input(INPUT_POST, 'counselor');
$college   = filter_input(INPUT_POST, 'college');
$college_street  = filter_input(INPUT_POST, 'college_street');
$college_city   = filter_input(INPUT_POST, 'college_city');
$college_zip  = filter_input(INPUT_POST, 'college_zip');
$study_area  = filter_input(INPUT_POST, 'study_area');
$standing_class  = filter_input(INPUT_POST, 'standing_class');  


if(isset($_FILES['essay']['name'])){
    $essay = $_FILES['essay']['tmp_name'];
    $target_dir ='/home/www/hbaidaho.org/essays/';
    $essay_destination = $target_dir . basename($_FILES['essay']['name']);
    
    move_uploaded_file($essay, $essay_destination);
}
else{
    $essay_destination = NULL;
}
if(isset($_FILES['letter1']['name'])){
    $letter1 = $_FILES['letter1']['tmp_name'];
    $target_dir ='/home/www/hbaidaho.org/letters/';
    $letter1_destination = $target_dir . basename($_FILES['letter1']['name']);
    
    move_uploaded_file($letter1, $letter1_destination);
}else{
    $letter1_destination = NULL;
}
if( isset($_FILES['letter2']['name'])){
    $letter2 = $_FILES['letter2']['tmp_name'];
    $target_dir ='/home/www/hbaidaho.org/letters/';
    $letter2_destination = $target_dir . basename($_FILES['letter2']['name']);
    
    move_uploaded_file($letter2, $letter2_destination);
}
else{
    $letter2_destination = NULL;
}
if( isset($_FILES['activities']['name'])){
    $activities = $_FILES['activities']['tmp_name'];
    $target_dir ='/home/www/hbaidaho.org/activities/';
    $activities_destination = $target_dir . basename($_FILES['activities']['name']);
    
    move_uploaded_file($activities, $activities_destination);
}
else{
    $activities_destination = NULL;
}
if( isset($_FILES['transcripts']['name'])){
    $transcripts = $_FILES['transcripts']['tmp_name'];
    $target_dir ='/home/www/hbaidaho.org/transcripts/';
    $transcripts_destination = $target_dir . basename($_FILES['transcripts']['name']);
    
    move_uploaded_file($transcripts, $transcripts_destination);
}
else{
    $transcripts_destination = NULL;
}




   


try{
    add_application($fname, $mname, $lname, $student_address, $student_city,$student_zip ,$home_phone ,$cell_phone , $main_email,$school_email
        ,$birth_location , $mothers_name, $pfirst, $pmiddle, $plast,$pphone ,$student_status , $high_school, $graduation_year,$gpa ,
        $counselor,$college, $college_street, $college_city, $college_zip, $study_area, $standing_class, $essay_destination, $letter1_destination, $letter2_destination, $activities_destination, $transcripts_destination );
} catch (Exception $ex) {
    $error_message = $e->getMessage();
        
}     
$hbaEmail = "admin@hbaidaho.org";
//$recipientEmail = $main_email;

$from = "New Scholarship Application <" . $hbaEmail . ">";
$to = "kortiz1976@gmail.com";

$subject = "New Scholarship Application";

$body = "A new application has been submitted by " . $fname . " " . $lname;

mail($to,$subject,$body,$from)
  



?>
<html>
     <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="../js/studentStatus.js" defer></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <link rel="stylesheet" href="../css/style.css"/>
        
         
        <title>Thank You</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg" id="nav">
        <a class="navbar-brand  text-light" href="../index.php"><img src="../images/hbaLogo.png" id="logo" class="img-thumbnail"> Hispanic Business Association</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <h5 class="text-light">Menu</h5>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
          <a class="nav-link text-light" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-light" href="#">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle  text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Scholarship
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../ScholarshipInformation.html">Information</a>
          <a class="dropdown-item" href="./apply.php">Application</a>
          
      </li>
    </ul>
  </div>
</nav>
        <h1 class="text-center">Thank you</h1>
        
        <p><?php echo $fname ?> your application has been submitted. You will be contacted if there are any errors.</p>
        
        
        
        
        
    </body>
        <?php include("../view/footer.php"   )  ?>

</html>