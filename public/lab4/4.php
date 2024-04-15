<?php
    echo "<h1>Завдання 4</h1>";

    echo '
        <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '"> 
            Введіть Email: <input type="email" name="email" style="margin-bottom: 10px;"><br>
            Введіть Password: <input type="password" name="password" style="margin-bottom: 10px;"><br>
            <select name="select">
                <option value="signin">Реєстрація</option><br>
                <option value="login">Вхід</option>
            </select>
            <input type="submit" value="Відправити">
        </form>
    ';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $selectedOption = $_POST['select'];

        $file_name = $email . '.txt';

        if ($selectedOption == "signin") {
            if (!file_exists($file_name)) {
                file_put_contents($file_name, $password);
                echo "Користувач зареєстрований";
            } else {
                echo "Користувач з таким email вже існує, змініть email";
            }
        } else {
            if (file_exists($file_name)) {
                $content = file_get_contents($file_name);
                if ($content == $password) {
                    echo "<div>Доброго дня, $email</div>";
                } else {
                    echo "<div>Пароль неправильний</div>";
                }
            } else {
                echo "<div>Користувач з email: $email, не зареєстрований</div>";
            }
        }

        
    }
?>