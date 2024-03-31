<?php
    $title_page = "Завдання 6";

    $colors = array(
        "Red" => "#FF0000",
        "Yellow" => "#FFFF00",
        "Green" => "#00FF00",
        "Blue" => "#0040FF",
        "Pink" => "#FF00BF"
    );

    echo "<h1>$title_page</h1>";

    echo "<table border='1'>";
    echo "<tr><th>Колір</th><th>Код кольору</th></tr>";
    foreach ($colors as $color_name => $color_code) {
        echo "<tr><td>$color_name</td><td style='background-color: $color_code;'>$color_code</td></tr>";
    }
    echo "</table>";
?>
