<?php

namespace Nfq\Akademija\NotTyped;
function calculateHomeWorkSum(...$numbers): int{
    $homeWorkSum = 0;
    foreach( $numbers as $number){
    $homeWorkSum = $homeWorkSum + $number;
    }
    return $homeWorkSum;
}


