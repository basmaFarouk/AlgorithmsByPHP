<?php 

//Merge Sort Algorithm
function mergeSort($list){
    if(count($list) <=1) return $list;
    $middleIndex=floor(count($list)/2);
    $leftList=mergeSort(array_slice($list,0,$middleIndex)); //big O(n/2)
    $rightList=mergeSort(array_slice($list,$middleIndex)); //big O(n/2)
    return merge($leftList,$rightList);
}

function merge($list1,$list2){

    $mergedList=[];
    $i=0;
    $j=0;

    while($i<count($list1) && $j<count($list2)){ //Two Sorted Lists big O(n)
        if($list2[$j] > $list1[$i]){
            $mergedList[]=$list1[$i];
            $i++;
        }else{
            $mergedList[]=$list2[$j];
            $j++;
        }
    }

    while($i < count($list1)){
        $mergedList[]=$list1[$i];
        $i++;
    }
    while($j < count($list2)){
        $mergedList[]=$list2[$j];
        $j++;
    }

    return $mergedList;
}
$list=[1,2,8,17,5,7,14,28];
$middle=floor(count($list)/2);
// var_dump(array_slice($list,0,$middle));
// echo "<br>";
// var_dump(array_slice($list,$middle));
var_dump(mergeSort($list));
echo("<br>");

