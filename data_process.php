<?php

$db = new mysqli(
    'localhost',
    'root',
    '',
    'batura'
);

$name = $db->real_escape_string($_POST['name']);
$email = $db->real_escape_string($_POST['email']);
$password = $db->real_escape_string($_POST['password']);

$insertResult = $db->query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");
var_dump($insertResult->insert_id);