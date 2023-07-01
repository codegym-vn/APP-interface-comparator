<?php


class CircleComparator implements Comparator
{
    function compare(object $circleOne, object $circleTwo): int
    {
        return $circleOne->getRadius() <=> $circleTwo->getRadius();
    }
}