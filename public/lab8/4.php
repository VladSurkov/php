<?php
    echo "<h1>Завдання 4</h1>";

    class Calculator {
        public function add($a, $b) {
            return $a + $b;
        }
    
        public function subtract($a, $b) {
            return $a - $b;
        }
    
        public function multiply($a, $b) {
            return $a * $b;
        }
    
        public function divide($a, $b) {
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Помилка: Ділення на нуль";
            }
        }
    
        public function modulus($a, $b) {
            if ($b != 0) {
                return $a % $b;
            } else {
                return "Помилка: Ділення на нуль";
            }
        }
    
        public function squareRoot($a) {
            if ($a >= 0) {
                return sqrt($a);
            } else {
                return "Помилка: Не вдається обчислити квадратний корінь з від'ємного числа";
            }
        }
    
        public function power($base, $exponent) {
            return pow($base, $exponent);
        }
    }

    class Dispatcher {
        public function dispatch() {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operation = $_POST['operation'];
    
                $calculator = new Calculator();
                switch ($operation) {
                    case 'add':
                        echo "Result: " . $calculator->add($num1, $num2);
                        break;
                    case 'subtract':
                        echo "Result: " . $calculator->subtract($num1, $num2);
                        break;
                    case 'multiply':
                        echo "Result: " . $calculator->multiply($num1, $num2);
                        break;
                    case 'divide':
                        echo "Result: " . $calculator->divide($num1, $num2);
                        break;
                    case 'modulus':
                        echo "Result: " . $calculator->modulus($num1, $num2);
                        break;
                    case 'sqrt':
                        echo "Result: " . $calculator->squareRoot($num1);
                        break;
                    case 'power':
                        echo "Result: " . $calculator->power($num1, $num2);
                        break;
                    default:
                        echo "Invalid operation!";
                        break;
                }
            }
        }

        public function display($result) {
            echo "$result";
        }
    }

    echo '
        <form method="post">
            <label for="num1" style="margin-bottom: 10px;">Number 1:</label>
            <input type="number" name="num1" id="num1" style="margin-bottom: 10px;"><br>
            <label for="num2" style="margin-bottom: 10px;">Number 2:</label>
            <input type="number" name="num2" id="num2" style="margin-bottom: 10px;"><br>
            <label for="operation" style="margin-bottom: 10px;">Operation:</label>
            <select name="operation" id="operation">
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
                <option value="modulus">Modulus</option>
                <option value="sqrt">Square Root</option>
                <option value="power">Power</option>
            </select><br>
            <button type="submit">Calculate</button>
        </form>';
?>