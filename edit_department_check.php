<?php
include 'includes/database.php';
if(isset($_POST['edit_department']))
{
    $department=$_POST['department'];
    $department=mysqli_real_escape_string($conn,$department);
    $department=htmlentities($department);
    $id=$_GET['id'];
    $id=mysqli_real_escape_string($conn,$id);
    $id=htmlentities($id);
    $sql="update department set Department_name='$department' where id=$id";
    
    if(mysqli_query($conn,$sql))
    {
        $_SESSION['department_confirm']='Updation is Done';
        header("Location:index.php");
    }
    else
    {
        $_SESSION['department_confirm']='Something Went Wrong';
        header("Location:index.php");
    } 
}
else
{
    header("Location:index.php");
}
?>