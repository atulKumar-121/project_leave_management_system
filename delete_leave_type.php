<?php
include 'includes/database.php';
if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['id']))
{
    $id=$_GET['id'];
    $id=mysqli_real_escape_string($conn,$id);
    $id=htmlentities($id);
    if(mysqli_query($conn,"delete from leave_type where id=$id"))
    {   
        $_SESSION['leave_type']="The Required leave type is removed from the organisation";
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