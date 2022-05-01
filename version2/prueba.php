<?php

require_once('DB.php');

// Llamo al método estático 'getStatement()' de la clase DB
$stmt = DB::getStatement('SELECT * FROM productos');

$stmt->execute();

$resultado = $stmt->fetch();

print_r($resultado);