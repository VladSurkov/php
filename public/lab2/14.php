<?php
    echo "<h1>Завдання 14</h1>";

    function func($number) {
        for ($i = 1; $i <= 10; $i++) {
            echo "<p>" . $number . " * $i = " . ($number * $i) . "</p>";
        }
    }
    
    func(5);

    function strangeTask() {
        echo '<table border="1">';

        for ($i = 1; $i <= 10; $i++) {
            echo '<tr>';

            for ($j = 2; $j <= 9; $j++) {
                echo '<td>' . $j . ' * ' . $i . ' = ' . ($j * $i) . '</td>';
            }

            echo '</tr>';
        }

        echo '</table>';
    }

    strangeTask();
?>