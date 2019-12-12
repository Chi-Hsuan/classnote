<?php
$i=150;
if($i >= 200){
    echo "/$i 大於 200";
}
elseif($i >= 100){
    echo "/$i 大於100，小於200";
}
else{
    echo "/$i 小於100";
}
?>

echo"<br/>";

<?php
$i=68;
switch($i){
    case($i >= 90):
    echo"A";
    break;
    case($i >= 80):
    echo"B";
    break;
    case($i>= 70):
    echo"C";
    break;
    case($i >= 60):
    echo"D";
    break;
    default:
    echo"F";
}

?>