<?php
session_start();

$db = mysqli_connect('localhost', 'root', '', 'klinikaa');

if (isset($_POST['rez'])) {

  $emri = $_POST['emri'];
  $mbiemri =$_POST['mbiemri'];
  $username=$_POST['username'];
  $mosha = $_POST['mosha'];
  $gjinia = $_POST['gjinia'];
  $data = $_POST['dita'];

   $ora = $_POST['ora'];
  
  $kategori = $_POST['kategori'];
  $id= $_POST['id'] ;
}
$query = "INSERT INTO rezervim (Emri, mbiemri,username, mosha, gjinia, data, ora, kategoria, id) 
  			  VALUES('$emri', '$mbiemri','$username', '$mosha','$gjinia','$data','$ora', '$kategori', '$id')";
      mysqli_query($db, $query);

      $_SESSION['emri'] = $emri;
      $_SESSION['mbiemri'] = $mbiemri;
      $_SESSION['username'] = $username;
      $_SESSION['mosha'] = $mosha;
      $_SESSION['gjinia'] = $gjinia;
      $_SESSION['data'] = $data;
      $_SESSION['ora'] = $ora;
      $_SESSION['kategori'] = $kategori;    
  
  $queryy = "UPDATE kalendar SET gjendje='jo' where dita='$data' AND ora='$ora' ";
  mysqli_query($db, $queryy);    

      header('location:shfaq.php')

?>