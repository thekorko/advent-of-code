<?php
/*
* - Advent Of Code -
* - 2021 -
* --- Day 1: Sonar Sweep --
* https://adventofcode.com/2021/day/1
* By TheKorko
* https://github.com/thekorko
* https://quartex.net/
* count the number of times a depth measurement increases from the previous measurement.
*/
$inputList = file('input', FILE_IGNORE_NEW_LINES);
//var_dump($inputList);
$counter = 0;
$previous = 0;
//$arrDepths = array();
$howManyLargerDepths = 0;
//Sum of three numbers
$a = 0;
$b = 0;
$c = 0;
//Results
$actual = 0;
$before = 0;
//end
$mod = sizeof($inputList) % 3;
//echo "$mod<br>";
$limit = sizeof($inputList) - $mod;
//echo "$limit<br>";
//var_dump($inputList);
foreach ($inputList as $number) {
  $previous = $counter;
  $i = $counter+1;
  //echo "$i and $counter<br>";
  $end=True;
  while ($counter<$limit && $end) {
    $a = $inputList[$previous];
    $b = $inputList[$i];
    $c = $inputList[$i++];
    if ($counter>1) {
      $before = $actual;
    }
    $actual = $a+$b+$c;
    if ($before==0) {
      echo "$actual (N/A - no previous measurement)<br>";
    } elseif ($actual>$before) {
      echo "$actual (increased)<br>";
      $howManyLargerDepths++;
    } elseif ($actual<$before) {
      echo "$actual (decreased)<br>";
    } else {
      echo "$actual (equal)<br>";
    }
    $end=False;
  }
  $counter++;
}

echo "In this example, there are $howManyLargerDepths measurements that are larger than the previous measurement.";
//How many measurements are larger than the previous measurement?
//My answer was 1832
//That's the right answer! You are one gold star closer to finding the sleigh keys. [Continue to Part Two]

?>
