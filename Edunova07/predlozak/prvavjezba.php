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
           <hr2> Zadatak za vježbu koji unosi 24 broja, ispisuje njihov zbroj, najmanji i  najveći uneseni broj</hr2>

           <br>
        
        <?php

        
              
              for ($i=0; $i < 25; $i++) { 
                $s+=$i;
                
                echo $i.'+';
              }
              echo ' = '.$s;

?>
            
  </body>
</html>
