<?php
include "connectiontest.php";
addProd($_POST["name"],$_POST["opis"],$_POST["kategor"],$_POST["text"],
$_POST["stat"]);
header('location: index.php');
?>