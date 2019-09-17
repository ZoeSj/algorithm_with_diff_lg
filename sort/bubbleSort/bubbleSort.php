<?php
/**
 * Date: 2019/9/16
 * Time: 11:05
 * @param array $data
 * @return array
 */

function bubbleSort(array $data)
{
    $count = count($data);
    for ($i = 1; $i < $count; $i++) {
        for ($j = 0; $j < $count - $i; $j++) {
            if ($data[$j] > $data[$j + 1]) {
                list($data[$j], $data[$j + 1]) = [$data[$j + 1], $data[$j]];
            }
        }
    }
    return $data;
}

print_r(bubbleSort([0, 2, 9, 1, 5, 6, 0, 3, 4]));