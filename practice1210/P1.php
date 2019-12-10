<?php
$x = 1;
function hello($x){
    $sum = $x * 2;
    echo "函數執行結束<br />";
    return $sum;
}
?>
<p>------我是分隔線-----<p>
<?php
$sum = hello($x);
echo "x=$x<br />";
echo "sum=$sum<br />";
?>    

<?php
   echo 1<=>1;
   echo 1<=>2;
   echo 2<=>1;
?>