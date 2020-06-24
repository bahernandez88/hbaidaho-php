<?php 
//
require_once('../model/database.php');

function add_application($fname, $mname, $lname, $student_address, $student_city, $student_zip, $home_phone, $cell_phone, 
        $main_email,$school_email ,$birth_location ,$mothers_name , $pfirst,$pmiddle ,$plast ,$pphone ,$student_status, 
        $high_school,$graduation_year ,$gpa , $counselor, $college, $college_street,$college_city , $college_zip,$study_area,$standing_class, $essay, $letter1, $letter2, $activities, $transcripts) {
   $db = Database::getDB();
    $query = 'INSERT INTO application(fname, mname, lname, student_address, student_city, student_zip, home_phone, cell_phone, 
        main_email, school_email, birth_location, mothers_name, pfirst, pmiddle, plast, pphone, student_status, 
        high_school, graduation_year, gpa, counselor, college, college_street, college_city, college_zip, study_area, class, essay, letter1, letter2, activities, transcripts) 
              VALUES
                 (:fname, :mname, :lname, :student_address, :student_city, :student_zip, :home_phone, :cell_phone, 
                 :main_email,:school_email ,:birth_location ,:mothers_name , :pfirst,:pmiddle ,:plast ,:pphone ,:student_status, 
                 :high_school,:graduation_year ,:gpa , :counselor, :college, :college_street,:college_city , :college_zip,:study_area,:standing_class, :essay, :letter1, :letter2, :activities, :transcripts)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':fname', $fname);
        $statement->bindValue(':mname', $mname);
        $statement->bindValue(':lname', $lname);
        $statement->bindValue(':student_address', $student_address);
        $statement->bindValue(':student_city', $student_city);
        $statement->bindValue(':student_zip', $student_zip);
        $statement->bindValue(':home_phone', $home_phone);
        $statement->bindValue(':cell_phone', $cell_phone);
        $statement->bindValue(':main_email', $main_email);
        $statement->bindValue(':school_email', $school_email);
        $statement->bindValue(':birth_location', $birth_location);
        $statement->bindValue(':mothers_name', $mothers_name);
        $statement->bindValue(':pfirst', $pfirst);
        $statement->bindValue(':pmiddle', $pmiddle);
        $statement->bindValue(':plast', $plast);
        $statement->bindValue(':pphone', $pphone);
        $statement->bindValue(':student_status', $student_status);
        $statement->bindValue(':high_school', $high_school);
        $statement->bindValue(':graduation_year', $graduation_year);
        $statement->bindValue(':gpa', $gpa);
        $statement->bindValue(':counselor', $counselor);
        $statement->bindValue(':college', $college);
        $statement->bindValue(':college_street', $college_street);
        $statement->bindValue(':college_city', $college_city);
        $statement->bindValue(':college_zip', $college_zip);
        $statement->bindValue(':study_area', $study_area);
        $statement->bindValue(':standing_class', $standing_class);
        $statement->bindValue(':essay', $essay);
        $statement->bindValue(':letter1', $letter1);
        $statement->bindValue(':letter2', $letter2);
        $statement->bindValue(':activities', $activities);
        $statement->bindValue(':transcripts', $transcripts);
        $statement->execute();
        $statement->closeCursor();
        
        
        // Get the last product ID that was automatically generated
      
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}



?>

