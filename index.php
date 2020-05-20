<?php
include_once ("MyList.php");
$listArray= new MyList();
$listArray->add(15);
$listArray->add(20);
$listArray->add(30);
$listArray->add(10);
$listArray->add(50);

$listArray->insert(3,55);
var_dump($listArray);




//var_dump($listArray)."<br>";
//var_dump($listArray->indexOf(20));
//$arr=[22,33,44,11];
//$listArray->addAll($arr);
//var_dump($listArray);
////echo $listArray->size();
//echo $listArray->get(9);
