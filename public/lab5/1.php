<?php
    echo "<h1>Завдання 1</h1>";

    $line = "vlad@ukr.net";

    if (preg_match('/^((([0-9A-Za-z]{1}[-0-9A-z\.]{1,}[0-9A-Za-z]{1})|([0-9А-Яа-я]{1}[-0-9А-я\.]{1,}[0-9А-Яа-я]{1}))@([-A-Za-z]{1,}\.){1,2}[-A-Za-z]{2,})$/u', $line)) {
        echo "Email правильний";
    } else {
        echo "Email неправильний";
    }
?>