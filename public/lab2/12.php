<?php
    echo "<h1>Завдання 12</h1>";

    $number = 155;

    echo '
        <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">
            Введіть число: <input type="text" name="number" style="margin-bottom: 10px;"><br>      
            <input type="submit" value="Відгадати">
        </form>
    ';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST['number'] < $number) {
            echo '
                <script>
                    alert("Не відгадали, задане число більше");
                    window.location = "12.php";
                </script>
            ';
        } else if ($_POST['number'] > $number) {
            echo '
                <script>
                    alert("Не відгадали, задане число менше");
                    window.location = "12.php";
                </script>
            ';
        } else {
            echo "<script>alert('Ви відгадали!');</script>";
        }
    }
?>