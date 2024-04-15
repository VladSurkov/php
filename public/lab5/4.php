<?php
    echo "<h1>Завдання 4</h1>";

    $dates = ["2003-04-16", "12-07-2001", "2014-09-22", "31-12-2022"];
    $pattern = '/(\d{4})[-.](\d{2})[-.](\d{2})/';
    $replacement = '${2}.${3}.${1}';

    $formatted_dates = preg_replace($pattern, $replacement, $dates);

    for ($i = 0; $i < count($dates); $i++) {
        $formatted_dates[] = preg_replace($pattern, $replacement, $dates[$i]);
        echo "<div>" . $formatted_dates[$i] . "</div>";
    }
?>