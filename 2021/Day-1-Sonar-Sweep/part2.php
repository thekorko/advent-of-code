<?php
/*
* - Advent Of Code -
* - 2021 -
* --- Day 1: Sonar Sweep --
* https://adventofcode.com/2021/day/1
* By TheKorko
* https://github.com/thekorko
* https://quartex.net/
* Your goal now is to count the number of times the sum of measurements in this sliding window increases from the previous sum.
* So, compare A with B, then compare B with C, then C with D, and so on.
*/
$inputList = file('input', FILE_IGNORE_NEW_LINES);
//var_dump($inputList);
$counter_a = 0;
$counter_b = 1;
$counter_c = 2;
//$arrDepths = array();
$howManyLargerDepths = 0;
//Sum of three numbers
$a = 0;
$b = 0;
$c = 0;
//Results
$sumActual = 0;
$sumBefore = 0;
//end
//$mod = sizeof($inputList) % 3;
//echo "$mod<br>";
$limit = sizeof($inputList)-1;
//echo "$limit<br>";
//var_dump($inputList);
foreach ($inputList as $number) {
  //echo "$i and $counter_b<br>";
  $continue=True;
  while (($counter_c<=$limit) && $continue) {
    $sumBefore = $sumActual;
    $a = $inputList[$counter_a];
    $b = $inputList[$counter_b];
    $c = $inputList[$counter_c];
    $sumActual = $a+$b+$c;
    if ($sumBefore==0) {
      echo "$sumActual (N/A - no previous measurement)<br>";
    } elseif ($sumActual>$sumBefore) {
      echo "$sumActual (increased)<br>";
      $howManyLargerDepths++;
    } elseif ($sumActual<$sumBefore) {
      echo "$sumActual (decreased)<br>";
    } else {
      echo "$sumActual (equal)<br>";
    }
    $continue=False;
  }
  $counter_a++;
  $counter_c++;
  $counter_b++;
}
echo "In this example, there are $howManyLargerDepths measurements sums that are larger than the previous measurement.";
//How many sums are larger than the previous sum?
//My answer was 1858
//That's the right answer! You are one gold star closer to finding the sleigh keys.

?>
