<?php
 include 'includes/header.php';
 if(isset($_GET['id']))
 {
    $id=$_GET['id'];
    $id=mysqli_real_escape_string($conn,$id);
    $id=htmlentities($id);
    $res=mysqli_query($conn,"select * from employee where id=$id");
	$row=mysqli_fetch_assoc($res);
	$name=$row['name'];
	$email=$row['email'];
	$mobile=$row['mobile'];
	$department_id=$row['department_id'];
	$address=$row['address'];
	$birthday=$row['Birthday'];
 }
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header" style="text-align:center !important"><strong >Employee Details</strong></div>
                        <div class="card-body card-block">
                         <label></label>
                         <h5> Name : <?php echo $name;?></h5>
                         <div class="dropdown-divider"></div>
                         <br>
                         <h5> Email : <?php echo $email;?></h5>
                         <div class="dropdown-divider"></div>
                         <br>
                        <h5> Mobile : <?php echo $mobile;?></h5>
                         <div class="dropdown-divider"></div>
                         <br>
                        <h5> Department : <?php 
                        $res=mysqli_query($conn,"select department_name from department where id=$department_id");
                        $row=mysqli_fetch_assoc($res);
                        echo $row['department_name']?></h5>
                         <div class="dropdown-divider"></div>
                         <br>
                        <h5>Address : <?php echo $address;?></h5>
                         <div class="dropdown-divider"></div>
                         <br>
                        <h5>Birthday  : <?php echo $birthday;?></h5>
                         <div class="dropdown-divider"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

 <?php
 include 'includes/footer.php';
 ?>