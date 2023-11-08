<!--les fonction en PHP -->
<?php
  function MaFonction(){
    echo "j'apprends le PHP";
  }


  // Fonction native PHP
 //strtolower(); //cette fonction transforme la chaine de caractere en miniscule 
?>

<?php

function mettreEnGras($string) {
    echo '<strong style="color:red">' . $string . '</strong>';
}

?>

<?php

function sommeNombres($nbr1, $nbr2) {
  $resultat = $nbr1 + $nbr2;
  return $resultat;
}

?>