<?php

function CountSort(&$input_arr){

    $arr_size=count($input_arr);
    $freq_arr=[];
    $max=0;

     //find largest element in the Array
    for($i=0; $i<$arr_size; $i++){
        if($max < $input_arr[$i]){
            $max=$input_arr[$i];
        }
    }

    //Initiallize all elements to zero in count_arr
    for($i=0; $i<=$max; $i++){
        $freq_arr[$i]=0;
    }

    //to take the count of occurrence in input_arr
    for($i=0; $i<$arr_size; $i++){
        ++$freq_arr[$input_arr[$i]];
    }


    for($i=0, $j=0; $i<=$max;$i++){
        while($freq_arr[$i] > 0){
            $input_arr[$j]=$i;
            $j++;
            $freq_arr[$i]--;
        }
    }
}

// function to print array
function PrintArray($Array, $n) { 
    for ($i = 0; $i < $n; $i++) 
      echo $Array[$i]." "; 
    echo "\n";
  } 
  
  // test the code
  $MyArray = array(9, 1, 2, 5, 50, 9, 2, 1, 3, 3);
  $n = sizeof($MyArray); 
  echo "Original Array\n";
  PrintArray($MyArray, $n);
  
  CountSort($MyArray, $n);
  echo "\nSorted Array\n";
  PrintArray($MyArray, $n);