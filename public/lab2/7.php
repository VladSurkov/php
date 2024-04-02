<?php
    echo "<h1>Завдання 7</h1>";

    $number = 4;

    echo '
        <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">
            Вгадай число від 1 до 10: <input type="text" name="number" style="margin-bottom: 10px;"><br>    
            <input type="submit" value="Перевірка!">
        </form>
    ';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {        
        if ($number == $_POST['number']) {
            echo "<p style='color: red;'>ПРАВИЛЬНО!</p>";
        } else {
            echo "<p>Число " . $_POST['number'] . " - не правильно</p>";
            echo "<p>Спробуйте ще раз!</p>";
        }
    }
?>