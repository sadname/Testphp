<?php
$link=false;
function openDB()
{
    global $link;
    $link=mysqli_connect("localhost","root","","test");
    mysqli_query($link,"Set names UTF8");
}
function closedb()
{
    global $link;
	mysqli_close($link);
}
function getprod()
{
    global $link;
    openDB();
$res=mysqli_query($link, "select * from product");
    closedb();
return mysqli_fetch_all($res,MYSQLI_ASSOC);
}
function getProdById($id){
    global $link;
    openDB();
$res=mysqli_query($link,"SELECT * FROM product Where id_prod=$id");
    closedb();
    return mysqli_fetch_assoc($res);
}
function delprod($id){
    global $link;
    openDB();
$res=mysqli_query($link,"DELETE FROM product where id_prod=$id");
    closedb();
}
function addProd($name, $opis, $kategor, $text, $stat){
    global $link;
    openDB();
    $res=mysqli_query($link, "INSERT INTO product 
    (name,opis,kategor,text,stat) VALUES('$name', '$opis', '$kategor', '$text',
    '$stat')");
}