<?php include('includes/header.php');?>
<?php include('app_logic.php') ?>

<!DOCTYPE html>
<html >
<head>
	<title>Password Reset PHP</title>
	<link rel="stylesheet" href="style.css">
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

	<form class="login-form" action="new_pass.php" method="post"style="margin-top:5%; margin-left:25%; margin-bottom:5%;">
		<h2 class="form-title">Fjalekalimi i ri</h2>
		<!-- form validation messages -->
		<?php include('errors.php'); ?>
		<div class="form-group">
			<label>Fjalekalimi i ri</label>
			<input type="password" name="new_pass">
		</div>
		<div class="form-group">
			<label>Konfirmo fjalekalimin</label>
			<input type="password" name="new_pass_c">
		</div>
		<div class="form-group">
			<button type="submit" name="new_password" class="login-btn">Submit</button>
		</div>
	</form>
</body>
</html>
<?php
include('includes/footer.php');
?>