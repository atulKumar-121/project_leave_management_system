<?php
include 'includes/database.php';
if(isset($_POST['leave_applied']))
{
    $leave_id=$_POST['leave_id'];
    $leave_id=mysqli_real_escape_string($conn,$leave_id);
    $leave_id=htmlentities($leave_id);
     $leave_from=$_POST['leave_from'];
    $leave_from=mysqli_real_escape_string($conn,$leave_from);
    $leave_from=htmlentities($leave_from);
    $leave_to=$_POST['leave_to'];
    $leave_to=mysqli_real_escape_string($conn,$leave_to);
    $leave_to=htmlentities($leave_to);
    $leave_description=$_POST['leave_description'];
    $leave_description=mysqli_real_escape_string($conn,$leave_description);
    $leave_description=htmlentities($leave_description);
    $employee_id=$_SESSION['USER_ID'];
    $employee_id=mysqli_real_escape_string($conn,$employee_id);
    $employee_id=htmlentities($employee_id);
    $sql="insert into holiday(employee_id,leave_id,leave_from,leave_to,leave_description,leave_status) values('$employee_id','$leave_id','$leave_from','$leave_to','$leave_description',1)";
    if(mysqli_query($conn,$sql))
    {
        $_SESSION['leave_msg']="The leave is posted";
        header("Location:leave.php");
    }
    else
    {
        $_SESSION['leave_msg']="Sorry Something went  Wrong";
        header("Location:leave.php");
    } 
}
else
{
    header('Location:index.php');
}
?>