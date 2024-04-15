<?php
    echo "<h1>Завдання 2</h1>";

    echo '
        <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '"> 
            Введіть текст: <input type="text" name="text" style="margin-bottom: 10px;"><br>
            <input type="submit" value="Готово">
        </form>
    ';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST['text'];

        function extractTags($text) {
            $tags = [];
            $tagPattern = '/<([A-Za-z]+)[^>]*?>/';
            preg_match_all($tagPattern, $text, $matches);
        
            foreach ($matches[1] as $match) {
        
                $tags[] = $match;
        
            }
            return $tags;
        }

        $tags = extractTags($text);

        foreach ($tags as $tag) {
            echo "$tag ";
        }
    }
?>