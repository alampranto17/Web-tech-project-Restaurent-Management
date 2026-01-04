<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "mydb.php";

$foods = getAllFoods();

echo "<pre>";
print_r($foods);
echo "</pre>";
