<?php
function findMin($arr) {
    $max = $arr[0];
    for ($i = 1; $i < count($arr); ++$i) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}

$nums = [-2, 0, 5, 7, 9, -5, 30, 100];
foreach ($nums as $num) {
    echo $num . ' ';
}
$maxValue = findMin($nums);
echo "</br>";
echo 'The mininum value is : ' . $maxValue;
