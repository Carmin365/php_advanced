<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=my_basis", "user", "password");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->beginTransaction();

    // Inserir dados em duas tabelas
    $pdo->exec("INSERT INTO user (name) VALUES ('Peter')");
    $pdo->exec("INSERT INTO adresses (user_id, road) VALUES (LAST_INSERT_ID(), 'Hat street')");

    $pdo->commit();
} catch(PDOException $e) {
    $pdo->rollBack();
    echo "Error: " . $e->getMessage();
}
?>




