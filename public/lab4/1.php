<?php
    echo "<h1>Завдання 1</h1>";

    date_default_timezone_set('Europe/Kiev');

    echo '
        <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '"> 
            Введіть імя файла: <input type="text" name="name" style="margin-bottom: 10px;"><br>
            <input type="submit" value="Готово">
        </form>
    ';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $filename = $_POST['name'];
        $filename_with_extension = $filename . '.txt';
        
        if (file_exists($filename_with_extension)) {
            $filesize = filesize($filename_with_extension);

            $creation_time = filectime($filename_with_extension);
            $readable_сtime = date('d-m-Y H:i:s', $creation_time);

            $modification_time = filemtime($filename_with_extension);
            $readable_mtime = date('d-m-Y H:i:s', $modification_time);

            $content = file_get_contents($filename_with_extension);

            echo "<p>Файл має розмір: $filesize B.</p>";
            echo "<p>Файл був створений: '$readable_сtime'.</p>";
            echo "<p>Файл був останній раз модифікований: '$readable_mtime'.</p>";
            echo "<p>Вміст файлу: $content.</p>";
        } else {
            echo "Файл з іменем '$filename_with_extension' у поточному каталозі не існує.";
        }
    }
?>