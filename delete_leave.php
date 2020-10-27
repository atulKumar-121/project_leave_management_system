<?php
include 'includes/database.php';
if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['id']))
{
    $id=$_GET['id'];
    $id=mysqli_real_escape_string($conn,$id);
    $id=htmlentities($id);
    if(mysqli_query($conn,"delete from holiday where id=$id"))
    {   
        $_SESSION['leave_msg']="The Applied leave is removed";
        header("Location:leave.php");
    }
    else
    {
        $_SESSION['leave_msg']="Something went Wrong";
        header("Location:leave.php");
    }
}
else
{
    header("Location:index.php");
}

?>