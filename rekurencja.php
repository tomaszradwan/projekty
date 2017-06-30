<?php

function create($array, $parentId) {
    $list = '<ul>';
    foreach ($array as $row) {
        if (($parentId === 0 && $row[0] == $row[1]) || ($row[1] == $parentId && $row[0] != $parentId)) {
            $list .= '<li>' . $row[2];
            $list .= create($array, $row[0]);
            $list .= '</li>';
        }
    }
    $list .= '</ul>';

    return $list;
}

$arr = [
    [16, 11, 'MARS'],
    [64, 64, 'MERKURY'],
    [5, 6, 'ZIEMIA'],
    [6, 64, 'WENUS'],
    [11, 6, 'JOWISZ'],
    [24, 64, 'SATURN'],
    [37, 64, 'URAN'],
    [18, 56, 'PLUTON'],
    [56, 37, 'NEPTUN']
];


echo create($arr, 0);
