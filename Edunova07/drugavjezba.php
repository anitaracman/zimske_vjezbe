<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'predlozak/head.php'; ?>
    <?php //include_once 'predlozak/head1.php'; ?>
    <?php //include 'predlozak/head.php'; ?>
    <style>
      body {
    background-color: #FFA07A;
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
          <h2> Zabava se nastavlja... </h2>
          <br>
       
         
         <!--Button-->

<center>
 <table align="center" cellspacing="0" cellpadding="0" width="100%">
   <tr>
     <td align="center" style="padding: 10px;">
       <table border="0" class="mobile-button" cellspacing="0" cellpadding="0">
         <tr>
           <td align="center" bgcolor="#2b3138" style="background-color: #2b3138; margin: auto; max-width: 600px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; padding: 15px 20px; " width="100%">
           <!--[if mso]>&nbsp;<![endif]-->
               <a href="https://polaznik02.edunova.hr/tekstzadatka.php" target="_blank" style="16px; font-family: Tahoma, Verdana, sans-serif; color: #030303; font-weight:normal; text-align:center; background-color: #2b3138; text-decoration: none; border: none; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; display: inline-block;">
                   <span style="font-size: 16px; font-family: Tahoma, Verdana, sans-serif; color: #030303; font-weight:normal; line-height:1.5em; text-align:center;">Klikni!</span>
             </a>
           <!--[if mso]>&nbsp;<![endif]-->
           </td>
         </tr>
       </table>
     </td>
   </tr>
 </table>
</center>
           <!--[if mso]>&nbsp;<![endif]-->
           </td>
         </tr>
       </table>
     </td>
   </tr>
 </table>
</center>
        

<!--Kreirati program koji ispisuje tablicu množenja 15x15-->


          <br>
          <hr>

           <br>
        <?php



$cols = 16;
$rows = 16;
         echo "<table border=\"1\">";

         for ($r =1; $r < $rows; $r++){
 
             echo'<tr>';
 
             for ($c = 1; $c < $cols; $c++)
                 echo '<td>' .$c*$r.'</td>';
            echo '</tr>'; // close tr tag here
 
         }
 
   echo"</table>";
?>
<br>
<hr>



  </body>
</html>
<?php require_once 'predlozak/podnozje.php' ?>
    </div>
    <?php require_once 'predlozak/skripte.php' ?>
  </body>
</html>
