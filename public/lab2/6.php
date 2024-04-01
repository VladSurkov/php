<?php
    echo "<h1>Завдання 6</h1>";

    echo '
        <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">
            Число: <input type="text" name="number" style="margin-bottom: 10px;"><br>    
            <input type="submit" value="Перевіримо число">
        </form>
    ';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        
        if ($number == round($number)) {
            echo $number . " - Ціле число";
        } else {
            echo $number . " - Не є цілим числом";
        }
    }
?>