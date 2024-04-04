<?php
    echo "<h1>Завдання 1</h1>";

    $numbers = [5, 16, 19, 4, 9];

    foreach ($numbers as $number) {
        echo "<p>" . $number . " ^ 2 = " . ($number * $number) . "</p>";
    }
?>