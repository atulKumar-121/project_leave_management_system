<?php
include 'includes/database.php';
if(isset($_POST['add_employee']))
{
    $name=$_POST['name'];
    $name=mysqli_real_escape_string($conn,$name);
    $name=htmlentities($name);
    $email=$_POST['email'];
    $email=mysqli_real_escape_string($conn,$email);
    $email=htmlentities($email);
    $mobile=$_POST['mobile'];
    $mobile=mysqli_real_escape_string($conn,$mobile);
    $mobile=htmlentities($mobile);
    $password=$_POST['password'];
    $password=mysqli_real_escape_string($conn,$password);
    $password=htmlentities($password);
    $department_id=$_POST['department_id'];
    $department_id=mysqli_real_escape_string($conn,$department_id);
    $department_id=htmlentities($department_id);
    $address=$_POST['address'];
    $address=mysqli_real_escape_string($conn,$address);
    $address=htmlentities($address);
    $birthday=$_POST['birthday'];
    $birthday=mysqli_real_escape_string($conn,$birthday);
    $birthday=htmlentities($birthday);
    $sql="insert into employee(name,email,mobile,password,department_id,address,Birthday,role) values('$name','$email','$mobile','$password','$department_id','$address','$birthday','2')";
    if(mysqli_query($conn,$sql))
    {
        $_SESSION['employee_added']="The given employee is Registered in the organisation";
        header("Location:employee.php");
    }
    else
    {
        $_SESSION['employee_added']="Sorry Something went  Wrong";
        header("Location:employee.php");
    }
}
else
{
    header('Location:index.php');
}
?>