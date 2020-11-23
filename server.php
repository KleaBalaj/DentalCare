<?php
session_start();

$username = "";
$email    = "";
$errors = array(); 


$dbb = mysqli_connect('localhost', 'root', '', 'klinikaa');


if (isset($_POST['reg_user'])) {
  
  $username = mysqli_real_escape_string($dbb, $_POST['username']);
  $email = mysqli_real_escape_string($dbb, $_POST['email']);
  $password_1 = mysqli_real_escape_string($dbb, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($dbb, $_POST['password_2']);


  if (empty($username)) { array_push($errors, "Username i detyruar"); }
  if (empty($email)) { array_push($errors, "Email i detyruar"); }
  else if (!preg_match("^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$", $email)){array_push($errors, "Email i gabuar");}
  else if (empty($password_1)) { array_push($errors, "Fjalekalimi i detyruar"); }
  else if(strlen($password_1) < 5){ array_push($errors, "Fjalekalimi duhet te permbaje min 5 karaktere."); }
  else if (!preg_match("#.*^(?=.{4,10})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#", $password_1))
  { array_push($errors, "Fjalekalimi duhet te permbaje nje numer, nje shkronje te madhe dhe nje te vogel.");}
  else if ($password_1 != $password_2) {array_push($errors, "Fjalekalimet nuk perputhen");}

  $user_check_query = "SELECT * FROM pacient WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($dbb, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) {
    if ($user['username'] === $username) {
      array_push($errors, "Username ekziston");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Emaili ekziston");
    }
  }


  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO pacient (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($dbb, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: rezervo.php');
  }
}


if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($dbb, $_POST['username']);
    $password = mysqli_real_escape_string($dbb, $_POST['password']);

  
    if (empty($username)) {
        array_push($errors, "Fusni username");
    }
    if (empty($password)) {
        array_push($errors, "Fusni fjalekalimin");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
      
        $query = "SELECT * FROM pacient WHERE username='$username' AND password='$password'";
        
        $results = mysqli_query($dbb, $query);
        
        $row=mysqli_fetch_array($results);

        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success']="You are now logged in";
          $_SESSION['id']= $row['id'];
          $_SESSION['email']= $row['email'];
          $_SESSION['niveli']= $row['niveli'];

if($_SESSION['niveli']=='admin'){
  header('location:admin.php');
} 
else if($_SESSION['niveli']=='staf'){
  header('location:mjek.php');
}
else if($_SESSION['niveli'] =='pacient'){
          header('location: rezervo.php');}
}else {
            array_push($errors, "Te dhena te gabuara");
        }
    
  }
}
  ?>