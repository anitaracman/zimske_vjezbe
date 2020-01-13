<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'predlozak/head.php'; ?>
    <?php //include_once 'predlozak/head1.php'; ?>
    <?php //include 'predlozak/head.php'; ?>
    <style>
      body {
    background-color: #b3ecff;
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
          <h2> Zadatak glasi: Kreirati program koji za dva unesena broja ispisuje sve prim brojeve između njih. </h2>
          <br>
          <img src="http://www.myiconfinder.com/uploads/iconsets/256-256-587236dc0006a196e172ea19e347bc05-abacus.png">

          <br>
        
           
           <hr>

           <br>
        
          
        <h1><center>Pronađi primarne brojeve</center></h1>
 
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
           Unesi manji broj:<input type="text" name="min">
            Unesi veći broj:<input type="text" name="max">
            <input type="submit" name="submit" value="OK">
        </form>
 
        <?php
        if (isset($_POST['submit'])) {
            $min = $_POST['min'];
            $max = $_POST['max'];
            if ($min == $max) {
                echo "Enter different value ";
            } else {
                if ($min > $max) {
                    $t = $min;
                    $min = $max;
                    $max = $t;
                }
 
                function get_prime($min, $max) {
                    $primes = array();
                    for ($x = $min; $x <= $max; $x++) {
                        if ($x == 2) {
                            $primes[] = $x;
                        }
                        for ($i = 2; $i < $x; $i++) {
                            $r = $x % $i;
                            if ($r == 0) {
                                break;
                            }
                            if ($i == $x - 1) {
                                $primes[] = $x;
                            }
                        }
                    }
                    if ($primes == NULL) {
                        echo "No prime numbers found";
                    }  else {
                        echo "Pronađeno ukupno ". count($primes) ." primarnih brojeva: ";
                        echo implode(",", $primes);
                    }
                     
                }
 
                get_prime($min, $max);
            }
        }
        ?>
</html>
<?php require_once 'predlozak/podnozje.php' ?>
    </div>
    <?php require_once 'predlozak/skripte.php' ?>
  </body>
</html>
