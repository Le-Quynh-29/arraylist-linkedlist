<?php
include_once ("MyList.php");
$list = new MyList();
$list->add(1);
$list->add(9);
$list->add(2);
$list->sort();
//$list->insert(0,1);
$list->remove();
var_dump($list);
