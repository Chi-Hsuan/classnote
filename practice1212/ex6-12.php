<?php
$sum = 0;
for($i = 1 ; $i <= 50 ; $i ++){
$sum+=$i;
}
echo "總和是: $sum";
?>

<?php
$sum=0;
while($i<=50){
    $i++;
    $sum+=$i;
}
?>

<?php
$sum = 0;
$i = 1;
do{
    $sum+=$i;
    $i++;
}while($i<=50);
?>