<?php
declare(strict_types = 1);
namespace Nfq\Akademija\Strict;

function calculateHomeWorkSum(int...$numbers): int{

    $homeWorkSum = 0;
    foreach( $numbers as $number){
    $homeWorkSum = $homeWorkSum + $number;
    }
    return $homeWorkSum; 
}
