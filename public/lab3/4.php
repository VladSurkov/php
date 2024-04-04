<?php
    echo "<h1>Завдання 4</h1>";

    $firstArray = array();
    $secondArray = array();

    for ($i = 1; $i <= 10; $i++) {
        $first = pow($i, 2);
        $second = pow($i, 3);
        $firstArray[] = $first;
        $secondArray[] = $second;
    }

    $resultArray = array_merge($firstArray, $secondArray);

    foreach ($resultArray as $number) {
        echo "$number ";
    }
    
?>