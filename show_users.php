<?php
require_once 'config.php';
$result = $conn->query('SELECT email, password FROM users');
if(!$result){
    echo "Query failed: " . $conn->error . "\n";
    exit;
}
while($row = $result->fetch_assoc()){
    echo "email: [" . $row['email'] . "]  password: " . $row['password'] . "\n";
}
?>