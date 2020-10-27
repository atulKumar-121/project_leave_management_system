<?php
 include ('includes/header.php');
 $res=mysqli_query($conn,"select * from employee  where role=2 order by id desc");
 if(mysqli_num_rows($res)>0)
 {
?>
 <div class="content pb-0 " style="background-color: teal;">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Employee </h4>
                           <?php
                           if(isset($_SESSION['employee_added']))
                           {
                               echo $_SESSION['employee_added'];
                               unset($_SESSION['employee_added']);
                           }
                           ?>
						   <h4 class="box_title_link"><a href="add_employee.php">Add  Employee</a> </h4>

                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th width="5%">S.No</th>
                                       <th width="5%">ID</th>
                                       <th width="40%">Name</th>
                                       <th width="15%">Email</th>
                                       <th width="15%">Phone Number</th>
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
                                 <td><?php echo $row['name']?></td>
                                 <td><?php echo $row['email']?></td>
                                 <td><?php echo $row['mobile']?></td>
                                  
									      <td><a href="edit_employee.php?id=<?php echo $row['id']?>&type=edit">Edit </a><a href="delete_employee.php?id=<?php echo $row['id']?>&type=delete">Delete</a></td>
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
        ?>