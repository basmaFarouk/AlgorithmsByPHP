<?php

function radixsort(&$arr){
    $max=max($arr);
    $size= count($arr);
    for($div=1; $max/$div>0; $div*=10){
        CountingSOrt($arr,$size,$div);
    }
}

function CountingSort(&$arr,$size,$place){
    $output=array_fill(0,$size,0);
    $freq=array_fill(0,10,0);

    for($i=0; $i<$size; $i++){
        $freq[($arr[$i]/$place) %10]++;
    }

    for($i=1; $i<10; $i++){
        $freq[$i] += $freq[$i-1];
    }

      //Build the output array 
    for ($i = $size - 1; $i >= 0; $i--) { 
        $output[$freq[($arr[$i]/$place)%10] - 1] = $arr[$i]; 
        $freq[($arr[$i]/$place)%10]--; 
    } 

    //Copy the output array to the input Array
    for($i=0; $i<$size; $i++){
        $arr[$i]=$output[$i];
    }
}

function printArr($arr,$size){
    for($i=0; $i<$size; $i++){
        echo $arr[$i]. "  ";
    }
    echo "<br>";
}

$MyArray = array(101, 1, 20, 50, 9, 98, 27, 153, 35, 899);
$n = sizeof($MyArray); 
echo "Original Array\n";
printArr($MyArray, $n);

radixsort($MyArray, $n);
echo "\nSorted Array\n";
printArr($MyArray, $n);
