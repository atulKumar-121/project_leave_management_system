
<?php
ob_start();
session_start();
$dbservername ="localhost";
$dbuser="root";
$dbpassword="";
$dbname="leave_management_system";    
$conn=mysqli_connect($dbservername,$dbuser,$dbpassword,$dbname);

?>