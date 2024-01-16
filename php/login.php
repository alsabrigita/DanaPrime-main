<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// For simplicity, the password check is just comparing the password to a predefined value.
// In a real-world application, you would use a more secure method to check the password, such as hashing and salting.
if ($username === 'admin' && $password === 'password') {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;

    header('Location: dashboard.php');
} else {
    header('Location: login.php?error=1');
}
?>