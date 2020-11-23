<?php
session_start();

$dbb = mysqli_connect('localhost', 'root', '', 'klinikaa');

$msg="";

if (isset($_POST['shto_k'])) {
   $image = $_FILES['ekz']['name']; 
    $tempname = $_FILES['ekz']['tmp_name'];     
        $folder = "img/".basename($image); 
        
   $emri = $_POST['emri'];
   $mbiemri =$_POST['mbiemri'];
   $mosha = $_POST['mosha'];
   $data = $_POST['data'];
   $koment = $_POST['koment'];
   $ekzaminim=$_POST['ekz'];  
   $mjek=$_POST['mjeku'];

   $query = "INSERT INTO kartele (emri, mbiemri, mosha, koment,ekzaminim, data,mjek) 
   VALUES('$emri','$mbiemri','$mosha','$koment','$image','$data','$mjek')";
     mysqli_query($dbb, $query);

     if (move_uploaded_file($tempname, $folder))  { 
      $msg = "Image uploaded successfully"; 
  }else{ 
      $msg = "Failed to upload image"; 
} 
$result = mysqli_query($db, "SELECT * FROM kartele");
      
  	header('location: mjek.php');  
}


if (isset($_POST['shfaq_k'])) {

    $_SESSION['a'] = $_POST['a'];
    $_SESSION['b']  = $_POST['b'];
      
  	header('location: shfaq_k.php');
}
?>