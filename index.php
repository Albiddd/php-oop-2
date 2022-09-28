<?php

include __DIR__ . "/db.php";


$sum = 0;
foreach ($cart as $key => $value) {
    if (isset($value->prodPrice))
        $sum += $value->prodPrice;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>

<body>

    <h2>Il tuo carrello:</h2>
    <ul>
        <?php foreach ($cart as $value) {
        ?>
            <li>
                <h4> <?= $value->prodName ?> </h4>
                <span> <?= $value->brand ?> </span>
                <strong> <?= $value->prodPrice ?>€</strong>
            </li>

        <?php
        }
        ?>
        <li><h4>Cibo per cani al salmone</h4>
        <?php
        try{
            $food4 = new Food("Cibo per cani al pollo", 158, 24.99, "Cibo per animali","Almo Nature", "Crocchette di pollo", 15, 2021);
        } catch(Exception $e){
            echo $e->getMessage();
        }
        ?>
        </li>
    </ul>

    <h4>Spesa totale: <?= $sum ?>€</h4>

</body>

</html>