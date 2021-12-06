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
//$arrDepths = array();
$howManyLargerDepths = 0;
$auxNumber = 0;
foreach ($inputList as $number) {
  if ($counter==0) {
    echo "$number (N/A - no previous measurement)<br>";
  } elseif ($number>$auxNumber) {
    echo "$number (increased)<br>";
    $howManyLargerDepths++;
  } elseif ($number<$auxNumber) {
    echo "$number (decreased)<br>";
  } else {
    echo "$number (equal)<br>";
  }
  $auxNumber = $number;
  $counter++;
}
echo "In this example, there are $howManyLargerDepths measurements that are larger than the previous measurement.";
//How many measurements are larger than the previous measurement?
//My answer was 1832
//That's the right answer! You are one gold star closer to finding the sleigh keys. [Continue to Part Two]

?>
