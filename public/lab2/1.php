<?php
    echo "<h1>Завдання 1</h1>";

    echo '
        <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">
            Перше число: <input type="text" name="first" style="margin-bottom: 10px;"><br>    
            Друге число: <input type="text" name="second" style="margin-bottom: 10px;"><br>
            <input type="submit" value="Вивести дії">
        </form>
    ';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first = $_POST['first'];
        $second = $_POST['second'];
        
        echo "<h2>Результат:</h2>";
        echo "+ : " . ($first + $second) . "<br>";
        echo "- : " . ($first - $second) . "<br>";
        echo "* : " . ($first * $second) . "<br>";
        echo "/ : " . ($first / $second) . "<br>";
        echo "% : " . ($first % $second) . "<br>";
    }
?>