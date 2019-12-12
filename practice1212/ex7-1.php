<?php
function name(){
    echo"Peter";
}
function score($i){
$j= "F";
$level= intval($i/10);
switch($level){
    case 10:
    case 9:
    $j="A";
    break;
    case 8:
    $j="B";
    break;
    case 7:
    $j="C";
    break;
    case 6:
    $j="D";
    break;
    default:
    $j="E";
}
return $j;
}
echo name();
$backscore=score(85);
echo "成績等級: $backscore";

?>

<br/>
<?php
    function sum(...$numbers){
        $total = 0;
        foreach ($numbers as $i){
            $total += $i;
        }
        return $total;
    }

    echo "總共是：".sum(1,3,5,7,9);
?>

