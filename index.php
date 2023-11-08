<?php include "includes/header.php";?>
<?php require_once "functions/functions.php"; ?>

<!--On met ici --> 
<div class="container">
  <h1 class="text-center">
    <?php mettreEnGras("Page d'accueil"); ?>
  </h1>

  <?php MaFonction(); ?> <!-- on appelle la fonction -->

 <?php 
$nbr1 = 5;
$nbr2 = 3;
$somme = sommeNombres($nbr1, $nbr2);

echo "La somme de $nbr1 et $nbr2 est : $somme";
?>

  
  
</div>


<?php include "includes/footer.php"; ?>
    

    



    