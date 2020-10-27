<?php
include 'includes/database.php';
if(isset($_POST['add_leave']))
{
    $leave=$_POST['Leave'];
    $leave=mysqli_real_escape_string($conn,$leave);
    $leave=htmlentities($leave);
    $sql="insert into leave_type(leave_name) values('$leave')";
    if(mysqli_query($conn,$sql))
    {
     $_SESSION['leave_type']="The Required leave type is added in the organisation";
     header("Location:leave_type.php");
    }
    else
    {
        $_SESSION['leave_type']="Something went Wrong";
        header("Location:leave_type.php");
    } 
}
else{
    header("Location:index.php");
}
?>