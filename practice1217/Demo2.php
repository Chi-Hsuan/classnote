<?php
include  "Shepherd.php";
$mydog= new Shepherd("Peter","棕色","牧羊犬","10");
echo $mydog->name;
echo $mydog->color;
echo $mydog->style;
echo $mydog->age;
echo $mydog->doWork();
echo $mydog->dogRun();
?>