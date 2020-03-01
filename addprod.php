<?php
include "head.php";
?>

<form action="addControl.php" method="POST" role='form'>
 <div>
<h2>Добавление нового продукта</h2>
</div>
<div><label for="name" > Имя продукта</label>
<div>
    <input id="name" type="text" name="name"/>
    </div>
</div>
<div ><label for="opis" > Описание продукта</label>
<div>
<input id="opis" type="text"  name="opis"/>
</div>
</div>
<div><label for="kategor" >Категория товара</label><div >
<input id="kategor" type="text" name="kategor"/>
</div>
</div>
<div><label for="text" >Текст<div >
<input id="text" type="text" name="text"/>
</div>
</div>
<div><label for="stat" >Статус товара</label><div >
<input id="stat" type="text" name="stat"/>
</div>
</div>
<div><button type="submit" name="add" >Добавить</button></div>
</div>
</form>