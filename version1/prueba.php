<?php

require_once('DB.php');

$db = DB::getConnection();

$sql = 'SELECT * FROM productos';

$stmt = $db->prepare($sql);

$stmt->execute();

$resultado = $stmt->fetch();

print_r($resultado);