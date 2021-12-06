<?php
/*
* - Advent Of Code -
* - 2021 -
* --- Day 2: Dive --
* https://adventofcode.com/2021/day/1
* By TheKorko
* https://github.com/thekorko
* https://quartex.net/
* count the number of times a depth measurement increases from the previous measurement.
*
    forward X increases the horizontal position by X units.
    down X increases the depth by X units.
    up X decreases the depth by X units.
    There's no backward.
*/
$commandList = file('input', FILE_IGNORE_NEW_LINES);
//var_dump($commandList);
$counter = 0;
$horizontalPos = 0;
$depth = 0;
$auxNumber = 0;
foreach ($commandList as $commandStr) {
  $command = preg_replace('/[^a-z]/', '', $commandStr);
  $number = filter_var($commandStr, FILTER_SANITIZE_NUMBER_INT);
  var_dump($commandStr);
  echo "The command is $command and the number is $number<br>";
  /*
  if ($command==0) {
    echo "$number (N/A - no previous measurement)<br>";
  } elseif ($command>$auxNumber) {
    echo "$number (increased)<br>";
    $howManyLargerDepths++;
  } elseif ($command<$auxNumber) {
    echo "$number (decreased)<br>";
  } else {
    echo "$number (equal)<br>";
  }
  $auxNumber = $number;
  $counter++;
  */
}
echo "In this example, there are  measurements that are larger than the previous measurement.";

//What do you get if you multiply your final horizontal position by your final depth?
//
//

?>
