<?php

include_once "Circle.php";
include_once "Comparator.php";
include_once "CircleComparator.php";

$circleOne = new Circle("circleOne", 2);
$circleTwo = new Circle("circleTwo", 4);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne, $circleTwo));