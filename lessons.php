<?php
$arr1 = [];
$arr2 = [];
$arrLengh = 15;

for ($i = 0; $i < $arrLengh; $i++) {
    $arr1[$i] = rand(1, 9);
    $arr2[$i] = rand(1, 9);
    $arrRes[$i] = $arr1[$i] * $arr2[$i];
}

print_r($arrRes);



$array1 = ['космического', 'бесконечного', 'безудержного'];
$array2 = ['здоровья', 'воображения', 'терпения'];
$arrResult = [];

for ($i = 0; $i < 3; $i++) {
    $arrResult[] = $array1[array_rand($array1)] . ' ' . $array2[array_rand($array2)];
}

print_r($arrResult);

echo "Дорогой человек, желаем вам " . implode(',', $arrResult);