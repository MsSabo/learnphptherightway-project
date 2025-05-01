<?php

declare(strict_types = 1);

function parseCsvFile(string $fileName) {
    $fileRes = @fopen($fileName, 'r');
    $res = array();

    while(($data = fgetcsv($fileRes, 10000)) !== false) {
         $res[] = $data;
    }

    fclose($fileRes);

    return $res;
} 

function countIncomeExpenseNetTotal($data) {
    $rows = array_slice($data, 1); 
    
    $income = 0.0;
    $expense = 0.0;

    foreach($rows as $row) {
        $val = (float)str_replace(['$', ','], '', $row[3]);
        if ($val > 0) {
            $income = $income + $val;
        } else 
        {
            $expense = $expense + $val;
        }
    }

    return [round($income,2), round($expense, 2), round($income + $expense,2)];
}
// Your Code
