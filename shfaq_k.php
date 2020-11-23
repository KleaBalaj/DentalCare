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
                        <h6 class="teal-text"><i class="far fa-calendar-check"></i><strong>KARTELA</strong></h6>
                        <p class="pb-3">PROFILI I MJEKUT</p>
                       <p><b><a href="rezervo.php?logout='1'" style="color: Teal; font-size:30px;"><i class="fas fa-sign-out-alt"></i> Dil</a></b> </p>
            <?php endif ?>
                    </div>
                </div>
        </div>
<a href="mjek.php" class="btn btn-default btn-rounded" style="margin-left: 10%; margin-top:10px; ">Kthehu</a>
<table class="table" style=" margin-bottom: 15%; width:50%; margin-top:5%;margin-left:25%;"  >
    <thead  class="teal white-text">
      <tr> 
       <th colspan=7 style="text-align:center;height:60px;  width:900px; font-size:20px;"> Llogaria juaj </th> </tr>
	  <tr>
        <th colspan="7" style="text-align:center;height: 60px; width:900px; font-size:20px;">Kartela:</th></tr>
      <tr>
                <th style="text-align:left;height: 50px;width:100px;">Emri </th>
                <th style="text-align:left;height: 50px;width:200px;">Mbiemri </th>
                <th style="text-align:left;height: 50px;width:100px;">Mosha </th>
                <th style="text-align:left;height: 50px;width:200px;">Koment</th>
                <th style="text-align:left;height: 50px;width:100px;">Ekzaminim</th>
                <th style="text-align:left;height: 50px;width:100px;">Data</th>
                <th style="text-align:left;height: 50px;width:100px;">Mjeku</th>
            </tr>
            </thead>
            <tbody>

			<?php
    $con = mysqli_connect('localhost', 'root', '','klinikaa');
    $a=$_SESSION['a'];
    $b=$_SESSION['b'];
    $sql = "select * from kartele where emri='$a' AND mbiemri='$b' ";
    $result = mysqli_query($con, $sql);
	  while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
                   echo  "<td>"   .$row['emri'].  "</td>";
                    echo "<td>"   .$row['mbiemri']." </td>";
                    echo "<td>"   .$row['mosha']. "</td>";
                    echo "<td>"   .$row['koment']. " </td>";
                    echo "<td> <img src='img/".$row['ekzaminim']."' alt='nuk ka' > </td>";
                    echo "<td>"   .$row['data']. " </td>";
                    echo "<td>"   .$row['mjek']. " </td>";
                    echo "</tr>";
                }
           ?>
 </tbody>
        </table><br>



</body>
</html>
<?php
include('includes/footer.php');

?>