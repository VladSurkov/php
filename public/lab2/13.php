<?php
    echo "<h1>Завдання 13</h1>";

    echo '
        <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">
            Введіть перше число: <input type="text" name="first" style="margin-bottom: 10px;"><br>      
            Введіть друге число: <input type="text" name="second" style="margin-bottom: 10px;"><br>      
            <input type="submit" value="Покажи">
        </form>
    ';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first = $_POST['first'];
        $second = $_POST['second'];

        if ($first < $second) {
            $hour = 1;
            $bacteria = $first;
            do {
                echo "Минуло $hour год. — маємо $bacteria бактерій<br>";
                $hour++;
                $bacteria+=20;
            } while ($bacteria < $second);
        }
    }
?>