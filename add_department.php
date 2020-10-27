<?php
include 'includes/header.php';
?>

<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Department</strong><small> <br>Form</small></div>
                        <div class="card-body card-block">
                           <form method="post" action="add_department_check.php">
							   <div class="form-group">
								<label for="department" class=" form-control-label">Department Name</label>
								<input type="text" value="" name="department" placeholder="Enter your department name..." class="form-control" required></div>
							   
							   <button  type="submit" name="add_department" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount" >Add Department...</span>
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