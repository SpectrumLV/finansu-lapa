<?php include_once('navbar.php'); 
//include_once('forma.php'); 
?>

  <main>
    <div class="success">
    <?php
    
$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($fullUrl, "task=success") == true){

 echo "<h3>Pieteikums nosūtīts<br>Jūsu numurs ir: " . $_GET['idnumurs'] . "<br> Pakalpojuma cena ir: " . $_GET['cena'] . "Eur </h3>";

}

?>
    <div>

    <section class="index-banner">
      <div class="vertical-center">
        <h2>Profesionāli IT<br> risinājumi</h2>
        <h1>Sniedzam profesionālus Web risinājumus izmantojot jaunākās tehnoloģijas.</h1>
      </div>
    </section>
    <div class="wrapper">
      <section class="index-links">
        <a href="cases.html">
          <div class="index-boxlink-square">
            <h3>Piemēri</h3>
          </div>
        </a>
        <a href="anketa.html">
          <div class="index-boxlink-rectangle">
            <h3>Sazinies ar mums</h3>
          </div>
        </a>
        <a href="#">
          <div class="index-boxlink-square">
            <h3>ITech</h3>
          </div>
        </a>
        <a href="#">
          <div class="index-boxlink-rectangle">
            <h3>YT kanāls</h3>
          </div>
        </a>
        <a href="#">
          <div class="index-boxlink-square">
            <h3>GitHub</h3>
          </div>
        </a>
        <a href="kontakti.html">
          <div class="index-boxlink-square">
            <h3>Kontakti</h3>
          </div>
        </a>
      </section>
    </div>
  </main>
  
  <?php include_once('footer.php'); ?>
