<?php
$sum = 0;
for($i = 1 ; $i <= 50 ; $i ++){
$sum+=$i;
}
echo "總和是: $sum";
?>

<br/>

<?php
$sum=0;
$i=1;
while($i<=50){
    $sum+=$i;
    $i++;
    
}
echo"總和是:$sum"
?>

<br/>

<?php
$sum = 0;
$i = 1;
do{
    $sum+=$i;
    $i++;
}while($i<=50);
echo"總和是:$sum"
?>