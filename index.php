<?php
require_once "Tgree.php";

$obj = new Tgree();
echo "<br/>";
$obj->summa(2,3);
echo $obj->showres();

echo "<br/>";
$obj->umn(2,3);
echo $obj->showres();

echo "<br/>";
$obj->minus(2,3);
echo $obj->showres();

echo "<br/>";
$obj->delenie(9,3);
echo $obj->showres();


echo "<br/>";



?>