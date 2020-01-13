<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'predlozak/head.php'; ?>
    <?php //include_once 'predlozak/head1.php'; ?>
    <?php //include 'predlozak/head.php'; ?>
    <style>
      body {
    background-color: #00cc44;
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
          <img src="https://d-pt.ppstatic.pl/k/r/1/a1/0c/5d5e8d720f7eb_p.jpg?1577869188">
          <br>
          <h2> Ovo je program koji koji unosi dvije matrice 4x4 te ispisuje njihov zbroj: </h2>
          <br>
          

          <br>
        
           
           <hr>

           <br>
        
        <h4> Prva matrica </h4>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
           Unesi prvi broj:<input type="number" name="A[]" id="0">
            Unesi drugi broj:<input type="number" name="A[]" id="1">
            Unesi treći broj:<input type="number" name="A[]" id="2">
            Unesi četvrti broj:<input type="number" name="A[]" id="3">
            Unesi peti broj:<input type="number" name="A[]" id="4">
            Unesi šesti broj:<input type="number" name="A[]" id="5">
            Unesi sedmi broj:<input type="number" name="A[]" id="6">
            Unesi osmi broj:<input type="number" name="A[]" id="7">
            Unesi deveti broj:<input type="number" name="A[]" id="8">
            Unesi deseti broj:<input type="number" name="A[]" id="9">
            Unesi jedanaesti broj:<input type="number" name="A[]" id="10">
            Unesi dvanaesti broj:<input type="number" name="A[]" id="11">
            Unesi trinaesti broj:<input type="number" name="A[]" id="12">
            Unesi četrnaesti broj:<input type="number" name="A[]" id="13">
            Unesi petnaesti broj:<input type="number" name="A[]" id="14">
            Unesi šesnaesti broj:<input type="number" name="A[]" id="15">
            <h4> Druga matrica </h4>
            Unesi prvi broj:<input type="number" name="B[]" id="0">
            Unesi drugi broj:<input type="number" name="B[]" id="1">
            Unesi treći broj:<input type="number" name="B[]" id="2">
            Unesi četvrti broj:<input type="number" name="B[]" id="3">
            Unesi peti broj:<input type="number" name="B[]" id="4">
            Unesi šesti broj:<input type="number" name="B[]" id="5">
            Unesi sedmi broj:<input type="number" name="B[]" id="6">
            Unesi osmi broj:<input type="number" name="B[]" id="7">
            Unesi deveti broj:<input type="number" name="B[]" id="8">
            Unesi deseti broj:<input type="number" name="B[]" id="9">
            Unesi jedanaesti broj:<input type="number" name="B[]" id="10">
            Unesi dvanaesti broj:<input type="number" name="B[]" id="11">
            Unesi trinaesti broj:<input type="number" name="B[]" id="12">
            Unesi četrnaesti broj:<input type="number" name="B[]" id="13">
            Unesi petnaesti broj:<input type="number" name="B[]" id="14">
            Unesi šesnaesti broj:<input type="number" name="B[]" id="15">
            <input type="submit" name="submit" value="OK">
        </form>
 
        <br>
        <table>
           
           <?php
           $n=0;
           $c=[];
           $c=array_merge($_POST['A']);
            for($i=0;$i<4;$i++){
             echo '<tr>';
            for($j=0;$j<4;$j++){
                 echo '<td>' . $c[$n];
                 echo '</td>';
                 $n++;
            }
             echo '</tr>';
         }
           ?>
           </table>
           </br>
           <table>
           <?php
           $m=0;
           $q=[];
           $q=array_merge($_POST['B']);
            for($i=0;$i<4;$i++)
            if ($q == 0) {
                echo '<tr>';
            } else {
            
             echo '<tr>';
            for($j=0;$j<4;$j++){
                 echo '<td>' . $q[$m];
                 echo '</td>';
                 $m++;
            }
             echo '</tr>';
         }
           ?>
           </table>
           <?php
           $k=[];
           for($i=0;$i<16;$i++){
             $k[$i]=$q[$i]+$c[$i];
           }
           ?>
           </br>
            <table>
           <?php
           $br=0;
            for($i=0;$i<4;$i++){
             echo '<tr>';
            for($j=0;$j<4;$j++){
                 echo '<td>' . $k[$br];
                 echo '</td>';
                 $br++;
            }
             echo '</tr>';
         }
           ?>
           </table>

<br>
<hr>

<h4> Zbroj matrica </h4>

















  </body>
</html>
<?php require_once 'predlozak/podnozje.php' ?>
    </div>
    <?php require_once 'predlozak/skripte.php' ?>
  </body>
</html>
