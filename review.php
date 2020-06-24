<?php 
//$file = filter_input(INPUT_POST, 'essay');
//$remote_file = 'essay.doc';
//
//// set up basic connection
//$ftp_server = 'hbaidaho.org';
//$conn_id = @ftp_connect($ftp_server) or die("could not connect");
//$ftp_user_name = '3249449';
//$ftp_user_pass = 'JulyFourteen88**';
//
//// login with username and password
//$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
//
//// upload a file
//if (ftp_put($conn_id, $remote_file, $file, FTP_ASCII)) {
// echo "successfully uploaded $file\n";
//} else {
// echo "There was a problem while uploading $file\n";
//}
//
//// close the connection
//ftp_close($conn_id);
$essay = $_FILES['essay']['tmp_name'];
$target_dir ='/home/www/hbaidaho.org/essays/';
$destination = $target_dir . basename($_FILES['essay']['name']);

move_uploaded_file($essay, $destination);




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
        <title></title>
    </head>
    <body>
        
    </body>
</html>
