<?php
    echo "<h1>Завдання 5</h1>";

    echo '
        <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">
            Число: <input type="text" name="number" style="margin-bottom: 10px;"><br>    
            <input type="submit" value="Перевіримо число на парність">
        </form>
    ';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        if ($number % 2 == 0) {
            echo $number . " - Парне число";
        } else {
            echo $number . " - Непарне число";
        }
    }
?>