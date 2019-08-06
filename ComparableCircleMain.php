<?php
include "CircleComparable.php";
$circleOne = new CircleComparable('circleOne', 10);
$circleTwo = new CircleComparable('circleTwo', 9);
$test = $circleOne->compareTo($circleTwo);
echo('Comparable: <br>');
echo $test;
