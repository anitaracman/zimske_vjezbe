<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'predlozak/head.php'; ?>
    <?php //include_once 'predlozak/head1.php'; ?>
    <?php //include 'predlozak/head.php'; ?>
    <style>
      body {
    background-color: #ffff80;
}
</style> 
  </head>
  <body>
    <div class="grid-container">
      <?php require_once 'predlozak/izbornik.php' ?>
      <!-- Početak tijela -->
      <div class="grid-x">
        <div class="large-12 small-12 columns">
          <div class="callout" style="min-height: 400px;"> 
          <h2> Ovo je moj prvi zadatak, zabavi nema kraja :-) </h2>
          <br>
          <img src="https://media.proprofs.com/images/QM/user_images/1990996/6981122554.png">

          <br>
          <hr>
           <hr3> <b> Kreirati program koji unosi 24 broja, ispisuje njihov zbroj, najmanji i  najveći uneseni broj.</b></hr3>
           <br>
           <hr>

           <br>
        <?php
           $prvi=1;
        $zadnji=25;
        $i=1;
        for($prvi;$i<$zadnji;$i++){
           +
        }
        ?>
        
       <br>
        
        <?php
        $sum=0;
        for($i=$prvi;$i<$zadnji;$i++){
            $sum += $i;
        }
        echo "Rezultat je" . ' ' . $sum;
?>
<br>
<hr>

<img src="https://media.giphy.com/media/TH2dEXFIaBGVgYmqz6/giphy.gif">

  </body>
</html>
<?php require_once 'predlozak/podnozje.php' ?>
    </div>
    <?php require_once 'predlozak/skripte.php' ?>
  </body>
</html>
