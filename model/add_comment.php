<?php 
//
require_once('../model/database.php');

function add_comment($comment, $student_id) {
   $db = Database::getDB();
    $query = 'UPDATE application SET comments = :comments WHERE student_id =' . $student_id;
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':comments', $comment);
        
        
        $statement->execute();
        $statement->closeCursor();
        
        
        // Get the last product ID that was automatically generated
      
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}



?>

