<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice fonction 1</title>
</head>
<body>
<?php
//1-Ecrivez une fonction qui permette de générer un lien.
// function lien()
// {
//     echo '<a href="https://www.reddit.com/">Reddit Hug</a>';

// }
// lien()





//2-Ecrivez une fonction qui calcul la somme des valeurs d'un tableau

// function somme_tab()
// {
// $tab = array(4, 3, 8, 2);
// echo array_sum($tab);
// }

// somme_tab()





//3-Créer une fonction qui vérifie le niveau de complexité d'un mot de passe
function verif_mdp($mdp)
{
$majuscule=preg_match('@[A-Z]@',$mdp);
$minuscule=preg_match('@[a-z]@',$mdp);
$chiffre=preg_match('@[0-9]@',$mdp);

if (!$majuscule || !$minuscule || !$chiffre || strlen($mdp)<8)
{
return false;
}
else
return true;

}
if (verif_mdp('TopSecret42')!=true)
{
    echo "non correct";
}else

echo'correct'










?>






</body>
</html>