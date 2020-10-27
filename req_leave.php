<?php
include 'includes/header.php';
?>

<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Leave Type</strong><small> <br>Form</small></div>
                        <div class="card-body card-block">
                        <form method="post" action="leave_check.php">
						   
                           <div class="form-group" >
                               <label class=" form-control-label">Leave Type</label>
                               <select name="leave_id" required class="form-control">
                                   <option value="">Select Leave</option>
                                   <?php
                                   $res=mysqli_query($conn,"select * from leave_type order by id desc");
                                   while($row=mysqli_fetch_assoc($res)){
                                       echo "<option value=".$row['id'].">".$row['leave_name']."</option>";
                                   }
                                   ?>
                               </select>
                           </div>
                          <div class="form-group">
                               <label class=" form-control-label">From Date</label>
                               <input type="date" name="leave_from"  class="form-control" required>
                           </div>
                           <div class="form-group">
                               <label class=" form-control-label">To Date</label>
                               <input type="date" name="leave_to" class="form-control" required>
                           </div>
                           <div class="form-group">
                               <label class=" form-control-label">Leave Description</label>
                               <input type="text" name="leave_description" class="form-control" >
                           </div>
                           
                            <button  type="submit" name="leave_applied" class="btn btn-lg btn-info btn-block">
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