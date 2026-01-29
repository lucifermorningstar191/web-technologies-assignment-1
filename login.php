<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "1234") {
    header("Location: welcome.php");
} else {
    echo "Invalid Username or Password";
}
?>
