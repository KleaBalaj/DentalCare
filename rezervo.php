<!DOCTYPE html>

<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<?php
include('includes/header.php');
?>

<html>
<head>
	<title>Rezervo</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body > 
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


            <a href="quiz.php" class="button" style="margin-bottom:5%;margin-left:45%;"> Testo veten</a>
<div class="register">
  <form method="post" action="validim_rez.php" class="text-center " >
  <div style="float:left;">
       <p style="text-decoration:underline; font-size:22px;"><b>Të dhënat personale</b></p>
	   
       <label style="margin-right:20px;">Username </label>
  	  <input type="text" name="username" readonly value="<?php echo $_SESSION['username']; ?>" ><br> 

  	 
  <label style="margin-right:59px;">Emri</label>
		<input type="text" name="emri" ><br>

    <label style="margin-right:35px;">Mbiemri</label>
		<input type="text" name="mbiemri"><br>
  
    <label style="margin-right:45px;">Mosha</label>
  	   <input type="number"  style="width:190px;"name="mosha"  min="1" max="100"><br>

  	   <label style="margin-left:-70%;" >Gjinia </label>
		<input  type="radio" name="gjinia" value="Femer" checked>F
		<input type="radio" name="gjinia" value="Mashkull" >M<br><br> 

		<input type="hidden" name="id" readonly value="<?php echo $_SESSION['id']; ?>" ><br> 

  </div>

  <div>
   <p style="text-decoration:underline; font-size:22px;"><b>Të dhënat e rezervimit</b></p><br>

   <input type="radio" name="dita" for="a" style="margin-right:15px;" value="E hene"/>E hene
		<select id="a" name="ora">
          <option selected disabled>select</option> 
		<?php
    $con = mysqli_connect('localhost', 'root', '','klinikaa');
     $sql = "select * from kalendar where gjendje='po' AND dita='E hene' ";
     $result = mysqli_query($con, $sql);
	while($row = mysqli_fetch_assoc($result)){
                   echo  "<option value='".$row['ora'] ."'>" .$row['ora']. "</option>";
                }
           ?>
		   </select>
       <input type="radio" name="dita" for="b" style="margin-right:15px;" value="E marte"/>E marte
		<select id="b" name="ora">
          <option selected disabled>select</option> 
		<?php
    $con = mysqli_connect('localhost', 'root', '','klinikaa');
     $sql = "select * from kalendar where gjendje='po' AND dita='E marte' ";
     $result = mysqli_query($con, $sql);
	while($row = mysqli_fetch_assoc($result)){
                   echo  "<option value='".$row['ora'] ."'>" .$row['ora']. "</option>";
                }
           ?>
		   </select>
       <input type="radio" name="dita" for="c" style="margin-right:15px;" value="E merkure"/>E merkure
		<select id="c" name="ora">
          <option selected disabled>select</option> 
		<?php
    $con = mysqli_connect('localhost', 'root', '','klinikaa');
     $sql = "select * from kalendar where gjendje='po' AND dita='E merkure' ";
     $result = mysqli_query($con, $sql);
	while($row = mysqli_fetch_assoc($result)){
                   echo  "<option value='".$row['ora'] ."'>" .$row['ora']. "</option>";
                }
           ?>
		   </select><br>
       <input type="radio" name="dita" for="d" style="margin-right:15px;" value="E enjte"/>E enjte
		<select id="d" name="ora">
          <option selected disabled>select</option> 
		<?php
    $con = mysqli_connect('localhost', 'root', '','klinikaa');
     $sql = "select * from kalendar where gjendje='po' AND dita='E enjte' ";
     $result = mysqli_query($con, $sql);
	while($row = mysqli_fetch_assoc($result)){
                   echo  "<option value='".$row['ora'] ."'>" .$row['ora']. "</option>";
                }
           ?>
		   </select>
       <input type="radio" name="dita" for="e" style="margin-right:15px;" value="E premte"/>E premte
		<select id="e" name="ora">
          <option selected disabled>select</option> 
		<?php
    $con = mysqli_connect('localhost', 'root', '','klinikaa');
     $sql = "select * from kalendar where gjendje='po' AND dita='E premte' ";
     $result = mysqli_query($con, $sql);
	while($row = mysqli_fetch_assoc($result)){
                   echo  "<option value='".$row['ora'] ."'>" .$row['ora']. "</option>";
                }
           ?>
		   </select>
       <input type="radio" name="dita" for="f" style="margin-right:15px;" value="E shtune"/>E shtune
		<select id="f" name="ora">
          <option selected disabled>select</option> 
		<?php
    $con = mysqli_connect('localhost', 'root', '','klinikaa');
     $sql = "select * from kalendar where gjendje='po' AND dita='E shtune' ";
     $result = mysqli_query($con, $sql);
	while($row = mysqli_fetch_assoc($result)){
                   echo  "<option value='".$row['ora'] ."'>" .$row['ora']. "</option>";
                }
           ?>
		   </select><br>
  	
		<label for="kategori" style="margin-right:15px;">Kategori</label>
		<select id="kategori" name="kategori">
		<?php
    $con = mysqli_connect('localhost', 'root', '','klinikaa');
     $sql = "select * from kategori_sherbimi ";
     $result = mysqli_query($con, $sql);
	while($row = mysqli_fetch_assoc($result)){
                   echo  "<option>" .$row['kategori']. "</option>";
                }
           ?>
		   </select><br><br>

    	<input style="margin:0px 320px;" type="submit" class="btn btn-default btn-rounded" name="rez" value="Rezervo">
		
	<br><br>
</div>
	</form>
</div>	

  <div class="">
  
	<h2 style="color:black; text-align:center;"> Llogaria juaj </h2>
	<h2 style="text-decoration:underline; color:black;text-align:center;">Historiku rezervimeve:</h2><br>

	<table class="tabel" >
	<thead class="teal white-text">
            <tr>
                <th style="text-align:left;height: 50px;width:120px;">Username </th>
                <th style="text-align:left;height: 50px;width:100px;">Data </th>
                <th style="text-align:left;height: 50px;width:100px;">Ora </th>
                <th style="text-align:left;height: 50px;width:100px;">Kategoria </th>	
            </tr>
			</thead>
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
                    echo "</tr>";
                }
           ?>
        </table>

<br><br><br><br>
<?php include('includes/footer.php'); ?>
</body>
<style type="text/css">

.tabel{
	margin-left:35%;
	font-weight:6px;
	margin-bottom:5%;
	
}
.tabela, td, th{
	border-collapse: collapse;
	
}
</style>
</html>