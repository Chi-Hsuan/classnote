<?php

/*for($i=2;$i<10;$i++){
 for($j=1;$j<10;$j++){
     printf("%d*%d=%d \t", $i,$j,($i*$j));
 }
 printf("\n");
}

?>

<br/>

<?php
//九九乘法表
for ($i = 2; $i < 10; $i++){
  for ($j = 1; $j < 10; $j++){
    printf("%d*%d=%d \t",$i,$j,($i * $j));
  }
   printf("<br/>");
  
} 
?>

<br/>

<?php
  while (true){
    echo "這是第一層迴圈！<br />";
    while (true){
      echo "這是第二層迴圈！<br />";
      break 2;
    }
  }
  echo "己跳出二層迴圈！";
  */
?>

<br/>

<?php
$i=1;
    while($i <= 10){
        $i++;
      if ( $i == 5) {
        echo "略過 \$i = $i <br />";
        continue;
      }
      echo $i."<br />";
    }
  ?>