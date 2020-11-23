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
	define("TITLE", "Keshilla | DentalCare");
	
	include('includes/header.php');
?>

<html>
<head>
<title>QUIZ</title>
<link href ="quiz.css" rel ="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<script src = "quiz.js"></script>
</head>

<body>
<div>
<!-- Grid row -->
<div class="row">
  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-3">
    <img src="img/q1.jpg" class="img-fluid z-depth-1" style="margin-left:20%; width:330px; height:200px; margin-top:4%;"
      alt="Responsive image">
  </div>
  <!-- Grid column -->
  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-3">
    <img src="img/q2.jpg" class="img-fluid z-depth-1" style="margin-left:15%; margin-right:15%; width:330px; height:200px; margin-top:4%;"alt="Responsive image">
  </div>
  <!-- Grid column -->
  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-3">
    <img src="img/q3.jpg" class="img-fluid z-depth-1" style="width:330px; height:200px; margin-top:4%;" alt="Responsive image">
  </div>
  <!-- Grid column -->
</div>
<!-- Grid row -->
<!-- Grid row -->
<div class="row">
  <!-- Grid column -->
  <div class="col-md-6 mb-3">
    <img src="img/q4.jpg" class="img-fluid z-depth-1" style="width:450px; height:230px; margin-left:20%;"
      alt="Responsive image">
  </div>
  <!-- Grid column -->
  <!-- Grid column -->
  <div class="col-md-6 mb-3">
    <img src="img/q6.jpg" class="img-fluid z-depth-1" style="width:500px; height:230px; margin-left:5%;"
      alt="Responsive image">
  </div>
  <!-- Grid column -->
</div>
<!-- Grid row -->
</div>


