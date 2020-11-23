<?php include('server.php') ?>
<?php
include('includes/header.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Regjistrimi</title>
</head>
<body class="logg">
<div class="log1">
  <img src="img/log3.jpg" style="float:right; border-radius:20%; width:390px; height:450px;margin-right:5%; margin-top:5%; margin-left:5%;">
  <!-- Default form login -->
<form method="post" action="login.php" class="text-center border border-light p-5" >
	  <?php include('errors.php'); ?>

<div>
<p class="h4 mb-4 "style="padding-top:7%; font-family:Imprint MT Shadow; margin-left:-4%;">Sign in</p><br>

<div class="md-form input-with-pre-icon">
<i class="fas fa-user prefix"style="margin-left:-20%; color:black;"></i>
  <input type="text" id="prefixInside" class="form-control mb-4" style="width:300px;" placeholder="Username" name="username">
</div>

<div class="md-form input-with-pre-icon">
<i class="fas fa-lock prefix" style="margin-left:-20%; color:black;"></i>
  <input type="password" id="prefixInside" class="form-control mb-4" style="width:300px;" placeholder="Password" name="password" >
</div>


<div class="d-flex justify-content-around">
	<div>
		<!-- Remember me -->
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
			<label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
		</div>
	</div>
	<div>
		<!-- Forgot password -->
		<a href="enter_email.php">Forgot password?</a>
	</div>
</div>
<button class="btn btn-black  my-4 " type="submit" name="login_user">Sign in</button>

<p>Not a member?
	<a href="register.php">Register</a>
</p>
</div>
</form>

</div>
</body>
</html>
<?php
include('includes/footer.php');
?>

