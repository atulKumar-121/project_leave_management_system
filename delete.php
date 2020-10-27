<?php
include 'includes/database.php';
if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['id']))
{
    $id=$_GET['id'];
    $id=mysqli_real_escape_string($conn,$id);
    $id=htmlentities($id);
    if(mysqli_query($conn,"delete from department where id=$id"))
    {
        $_SESSION['department_confirm']="The required department is removed from the organisation";
        header("Location:index.php");
    }
    else
    {   $_SESSION['department_confirm']="Something Went Wrong";
        header("Location:index.php");
    }
}
else
{
    header("Location:index.php");
}
?>