<div class="ndarja" >
 
 <div>  
    <form id = "quizi" name = "quizi" style="margin-left:18%;" method="post" action="quiz.php">
      <h4>Testo sa i rrezikuar je!</h4><br>
     <ol>
      <li> <p class = "questions">Laj dhëmbët</p>
       <input type = "radio" id = "mc" name = "question1" value = "a"> Pas çdo vakt<br>
       <input type = "radio" id = "mc" name = "question1" value = "b">1x ditë<br>
       <input type = "radio" id = "mc" name = "question1" value = "c">2x ditë<br>
       <input type = "radio" id = "mc" name = "question1" value = "d">Çdo javë<br></li>

      <li><p class = "questions">Përdor fillin dentar</p>
        <input type = "radio" id = "mc" name = "question2" value = "a">Pas çdo vakt<br>
        <input type = "radio" id = "mc" name = "question2" value = "b">1x ditë<br>
        <input type = "radio" id = "mc" name = "question2" value = "c">2x ditë<br>
        <input type = "radio" id = "mc" name = "question2" value = "d">Çdo javë<br></li>

      <li> <p class = "questions">Unë përdor një pastë dhëmbësh me fluor kur pastroj dhëmbët</p>
        <input type = "radio" id = "mc" name = "question3" value = "a">Po<br>
        <input type = "radio" id = "mc" name = "question3" value = "b">Jo<br></li>

      <li> <p class = "questions">Unë vizitoj dentistin tim</p>
        <input type = "radio" id = "mc" name = "question4" value = "a">Rregullisht<br>
        <input type = "radio" id = "mc" name = "question4" value = "b">Rrallë ose kurrë<br></li>

     <li> <p class = "questions">Hera e fundit që kisha një kavitet të mbushur ishte</p>
       <input type = "radio" id = "mc" name = "question5" value = "a">Brenda vitit të kaluar<br>
       <input type = "radio" id = "mc" name = "question5" value = "b">Brenda 12-36 muajve të fundit<br>
       <input type = "radio" id = "mc" name = "question5" value = "c">Mbi pesë vjet më parë<br>
       <input type = "radio" id = "mc" name = "question5" value = "d">Si fëmijë apo kurrë<br></li>

     <li> <p class = "questions">Uji që pi është i fluorizuar.</p>
       <input type = "radio" id = "mc" name = "question6" value = "a"> Po<br>
       <input type = "radio" id = "mc" name = "question6" value = "b">Jo<br></li>

      <li><p class = "questions">Unë kam ngjitës në dhëmbë.</p>
       <input type = "radio" id = "mc" name = "question7" value = "a"> Po<br>
       <input type = "radio" id = "mc" name = "question7" value = "b"> Jo<br></li>

      <li><p class = "questions">Unë mbaj tela ose protezat e pjesshme.</p>
       <input type = "radio" id = "mc" name = "question8" value = "a">Po<br>
        <input type = "radio" id = "mc" name = "question8" value = "b">Jo<br></li>

      <li> <p class = "questions">Unë ha ose pi ushqime me sheqer, pije energjike</p>
        <input type = "radio" id = "mc" name = "question9" value = "a">1x ditë<br>
        <input type = "radio" id = "mc" name = "question9" value = "b">Shpesh midis vakteve<br>
        <input type = "radio" id = "mc" name = "question9" value = "c">Rrallë<br></li>

       <li><p class = "questions">Mishrat e dhëmbëve të mi janë të fryrë, tkurren, jane të ndjeshëm dhe rrjedhin gjak kur laj dhëmbët.</p>
        <input type = "radio" id = "mc" name = "question10" value = "a">Po<br>
        <input type = "radio" id = "mc" name = "question10" value = "b">Jo<br></li>

      <li>  <p class = "questions">Kam diabet.</p>
        <input type = "radio" id = "mc" name = "question11" value = "a">Po<br>
        <input type = "radio" id = "mc" name = "question11" value = "b">Jo<br></li>

      <li>  <p class = "questions">Unë marr receta ose ilaçe pa recetë.</p>
        <input type = "radio" id = "mc" name = "question12" value = "a">Po<br>
        <input type = "radio" id = "mc" name = "question12" value = "b">Jo<br></li>
        
      <li>  <p class = "questions">Unë pi cigare/ puro ose përtyp duhan.</p>
        <input type = "radio" id = "mc" name = "question13" value = "a">Po<br>
        <input type = "radio" id = "mc" name = "question13" value = "b">Jo<br></li>

      <li>  <p class = "questions">Jam shtatzene</p>
        <input type = "radio" id = "mc" name = "question14" value = "a">Po<br>
        <input type = "radio" id = "mc" name = "question14" value = "b">Jo<br></li>

       <li> <p class = "questions">Unë përdor produkte me Xylitol (çamçakëz, nenexhik, shpëlarje).</p>
        <input type = "radio" id = "mc" name = "question15" value = "a">Çdo ditë<br>
        <input type = "radio" id = "mc" name = "question15" value = "b">Herë pas here<br>
        <input type = "radio" id = "mc" name = "question15" value = "c">Asnjëherë<br></li>

      <li>  <p class = "questions">Kam humbur një dhëmb për shkak të prishjes ose sëmundjes së mishit të dhëmbëve.</p>
        <input type = "radio" id = "mc" name = "question16" value = "a">Brenda vitit të kaluar<br>
        <input type = "radio" id = "mc" name = "question16" value = "b">12-26 muaj<br>
        <input type = "radio" id = "mc" name = "question16" value = "c">Më shumë se 3 vjet më parë<br>
        <input type = "radio" id = "mc" name = "question16" value = "d">Asnjëherë<br></li>
        
       <input id = "button" type = "button" value = "Submit"  onclick = "checkk();">  
    </ol>
    
    </form>
 </div>

 <div>
   <form id = "quiz" name = "quiz" style="margin-left:10%; ">
      <h4>Testoni veten!</h4><br>
    <ol>
      <li> <p class = "questions">A e rrit rrezikun e sëmundjes së dhëmbëve diabeti?</p>
        <input type = "radio" id = "mc" name = "question1" value = "a"> Po<br>
        <input type = "radio" id = "mc" name = "question1" value = "b">Jo<br> </li>

      <li> <p class = "questions">Ju keni më shumë të ngjarë të krijoni kavitet nëse hera e fundit që keni pastruar një ishte ...</p>
        <input type = "radio" id = "mc" name = "question2" value = "a">Brenda tre viteve të fundit<br>
        <input type = "radio" id = "mc" name = "question2" value = "b">Më shumë se tre vjet më parë<br></li>

      <li> <p class = "questions">Sëmundja e mishit të dhëmbëve shoqërohet me ...</p>
        <input type = "radio" id = "mc" name = "question3" value = "a"> Shtatzënia<br>
        <input type = "radio" id = "mc" name = "question3" value = "b">Sëmundje të zemrës dhe goditje në tru<br>
        <input type = "radio" id = "mc" name = "question3" value = "c">Diabeti<br>
        <input type = "radio" id = "mc" name = "question3" value = "d">Të gjitha sa më sipër<br></li>

      <li> <p class = "questions">Të jetosh në një komunitet të fluorizuar ndihmon në zvogëlimin e rrezikut për prishjen e dhëmbëve.</p>
        <input type = "radio" id = "mc" name = "question4" value = "a"> Po<br>
        <input type = "radio" id = "mc" name = "question4" value = "b"> Jo<br>
        <input type = "radio" id = "mc" name = "question4" value = "c">Nuk e di. A duhet të kujdesem?<br></li>

      <li> <p class = "questions">Eshtë në rregull ta vendosni një fëmijë në shtrat me një shishe lëng ose qumësht ...</p>
       <input type = "radio" id = "mc" name = "question5" value = "a"> Çdo ditë<br>
       <input type = "radio" id = "mc" name = "question5" value = "b"> Ndonjehere<br>
       <input type = "radio" id = "mc" name = "question5" value = "c">Asnjëherë<br></li>

      <li><p class = "questions">A e dini se pasja e një 'goje të thatë' vazhdimisht mund të ketë lidhje me sëmundjen e dhëmbëve?</p>
       <input type = "radio" id = "mc" name = "question6" value = "a"> Po<br>
       <input type = "radio" id = "mc" name = "question6" value = "b">Jo<br></li>

      <li><p class = "questions">Cili është një rrezik më i madh për kavitetet?</p>
       <input type = "radio" id = "mc" name = "question7" value = "a"> Pije freskuese / pije energjike<br>
       <input type = "radio" id = "mc" name = "question7" value = "b"> Karamele të forta<br>
       <input type = "radio" id = "mc" name = "question7" value = "c"> Ushqime ngjitëse si i butë dhe rrush i thatë<br>
       <input type = "radio" id = "mc" name = "question7" value = "d"> Çamçakëz<br>
       <input type = "radio" id = "mc" name = "question7" value = "e"> Të gjitha sa më sipër<br></li>

      <li><p class = "questions">Cili është roli i dhëmbëve të qumështit?</p>
       <input type = "radio" id = "mc" name = "question8" value = "a">Ndihmoni bebet të mësojnë të flasin<br>
        <input type = "radio" id = "mc" name = "question8" value = "b">Drejtoni dhëmbët e përhershëm në vend<br>
       <input type = "radio" id = "mc" name = "question8" value = "c">Ndihmoni në zhvillimin e fytyrës dhe nofullës<br>
       <input type = "radio" id = "mc" name = "question8" value = "d">Lejoni që foshnjat të fillojnë të hanë ushqim të fortë<br>
       <input type = "radio" id = "mc" name = "question8" value = "e">Janë të rëndësishme edhe pse përfundimisht bien<br>
       <input type = "radio" id = "mc" name = "question8" value = "f">Të gjitha më sipër<br></li>

      <li> <p class = "questions">Materiali më i vështirë në trupin e njeriut është ...</p>
        <input type = "radio" id = "mc" name = "question9" value = "a">Kocka<br>
        <input type = "radio" id = "mc" name = "question9" value = "b"> Smalt<br></li>

      <li> <p class = "questions">Duhet ti lash dhembet...</p>
        <input type = "radio" id = "mc" name = "question10" value = "a">1x ne jave<br>
        <input type = "radio" id = "mc" name = "question10" value = "b">2x ne dite<br>
        <input type = "radio" id = "mc" name = "question10" value = "c">Pas cdo vakti<br></li>
    </ol>
       <input id = "button" type = "button" value = "Submit" onclick = "check();">
       <input  type="submit" class="btn btn-default btn-rounded" name="quiz" style="margin-left:12%; " value="Mer pergjigjet ne email">
    </form>
    <a href="rezervo.php" class="btn btn-default btn-rounded" style="margin-left: 10%; margin-top:50px; ">Kthehu</a>
    <br><br><br><br>
   
     <div id = "after_submit" style="margin-top:50px; height:100px;">
       <p id = "number_correct"></p>
       <p id = "message"></p>
      
     </div>
 </div> 

