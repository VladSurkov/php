<?php
    echo "<h1>Завдання 2</h1>";

    class User {
        private $firstName;
        private $lastName;
        private $age;
        private $email;

        public function __construct($firstName, $lastName, $age, $email) {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->age = $age;
            $this->email = $email;
        }

        public function displayInfo() {
            echo "<p>Name: {$this->firstName} {$this->lastName}</p>";
            echo "<p>Age: {$this->age}</p>";
            echo "<p>Email: {$this->email}</p>";
        }
    }

    echo '
        <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">
            First name: <input type="text" name="first" style="margin-bottom: 10px;"><br>    
            Second name: <input type="text" name="second" style="margin-bottom: 10px;"><br>
            Age: <input type="text" name="age" style="margin-bottom: 10px;"><br>
            Email: <input type="email" name="email" style="margin-bottom: 10px;"><br>
            <input type="submit" value="Готово">
        </form>
    ';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first = $_POST['first'];
        $second = $_POST['second'];
        $age = $_POST['age'];
        $email = $_POST['email'];

        if (!empty($first) && !empty($second) && !empty($age) && !empty($email)) {
            $user = new User($first, $second, $age, $email);
            $user->displayInfo();
        } else {
            echo "<p>Деякі поля порожні</p>";
        }
        
    }
?>