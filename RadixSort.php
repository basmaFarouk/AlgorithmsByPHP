<?php

function RadixSort($list){
    $maxDigitCount=maxDigit($list);

    for($k=0; $k<$maxDigitCount; $k++){
        $digitBuckets = array_fill(0,10,0);
        for($i=0; $i<count($list); $i++){
            $numAtDigit=getNumAtDigit($list[$i],$k);
            $digitBuckets[$numAtDigit]=$list[$i];
            var_dump($digitBuckets);
            // array_push($digitBuckets[$numAtDigit],$list[$i]);
        }
        
        $list=[...$digitBuckets];
        $digitBuckets=[];
    }

    return $list;
}


function digitCount(int $int){ 
    $count = floor(log10(abs($int))+1);
    return $count;
}

function maxDigit(array $numbers){
    $maxDigit=0;
    for($i=0; $i<count($numbers); $i++){
        $maxDigit=max($maxDigit,digitCount($numbers[$i]));
    }

    return $maxDigit;
}

function getNumAtDigit(int|array $num,int $indexFromRight){
    $number=floor(abs((int)$num)/pow(10,$indexFromRight))%10;
    return $number;
}

$arr=[5,98,785,2584,25895,584];
// echo(maxDigit($arr));
// echo "<br>";
// echo(getNumAtDigit(3587,1));
// echo "<br>";
// echo(digitCount(8));
echo "<pre>";
var_dump(RadixSort($arr));
echo "</pre>";