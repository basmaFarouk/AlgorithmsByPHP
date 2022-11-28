<?php

function bubbleSort(array $list){

    for($i=0;$i<count($list);$i++){
        for($j=0;$j<count($list)-1;$j++){ //عشان هنقف قبل اخر قيمة وهنقارن الاتنين ببعض
            if($list[$j] > $list[$j+1]){
                $temp=$list[$j];
                $list[$j]=$list[$j+1];
                $list[$j+1]=$temp;
            }
        }
    }

    return $list;
}

//Refactoring BubbleSort
function bubbleSortRefactor(array $list){

    $noSwap;
    for($i=count($list);$i>0;$i--){
        $noSwap=true;
        for($j=0;$j<$i-1;$j++){ //عشان اللي اتقارن واتحط في الاخر ميرجعش يقارنه تاني
            if($list[$j] > $list[$j+1]){
                $temp=$list[$j];
                $list[$j]=$list[$j+1];
                $list[$j+1]=$temp;
                $noSwap=false;
            }
        }
        if($noSwap) break;
    }

    return $list;
}

//Selection Sort
function selectionSort(array $list){
    for($i=0; $i<count($list); $i++){
        $min=$i;
        for($j=$i+1; $j<count($list); $j++){

            if($list[$j] < $list[$min]){
                $min=$j;
            }
        }
        if($min != $i){
            $temp=$list[$i];
            $list[$i]=$list[$min];
            $list[$min]=$temp;
        }
    }

    return $list;
}

//Insertion Sort
function insertionSort($list){
    for($i=1; $i<count($list); $i++){
        $current=$list[$i];
        $j;
        for($j=$i-1; ($j>=0) && ($current < $list[$j]); $j--){
            $list[$j+1] = $list[$j];
        }
        $list[$j+1]=$current;
    }

    return $list;
}



var_dump(bubbleSortRefactor([2,8,5,4,20,15,11,12,19,13]));
echo('<br>');
var_dump(selectionSort([2,8,5,4,20,15,11,12,19,13]));
echo('<br>');
var_dump(insertionSort([2,8,5,4,20,15,11,12,19,13]));