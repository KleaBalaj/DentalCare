<?php
session_start();

$db = mysqli_connect('localhost', 'root', '', 'klinikaa');

if (isset($_POST['shto'])) {
	
		if(empty($_POST['ora']))
		{
			die ("Nuk konfirmuat asnje nga rezervimet.");
		}
		else {
			$nr=count($_POST['ora']);
		}
  $data = $_POST['dita'];
  
} 
for($i=0; $i<$nr; $i++){
  $query = "UPDATE kalendar SET gjendje='po' where dita='$data' AND ora='".$_POST['ora'][$i]."' ";
  mysqli_query($db, $query);   
}
header('location:admin.php')

?>
