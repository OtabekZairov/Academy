
<?php
  try {
    $pdo = new PDO(
      'mysql:host=127.0.0.1; dbname=leafdb',
      'alpha',
      'malcoln',
      [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
  } catch (PDOException $e) {
    echo "Невозможно установить соединение с базой данных" . $e->getMessage();
  }
?>