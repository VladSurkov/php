<?php
    echo "<h1>Завдання 11</h1>";

    echo '
        <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">
            Введіть першу межу діапазону: <input type="text" name="first" style="margin-bottom: 10px;"><br>    
            Введіть другу межу діапазону: <input type="text" name="second" style="margin-bottom: 10px;"><br>    
            <input type="submit" value="Вивести таблицю">
        </form>
    ';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstNum = $_POST['first'];
        $secondNum = $_POST['second'];
        
        if ($firstNum < $secondNum) {
            for ($i = $firstNum; $i <= $secondNum; $i++) {
                if ($i == 0) {
                    break;
                }
                echo "<p>10 / $i = " . (10 / $i) . "</p>";
            }
        } else if ($secondNum < $firstNum) {
            for ($i = $secondNum; $i <= $firstNum; $i++) {
                if ($i == 0) {
                    break;
                }
                echo "<p>10 / $i = " . (10 / $i) . "</p>";
            }
        }
    }
?>