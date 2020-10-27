<?php
include 'includes/database.php';
if(isset($_POST['edit_employee']))
{   
    $id=$_GET['id'];
    $id=mysqli_real_escape_string($conn,$id);
    $id=htmlentities($id);
    $name=$_POST['name'];
    $name=mysqli_real_escape_string($conn,$name);
    $name=htmlentities($name);
    $email=$_POST['email'];
    $email=mysqli_real_escape_string($conn,$email);
    $email=htmlentities($email);
    $mobile=$_POST['mobile'];
    $mobile=mysqli_real_escape_string($conn,$mobile);
    $mobile=htmlentities($mobile);
    $department_id=$_POST['department_id'];
    $department_id=mysqli_real_escape_string($conn,$department_id);
    $department_id=htmlentities($department_id);
    $address=$_POST['address'];
    $address=mysqli_real_escape_string($conn,$address);
    $address=htmlentities($address);
    $birthday=$_POST['birthday'];
    $birthday=mysqli_real_escape_string($conn,$birthday);
    $birthday=htmlentities($birthday);
    $sql="update employee set name='$name',email='$email',mobile='$mobile',department_id='$department_id',address='$address',Birthday='$birthday' where id=$id";
    if(mysqli_query($conn,$sql))
    {
        $_SESSION['employee_added']='Updation is Done';
        header("Location:employee.php");
    }
    else
    {
        $_SESSION['employee_added']='Something Went Wrong';
        header("Location:employee.php");
    } 
}
else
{
    header("Location:index.php");
}
?>