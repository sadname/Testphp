<?php
include "connectiontest.php";
$prod=getProdById($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Продукты</title>
</head>
<body>
<h1>Список Продуктов</h1>
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

<?php echo "<tr><td>".$prod["id_prod"]."</td>
<td>".$prod["name"]."</td>
<td>".$prod["opis"]."</td>
<td>".$prod["kategor"]."</td>
<td>".$prod["text"]."</td>
<td><img src='$prod[$i]['pictr']'/></td>
<td>".$prod["stat"]."</td>
</tr>"
?>

</table> 
</body>
</html>
