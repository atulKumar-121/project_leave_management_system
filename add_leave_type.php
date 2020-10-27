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
                           <form method="post" action="add_Leave_Type_check.php">
							   <div class="form-group">
								<label for="Leave" class=" form-control-label">Leave Name</label>
								<input type="text"  name="Leave" placeholder="Enter Leave Type name..." class="form-control" required></div>
							   
							   <button  type="submit" name="add_leave" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount" >Add Leave Type...</span>
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