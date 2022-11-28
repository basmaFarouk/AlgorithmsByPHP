<?php
// function for quick sort which calls partition function 
// to arrange and split the list based on pivot element
// quicksort is a recursive function
function quicksort(&$Array, $left, $right) {
  if ($left < $right) { 
    $pivot = partition($Array, $left, $right);
    quicksort($Array, $left, $pivot-1);
    quicksort($Array, $pivot+1, $right);
  }
}

// partition function arrange and split the list 
// into two list based on pivot element
// In this example, last element of list is chosen 
// as pivot element. one list contains all elements 
// less than the pivot element another list contains 
// all elements greater than the pivot element
function partition(&$Array, $left, $right) {
  $i = $left;
  $pivot = $Array[$right];
  for($j = $left; $j <=$right; $j++) {
    if($Array[$j] < $pivot) {
      $temp = $Array[$i];
      $Array[$i] = $Array[$j];
      $Array[$j] = $temp;
      $i++;
    }
  }

  $temp = $Array[$right];
  $Array[$right] = $Array[$i];
  $Array[$i] = $temp;
  return $i;
}

// function to print array
function PrintArray($Array, $n) { 
  for ($i = 0; $i < $n; $i++) 
    echo $Array[$i]." "; 
  echo "\n";
} 

// test the code
$MyArray = array(-4, 1, 25, 50, 8, 10, 23);
$n = sizeof($MyArray); 
echo "Original Array\n";
PrintArray($MyArray, $n);

quicksort($MyArray, 0, $n-1);
echo "\nSorted Array\n";
PrintArray($MyArray, $n);
?>