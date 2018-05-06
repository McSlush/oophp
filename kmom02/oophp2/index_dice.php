<?php

/**
 * Show off the autoloader using namespace.
 */
include(__DIR__ . "/config.php");
include(__DIR__ . "/autoload_namespace.php");

$dice = new \Dalf14\Dice\Dice();

$nrs = $dice->roll();
$tot = 0;
$avg = 0;
$html = "<ol>";
for ($i=0; $i < count($nrs); $i++) { 
    $html .= "<li>{$nrs[$i]}</li>";
    $tot += $nrs[$i];
}
$html .= "</ol>";

echo $html;
echo "totalt:{$tot}<br / >";
$avg = $tot / 6;
echo "avg: {$avg}";
