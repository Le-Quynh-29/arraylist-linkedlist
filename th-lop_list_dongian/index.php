<?php
include "ArrayList.php";
$ListInteger =  new ArrayList();
$ListInteger->add(1);
$ListInteger->add(2);
$ListInteger->add(3);
echo $ListInteger->get(0)."<br>";
echo $ListInteger->get(-1);
