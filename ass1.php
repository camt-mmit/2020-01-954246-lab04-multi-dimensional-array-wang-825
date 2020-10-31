<?php
/*
 ID:602110191 
 NAME:Wang Zexue
 wechat name：Wang
*/
 echo "Input number of students: ";
 fscanf(STDIN, "%d", $n);
 echo "Input number of chapters: ";
 fscanf(STDIN, "%d", $nchpt);
 $format = "%s";
 for($i = 0; $i < $nchpt; $i++) {
     $format .= " %f";
 }
 $scores = [];
 for($i = 0; $i < $n; $i++) {
     printf("Student %2d score ( name ", $i + 1);
     for($j = 0; $j < $nchpt; $j++) {
         printf(" chpt%d", $j + 1); 
     }
     printf(" ): ");
     $scores[] = fscanf(STDIN, $format);  
  }
   printf("Result:\n");
   printf("        ");
   for($i=0;$i<$nchpt;$i++){
      printf("%7d",$i+1);
  }
  printf("\n");  
  printf("--------"); 
    for($i=0;$i<$nchpt;$i++){
        printf("--------");
    }
    printf("--------\n");
      foreach($scores as $row){
         printf("%-8s:",$row[0]);
         $sum=0;
    for($i=1;$i<$nchpt+1;$i++){
        $sum+=$row[$i];
         printf("%7.2f",$row[$i]); 
    }
    printf("=%7.2f",$sum);
    printf("\n");
}  
