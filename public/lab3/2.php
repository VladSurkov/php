<?php
    echo "<h1>Завдання 2</h1>";

    // 2022 р.

    $array = array(
        "Україна" => array("Київ", "38 мільйонів"),
        "США" => array("Вашингтон", "333,3 мільйона"),
        "Німеччина" => array("Берлін", "83,8 мільйонів"),
        "Японія" => array("Токіо", "125,1 мільйонів"),
        "Великобританія" => array("Лондон", "66,97 мільйона"),
    );

    $keys = array_keys($array);
    $length = count($array);

    echo "<table border='1' style='margin-bottom: 10px;'>";
    for ($i = 0; $i < 3; $i++) {
        echo '<tr>
            <td>' . $keys[$i] . '</td>
            <td>' . $array[$keys[$i]][0] . '; '. $array[$keys[$i]][1] . '</td>
        </tr>';
    }
    echo "</table>";

    echo "<table border='1'>";
    for ($i = 3; $i < $length; $i++) {
        echo '<tr>
            <td>' . $keys[$i] . '</td>
            <td>' . $array[$keys[$i]][0] . '</td>
            <td>' . $array[$keys[$i]][1] . '</td>
        </tr>';
    }
    echo "</table>";
?>