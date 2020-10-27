<?php
include 'includes/database.php';
if(isset($_POST['add_department']))
{
    $department=$_POST['department'];
    $department=mysqli_real_escape_string($conn,$department);
    $department=htmlentities($department);
    $sql="insert into department(Department_name) values('$department')";
    if(mysqli_query($conn,$sql))
    {
        $_SESSION['department_confirm']="The department is added";        
        header("Location:index.php");
    }
    else
    {
        $_SESSION['department_confirm']="Something went wrong";
        header("Location:index.php");
    } 
}
else{
    header("Location:index.php");
}

?>