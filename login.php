<?php
include 'includes/database.php'
?>
<!DOCTYPE html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="css/flag-icon.min.css">
    <link rel="stylesheet" href="css/cs-skin-elastic.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   
</head>
 <body style="background-color: teal">
      <div class="sufee-login d-flex align-content-center flex-wrap">
         <div class="container">
            <div class="login-content">
            
               <div class="login-form mt-150">
                  <form method="post" action="login_check.php">
                  <h5 style="text-align:center;color:teal;margin-bottom:10px;">ABC Consultancy Services</h5>
                    <?php
                    if(isset($_SESSION['message']))
                    {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }
                    ?>
                     <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email..." required>
                     </div>
                     <div class="form-group">
                         
                        <input type="password" name="password" class="form-control" placeholder="Password..." required>
                     </div>
                     <button type="submit" class="btn btn-info btn-flat m-b-30 m-t-30" name="login">Log in</button>
					  
					</form>
               </div>
            </div>
         </div>
      </div>
      <script src="js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="js/popper.min.js" type="text/javascript"></script>
      <script src="js/plugins.js" type="text/javascript"></script>
      <script src="js/main.js" type="text/javascript"></script>  
 </body>
</html>
      