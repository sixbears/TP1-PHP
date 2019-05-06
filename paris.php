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

//lien vers le menu
echo '<a href="./index.php">Accueil</a>';

//boucle pour les images
for ($i = 0; $i < 5; $i++)
{
  echo '<br> <img src="https://www.prevision-meteo.ch/uploads/widget/paris_' . $i . '.png">';
}
?>
