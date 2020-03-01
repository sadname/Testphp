<?php
include "connectiontest.php";
delprod($_GET["id"]);
header("Refresh:2;url=index.php");
echo"Удаление записи";
?>