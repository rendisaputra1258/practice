<?php

include "connection.php";

$update=$db->exec("update fakultas set nama ='".$_POST["nama"]."',jurusan='".$_POST["jurusan"]."'where id=".$_POST["id"]);

if ($update) {
    header("Location:index.php");

}