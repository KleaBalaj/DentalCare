<?php
define("TITLE", "Stafi | DentalCare");
include('includes/header.php');
?>
<div class="team">
<img src="img/team.jpg" style="float:right; width:330px; height:450px; margin-right:8%;">
  <h1> About Our Team Spirit</h1>
  <p>
" We give our patients the best possible experience that they can get in the state. With the modern and unique equipment our dentists become real magicians in the world of beautiful smiles."
</p>
</div><br>
    <h1 style="text-align:center;"><b>Stafi yne</h1><br>
		<p style="font-size:20px; text-decoration:underline; text-align:center; color: #194d33;"><strong>Tek ne do te merni sherbimin cilesor nga nje staf i perzgjedhur dhe me cmime te arsyeshme per kedo.</strong></p>

        <?php 
        session_start();
$mysqli=new mysqli('localhost','root','','klinikaa') or die($mysqli->connect_error);
$sql = "select * from staf_foto";
$result = mysqli_query($mysqli, $sql);
$num = mysqli_num_rows($result);
?>

<div class="staf">
  <?php
if($num > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo"<img style='width:58%; height:40%; border: 4px solid #00928c;border-radius:50%; margin: 0 -10px 0 100px;' src='{$row['img_dir']}' width='40%' height='40%' /><br>";
    echo "<a href='stafi.php?id=".$row['ID_foto']."' style='margin-left:170px;   color:#00928c;'>".$row['Emri']."</a>";  
    
	}
}
?> </div>

<?php include('includes/footer.php'); ?>
