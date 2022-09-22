<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice boucle 3</title>
<?php 

//3-Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12} dans un tableau HTML.


$x = 12;
$y = 12;
?>

<table-border>
    <thead>
        <tr>
            <th></th>
            <?php
            for ($i = 0; $i <= $x; $i++) { ?>

                <th> <?= $i ?> </th>
            <?php }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php for ($row = 0; $row <= $x; $row++) { ?>
            <tr>
                <th><?= $row ?></th>
                <?php for ($col = 0; $col <= $y; $col++) { ?>
                    <td><?= $row * $col ?></td>

                <?php } ?>
            </tr>
        <?php } ?>
    </tbody>

</table-border>

</body>
</html>