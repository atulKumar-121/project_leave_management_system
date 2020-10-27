<?php
 include 'includes\header.php';
  
 if(isset($_GET['type']) && $_GET['type']=='update' && isset($_GET['id']))
{
    $id=$_GET['id'];
    $id=mysqli_real_escape_string($conn,$id);
    $id=htmlentities($id);
    $status=$_GET['status'];
    $status=mysqli_real_escape_string($conn,$status);
    $status=htmlentities($status);
    mysqli_query($conn,"update holiday set leave_status='$status' where id='$id'");
}
if($_SESSION['ROLE']==1)
{ 
	$sql="select * from holiday order by id desc";
}
else
{
   $eid=$_SESSION['USER_ID'];
   $eid=mysqli_real_escape_string($conn,$eid);
   $eid=htmlentities($eid);
	$sql="select * from holiday  where employee_id=$eid order by id desc ";
}
$res=mysqli_query($conn,$sql);
?>


<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Leave </h4>
						    <?php if($_SESSION['ROLE']==2){ ?>
						   <h4 class="box_title_link"><a href="req_leave.php">Add Leave</a> </h4>
                      <?php
                      } 
                      if(isset($_SESSION['leave_msg']))
                      {
                         echo $_SESSION['leave_msg'];
                         unset($_SESSION['leave_msg']);
                      }
                      ?>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                 
                                    <tr>
                                    <?php if($_SESSION['ROLE']==2){ ?>
                                       <th width="5%">S.No</th>
                                       <th width="5%">ID</th>
                                       <th width="14%">From</th>
									            <th width="14%">To</th>
									            <th width="30%">Description</th>
									            <th width="18%">Leave Status</th>
									            <th width="10%"></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php
                                 $i=1; 
                                 while($row=mysqli_fetch_assoc($res))
                                 {
                                    ?>
 									      
                                     <tr>
                                     <td><?php echo $i ?> </td>
									   <td><?php echo $row['id'] ?>   </td>
                               <td> <?php echo $row['leave_from'] ?> </td>
									   <td><?php echo $row['leave_to'] ?>  </td>
									   <td> <?php echo $row['leave_description'] ?> </td>
                              <td> <?php  
                               if($row['leave_status']==1)
                               {
                                 echo "Applied";
                               }
                               if($row['leave_status']==2)
                               {
                                 echo "Approved";
                               }
                               if($row['leave_status']==3)
                               {
                                 echo "Rejected";
                               }

                              ?>
                              <?php
                              if($_SESSION['ROLE']==1){ ?>
                              <select class="form-control" onchange="update_leave_status('<?php echo $row['id']?>',this.options[this.selectedIndex].value)">
                              <option value="">Update Status</option>
                              <option value="2">Approved</option>
                              <option value="3">Rejected</option></select>
                              
                              <?php } ?>
                                </td>
									   <td>
                              <?php
                              if($row['leave_status']==1)
                               {?>
                              <a href="delete_leave.php?id=<?php echo $row['id']?>&type=delete">Delete</a>
                               <?php }?>
                              </td>
                                 </tr>
                                 <?php
                                 $i++;
                                  }
                                   
                                 ?>
									      
                                    </tr>
                                    
                            <?php
                           }
                           else{  ?>
                                       <th width="5%">S.No</th>
                                       <th width="5%">ID</th>
                                       <th width="15%">Employee Name</th>
                                       <th width="14%">From</th>
									            <th width="14%">To</th>
									            <th width="15%">Description</th>
									            <th width="18%">Leave Status</th>
									            <th width="10%"></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php
                                 $i=1; 
                                 while($row=mysqli_fetch_assoc($res))
                                 {
                                    ?>
 									      
                                     <tr>
                                     <td><?php echo $i ?> </td>
									   <td><?php echo $row['id'] ?>   </td>
                              <td>
                              <?php
                              $empid=$row['employee_id'];
                              $empid=mysqli_real_escape_string($conn,$empid);
                              $empid=htmlentities($empid);
                              $res1=mysqli_query($conn," select name from employee where id=$empid");
                              $row1=mysqli_fetch_assoc($res1);
                              echo $row1['name'];
                              ?></td>
                               <td> <?php echo $row['leave_from'] ?> </td>
									   <td><?php echo $row['leave_to'] ?>  </td>
									   <td> <?php echo $row['leave_description'] ?> </td>
                              <td> <?php  
                               if($row['leave_status']==1)
                               {
                                 echo "Applied";
                               }
                               if($row['leave_status']==2)
                               {
                                 echo "Approved";
                               }
                               if($row['leave_status']==3)
                               {
                                 echo "Rejected";
                               }

                              ?>
                              <?php
                              if($_SESSION['ROLE']==1){ ?>
                              <select class="form-control" onchange="update_leave_status('<?php echo $row['id']?>',this.options[this.selectedIndex].value)">
                              <option value="">Update Status</option>
                              <option value="2">Approved</option>
                              <option value="3">Rejected</option></select>
                              
                              <?php } ?>
                                </td>
									   <td>
                              <?php
                              if($row['leave_status']==1)
                               {?>
                              <a href="delete_leave.php?id=<?php echo $row['id']?>&type=delete">Delete</a>
                               <?php }?>
                              </td>
                                 </tr>
                                 <?php
                                 $i++;
                                  }
                                   
                                 ?>
									      
                                    </tr>
                                    
                            <?php
                           }
                              ?>

                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
		  </div>

<script>
function update_leave_status(id,select_value){
			window.location.href='leave.php?id='+id+'&type=update&status='+select_value;
		 }
		 

</script>
 <?php
 include 'includes\footer.php';
 ?>