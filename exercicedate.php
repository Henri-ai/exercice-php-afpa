<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice date</title>
</head>
<body>
<?php
//Trouvez le numéro de semaine de la date suivante : 14/07/2019. 

// $date_test = "2019-07-14";
// $good_format=strtotime ($date_test);
// echo date('W',$good_format);


//Combien reste-t-il de jours avant la fin de votre formation

// $ajd = new DateTimeImmutable('2022-08-26');
// $demain = new DateTimeImmutable('2022-10-01');
// $interval = $ajd->diff($demain);
// echo $interval->format('%R%a jours')

//Comment déterminer si une année est bissextile ? 





//Montrez que la date du 32/17/2019 est erronée. 
// $date_test=checkdate(32,17,2019);
// if($date_test==true){
//     echo "date valide";
// }else{
// echo "erreur date";
// }


//Affichez l'heure courante sous cette forme : 11h25.
//echo date("H:i")


//Ajoutez 1 mois à la date courante.

// $date= new DateTime("29-08-2022");
// $date ->modify('+1 month');
// echo $date->format("d-m-Y")

//Que s'est-il passé le 1000200000 ?
// $date=date('d-m-Y H:i:s',1000200000);
// echo"la date est le $date.";


?>
</body>
</html>