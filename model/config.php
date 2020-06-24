<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'pdb43.awardspace.net');
define('DB_USERNAME', '3249449_applications');
define('DB_PASSWORD', 'JulyFourteen88**');
define('DB_NAME', '3249449_applications');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>