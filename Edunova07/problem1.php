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
            Prvi problem<hr />
            <h3>  Pronađite zbroj svih množenja 3 ili 5 ispod 100.</h3>

            <br>

          <?php

$sum = 0;
$arr = [];
for($i = 1; $i < 1000; $i++){
if((int)$i % 3 === 0 || (int)$i % 5 === 0)
   {
    $sum += $i;
    array_push($arr,$i);
    }   
}
echo "Ukupan zbroj je: ". $sum;
echo '<br>';
echo '<br>';
print_r($arr);//Displays the values meeting the criteria as an array of values
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
