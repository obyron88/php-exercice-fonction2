<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Fonction 2</title>
</head>
<body>
  <h1>Exo 1</h1>
  <?php
function toto($classe = "La classe américaine"){
   ?>
   <script>
     alert("<?php echo $classe ?>");
   </script>
   <?php
 }
 toto();
?>
<h1>Exo 2</h1>
 <?php
 // homemade method
 for ($i = 0 ; $i < 3 ; $i++){
$exo2 = array("swwWwwwal ", "tIGER ", "zoo");
$exo2 = ucfirst(strtolower($exo2[$i]));
echo $exo2;
}
?>

<?php
    $sarkozy = array('goRilLe', 'BaBouIn', 'CaPucIn') ;

      function change(&$sarkozy){
        }
        foreach ($sarkozy as $hollande){
          $hollande = array_map(strtolower, $sarkozy);
            $royal = array_map(ucfirst, $hollande);
        };

          print_r($royal);
 ?>
 <h1>Exo 3</h1>
 <?php

 function bataille_navale($col, $ligne)
{
    $tab_col = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
    $tab_ligne = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    $bateau1 = array('F', 3, 4, 5);
    $bateau2 = array('I', 5, 6);
    $bateau3 = array( 9, 'C', 'D', 'E', 'F');

    $bateaux = array($bateau1, $bateau2, $bateau3);

    $coord_ligne = false; $coord_col = false;

    if ( $hors_jeu = (!in_array($col, $tab_col) || !in_array($ligne, $tab_ligne)) )
        echo 'Hors-Jeu !<br />';

    foreach ( $bateaux as $bateau ) {
        foreach( $bateau as $coord ) {
            if( $coord == $col ) $coord_col = true;
            if( $coord == $ligne ) $coord_ligne = true;
        }
    }

    if ( $touche = ($coord_ligne == true && $coord_col == true) ) echo 'Touché !';
    elseif (!$hors_jeu && !$touche) echo 'Loupé !';
}
  ?>

</body>
</html>
