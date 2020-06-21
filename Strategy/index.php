<?php
require 'sort/SortStrategy.php';
require 'Classes/MergeSort.php';
require 'Classes/QuickSort.php';

function sortData(array $data)
{
    if (count($data) < 50) {
        $tempData = new \Classes\QuickSort($data);
    } else {
        $tempData = new \Classes\MergeSort($data);
    }

    return $tempData->sort();
}

$data = [1, 23, 45, 667, 3434, 4656, 323];
echo '<pre>';
print_r(sortData($data));
exit;