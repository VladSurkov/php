<?php
    echo "<h1>Завдання 1, 2, 3, 4</h1>";

    $dsn = 'pgsql:host=postgres;port=5432;dbname=vlad';
    $username = 'laravel-getting-started-user';
    $password = 'laravel-getting-started-password';

    try {
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        echo "<p>Успішне підключення до бази даних!</p>";

        $sql = "SELECT EXISTS (
            SELECT 1 
            FROM information_schema.tables 
            WHERE table_name = 'kor'
        )";

        $stmt = $db->query($sql);
        $result = $stmt->fetchColumn();

        if (!$result) {
            try {
                $sql = "CREATE TABLE Kor (
                    id SERIAL PRIMARY KEY,
                    login VARCHAR(50) NOT NULL,
                    password VARCHAR(255) NOT NULL,
                    name VARCHAR(255) NOT NULL,
                    birth_date DATE NOT NULL,
                    gender VARCHAR(255) NOT NULL,
                    country VARCHAR(255) NOT NULL,
                    email VARCHAR(255) NOT NULL,
                    note VARCHAR(255) NOT NULL
                )";
        
                $db->exec($sql);
        
                echo "<p>Таблиця 'Kor' успішно створена.</p>";
            } catch (PDOException $e) {
                echo '<p>Помилка: </p>' . $e->getMessage();
            }
        }
    } catch (PDOException $e) {
        echo '<p>Помилка підключення до бази даних: </p>' . $e->getMessage();
    }

    echo '
        <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '"> 
            <input type="submit" name="submit_form1" value="Показати всіх користувачів">
        </form>
    ';

    echo '
        <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '"> 
            Введіть login: <input type="text" name="login" style="margin-bottom: 10px;"><br>
            Введіть password: <input type="password" name="password" style="margin-bottom: 10px;"><br>
            Введіть name: <input type="text" name="name" style="margin-bottom: 10px;"><br>
            Введіть birth_date: <input type="date" name="birth_date" style="margin-bottom: 10px;"><br>
            Введіть gender: <input type="text" name="gender" style="margin-bottom: 10px;"><br>
            Введіть country: <input type="text" name="country" style="margin-bottom: 10px;"><br>
            Введіть email: <input type="email" name="email" style="margin-bottom: 10px;"><br>
            Введіть note: <input type="text" name="note" style="margin-bottom: 10px;"><br>
            <input type="submit" name="submit_form2" value="Зареєструватися...">
        </form>
    ';

    if(isset($_POST['submit_form1'])) {
        $sql = "SELECT * FROM kor";
        $stmt = $db->query($sql);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($users)) {
            echo "Список пользователей из таблицы 'Kor':\n";
            foreach ($users as $user) {
                echo "<p>
                    login: {$user['login']},
                    name: {$user['name']},
                    email: {$user['email']},
                    birth_date: {$user['birth_date']},
                    gender: {$user['gender']},
                    country: {$user['country']},
                    note: {$user['note']},
                </p>";
            }
        } else {
            echo "В таблиці 'Kor' немає користувачів.\n";
        }
    }

    if(isset($_POST['submit_form2'])) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $birth_date = $_POST['birth_date'];
            $gender = $_POST['gender'];
            $country = $_POST['country'];
            $email = $_POST['email'];
            $note = $_POST['note'];
    
            $sql = "SELECT COUNT(*) FROM Kor WHERE email = :email";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $count = $stmt->fetchColumn();
            if ($count > 0) {
                echo "<p>Користувач з email '$email' вже існує в таблиці 'Kor'.</p>";
            } else {
                $sql = "INSERT INTO kor (login, password, name, birth_date, gender, country, email, note) 
                VALUES (:login, :password, :name, :birth_date, :gender, :country, :email, :note)";
    
                $stmt = $db->prepare($sql);
    
                $stmt->bindParam(':login', $login);
                $stmt->bindParam(':password', $password);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':birth_date', $birth_date);
                $stmt->bindParam(':gender', $gender);
                $stmt->bindParam(':country', $country);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':note', $note);
    
                $stmt->execute();
    
                echo "<p>Користувача успішно збережено в таблицю 'Kor'.</p>";
            }
        }
    }
?>