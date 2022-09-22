<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
            <title>Exercice boucle 1</title>
        </head>
        <body>
            <?php 
            //1-Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...
                $chiffre=0;
                $d=1;

            for ($chiffre;$chiffre<=150;$chiffre++)
            
            if($chiffre%2==1)
            
            {
            echo "$chiffre ";
            }


            ?> 
        </body>
    </html>