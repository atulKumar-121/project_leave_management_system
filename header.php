 <?php
include 'includes/database.php';
if(!isset($_SESSION['ROLE']))
{
   header("Location:login.php");
}
?>
 <!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dashboard Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/themify-icons.css">
      <link rel="stylesheet" href="css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="css/flag-icon.min.css">
      <link rel="stylesheet" href="css/cs-skin-elastic.css">
      <link rel="stylesheet" href="css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
                  <?php
                  if($_SESSION['ROLE'] ==1)
                  {   
                     
                  ?>
                   
				  <li class="menu-item-has-children dropdown">
                     <a href="index.php" data-toggle="tooltip" title="Department Master"> Department Master</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="leave_type.php" data-toggle="tooltip" title="Leave Type Master"> Leave Type Master</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="employee.php" data-toggle="tooltip" title="Employee Master" > Employee Master</a>
                  </li>
                  <?php
                  }
                   
                  ?>
				   
				  <li class="menu-item-has-children dropdown">
                     <a href="profile.php?id=<?php echo $_SESSION['USER_ID'];?>" data-toggle="tooltip" title="Profile"> Profile</a>
                  </li>
				    <li class="menu-item-has-children dropdown">
                     <a href="leave.php" data-toggle="tooltip" title="Leave"> Leave</a>
                  </li>

               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <a class="navbar-brand" href="index.php"><h5 style="text-align:center;color:teal;margin-bottom:10px;">ABC Consultancy Services</h5>
                  </a>
                   <a id="menuToggle" class="menutoggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome : <?php echo $_SESSION['USER_NAME'];?></a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i>Logout</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>