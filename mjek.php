
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
<title>Stafi</title>
</head>
<body>
<div class="row">
  <form method="post" action="kartele.php"enctype="multipart/form-data" class="column"style="background-color:whitesmoke; padding-left:15%;">

      <div style="text-align:left; font-weight:bold;margin-top:2%; margin-bottom:3%; margin-left:1%;">
       <br> <h6><b>PROFILI I MJEKEVE</b></h6>
        <img src="img/icon3.jpg" style="width:70px; height:70px;margin-left:18px;"><br>
        <a href="rezervo.php?logout='1'" style=" font-size:20px;color: red; margin-left:50px; ">Dil</a>
      </div>

      <div class="shfaq">
         <div>
            <h5 style=" font-family:Imprint MT Shadow;">SHFAQ KARTELE</h5>
         </div>
        <div class="form-row align-items-center">
         <!-- Grid column -->
          <div class="col-auto">
            <div class="md-form">
               <input type="text" class="form-control mb-2" id="inlineFormInputMD" placeholder="Emri" name="a">
            </div>
          </div>
          <!-- Grid column -->
          <div class="col-auto">
            <div class="md-form input-group mb-3">
              <input type="text" class="form-control pl-0 rounded-0" id="inlineFormInputGroupMD" placeholder="Mbiemri" name="b">
            </div>
          </div>
          <!-- Grid column -->
          <div class="col-auto">
            <button type="submit" class="btn btn-black mt-4" name="shfaq_k">Shfaq</button>
          </div>
        </div>
      </div> 
  </form>

  <form method="post" action="kartele.php"enctype="multipart/form-data" class="column" style="background-color: #f5f5f5; padding-left:10%;">

       <p class="h5 mb-4 " style="padding-top:7%; font-family:Imprint MT Shadow;">SHTO KARTELE</p>

        <div class="md-form input-with-pre-icon">
          <input type="text" id="prefixInside" class="form-control mb-4" style="width:300px;" placeholder="Emri" name="emri">
        </div>

      <div class="md-form input-with-pre-icon">
        <input type="text" id="prefixInside" class="form-control mb-4" style="width:300px;" placeholder="Mbiemri" name="mbiemri" >
      </div>

      <div class="md-form input-with-pre-icon">
        <input type="number" id="prefixInside" class="form-control mb-4" style="width:300px;" placeholder="Mosha" name="mosha" >
      </div>
      <div class="md-form input-with-pre-icon">
        <input type="text" id="prefixInside" class="form-control mb-4" style="width:300px;" placeholder="Koment" name="koment" >
       </div>
    
         <input type="file"  style="width:300px;" placeholder="Ekzaminim" name="ekz" >
    
      <div class="md-form input-with-pre-icon">
          <input type="date" id="prefixInside" class="form-control mb-4" style="width:300px;" placeholder="Data" name="data" >
      </div>

      <label for="kategori" style="margin-right:15px;">Mjeku</label>
	      <select id="kategori" name="mjeku">
		       <?php
             $con = mysqli_connect('localhost', 'root', '','klinikaa');
              $sql = "select * from staf_foto ";
              $result = mysqli_query($con, $sql);
	            while($row = mysqli_fetch_assoc($result)){
                   echo  "<option>" .$row['Emri']. "</option>";
                }
            ?>
       </select><br>
       
  	    <button type="submit" class="btn btn-black mt-4" name="shto_k">SHTO</button>

  </form>
</div> 
<br>
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
  height: 700px; /* Should be removed. Only for demonstration */
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>