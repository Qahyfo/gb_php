<?php
$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$result = array_map(function (int $numbers) {
    return $numbers % 2;
}, $numbers);

print_r($result);

foreach ($result as $value) {
    if (gettype($value) === "double") {
        echo 'нечётное' . PHP_EOL;
    } else
        echo 'чётное' . PHP_EOL;
}
;

#2

$arr = [3, 6, 1, 12, 7, 9];

$arrFunc = function ($number) {


    return [
        'max' => max($number),
        'min' => min($number),
        'summ' => array_sum($number) / count($number),
    ];
};


print_r($arrFunc($arr));