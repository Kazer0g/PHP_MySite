<?php
function connect(){
    $db = new SQLite3('data3.db');
    $create = $db->query("CREATE TABLE IF NOT EXISTS users(
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        login TEXT NOT NULL UNIQUE,
        email TEXT NOT NULL UNIQUE,
        password TEXT NOT NULL,
        first_name TEXT,
        last_name TEXT,
        age INTEGER,
        grade INTEGER);");
    echo 'connect db';
    return $db; }
?>