<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, 
icona della categoria ed il tipo di 
articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Kennel.php';


$collare_antiparassitario = new Product('Collare antiparassitario', 'Cane', 9.99, );
$collare_antiparassitario->description = 'Collare che repelle le zecche e pulci fino a 8 mesi';
$croccantini = new Food ('Croccantini', 'Gatto', 14.99, 500, 350, 'carne');
$osso_di_gomma = new Game ('Osso di gomma', 'Cane', 7.99);
$cuccia_da_esterno = new Kennel ('Cuccia da esterno', 'Cane', 49.99);

$products = [
    $collare_antiparassitario,
    $croccantini,
    $osso_di_gomma,
    $cuccia_da_esterno
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Animal Shop</title>
</head>
<body>
    <div class="container text-center my-5">
        <div class="row">
            <?php foreach($products as $product){ ?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->name ?></h5>
                            <?php if ($product->description) {?> 
                                <div class="card-text my-2">Descrizione: <?php echo $product->description ?></div>
                            <?php } ?>
                            <div class="card-text my-2">Prezzo: <?php echo $product->price ?>€</div>
                            <div class="card-text my-2">Categoria: <?php echo $product->category ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    
</body>
</html>