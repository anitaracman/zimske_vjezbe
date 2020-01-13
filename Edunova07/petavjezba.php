<?php require 'functions.php'; ?>

<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once 'predlozak/head.php'; ?>
    <?php //include_once 'predlozak/head1.php'; ?>
    <?php //include 'predlozak/head.php'; ?>

  <body>
    <div class="grid-container">
      <?php require_once 'predlozak/izbornik.php' ?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Zadatak 5</title>
</head>
<body>

<?php
$rows = filter_input(INPUT_POST, 'rows', FILTER_SANITIZE_NUMBER_INT);
$cols = filter_input(INPUT_POST, 'cols', FILTER_SANITIZE_NUMBER_INT);
?>
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">Ciklička tablica - Zadatak 5</a>
</nav>
<div class="container space">
    <div class="col-3">
    <label><h4>CIKLIČKA TABLICA</h4></label>
    <br>
        <span class="tekst">Korisnik unosi 2 polja: broj <b>redova</b> i broj <b>stupaca</b>, ispod postoji gumb <b>"KREIRAJ TABLICU"</b>. Nakon submita pored navedene forme prikazuje
            se tablica zatraženih dimenzija gdje su polja popunjena brojevima.Brojevi su popunjeni sljedećom logikom:
            <br>
            - BROJ 1 SE NALAZI U DONJEM DESNOM KUTU
            <br>
            - POLJA TABLICE SE POPUNJAVAJU SPIRALNO CIKLIČKI U KRUG U SMJERU KAZALJKE NA SATU
        </span>

    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div> <label class="input-text">INPUT</label> <br></div>
                <div class="col-sm">

                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div class="form-group" >
                            <label for="brojRedaka">Broj Redaka</label> <br>
                            <input type="number" class="input-css" id="brojRedaka" name="rows" value="<?php echo $rows; ?>">
                        </div>
                        <div class="form-group">
                            <label for="brojStupaca">Broj stupaca</label><br>
                            <input type="number" class="input-css" id="brojStupaca" name="cols" value="<?php echo $cols; ?>">
                        </div>
                        <input type="submit" class="btn btn-success" value="KREIRAJ TABLICU" class="btn btn-primary">
                    </form>
                </div>
                <div> <label class="output-text">OUTPUT</label> <br></div>
                <div class="col-sm">
                    <?php
                    if( !$rows || !$cols) {
                        echo "Morate upisati cijele pozitivne brojeve";
                    }

                    $data = ciklicnaMatrica($rows, $cols);
                    $lastpos = $rows*$cols;
                    

                    ?>
                    <table>
                        <tbody>

                        <?php for ($i = 0; $i < $rows; $i++){ ?>

                            <tr>

                                <?php for ($j = 0; $j < $cols; $j++){ ?>

                                    <td class="<?php if ($lastpos == $data['numbers'][$i][$j])
                                    { echo ""; }else
                                        { echo $data['class'][$i][$j];} ?> " >
                                        <?php   echo($data['numbers'][$i][$j]);  ?>
                                    </td>

                                <?php } ?>

                            </tr>

                        <?php } ?>
                                                    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>





</body>
</html>
<?php require_once 'predlozak/podnozje.php' ?>
    </div>
    <?php require_once 'predlozak/skripte.php' ?>
  </body>
</html>
