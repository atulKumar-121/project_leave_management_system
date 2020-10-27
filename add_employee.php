 <?php
 include 'includes/header.php';
 ?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Employee</strong><br><small> Form</small></div>
                        <div class="card-body card-block">
                           <form method="post" action="add_employee_check.php">
							   <div class="form-group">
									 <input type="text"   name="name" placeholder="Enter employee name..." class="form-control" required>
								</div>
								<div class="form-group">
									 <input type="email"   name="email" placeholder="Enter employee email..." class="form-control" required>
								</div>
								<div class="form-group">
									 <input type="text"   name="mobile" placeholder="Enter employee mobile..." class="form-control" required>
								</div>
								<div class="form-group">
									 <input type="password"  name="password" placeholder="Enter employee password..." class="form-control" required>
								</div>
								<div class="form-group">
									 <select name="department_id" required class="form-control">
									 <option value="">!--Select Department--!</option>
                                     <?php
										$res=mysqli_query($conn,"select * from department order by id desc");
                                        while($row=mysqli_fetch_assoc($res))
                                        {
											echo "<option value=".$row['id'].">".$row['Department_name']."</option>";
										}
										?>

										 
			     				</select>
								</div>
								<div class="form-group">
									<input type="text"   name="address" placeholder="Enter employee address..." class="form-control" required>
								</div>
								<div class="form-group">
									<input type="date"   name="birthday" placeholder="Enter employee birthday..." class="form-control" required>
								</div>
							    <button  type="submit" name="add_employee" class="btn btn-lg btn-info btn-block">
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