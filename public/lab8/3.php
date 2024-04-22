<?php
    echo "<h1>Завдання 3</h1>";

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
    
    $calculator = new Calculator();
    echo "<p>Додавання: " . $calculator->add(5, 3) . "</p>";
    echo "<p>Віднімання: " . $calculator->subtract(5, 3) . "</p>";
    echo "<p>Множення: " . $calculator->multiply(5, 3) . "</p>";
    echo "<p>Ділення: " . $calculator->divide(5, 3) . "</p>";
    echo "<p>Ділення по модулю: " . $calculator->modulus(5, 3) . "</p>";
    echo "<p>Добування кореня: " . $calculator->squareRoot(9) . "</p>";
    echo "<p>Піднесення до степеня: " . $calculator->power(2, 3) . "</p>";
    
?>