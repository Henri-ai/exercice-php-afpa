<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice tableau 3</title>
</head>
<body>
<?php

$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" =>   array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" =>  array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);

//1-Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements******************

ksort($departements);

foreach($departements as $dpt => $reponse)
{
echo $dpt ." : ".join(",",$reponse)."<br>";
}


//2-Affichez la liste des régions suivie du nombre de départements/*********************************** */

// foreach($departements as $dpt => $reponse){

// echo $dpt . " = ".count($reponse)."<br>";

// }




?>
</body>
</html>