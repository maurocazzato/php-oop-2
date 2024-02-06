<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shop</title>
     <!-- link css -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php
include 'prodotti.php';

try {
    
    foreach ($prodotti_cani as $prodotto) {
        try {
            if ($prodotto->tipo_articolo === "") {
                if (empty($prodotto->immagine)) {
                    throw new ImmagineNonDisponibileException();
                }
                $prodotto->stampaCard();
            }
        } catch (ImmagineNonDisponibileException $e) {
            echo '<p class="error">' . $e->errorMessage() . '</p>';
        }
    }

    foreach ($prodotti_gatti as $prodotto) {
        try {
            if ($prodotto->tipo_articolo === "") {
                if (empty($prodotto->immagine)) {
                    throw new ImmagineNonDisponibileException();
                }
                $prodotto->stampaCard();
            }
        } catch (ImmagineNonDisponibileException $e) {
            echo '<p class="error">' . $e->errorMessage() . '</p>';
        }
    }
} catch (Exception $e) {

    echo '<p class="error">' . $e->getMessage() . '</p>';
}

?>

<section class="container">
<div class="category">
    <h2>Cibo per Cani</h2>
    <?php
    foreach ($prodotti_cani as $prodotto) {
        if ($prodotto->tipo_articolo === "Cibo") {
            $prodotto->stampaCard();
        }
    }
    ?>
</div>
</section>

<section class="container">
<div class="category">
    <h2>Giochi per Cani</h2>
    <?php
    foreach ($prodotti_cani as $prodotto) {
        if ($prodotto->tipo_articolo === "Gioco") {
            $prodotto->stampaCard();
        }
    }
    ?>
</div>
</section>

<section class="container">
<div class="category">
    <h2>Accessori per Cani</h2>
    <?php
    foreach ($prodotti_cani as $prodotto) {
        if ($prodotto->tipo_articolo === "Cuccia") {
            $prodotto->stampaCard();
        }
    }
    ?>
</div>
</section>

<section class="container">
<div class="category">
    <h2>Cibo per Gatti</h2>
    <?php
    foreach ($prodotti_gatti as $prodotto) {
        if ($prodotto->tipo_articolo === "Cibo") {
            $prodotto->stampaCard();
        }
    }
    ?>
</div>
</section>

<section class="container">
<div class="category">
    <h2>Giochi per Gatti</h2>
    <?php
    foreach ($prodotti_gatti as $prodotto) {
        if ($prodotto->tipo_articolo === "Gioco") {
            $prodotto->stampaCard();
        }
    }
    ?>
</div>
</section>

<section class="container">
<div class="category">
    <h2>Accessori per Gatti</h2>
    <?php
    foreach ($prodotti_gatti as $prodotto) {
        if ($prodotto->tipo_articolo === "Cuccia" || $prodotto->tipo_articolo === "Accessorio") {
            $prodotto->stampaCard();
        }
    }
    ?>
</div>
</section>

</body>
</html>


