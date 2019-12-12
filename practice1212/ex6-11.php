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

<?php
$point = 87;
switch($point){
    case"$point >= 90":
    echo"A";
    break;
    case"$point >= 80":
    echo"B";
    break;
    case"$point >= 70":
    echo"C";
    break;
    case"$point >= 60":
    echo"D";
    break;
    default:
    echo"F";
}

?>