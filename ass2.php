<?php
/*
 ID:602110191 
 NAME:Wang Zexue
 wechat name：Wang
*/
  printf("input data (floor n): ");
  fscanf(STDIN,"%d %d",$floor,$n);
  $build = [];
  for($m = 0;$m < $floor; $m++){
     $build[$m]=[];
     printf("Floor: %d\n",$m+1);
     for($i=0;$i<$n;$i++){
        $build[$m][$i]=[];
        for($j=0;$j<$n;$j++){
         printf("\tInput number of people in zone %d-%d: ",$i+1,$j+1);
         fscanf(STDIN, "%d", $build[$m][$i][$j]);
      }
   }
}
printf("\npeople on each floor: \n");
for($m = 0;$m < $floor; $m++){
    printf("Floor: %d\n",$m+1);
    $total=0;
    for($i=0;$i<$n;$i++){
        printf("\t");
        for($j=0;$j<$n;$j++){
            printf("%4d", $build[$m][$i][$j]);
            $total+= $build[$m][$i][$j];
        }
        printf("\n");
    }
    printf("Number of people = %d\n",$total);
}
printf("People on each zone:\n");
for($i=0;$i<$n;$i++){
     for($j=0;$j<$n;$j++){
        // You must set $sum to 0 here
        // unless the number of people wil accumulate from the previous zone.
        $sum = 0;
     printf("zone %d-%d:\n ",$i+1,$j+1);
         for($m=$floor-1;$m>=0;$m--){
            printf("%4d\n",$build[$m][$i][$j]);  
            $sum+=$build[$m][$i][$j];
         }
         printf("\n");
         printf("Number of people = %d\n",$sum);
    }
 }

