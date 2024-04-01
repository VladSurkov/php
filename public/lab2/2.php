<?php
    echo "<h1>Завдання 2</h1>";

    echo '
        <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">
            Перше число: <input type="text" name="first" style="margin-bottom: 10px;"><br>    
            Друге число: <input type="text" name="second" style="margin-bottom: 10px;"><br>
            <input type="submit" value="Вивести більше число">
        </form>
    ';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first = $_POST['first'];
        $second = $_POST['second'];

        if ($first > $second) {
            echo "$first";
        } else if ($first < $second) {
            echo "$second";
        } else {
            echo "Два числа рівні";
        }
    }
?>