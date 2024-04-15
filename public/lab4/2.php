<?php
    echo "<h1>Завдання 2</h1>";

    $lines = file('second.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    $count = count($lines);

    echo '<table border="2">';

    for ($i = 0; $i < $count; $i+=2) {
        echo '<tr>';
        echo "<td>" . $lines[$i] . "</td>";
        echo "<td>" . $lines[$i+1] . "</td>";
        echo '</tr>';
    }

    echo '</table>';
?>