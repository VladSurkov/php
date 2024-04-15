<?php
    echo "<h1>Завдання 3</h1>";

    $lines = file('second.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    $count = count($lines);
    $num_of_tags = 0;

    echo '<table border="2">';

    for ($i = 0; $i < $count; $i+=2) {
        echo '<tr>';
        echo "<td>" . $lines[$i] . "</td>";
        $num_of_tags++;
        echo "<td>" . $lines[$i+1] . "</td>";
        echo '</tr>';
    }

    echo '</table>';

    echo "<p>Всього у файлі описано тегів: $num_of_tags</p>";
?>