 <?php
 include ('includes/header.php');
 if($_SESSION['ROLE'] ==1) 
 {   
 $res=mysqli_query($conn,"select * from department order by id desc ");
 if(mysqli_num_rows($res)>0)
 {
?>
 <div class="content pb-0 " style="background-color: teal;">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Department Master </h4>
						   <h4 class="box_title_link"><a href="add_department.php">Add Department</a> </h4>
                     <?php
                     if(isset($_SESSION['department_confirm']))
                     {
                        echo $_SESSION['department_confirm'];
                        unset($_SESSION['department_confirm']);
                     }
                     ?>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th width="5%">S.No</th>
                                       <th width="5%">ID</th>
                                       <th width="70%">Department Name</th>
                                       <th width="20%"></th>
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
									      <td><?php echo $row['id']?> </td>
                                 <td><?php echo $row['Department_name']?></td>
									      <td><a href="edit.php?id=<?php echo $row['id']?>&type=edit">Edit </a><a href="delete.php?id=<?php echo $row['id']?>&type=delete">Delete</a></td>
                                 </tr>
                                 <?php
                                 $i++;
                                  }
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
        <?php
        include 'includes/footer.php';
       }
      else
      {
         $id_employee=$_SESSION['USER_ID'];
         header("Location:profile.php?id=$id_employee");
      }
   ?>