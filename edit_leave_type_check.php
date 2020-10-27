<?php
include 'includes/database.php';
if(isset($_POST['edit_leave_type']))
{
    $leave_type=$_POST['leave_type'];
    $leave_type=mysqli_real_escape_string($conn,$leave_type);
    $leave_type=htmlentities($leave_type);
    $id=$_GET['id'];
    $id=mysqli_real_escape_string($conn,$id);
    $id=htmlentities($id);
    $sql="update leave_type set leave_name='$leave_type' where id=$id";
    $res=mysqli_query($conn,$sql);
    if(mysqli_query($conn,$sql))
    {
     $_SESSION['leave_type']="The Required leave type is updated in the organisation";
     header("Location:leave_type.php");
    }
    else
    {
        $_SESSION['leave_type']="Something went Wrong";
        header("Location:leave_type.php");
    } 
}
else
{
    header("Location:index.php");
}
?>