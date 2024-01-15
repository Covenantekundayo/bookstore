<?php

$host = 'localhost';
$db = 'oladb';
$user = 'root';
$password = '';

$pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);

// Get cart count for the current user
$userId = 'user123'; // Replace with actual authentication logic
$stmt = $pdo->prepare('SELECT COUNT(*) AS cartCount FROM cart WHERE user_id = ?');
$stmt->execute([$userId]);
$cartCount = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode(['cartCount' => $cartCount['cartCount']]);
?>