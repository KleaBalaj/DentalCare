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
    <img src="img/slide.png" style="width:100%; height:30%;">
<?php
include('database.php');
$id=$_GET['id'];
if($id=='1'){
    $query="SELECT * FROM sherbimi WHERE ID_kategori='1'";
}
elseif($id=='2'){
    $query="SELECT * FROM sherbimi WHERE ID_kategori='2'";
}
elseif($id=='3'){
    $query="SELECT * FROM sherbimi WHERE ID_kategori='3'";
}
elseif($id=='4'){
    $query="SELECT * FROM sherbimi WHERE ID_kategori='4'";
}
elseif($id=='5'){
    $query="SELECT * FROM sherbimi WHERE ID_kategori='5'";
}
elseif($id=='6'){
    $query="SELECT * FROM sherbimi WHERE ID_kategori='6'";
}
elseif
($id=='7'){
    $query="SELECT * FROM sherbimi WHERE ID_kategori='7'";
}

$sql=mysqli_query($conn, $query);
?>

<div class="sh">
<img src="img/smile2.png" style="float:left; width:600px; height:300px; ">
<?php
while($row=mysqli_fetch_array($sql))
{   echo $row['emri']." - ";
    echo $row['cmimi']. "L<br/>";
}
?>


<a href="sh_kategori.php" class="button" style="margin-bottom:15%;">&laquo; Kthehu</a>
</div>
</body>
</html>
<?php
include('includes/footer.php');
?>