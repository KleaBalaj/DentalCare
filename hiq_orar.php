	
<?php
session_start();

$db = mysqli_connect('localhost', 'root', '', 'klinikaa');
  if (isset($_POST['hiq'])) {

    $data = $_POST['dita'];
    $ora = $_POST['ora'];
  }	
  
	$queryy = "UPDATE kalendar SET gjendje='jo' where dita='$data' AND ora='$ora' ";
	mysqli_query($db, $queryy);
	
      header('location:admin.php')

?>