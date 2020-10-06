<?php

include "connection.php";

$input=$db->exec("insert into fakultas(nama,jurusan) values('".$_POST["nama"]."','".$_POST["jurusan"]."')");
if ($input) {
    header("Location:index.php");
}


