<?php
require_once('../model/database.php');
//create new session
session_start();
if(!isset($_SESSION["loggedin"])&& $_SESSION["loggedin"]==false){
    header("location:login.php");
}

//connect with database
$db = Database::getDB();
//grab information from database
$query='SELECT student_id, fname, mname, lname, essay, letter1, letter2, activities,main_email, gpa, comments, transcripts FROM application';
//        . ''
//        . ', student_address, student_city, student_zip, home_phone, cell_phone, main_email, school_email, '
//        . 'birth_location, mothers_name, pfirst, pmiddle, plast, pphone, student_status, high_school, graduation_year, gpa, counselor, '
//        . 'college, essay, college_street, college_zip, study_area, class, letter1, letter2, activities FROM application';

$statement = $db->prepare($query);
$statement->execute();
$applications = $statement->fetchAll();

 
//grab username from session data
$username = $_SESSION['username'];



?>



<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="./images/HBAwatermark.png" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="../css/style.css"/>
        
         
        <title>Welcome</title>
    </head>
    <?php  include('../view/LowerNav.php')  ?>

    <body>
        <h1 class="text-center underline">Administration</h1>
        
       
        <div class="text-center">
            <p> Welcome, <?php  echo $username ?></p>

            <table class='mx-auto'>
                <th>Name</th>
                <th>Transcript</th>
                <th>GPA</th>
                <th>Essay</th>
                <th>Letter 1</th>
                <th>Letter 2</th>
                <th>Resume</th>
                <th>Email</th>
                <th>Comments</th>
                
                <?php foreach ($applications as $application) : ?>
                <?php 
                    //get all the information to be displayed
                    $name = $application['fname'] . " " . $application['mname'] . " " . $application['lname'];
                    $essay = $application['essay'];
                    $letter1 = $application['letter1'];
                    $letter2 = $application['letter2'];
                    $activities = $application['activities'];
                    $transcripts = $application['transcripts'];
                    $email = $application['main_email'];


                    //explode the pieces that we need
                    $essay_pieces= explode("/", $essay);
                    $letter1_pieces = explode("/", $letter1);
                    $letter2_pieces = explode("/", $letter2);
                    $activities_pieces = explode("/", $activities);
                    $transcripts_pieces= explode("/", $transcripts);

                
                ?>
                
                <tr>
                    <td class='align-middle'><?php echo $name ?></td>
                    <td class='align-middle'>
                        <!--check the last array, if its blank display not submitted, if not display link-->
                        <?php    if ($transcripts_pieces[5] == ""){
                                    echo "<div class='text-danger'>Not Submitted</div>";
                                    }
                                    else{
                                        echo "<div class='text-success'>Submitted</div>";
                                    }
                                    ?>
                    </td>  
                    <td class='align-middle'>
                        <?php echo $application['gpa']; ?>
                    </td>
                    <td class='align-middle'>
                        <!--check the last array, if its blank display not submitted, if not display Submitted-->
                        <?php if ($essay_pieces[5] == ""){
                                    echo "<div class='text-danger'>Not Submitted</div>";
                                    }
                                    else{
                                        echo "<div class='text-success'>Submitted</div>";
                                    }
                        ?>
                    </td>
                    <td class='align-middle'>
                        <!--check the last array, if its blank display not submitted, if not display Submitted-->
                        <?php if ($letter1_pieces[5] == ""){
                                    echo "<div class='text-danger'>Not Submitted</div>";
                                    }
                                    else{
                                        echo "<div class='text-success'>Submitted</div>";
                                    }
                        ?>
                    </td>
                    <td class='align-middle'>
                        <!--check the last array, if its blank display not submitted, if not display Submitted-->
                        <?php if ($letter2_pieces[5] == ""){
                                    echo "<div class='text-danger'>Not Submitted</div>";
                                    }
                                    else{
                                        echo "<div class='text-success'>Submitted</div>";
                                    }
                        ?>
                    </td>
                    <td class='align-middle'>
                        <!--check the last array, if its blank display not submitted, if not display Submitted-->
                        <?php if ($activities_pieces[5] == ""){
                                    echo "<div class='text-danger'>Not Submitted</div>";
                                    }
                                    else{
                                        echo "<div class='text-success'>Submitted</div>";
                                    }
                        ?>
                    </td>
                    <td class='align-middle'><a href='mailto:<?php echo $email ?>'><?php echo $email ?></a></td>
                    <td class='align-middle'> <!--display comments-->
                            <?php 
                            //explode the comments based upon special character '|'
                            $comment_pieces = explode("|", $application['comments']);
                //for loop and display each comment with a line break
                for($x = 0; $x < count($comment_pieces); $x++){
                    print $comment_pieces[$x] . "<br />";
                    
                }
                            ?>
                    </td>
                    <td class='align-middle'>
                        <form action='applications.php' method='post'>
                            <input type='hidden'name='student_id' value='<?php echo $application['student_id'] ?>'/>
                            <input class="btn-danger" id="submit"  name="submit" type="submit" value="View/Edit" >
                                
                        </form>
                    </td>
                </tr>
                
                
                
                
                
                <?php endforeach; ?>
            </table>
        
        <br />
        <br />
        <!--</table>-->
        <form action="logout.php">
            <button class="btn-primary">Log Out</button>
            <br />
            <br />
        </form>
        </div>
    </body>
</html>
