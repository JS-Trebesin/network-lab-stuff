<?php
$db = new PDO('sqlite:/var/www/html/users.db');

$username = $_GET['username'] ?? '';
$password = $_GET['password'] ?? '';

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
echo "<p>Executing query: $query</p>";

$result = $db->query($query);

if ($result && $result->fetch()) {
    echo "<h1>Welcome, $username!</h1>";
} else {
    echo "<h1>Invalid login</h1>";
}
?>
