<?php
    echo "<h1>Завдання 3</h1>";

    $db = [
        [
            "name" => "Зубар Шушана Максимівна",
            "email" => "example1@example.com"
        ],
        [
            "name" => "Стріха Никифор Олександрович",
            "email" => "example2@example.com"
        ],
        [
            "name" => "Степанченко Ясногор Костянтинович",
            "email" => "example3@example.com"
        ],
        [
            "name" => "Федишин Ничипір Вітанович",
            "email" => "example4@example.com"
        ]
    ];

    echo '
        <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '"> 
            Введіть Email: <input type="email" name="email" style="margin-bottom: 10px;"><br>
            <input type="submit" value="Перевіримо...">
        </form>
    ';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $result = null;

        foreach ($db as $user) {
            if ($user['email'] == $email) {
                $result = $user['name'];
                echo "Доброго дня, " . $result . "<br>";
            }
        }

        if ($result == null) {
            echo "Вибачте, Ви у нас не зареєстровані!";
        }
    }
?>