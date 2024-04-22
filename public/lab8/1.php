<?php
    echo "<h1>Завдання 1</h1>";

    class MultiplicationTable {
        private $number;
    
        public function __construct($number) {
            $this->number = $number;
        }
    
        public function generateTable() {
            echo "<p>Таблиця множення для числа: {$this->number}</p>";

            echo "<table border='1'>";

            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                
                echo "<td>{$this->number} x {$i}</td>";
                echo "<td>" . ($this->number * $i) . "</td>";

                echo "</tr>";
            }

            echo "</table>";
        }
    }
    
    $multiplier1 = new MultiplicationTable(7);
    $multiplier1->generateTable();

    $multiplier2 = new MultiplicationTable(3);
    $multiplier2->generateTable();
    
    $multiplier3 = new MultiplicationTable(2);
    $multiplier3->generateTable();
?>