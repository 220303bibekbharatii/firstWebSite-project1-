
<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.html"); // Redirect unauthorized users to the login page
    exit;
}

$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
