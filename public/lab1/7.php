<?php
    $title_page = "Завдання 7";

    echo "<h1>$title_page</h1>";

    echo "<table border='1'>";

    echo "<tr><td>&nbsp;</td>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<td><b>$i</b></td>";
    }
    echo "</tr>";

    for ($i = 1; $i <= 10; $i++) {
        echo "<tr><td><b>$i</b></td>";
        for ($j = 1; $j <= 10; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
?>

