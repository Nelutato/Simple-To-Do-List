<?php 
require_once 'ConnData.php';
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $pe) {
    die(" Connect Error :" . $pe->getMessage());
}