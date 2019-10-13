<?php
namespace Homework1_PHP;
error_reporting(0);
require_once 'vendor/autoload.php';

function calculateHomeWorkSum(int...$numbers): int{
    $homeWorkSum = 0;
    foreach( $numbers as $number){
    $homeWorkSum = $homeWorkSum + $number;
    }
    return $homeWorkSum;
}

//If there is a need for colored text
//$climate = new \League\CLImate\CLImate;
//$climate->blue("calculateHomeWorkSum: " .calculateHomeWorkSum(3,2.2,'1') . "\n");
//$climate->red("Nfq\Akademija\NotTyped\calculateHomeWorkSum: " .\Nfq\Akademija\NotTyped\calculateHomeWorkSum(3,2.2,'1') . "\n");
//$climate->yellow("Nfq\Akademija\Soft\calculateHomeWorkSum: " .\Nfq\Akademija\Soft\calculateHomeWorkSum(3,2.2,'1') . "\n");
//$climate->green("Nfq\Akademija\Strict\calculateHomeWorkSum: " . \Nfq\Akademija\Strict\calculateHomeWorkSum(3,2.2,'1') . "\n");

echo "calculateHomeWorkSum: " .calculateHomeWorkSum(3,2.2,'1') . "\n";
echo "Nfq\Akademija\NotTyped\calculateHomeWorkSum: " .\Nfq\Akademija\NotTyped\calculateHomeWorkSum(3,2.2,'1') . "\n";
echo "Nfq\Akademija\Soft\calculateHomeWorkSum: " .\Nfq\Akademija\Soft\calculateHomeWorkSum(3,2.2,'1') . "\n";
echo "Nfq\Akademija\Strict\calculateHomeWorkSum: " .\Nfq\Akademija\Strict\calculateHomeWorkSum(3,2.2,'1') . "\n";


