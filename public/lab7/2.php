<?php
    echo "<h1>Завдання 5</h1>";

    $dsn = 'pgsql:host=postgres;port=5432;dbname=MySiteDB';
    $username = 'laravel-getting-started-user';
    $password = 'laravel-getting-started-password';

    try {
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        echo "<p>Успішне підключення до бази даних!</p>";

        $check_notes = "SELECT EXISTS (
            SELECT 1 
            FROM information_schema.tables 
            WHERE table_name = 'notes'
        )";

        $stmt = $db->query($check_notes);
        $notes_result = $stmt->fetchColumn();

        if (!$notes_result) {
            try {
                $sql = "CREATE TABLE notes (
                    id SERIAL PRIMARY KEY,
                    created DATE NOT NULL,
                    title VARCHAR(50) NOT NULL,
                    article VARCHAR(255) NOT NULL
                )";
        
                $db->exec($sql);
        
                echo "<p>Таблиця 'notes' успішно створена.</p>";
            } catch (PDOException $e) {
                echo '<p>Помилка: </p>' . $e->getMessage();
            }
        }

        ///////

        $check_comments = "SELECT EXISTS (
            SELECT 1 
            FROM information_schema.tables 
            WHERE table_name = 'comments'
        )";

        $stmt = $db->query($check_comments);
        $comments_result = $stmt->fetchColumn();

        if (!$comments_result) {
            try {
                $sql = "CREATE TABLE comments (
                    id SERIAL PRIMARY KEY,
                    created DATE NOT NULL,
                    author VARCHAR(50) NOT NULL,
                    comment VARCHAR(255) NOT NULL,
                    art_id INT NOT NULL
                )";

                $db->exec($sql);

                echo "<p>Таблиця 'comments' успішно створена.</p>";
            } catch (PDOException $e) {
                echo '<p>Помилка: </p>' . $e->getMessage();
            }
        }

        ///////

        $check_privileges = "SELECT EXISTS (
            SELECT 1 
            FROM information_schema.tables 
            WHERE table_name = 'privileges'
        )";

        $stmt = $db->query($check_privileges);
        $privileges_result = $stmt->fetchColumn();

        if (!$privileges_result) {
            try {
                $sql = "CREATE TABLE privileges (
                    id SERIAL PRIMARY KEY,
                    name VARCHAR(20) NOT NULL,
                    password VARCHAR(20) NOT NULL,
                    rights VARCHAR(1) NOT NULL
                )";

                $db->exec($sql);

                echo "<p>Таблиця 'privileges' успішно створена.</p>";
            } catch (PDOException $e) {
                echo '<p>Помилка: </p>' . $e->getMessage();
            }
        }

        $sql = "ALTER TABLE comments
            ADD CONSTRAINT fk_comment_note FOREIGN KEY (art_id) REFERENCES notes(id)";

        $db->exec($sql);
    } catch (PDOException $e) {
        echo '<p>Помилка підключення до бази даних: </p>' . $e->getMessage();
    }

    try {
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO notes (created, title, article) 
                VALUES (:created, :title, :article)";
        $stmt = $db->prepare($sql);

        $created = date("2003-04-15"); 
        $title = "Test Title";
        $article = "This is a test article.";

        $stmt->bindParam(':created', $created);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':article', $article);

        $stmt->execute();

        echo "<p>Дані успішно додано в таблицю 'notes'</p>";
    } catch (PDOException $e) {
        echo '<p>Помилка підключення до бази даних: </p>' . $e->getMessage();
    }

    try {
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO comments (created, author, comment, art_id) 
                VALUES (:created, :author, :comment, :art_id)";
        $stmt = $db->prepare($sql);

        $created = date("1212-03-25"); 
        $author = "John Doe";
        $comment = "This is a test comment.";
        $art_id = 1;

        $stmt->bindParam(':created', $created);
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':comment', $comment);
        $stmt->bindParam(':art_id', $art_id);

        $stmt->execute();

        echo "<p>Дані успішно додано в таблицю 'comments'</p>";
    } catch (PDOException $e) {
        echo '<p>Помилка підключення до бази даних: </p>' . $e->getMessage();
    }
    
    try {
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO privileges (name, password, rights) 
                VALUES (:name, :password, :rights)";
        $stmt = $db->prepare($sql);

        $name = "NAAAAME"; 
        $password = "****sad";
        $rights = "T";

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':rights', $rights);

        $stmt->execute();

        echo "<p>Дані успішно додано в таблицю 'privileges'</p>";
    } catch (PDOException $e) {
        echo '<p>Помилка підключення до бази даних: </p>' . $e->getMessage();
    }
?>