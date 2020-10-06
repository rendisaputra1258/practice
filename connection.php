<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=universitas","root","",[PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
} catch (Exception $e) {
    echo $e->getMessage();
}
$fakultas=$db->query("select * from fakultas");
$data_fakultas=$fakultas->fetchAll();