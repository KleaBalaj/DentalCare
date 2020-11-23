<?php include('includes/header.php');?>
<?php include('app_logic.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset PHP</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
<div class="card card-image" style="background-image: url(img/slide.png);">
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
				 <!-- logged in user information -->
         <?php  if (isset($_SESSION['username'])) : ?>
                    <div style="text-align:center;"> 
                        <h6 class="teal-text"><i class="far fa-calendar-check"></i><strong> FJALEKALIMI</strong></h6>
         <?php endif ?>
                    </div>
                </div>
            </div>

	<form class="login-form" action="login.php" method="post" style="text-align: center; margin-top:5%; margin-bottom:5%;" >
		<p>
			We sent an email to  <b><?php echo $_GET['email'] ?></b> to help you recover your account. 
		</p>
	    <p>Please login into your email account and click on the link we sent to reset your password</p>
	</form>
		
</body>
</html>
<?php
include('includes/footer.php');
?>