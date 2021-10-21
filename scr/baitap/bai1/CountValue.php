<?php
function CountValue($arr, $value)
{
    $count = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === $value) {
            $count++;
        }
    }
    return $count;
}
$numbers = [1, 1, 2, 3, 4, 1, 6, 7];
foreach ($numbers as $num) {
    echo $num . ' ';
}
$countValue = CountValue($numbers, 1);
echo '<br>';
echo 'The count : '. $countValue;
