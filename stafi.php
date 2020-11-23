<!DOCTYPE html>
<?php
	define("TITLE", "Sherbime1 | DentalCare");
	
	include('includes/header.php');
?>
<html>
<head>
	<title>Stafi</title>
	</head>
	<body>
    <div class="team">
<img src="img/team.jpg" style="float:right; width:330px; height:450px; margin-right:8%;">
  <h1> About Our Team Spirit</h1>
  <p>
" We give our patients the best possible experience that they can get in the state. With the modern and unique equipment our dentists become real magicians in the world of beautiful smiles."
</p>
</div>
<div class="info1">
</div>

<?php
include('database.php');
$id=$_GET['id'];
if($id=='1'){
    $query="SELECT * FROM staf_foto WHERE ID_foto='1'";
}
elseif($id=='2'){
    $query="SELECT * FROM staf_foto WHERE ID_foto='2'";
}
elseif($id=='3'){
    $query="SELECT * FROM staf_foto WHERE ID_foto='3'";
}
elseif($id=='4'){
    $query="SELECT * FROM staf_foto WHERE ID_foto='4'";
}

$result = mysqli_query($conn, $query);
?>
<div class="info">
    <img src="img/s9.jpg" style="float:left; height:360px; width;380px; margin-right:80px;">
<?php
while($row=mysqli_fetch_array($result))
{   echo "<br>"."<strong>Emri: </strong>".$row["Emri"]."<br>".
    "<strong> Kualifikimet : </strong>".$row["info"]."<br>";
}
?>

<a href="stafi_db.php" class="button"> Kthehu</a>
</div>
</body>
</html>
<?php
include('includes/footer.php');
?>