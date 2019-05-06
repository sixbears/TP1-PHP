<?php
//Recuperation de l heure
$heure = date("H");

// changement du style en fonction de l heure
if (($heure < 7) or ($heure > 19))
{
  echo '<style> body {
  background-color: #000;
  color: #FFF;}
  </style>';
}
// affichage date et heure
$date = date("d-m-Y");
echo("Nous sommes le $date et il est $heure h.");

//lien vers la meteo des villes
echo '<br> <a href="./bordeaux.php">Meteo Bordeaux</a>';
echo '<br> <a href="./paris.php">Meteo Paris</a>';
?>

