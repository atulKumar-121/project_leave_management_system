<?php
include 'includes/header.php';
 if(isset($_GET['type']) && $_GET['type']=='edit' && isset($_GET['id']))
{
    $id=$_GET['id'];
    $id=mysqli_real_escape_string($conn,$id);
    $id=htmlentities($id);
     
    $res=mysqli_query($conn,"select * from leave_type where id=$id");
    if(mysqli_num_rows($res))
    {
        $row=mysqli_fetch_assoc($res);
?>

<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Leave Type</strong><small> <br>Form</small></div>
                        <div class="card-body card-block">
                           <form method="post" action="edit_leave_type_check.php?id=<?php echo $row['id']?>">
							   <div class="form-group">
								<label for="leave_type" class="form-control-label">Leave Type Name</label>
								<input type="text" value="<?php echo $row['leave_name'] ?>"name="leave_type" placeholder="Enter your leave_type name..." class="form-control" required></div>
							   
							   <button  type="submit" name="edit_leave_type" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount" >Edit Leave Type...</span>
							   </button>
							  </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

<?php
     }
     include 'includes/footer.php';
}
else
{
    header("Location:index.php");
}
?>