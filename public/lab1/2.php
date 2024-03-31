<?PHP 
    $rows = 5; 
    $columns = 3; 
    echo '<html><body>'; 
    echo "<h1>Завдання 2</h1>";
    echo '<table border="2">'; 
    for ($i = 1; $i <= $rows; $i++) 
    { 
        echo '<tr>'; 
        for ($j=1; $j <= $columns; $j++) 
        { 
            if ((($i + $j) % 2) == 0) {
                $c = "green";
            } else {
                $c = "red";
            } 
            echo '<td bgcolor='.$c.'><font color="yellow">'.$i,$j.'</font></td>'; 
        }
        echo '</tr>'; 
    }

    echo '</table>'; 
    echo '</body></html>'; 
?> 