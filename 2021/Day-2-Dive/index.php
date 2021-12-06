<?php
/*
* - Advent Of Code -
* - 2021 -
* --- Day 2: Dive --
* https://adventofcode.com/2021/day/1
* By TheKorko
* https://github.com/thekorko
* https://quartex.net/
* Learn to operate the submarine, using the input commands, then obtain the solution doing a multiplication of depth and horizontal position
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
foreach ($commandList as $commandStr) {
  //Our command are only lowercase, we want to remove spaces and the number
  $command = preg_replace('/[^a-z]/', '', $commandStr);
  //Our number is the quantity which will be added or substracted, so only an integer without spaces
  $number = (int)filter_var($commandStr, FILTER_SANITIZE_NUMBER_INT);
  //var_dump($commandStr);
  //var_dump($number);
  if ($command=='forward') {
    $horizontalPos += $number;
    echo "The command is $command, it <b>increases</b> the <b>horizontal position</b> by $number units, a total of $horizontalPos.<br>";
  } elseif ($command=='down') {
    $depth += $number;
    echo "The command is $command, it <b>increases</b> the <b>depth</b> by $number units, a total of $depth.<br>";
  } elseif ($command=='up') {
    $depth -= $number;
    echo "The command is $command, it <b>decreases</b> the <b>depth</b> by $number units, a total of $depth.<br>";
  } else {
    echo "Command still not supported.";
  }
  $counter++;
}
$solution = $depth*$horizontalPos;
echo "<br><p>In this example, there were $counter iterations<br> After these instructions, you would have a horizontal position of $horizontalPos and a depth of $depth. (Multiplying these together produces $solution.)</p>";

//What do you get if you multiply your final horizontal position by your final depth?
//My answer was 1580000
//That's the right answer! You are one gold star closer to finding the sleigh keys.

?>
