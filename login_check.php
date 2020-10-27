<?php
include ('includes/database.php');
if(isset($_POST['login']))
{ 
    $email=$_POST['email'];
    $password=$_POST['password'];
	$email=mysqli_real_escape_string($conn,$email);
    $password=mysqli_real_escape_string($conn,$password);
    $email=htmlentities($email);
    $password=htmlentities($password);
    $sql="select * from employee where email='$email' and password='$password'";
	$res=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($res);
    if($count>0)
    {
		$row=mysqli_fetch_assoc($res);
		$_SESSION['ROLE']=$row['role'];
		$_SESSION['USER_ID']=$row['id'];
		$_SESSION['USER_NAME']=$row['name'];    
        header("Location:index.php");
    }
    else
    {
        $_SESSION['message']="Sorry Wrong Credentials";
        header("Location:login.php");
	}
}
else
{
    $_SESSION['message']="Login First if You want a Leave";
    header("Location:login.php");
}
?>