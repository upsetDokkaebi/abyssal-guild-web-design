<?
  function connect() {
    $host = 'sql110.infinityfree.com';
    $dbname = 'if0_37142593_kabesa';
    $username = 'if0_37142593';
    $password = 'ZmkmqNKWle76Jt';

    try {
      $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      echo "Connection Successfully"
    } catch (PDOException $e) {
      echo "Connection Failed:", . $e->getMessage();
    }
  }

  connect();
>
