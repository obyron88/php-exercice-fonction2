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
 batailleNavale('c', 9);
 function batailleNavale($string, $int) {
     $plateforme = array(
             'a' => array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
             'b' => array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
             'c' => array(1, 1, 1, 1, 1, 1, 1, 1, 10, 1),
             'd' => array(1, 1, 1, 1, 1, 1, 1, 1, 10, 1),
             'e' => array(1, 1, 1, 1, 1, 1, 1, 1, 10, 1),
             'f' => array(1, 1, 10, 10, 10, 1, 1, 1, 10, 1),
             'g' => array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
             'h' => array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
             'i' => array(1, 1, 1, 1, 10, 10, 1, 1, 1, 1),
             'j' => array(1, 1, 1, 1, 10, 10, 1, 1, 1, 1));

     $string = strtolower($string);
     $int = $int-1;
     switch($plateforme[$string][$int]) {
         case 1:
             echo 'Raté !';
             break;
         case 10:
             echo 'Touché !';
             break;
         default:
             echo 'Hors-jeu';
             break;
     }
 }

  ?>

</body>
</html>
