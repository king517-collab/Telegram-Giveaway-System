<?php
// win/db.php
 $host = 'localhost';
 $db   = 'jaiclubp_win';
 $user = 'jaiclubp_win'; 
 $pass = 'jaiclubp_win'; // Yahan apna asli password daalein

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("DB Connection Failed");
}
?>