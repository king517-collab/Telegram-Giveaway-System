<?php
//db.php
 $host = 'localhost';
 $db   = 'your_db_name';
 $user = 'your_db_user'; 
 $pass = 'your_db_password'; // Yahan apna asli password daalein

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("DB Connection Failed");
}
?>
