<?php
include_once __DIR__ . '/db.php';

if (isset($_GET['genre']) !== false) {
    $genre = $_GET['genre'];
    if ($genre === 'all') {
        header('Content-Type: application/json');
        echo json_encode($cars);
    }
}
