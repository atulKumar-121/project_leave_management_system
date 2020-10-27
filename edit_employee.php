<?php
 include 'includes/header.php';
 if(isset($_GET['id']))
 {
     $id=$_GET['id'];
     $id=mysqli_real_escape_string($conn,$id);
     $id=htmlentities($id);
    /* if($_SESSION['ROLE']==2 && $_SESSION['USER_ID']!=$id)
    {
		die('Access denied');
	}*/
	$res=mysqli_query($conn,"select * from employee where id='$id'");
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
                        <div class="card-header"><strong>Employee</strong><br><small> Form</small></div>
                        <div class="card-body card-block">
                           <form method="post" action="edit_employee_check.php?id=<?php echo $id;?>">
							   <div class="form-group">
									 <input type="text"  value="<?php echo $name;?>" name="name" placeholder="Enter employee name..." class="form-control" required>
								</div>
								<div class="form-group">
									 <input type="email"  value="<?php echo $email;?>" name="email" placeholder="Enter employee email..." class="form-control" required>
								</div>
								<div class="form-group">
									 <input type="text"   value="<?php echo $mobile;?>" name="mobile" placeholder="Enter employee mobile..." class="form-control" required>
								</div>
								<div class="form-group">
									 <input type="password"   disabled name="password" placeholder="Enter employee password..." class="form-control" required>
								</div>
								<div class="form-group">
									 <select name="department_id" required class="form-control">
									 <option value="">!--Select Department--!</option>
                                     <?php
										$res=mysqli_query($conn,"select * from department order by id desc");
                                        while($row=mysqli_fetch_assoc($res))
                                        {
                                            if($department_id==$row['id'])
                                            {
											 echo "<option selected='selected' value=".$row['id'].">".$row['Department_name']."</option>";
                                            }
                                            else
                                            {
												echo "<option value=".$row['id'].">".$row['Department_name']."</option>";
											}
										}
										?>

										 
			     				</select>
								</div>
								<div class="form-group">
									<input type="text"value="<?php echo $address?>"   name="address" placeholder="Enter employee address..." class="form-control" required>
								</div>
								<div class="form-group">
									<input type="date"  value="<?php echo $birthday?>" name="birthday" placeholder="Enter employee birthday..." class="form-control" required>
								</div>
							    <button  type="submit" name="edit_employee" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							    </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

 <?php
 include 'includes/footer.php';
 ?>