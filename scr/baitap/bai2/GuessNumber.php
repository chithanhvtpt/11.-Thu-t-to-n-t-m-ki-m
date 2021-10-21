<?php
function GuessNumber($arr, $needle)
{
    $low = 0;
    $high = count($arr) - 1;
    while ($low < $high) {
        $mid = ($low + $high) / 2;

        if ($arr[$mid] > $needle){
            $high = $mid - 1;
        }else if ($arr[$mid] < $needle) {
            $high = $mid + 1;
        }else {
            return true;
        }
    }
    return false;
}
$num2 = 82;
$arr = range(1, 100);
if (GuessNumber($arr, $num2)) {
    echo 'Win';
}
