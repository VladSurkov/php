<?php
    echo "<h1>Завдання 4</h1>";

    $db = [
        [
            "name" => "Зубар Шушана Максимівна",
            "email" => "example1@example.com",
            "password" => "pass1"
        ],
        [
            "name" => "Стріха Никифор Олександрович",
            "email" => "example2@example.com",
            "password" => "pass2"
        ],
        [
            "name" => "Степанченко Ясногор Костянтинович",
            "email" => "example3@example.com",
            "password" => "pass3"
        ],
        [
            "name" => "Федишин Ничипір Вітанович",
            "email" => "example4@example.com",
            "password" => "pass4"
        ]
    ];

    echo '
        <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '"> 
            Введіть Email: <input type="email" name="email" style="margin-bottom: 10px;"><br>
            Введіть пароль: <input type="password" name="password" style="margin-bottom: 10px;"><br>
            <input type="submit" value="Перевіримо...">
        </form>
    ';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $result = null;

        foreach ($db as $user) {
            if ($user['email'] == $email) {
                if ($user['password'] == $password) {
                    $result = $user['name'];
                    echo "Доброго дня, " . $result . "<br>";
                } else {
                    $result = "Невірний пароль!";
                    echo $result;
                }
            }
        }

        if ($result == null) {
            echo "Вибачте, Ви у нас не зареєстровані!";
        }
    }
?>