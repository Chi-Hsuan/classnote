<?php
include  "Shepherd.php";
$mydog= new Shepherd("Peter","棕色","牧羊犬","10");
echo $mydog->name. "<br />";
echo $mydog->color. "<br />";
echo $mydog->style. "<br />";
echo $mydog->doWork(). "<br />";
echo $mydog->dogRun()."<br />";
echo $mydog->age. "<br />";

?>