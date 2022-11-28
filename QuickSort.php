<?php

function pivot(&$list,$start=0,$end=-1){

    if($end==-1){
        $end=count($list)-1;
    }
    $pivot=$list[$start];
    $swapIndex=$start;

    for($i=$start+1; $i<count($list); $i++){
        if($pivot > $list[$i]){
            $swapIndex++;
            swap($list,$swapIndex,$i);
        }
    }
    // var_dump($list);
    // echo("<br>");
    swap($list,$start,$swapIndex);
    // var_dump($list);
    return $swapIndex;



}
function swap(&$list,$i,$j){
    $temp=$list[$i]; //5
    $list[$i]=$list[$j]; 
    $list[$j]=$temp;
    return $list;
}

function QuickSort(&$list,$left=0, $right=-5){

    if($right==-5){
        $right= count($list)-1;
    }

    if($left < $right){ //at least there are two elements
        $pivotIndex=pivot($list,$left,$right);
        //Left
        QuickSort($list,$left,$pivotIndex-1);
        //Right
        QuickSort($list,$pivotIndex+1,$right);
    }

    return $list;
}


$my_array=[30,22,5,2,3,8,7,10,4];
var_dump(QuickSort($my_array));
// var_dump($my_array);