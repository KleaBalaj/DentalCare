<!DOCTYPE html>
<?php
	define("TITLE", "Sherbime1 | DentalCare");
	
	include('includes/header.php');
?>
<html>
<head>
	<title>Sherbime</title>
	</head>
	<body>
	<img src="img/slide.png" style="width:100%; height:30%;"><br>
	<br>
<h2 style="text-align: center; font-weight: bold; font-family:Imprint MT Shadow;"> Kategorite e sherbimeve tona i gjeni te listuara me poshte :</h2>
<br>
<br>

<div>
<!-- Grid row -->
<div class="row">
  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-3">
    <img src="img/s2.jpg" class="img-fluid z-depth-1" style="margin-left:20%;"
      alt="Responsive image">
  </div>
  <!-- Grid column -->
  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-3">
    <img src="img/s3.jpg" class="img-fluid z-depth-1" style="margin-left:15%; margin-right:15%;"
      alt="Responsive image">
  </div>
  <!-- Grid column -->
  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-3">
    <img src="img/s5.jpg" class="img-fluid z-depth-1" style=""
      alt="Responsive image">
  </div>
  <!-- Grid column -->
</div>
<!-- Grid row -->
<!-- Grid row -->
<div class="row">
  <!-- Grid column -->
  <div class="col-md-6 mb-3">
    <img src="img/s6.jpg" class="img-fluid z-depth-1" style="width:400px; height:250px; margin-left:30%;"
      alt="Responsive image">
  </div>
  <!-- Grid column -->
  <!-- Grid column -->
  <div class="col-md-6 mb-3">
    <img src="img/s4.jpg" class="img-fluid z-depth-1" style="width:400px; height:250px; margin-left:15%;"
      alt="Responsive image">
  </div>
  <!-- Grid column -->
</div>
<!-- Grid row -->
</div>
<br><br>
<?php
echo "<p style='font-size:25px; text-align: center; font-weight: bold; font-family:Imprint MT Shadow; '><em>Klikoni kategorine per te pare sherbimet perkatese</em></p>";
?>

<div class="sherbim">
<p>  <img src="img/sh1.png"> <br><a href="sherbim.php?id=1"> Implantologji</a> </p>
<p> <img src="img/sh2.png"> <br> <a href="sherbim.php?id=2">Kellef Ura Porcelnai</a></p>
<p>  <img src="img/sh3.png"><br> <a href="sherbim.php?id=3">Ortodonci</a> </p>
<p>  <img src="img/sh4.png"><br> <a href="sherbim.php?id=4"> Proteza te levizshme</a> </p>
</div>

<div class="sherbim">
<p> <img src="img/sh5.png"><br> <a href="sherbim.php?id=5"> Terapi mbushje</a></p>
<p> <img src="img/sh6.png"> <br> <a href="sherbim.php?id=6">Punimet tek femijet</a> </p>
<p> <img src="img/sh1.png"> <br> <a href="sherbim.php?id=7">Kirurgji</a> </p>
<p> <img src="img/sh2.png"> <br> <a href="sherbim.php?id=8">Profilaksi</a> </p>
</div>

<br><br>
	<hr>
<?php include('includes/footer.php'); ?>
</body>
</html>