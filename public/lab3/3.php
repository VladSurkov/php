<?php
    echo "<h1>Завдання 3</h1>";

    $resultArray = array();

    echo '
        <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">
            Введіть email: <input type="email" name="email" style="margin-bottom: 10px;"><br>    
            Введіть name: <input type="text" name="name" style="margin-bottom: 10px;"><br>    
            Введіть surname: <input type="text" name="surname" style="margin-bottom: 10px;"><br>    
            Введіть age: <input type="number" name="age" style="margin-bottom: 10px;"><br>    
            <input type="submit" value="Готово">
        </form>
    ';

    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["email"]) && !empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["age"])) {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $age = $_POST['age'];

        $resultArray["$email"] = [
            "name" => $name,
            "surname" => "$surname",
            "age" => "$age"
        ];

        echo "<table border='1'>";

        echo "<tr>
            <td>Email</td>
            <td>Name</td>
            <td>Surname</td>
            <td>Age</td>
        </tr>";
    
        foreach ($resultArray as $email => $values) {
            echo "<tr>
                <td>$email</td>
                <td>" . $values['name'] . "</td>
                <td>" . $values['surname'] . "</td>
                <td>" . $values['age'] . "</td>
            </tr>";
        }

        echo "</table>";
    }
?>