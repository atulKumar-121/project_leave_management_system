<?php
include 'includes/database.php';
if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['id']))
{
    $id=$_GET['id'];
    $id=mysqli_real_escape_string($conn,$id);
    $id=htmlentities($id);
    if(mysqli_query($conn,"delete from employee where id=$id"))
    {   
        $_SESSION['employee_added']="The Required Employee is removed from the organisation";
        header("Location:employee.php");
    }
    else
    {
        $_SESSION['employee_added']="Something went Wrong";
        header("Location:employee.php");
    }
}
else
{
    header("Location:index.php");
}
?>