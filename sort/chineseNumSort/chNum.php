<?php
/*
 * 输入特定含中文的二维数组
 * 返回 最大的中文对应的数字,及二维数组的下标
 */
function getMaxChineseNumber($obj = [])
{
    $arr = [
        '零' => '0',
        '一' => '1',
        '二' => '2',
        '三' => '3',
        '四' => '4',
        '五' => '5',
        '六' => '6',
        '七' => '7',
        '八' => '8',
        '九' => '9',
        '十' => '10',
    ];
    $arr_all = [];
    $result = 0;
    foreach ($obj as $k => $v) {
        $len = strlen($v); //获取中文数字长度utf-8三个字节
        switch ($len) {
            case 1 * 3:
                $result = $arr[$v];
                break;
            case 2 * 3:
                $a = substr($v, 0 * 3, 1 * 3);
                $b = substr($v, 1 * 3, 1 * 3);
                $result = (string) $arr[$a] % 10 . (string) $arr[$b] % 10;
                break;
            case 3 * 3:
                $a = substr($v, 0 * 3, 1 * 3);
                $b = substr($v, 2 * 3, 1 * 3);
                $result = $arr[$a] . $arr[$b];
                break;
            default:
                break;
        }
        $arr_all[] = $result;
        $arr2[$result] = $k;
    }
    $max = max($arr_all);
    return [$max, $arr2[$max]];
}

$arr = ['一', '五', '八', '二', '零'];
var_dump(getMaxChineseNumber($arr));
