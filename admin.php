<!DOCTYPE>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Duhet te logoheni ne profilin tuaj";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<html>
<head>
<?php
include('includes/header.php');
?>
<title>Admin</title>
<h2 style="text-align:center;margin-top:5%;">Mireserdhe Admin</h2>
<img src="/detyra1/img/admin.jpg" style="width:60px; height:60px;margin-left:48%;">
<br> <a href="rezervo.php?logout='1'" style=" font-size:20px;color:red; margin-left:49%; ">Dil</a>
</head>
<body>
 <div class="row" style="background-color:whitesmoke;">

   <form method="post" action="shto_orar.php" class="column"style="padding-left:8%;" >
        <p style="text-decoration:underline; font-size:22px; "><b>Shto orar</b></p><br>

        <input type="radio" name="dita" for="a"  value="E hene"/><b>E hene  </b> 
	     	<?php
           $con = mysqli_connect('localhost', 'root', '','klinikaa');
           $sql = "select * from kalendar where gjendje='jo' AND dita='E hene' ";
           $result = mysqli_query($con, $sql);
            	while($row = mysqli_fetch_assoc($result)){
                   echo  "<input type='checkbox' name='ora[]' value='".$row['ora'] ."'/>" .$row['ora'];
                }
          ?><br>
		   
       <input type="radio" name="dita" for="b"  value="E marte"/><b>E marte</b>
		     <?php
            $con = mysqli_connect('localhost', 'root', '','klinikaa');
            $sql = "select * from kalendar where gjendje='jo' AND dita='E marte' ";
            $result = mysqli_query($con, $sql);
             	while($row = mysqli_fetch_assoc($result)){
               echo  "<input type='checkbox'  name='ora[]' value='".$row['ora'] ."'/>" .$row['ora'];
                }
          ?><br>

         <input type="radio" name="dita" for="b"  value="E marte"/><b>E merkure</b>
		      <?php
             $con = mysqli_connect('localhost', 'root', '','klinikaa');
             $sql = "select * from kalendar where gjendje='jo' AND dita='E merkure' ";
             $result = mysqli_query($con, $sql);
             	while($row = mysqli_fetch_assoc($result)){
               echo  "<input type='checkbox'  name='ora[]' value='".$row['ora'] ."'/>" .$row['ora'];
                }
          ?><br>

        <input type="radio" name="dita" for="d"  value="E enjte"/><b>E enjte</b>
		       <?php
             $con = mysqli_connect('localhost', 'root', '','klinikaa');
             $sql = "select * from kalendar where gjendje='jo' AND dita='E enjte' ";
             $result = mysqli_query($con, $sql);
            	while($row = mysqli_fetch_assoc($result)){
               echo  "<input type='checkbox'  name='ora[]' value='".$row['ora'] ."'/>" .$row['ora'];
                }
           ?><br>
		
        <input type="radio" name="dita" for="e"  value="E premte"/><b>E premte</b>
	  	     <?php
             $con = mysqli_connect('localhost', 'root', '','klinikaa');
             $sql = "select * from kalendar where gjendje='jo' AND dita='E premte' ";
             $result = mysqli_query($con, $sql);
	           while($row = mysqli_fetch_assoc($result)){
               echo  "<input type='checkbox'  name='ora[]' value='".$row['ora'] ."'/>" .$row['ora'];
                }
           ?><br>
		 
        <input type="radio" name="dita" for="f"  value="E shtune"/><b>E shtune</b>
	  	     <?php
              $con = mysqli_connect('localhost', 'root', '','klinikaa');
              $sql = "select * from kalendar where gjendje='jo' AND dita='E shtune' ";
              $result = mysqli_query($con, $sql);
        	    while($row = mysqli_fetch_assoc($result)){
                echo  "<input type='checkbox'  name='ora[]' value='".$row['ora'] ."'/>" .$row['ora'];
                }
           ?><br>

  
    	  <input style="margin:20px;" type="submit" class="btn btn-default btn-rounded" name="shto" value="Shto">	
    </form>



     <form method="post" action="hiq_orar.php" class="column " style="" >
          <p style="text-decoration:underline; font-size:22px;"><b>Rezervo orar te lire</b></p><br>

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
  
    	    <input style="margin:20px" type="submit" class="btn btn-default btn-rounded" name="hiq" value="Rezervo">	
     </form>
 </div>
</body>
<?php
include('includes/footer.php');
?>
</html>

<style>
* {
  box-sizing: border-box;
}
/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 20px;
  height: 400px; /* Should be removed. Only for demonstration */
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>

