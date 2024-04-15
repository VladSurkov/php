<?php
    echo "<h1>Завдання 3</h1>";

    echo '
        <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '"> 
            Введіть номер телефону: <input type="text" name="number" style="margin-bottom: 10px;"><br>
            <input type="submit" value="Check">
        </form>
    ';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        $pattern = '/^\+38\s?0\d{2}\s?\d{3}\s?\d{2}\s?\d{2}$/';

        if (preg_match($pattern, $number)) {
            echo "Номер відповідає шаблону";
        } else {
            echo "Номер не відповідає шаблону";
        }
    }
?>