<?php

/**
 * Это функция чтения csv-файла, основная проблема это непонятные имена как функций, так и переменных
 */
function f(string $s)
{
    $f = fopen($s, 'r');
    $d = [];
    while ($r = fgetcsv($f, 0, ';')) {
        $d[] = $r;
    }
    fclose($f);
    return $d;
}
// решение - дать осмысленные имена
function readCsv(string $source)
{
    $f = fopen($source, 'r');
    $data = [];
    while ($row = fgetcsv($f, 0, ';')) {
        $data[] = $row;
    }
    fclose($f);
    return $data;
}
