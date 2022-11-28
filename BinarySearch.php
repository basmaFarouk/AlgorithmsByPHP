<?php

//Binary Search
$list=[1,7,9,15,20,30,40,46,50,52,62,65];

function binarySearch($list,$value){
    $start=0;
    $end=count($list)-1;
    $middle=floor((($start+$end)/2) );

    while($list[$middle] != $value && $start<=$end){
        // echo("$start $end $middle");
        if($value<$list[$middle]){
            $end=$middle-1;
        }else{
            $start=$middle+1;
        }
        $middle=floor((($start+$end)/2) );
    }

    if($list[$middle]==$value) return $middle;
    return -1;
}

// echo(binarySearch($list,50));

// Search a Pattern in a string by naive approach
function naiveSearch($text,$pattern){
    $textLenght=strlen($text);
    $patternLength=strlen($pattern);

    for($i=0; $i<=$textLenght-$patternLength; $i++){
         $j;
        for($j=0; $j<$patternLength;$j++){
            // echo($text[$i+$j] ."  ".$pattern[$j].'<br>'); //عشان ميقارنش الحرف بتاع اللوب الكبيرة مع كل حروف اللوب الصغيرة
            if($text[$i+$j] != $pattern[$j]){
                break;
            }
        }
        if($j==$patternLength){
            echo("Pattern Found at index: $i".'<br>');
        }
    }
}

naiveSearch("AABAACAADAABAABA","AABA");



function binarySearchRecursive($a, $beg, $end, $val)    
{    
if($end >= $beg)     
{  
    $mid = floor(($beg + $end)/2);    
    if($a[$mid] == $val)    
    {  
        return $mid+1;  /* if the item to be searched is present at middle */  
    }    
    /* if the item to be searched is smaller than middle, then it can only  be in left subarray */  
    else if($a[$mid] < $val)     
    {  
        return binarySearchRecursive($a, $mid+1, $end, $val);    
    }    
    /* if the item to be searched is greater than middle, then it can only be in right subarray */  
    else    
    {  
        return binarySearchRecursive($a, $beg, $mid-1, $val);    
    }    
}    
return -1;    
}  
    // $a = array(7, 9, 21, 26, 36, 43, 48, 54, 68); // given array  
    // $val = 68; // value to be searched  
    // $n = sizeof($a); // size of array  
    // $res = binarySearchRecursive($a, 0, $n-1, $val); // Store result   
    // echo "The elements of the array are: ";  
    // for ($i = 0; $i < $n; $i++)  
    //     echo " " , $a[$i];  
    // echo "<br>" , "Element to be searched is: " , $val;  
    // if ($res == -1)  
    //     echo "<br>" , "Element is not present in the array";  
    // else  
    //     echo "<br>" , "Element is present at " , $res , " position of array";  
 