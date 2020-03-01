<?php
include "connectiontest.php";
$prod=getprod();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEST</title>
</head>
<body>
<h1>Список продуктов</h1>
<table border=1 cellspacing=0>
<table class="table table-dark">
<tr>
<th>Номер продукта</th>
<th>Наименование</th>
<th>Описание</th>
<th>Категория</th>
<th>Текст</th>
<th>Картинка</th>
<th>Статус</th>
</tr>
<?php
for($i=0; $i<count($prod); $i++)
{
    $id = $prod[$i]["id_prod"];
    echo
"
<tr>
<td>".$prod[$i]["id_prod"]."</td>
<td>".$prod[$i]["name"]."</td>
<td>".$prod[$i]["opis"]."</td>
<td>".$prod[$i]["kategor"]."</td>
<td>".$prod[$i]["text"]."</td>
<td><img src='$prod[$i]['pictr']'/></td>
<td>".$prod[$i]["stat"]."</td>
<td><a href='delprod.php?id=$id'>Удалить</a></td>
<td><a href='oneprod.php?id=".$prod[$i]["id_prod"]."'>...</td>
</tr>
";
}
?>
</table>
<a href="addprod.php"><button type="button" class="btn btn-dark">Добавление</a></br>
</body>
</html>