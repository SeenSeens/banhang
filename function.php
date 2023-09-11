<?php
// Process URL from browser
require_once "./Core/App.php";
// How controllers call Views & Models

// Connect Database
require_once "./Core/Connection.php";

try {
    $db = Connection::getInstance();
    $connection = $db->getConnection();
} catch (PDOException $e) {

}