</div>
<?php
$dbb = mysqli_connect('localhost', 'root', '', 'klinikaa');
if (isset($_POST['quiz'])) {

       $to_email = $_SESSION['email'];
  
       $subject = "Pergjigjet e quizit";
       $body = "Shëndeti i mirë oral vjen nga vetëdija për faktorët tuaj të rrezikut dhe faktorët mbrojtës. Mendoni për përgjigjet tuaja në këto pyetje dhe përdorni këtë tabelë për të filluar një bisedë me dentistin tuaj për menaxhimin e zonave tuaja të rrezikut. Jini të vetëdijshëm se shansi që të krijoni kavitete ndryshon me kalimin e kohës si rrezik.
       Faktorët mbrojtës
Furçë dhe pastroni dhëmbët me pe çdo ditë
Kontrolle vjetore ose gjysmëvjetore te dentisti
Përdorimi i pastës së dhëmbëve me fluor
Ngjitësit e aplikuar në molarë
Aplikohet llaku i fluorit të ditës
Uji i komunitetit fluorizohet
Përdorni produkte me xylitol
Gjenetikë e mirë

Faktoret e rrezikut
Higjiena e dobët ditore ose jo higjiena ditore
Vizita të parregullta te dentisti
Një zgavër brenda 3 viteve të fundit
Përdorimi i zgjatur i shisheve nga foshnjat
Një dhëmb i humbur nga prishja ose sëmundja e dhëmbëve
Mishrat e fryrë ose gjakderdhje
Mishrat që tërhiqen (tkurren), sipërfaqja e rrënjës është e ekspozuar
Diabeti
Shtatzënia
Përdorimi i duhanit (cigare, tuba, puro, përtypje)
Recetë / ilaçe pa recetë
Mbërthyes ose protezat e pjesshme
Midis konsumimit të vaktit të ushqimeve me sheqer
Midis konsumimit të vaktit të ushqimeve acidike
Kimioterapi ose terapi rrezatimi
Çregullime te ngrenies
Abuzimi me drogën ose alkoolin
Nevoja të veçanta të kujdesit shëndetësor
Goje e thate";


       $headers = "From: DentalCare email";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
           if (mail($to_email, $subject, $body, $headers)) {
        echo "Email u dergua me sukses tek: $to_email...";
            } else {
           echo "Email nuk u dergua...";
           }

}           
        ?>

<?php include('includes/footer.php'); ?>
</body>
</html>

