<?php
include __DIR__ . '/db.php';
header('Content-type: application/json');


if (isset($_GET['genre']) !== false) {
    $genre = $_GET['genre'];
    if ($genre === 'all') {
        $carsFiltered = $cars;
    } else {
        $carsFiltered = [];
        foreach ($cars as $car) {
            if ($car['modello'] === $genre || $car['carburante'] === $genre) {
                $carsFiltered[] = $car;
            }
        }
    }
    echo json_encode([
        'results' =>  $carsFiltered,
        'length' => count($cars)
    ]);
} else {
    echo json_encode([
        'error' =>  'genere non selezionato'
    ]);
}


// $filteredProducts = [];
// if (isset($_GET['genre']) !== false) {
//     $genre = $_GET['genre'];

//     if ($genre === 'all') {
//         $filteredProducts = $products;
//     }
//     foreach ($products as $product) {
//         if ($product['tipologia'] === $genre) {
//             $filteredProducts[] = $product;
//         }
//     }
// } else {
//     $filteredProducts = $products;
// }