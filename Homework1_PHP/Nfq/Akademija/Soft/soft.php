<?php

namespace Nfq\Akademija\Soft;

function calculateHomeWorkSum(int...$numbers): int{
    $homeWorkSum = 0;
    foreach( $numbers as $number){
    $homeWorkSum = $homeWorkSum + $number;
    }
    return $homeWorkSum;
}