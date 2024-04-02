<?php
    echo "<h1>Завдання 9</h1>";

    echo '
        <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">
            Введіть число: <input type="text" name="number" style="margin-bottom: 10px;"><br>    
            <input type="submit" value="Вивести таблицю множення">
        </form>
    ';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        for ($i = 1; $i <= 10; $i++) {
            echo "<p>" . $_POST['number'] . " * $i = " . ($_POST['number'] * $i) . "</p>";
        }
    }
?>