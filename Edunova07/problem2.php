<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'predlozak/head.php'; ?>
    <?php //include_once 'predlozak/head1.php'; ?>
    <?php //include 'predlozak/head.php'; ?>
  </head>
  <body>
    <div class="grid-container">
      <?php require_once 'predlozak/izbornik.php' ?>
      <!-- Početak tijela -->
      <div class="grid-x">
        <div class="large-12 small-12 columns">
          <div class="callout" style="min-height: 400px;"> 
            Drugi problem<hr />
            <h3>  Pronađi najveći primarni faktor broja 600851475143.
            Kreirati program koji unosi 24 broja, ispisuje njihov zbroj, najmanji i  najveći uneseni broj
            </h3>

            <br>

            Zbrojite i ispišite zbroj prvih 100 brojeva<hr />
            

          <?php

          $s=1;
         
          for($i=1;$i<25;$i++){
            $s+=$i+1; //  $b = $i+1; $s=$s+$b;
            echo($i) . '<br />';
          }
          echo "Ukupan zbroj je: ", $s . '<br />';
          
         

          ?>
 

          <br>
          <hr>

         

        
            
          </div>
        </div>
      </div>
      <!-- Kraj tijela -->
      <?php require_once 'predlozak/podnozje.php' ?>
    </div>
    <?php require_once 'predlozak/skripte.php' ?>
  </body>
</html>
