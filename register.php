<?php include('server.php') ?>
<?php
include('includes/header.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Regjistrimi </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="reg">
  
	 <div class="reg1">
	 <img src="img/log2.jpg" style="float:left; border-radius:20%; width:410px; height:430px;margin-right:8%; margin-top:8%; margin-left:4%;">
  
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
 <p class="h4 mb-4 " style="padding-top:7%; font-family:Imprint MT Shadow;">Sign Up</p>

 <div class="md-form input-with-pre-icon">
 <i class="fas fa-user prefix"style=" color:black;"></i>
  <input type="text" id="prefixInside" class="form-control mb-4" style="width:300px;" placeholder="Username" name="username" value="<?php echo $username; ?>">
</div>
<div class="md-form input-with-pre-icon">
  <i class="fas fa-envelope prefix" style=" color:black;"></i>
  <input type="email" id="prefixInside" class="form-control mb-4" style="width:300px;" placeholder="Email" name="email" value="<?php echo $email; ?>">
</div>
<div class="md-form input-with-pre-icon">
<i class="fas fa-lock prefix" style=" color:black;"></i>
  <input type="password" id="prefixInside" class="form-control mb-4" style="width:300px;" placeholder="Password" name="password_1" >
</div>
<div class="md-form input-with-pre-icon">
<i class="fas fa-lock prefix" style=" color:black;"></i>
  <input type="password" id="prefixInside" class="form-control mb-4" style="width:300px;" placeholder="Confirm password" name="password_2" >
</div>
    
  	  <button type="submit" class="btn btn-black mt-4" name="reg_user">Regjistrohu</button>
  	<p>
  		Jeni te regjistruar? <a href="login.php">Hyr</a>
  	</p>
  </form>
</div>
 
</body>
</html>
<?php
include('includes/footer.php');
?>
