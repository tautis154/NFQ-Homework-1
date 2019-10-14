<?php
namespace HomeWork1_PHP;
error_reporting(0);
require_once 'vendor/autoload.php';

function calculateHomeWorkSum(...$numbers){
    $homeWorkSum = 0;
    foreach( $numbers as $number){
    $homeWorkSum = $homeWorkSum + $number;
    }
    return $homeWorkSum;
}

$climate = new \League\CLImate\CLImate;
$climate->orange("calculateHomeWorkSum: " .calculateHomeWorkSum(3,2.2,'1'));
$climate->red("Nfq\Akademija\NotTyped\calculateHomeWorkSum: " .\Nfq\Akademija\NotTyped\calculateHomeWorkSum(3,2.2,'1'));
$climate->yellow("Nfq\Akademija\Soft\calculateHomeWorkSum: " .\Nfq\Akademija\Soft\calculateHomeWorkSum(3,2.2,'1'));
$climate->green("Nfq\Akademija\Strict\calculateHomeWorkSum: " . \Nfq\Akademija\Strict\calculateHomeWorkSum(3,2.2,'1'));
