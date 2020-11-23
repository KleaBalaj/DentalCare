<!DOCTYPE html>
<?php

session_start(); 
include('includes/header.php');
?>
<html>
<head>
<title>Shfaq te dhenat</title>
</head>
<body>
<div class="card card-image" style="background-image: url(img/slide.png);">
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
				 <!-- logged in user information -->
         <?php  if (isset($_SESSION['username'])) : ?>
                    <div style="text-align:center;"> 
                        <h6 class="teal-text"><i class="far fa-calendar-check"></i><strong> REZERVIM</strong></h6>
                        <h3 class="card-title py-3 font-weight-bold"><strong>Mireserdhe <?php echo $_SESSION['username']; ?>!</strong></h3>
                        <p class="pb-3">Ketu mund te kryesh rezervimin per viziten tende prane nesh.</p>
                       <p><b><a href="rezervo.php?logout='1'" style="color: Teal; font-size:30px;"><i class="fas fa-sign-out-alt"></i> Dil</a></b> </p>
         <?php endif ?>
                    </div>
                </div>
            </div>


<div style="margin-bottom:8%; margin-top: 3%;">
    <table class="table" style="float: left;  margin-left: 8%; width:30%;" >
    <thead  class="teal white-text">
            <tr>
                <th colspan="2" style="text-align:center;height: 60px;width:360px;font-size:20px;">Te dhenat qe plotesuat </th>
            </tr>
    </thead>        
            <tr>
                <th style="text-align:left;height: 50px;width:150px;">Username </th>
                <th style="text-align:left;height: 50px;width:210px;"> <?php echo $_SESSION['username']; ?></th>
            </tr>
            <tr>
                <th style="text-align:left;height: 50px;width:150px;">Emri</th>
                <th style="text-align:left;height: 50px;width:210px;"> <?php echo $_SESSION['emri']; ?> </th>
            </tr>
            <tr>
                <th style="text-align:left;height: 50px;width:150px;">Mbiemri </th>
                <th style="text-align:left;height: 50px;width:210px;"> <?php echo $_SESSION['mbiemri']; ?></th>
            </tr>
            <tr>
                <th style="text-align:left;height: 50px;width:150px;">Mosha </th>
                <th style="text-align:left;height: 50px;width:210px;"> <?php echo $_SESSION['mosha']; ?> </th>
            </tr>
            <tr>
                <th style="text-align:left;height: 50px;width:150px;">Gjinia </th>
                <th style="text-align:left;height: 50px;width:210px;"> <?php echo $_SESSION['gjinia']; ?> </th>
            </tr>
            <tr>
                <th style="text-align:left;height: 50px;width:150px;">Data </th>
                <th style="text-align:left;height: 50px;width:210px;"> <?php echo $_SESSION['data']; ?> </th>
            </tr>
            <tr>
                <th style="text-align:left;height: 50px;width:150px;">Ora </th>
                <th style="text-align:left;height: 50px;width:210px;"> <?php echo $_SESSION['ora']; ?></th>
            </tr>
            <tr>
                <th style="text-align:left;height: 50px;width:150px;">Kategori </th>
                <th style="text-align:left;height: 50px;width:210px;"> <?php echo $_SESSION['kategori']; ?> </th>
            </tr>
</table>
<img src="img/img1.jpg" >
</div>
<img src="img/back1.jpg" style="float: left;  margin-left: 8%; width:30%;" >
    <table class="table" style=" margin-bottom: 15%;  width:40%;"  >
    <thead  class="teal white-text">
    <tr> 
    <th colspan=5 style="text-align:center;height: 60px;width:360px;font-size:20px;"> Llogaria juaj </th> </tr>
	<tr>
    <th colspan="5" style="text-align:center;height: 60px;width:360px;font-size:20px;">Historiku rezervimeve:</th></tr>
    <tr>
                <th style="text-align:left;height: 50px;width:100px;">Username </th>
                <th style="text-align:left;height: 50px;width:200px;">Data </th>
                <th style="text-align:left;height: 50px;width:100px;">Ora </th>
                <th style="text-align:left;height: 50px;width:200px;">Kategoria </th>
				<th style="text-align:left;height: 50px;width:100px;">Konfirmimi</th>
            </tr>
            </thead>
            <tbody>
			<?php
 $con = mysqli_connect('localhost', 'root', '','klinikaa');
 $sql = "select * from rezervim where username='{$_SESSION['username']}'";
 $result = mysqli_query($con, $sql);
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
                   echo  "<td>"   .$row['username'].  "</td>";
                    echo "<td>"   .$row['data']." </td>";
                    echo "<td>"   .$row['ora']. "</td>";
                    echo "<td>"   .$row['kategoria']. " </td>";
					echo  "<td>"  .$row['Konfirmimi']. "</td>";
                    echo "</tr>";
                }
           ?>
 </tbody>
        </table><br>
      
    
<a href="rezervo.php" class="btn" style="margin-left: 30%; margin-top:-15px;">Kthehu</a>


</body>
<?php include('includes/footer.php'); ?>
</html>

<style type="text/css">
.btn{
	padding: 10px;
	font-size:15px;
	color:white;
	background: #0B4C5F;
	border:none;
    border-radius: 5px;
    font-size:20px;
    margin:-100px 0 100px 50px;
}


</style>