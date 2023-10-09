<?php
session_start();
if (!isset($_SESSION['is_owner']) || !$_SESSION['is_owner']) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <h1>Welcome, Cafe Owner!</h1>
    <p>This is your admin page. You can manage your cafe's data here.</p>
    <!-- Add your admin functionalities here -->
    <a href="logout.php">Logout</a>
</body>
</html>
