<?php
/*
 ID:602110191 
 NAME:Wang Zexue
 wechat name：Wang
*/
printf("Input size (n >=1): ");
fscanf(STDIN, "%d",$n);
for($i=$n; $i>=1; $i--){
    for($j=1; $j<=$i; $j++){
        if($j==1||$i==$n)
           echo $array[$i][$j]=1;
        else echo  $array[$i][$j]=$array[$i+1][$j]+$array[$i][$j-1];
        printf("\t");
    }  
  printf("\n");
} 